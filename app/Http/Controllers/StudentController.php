<?php

namespace App\Http\Controllers;

use App\AllInstitution;
use App\Department;
use App\Grade;
use App\Institution;
use App\Olevel;
use App\School;
use App\Student;
use App\Subject;
use App\Type;
use App\User;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pin = Institution::where('user_id', Auth::user()->id)->first();
        $student = Auth::user()->load('student', 'olevel', 'institution');
         // dd($student->first_name);
        return view('profile.getProfile', compact('pin', 'student'));
    }

    public function getAll()
    {
        $students = User::all()->load('student', 'olevel', 'institution');
        //dd($students);
        return view('students.getAll',compact('students'));
    }

    public function registerStudent()
    {
        $types = Type::all();
        $zones = Zone::all();
        $grades = Grade::all();
        $schools = School::all();
        $subjects = Subject::all();
        $departments = Department::all();
        $institutions = AllInstitution::all();
        return view('students.registerStudent', [
            'types' => $types,
            'zones' => $zones,
            'grades' => $grades,
            'schools' => $schools,
            'subjects' => $subjects,
            'departments' => $departments,
            'institutions' => $institutions
        ]);
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $createUser = User::whereId(Auth::user()->id)->update([
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'age' => $request['age'],
        ]);

        // Get bio-data from user in other to register
        if ($createUser) {
            $student = Student::updateOrCreate(
                $this->createStudent($request)
            );
        }

        // Register 0 level subjects
        if ($student) {
            $olevel = Olevel::updateOrCreate(
                $this->createOlevel($request)
            );
        }

        // This will allow the user to choose institution
        if ($olevel) {
           Institution::updateOrCreate(
            $this->createInstitution($request)
        );
       }


       return redirect(route('home.student'))->with('status', 'Congrats, use the pin to make your payment');
   }

   protected function createInstitution($request)
   {
    // Available alpha caracters
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // generate a pin based on 2 * 5 digits + a random character
    $pin = mt_rand(10000, 99999)
    . mt_rand(10000, 99999)
    . $characters[rand(0, strlen($characters) - 3)];

        // shuffle the result
    $string = str_shuffle($pin);

    $institution = [
        'institution_name' => $request['institution_name'],
        'department' => $request['department'],
        'school' => $request['school'],
        'user_id' => Auth::user()->id,
        'reg_no' => $string,
    ];

    return $institution;
}

protected function createOlevel($request)
{
    $olevel = [
        'center_number' => $request['center_number'],
        'reg_no' => $request['reg_no'],
        'exam_year' => $request['exam_year'],
        'type' =>  $request['exam_type'],
        'user_id' => Auth::user()->id,
        'sub1'  => $request['sub1'],
        'sub2'  => $request['sub2'],
        'sub3'  => $request['sub3'],
        'sub4'  => $request['sub4'],
        'sub5'  => $request['sub5'],
        'grad1'  => $request['grad1'],
        'grad2'  => $request['grad2'],
        'grad3'  => $request['grad3'],
        'grad4'  => $request['grad4'],
        'grad5'  => $request['grad5'],
    ];

    return $olevel;
}

protected function createStudent($request)
{
    $student = [
        'middle_name' => $request['middle_name'],
        'last_name' => $request['last_name'],
        'phone' => $request['phone_number'],
        'address' => $request['address'],
        'city' => $request['city'],
        'state' => $request['state'],
        'country' => $request['country'],
        'zone' => $request['zone'],
        'user_id' => Auth::user()->id
    ];

    return $student;
}


public function delete($id)
{
    $student = Student::where('id', $id)->first();
    $student->delete();
    return redirect()->back()->with('status','successfully deleted.');
}
}


