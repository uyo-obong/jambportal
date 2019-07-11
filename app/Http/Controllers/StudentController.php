<?php

namespace App\Http\Controllers;

use App\AllInstitution;
use App\Center;
use App\Department;
use App\Grade;
use App\Institution;
use App\Olevel;
use App\PrintOut;
use App\School;
use App\Student;
use App\Subject;
use App\Type;
use App\User;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       // / dd(AllInstitution::find(Auth::user()));
        $pin = Institution::where('user_id', auth()->user()->id)->first();
        $allinstitution = AllInstitution::findOrFail(Auth::user())->first();
        $student = Auth::user()->load('student', 'olevel', 'institution');
        return view('profile.getProfile', compact('pin', 'student', 'allinstitution'));
        
    }

    public function getAll()
    {
        // $te = User::where('role', 'student')->get()->load('payment');
        // dd($te);
        $students = User::where('role', 'student')->get()
                        ->load('student', 'olevel', 'institution', 'payment');
        $allinstitutions = AllInstitution::all();
        $centers = Center::all();
        $printouts = PrintOut::all();
        // dd($students);
        return view('students.getAll', compact('students', 'allinstitutions', 'centers', 'printouts'));
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
            'all_institution_id' => $request['allinstitution_id'],
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'image' => $this->passport($request),
            'gender' => $request['gender'],
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
           $institution = Institution::updateOrCreate(
            $this->createInstitution($request)
        );  
       }

       // if($institution)
       //   {
       //      AllInstitution::create([
       //          'user_id' => Auth::user()->id
       //      ]);
       //   }


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
        'institution_name' => $request['allinstitution_id'],
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

public function passport($request)
{

    Validator::make($request->all(), [
        'file' => 'required|jpg,png,jpeg|max:90000'
    ]);
    $attach = $request->file('file');
    $extension = $attach->getClientOriginalExtension();
    Storage::disk('public')->put($attach->getFilename().'.'.$extension,  File::get($attach));

    $store = $attach->getFilename().'.'.$extension;
    return $store;
}


public function delete($id)
{
    $student = Student::where('id', $id)->first();
    $student->delete();
    return redirect()->back()->with('status','successfully deleted.');
}
}


