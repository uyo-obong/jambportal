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
        $student = Auth::user()->load('student', 'olevel', 'institutions');
        return view('profile.getProfile', compact('pin', 'student', 'allinstitution'));
    }

    public function update(Request $request)
    {

        $updateUser = User::whereId($request->studentId)->update([
            'first_name' => $request['first_name'],
        ]);

        if ($updateUser) {
            $student = Student::where('user_id', $request->studentId)
                ->update([
                    'middle_name' => $request['middle_name'],
                    'last_name' => $request['last_name'],
                    'phone' => $request['phone_number'],
                    'address' => $request['address'],
                ]);
        }

        return redirect()->back()->with('message', 'Changes has been applied successfully.');
    }

    public function getAll()
    {
        $students = User::where('role', 'student')->get()
            ->load('student', 'olevel', 'institutions', 'payment');
        $centers = Center::all();
        $printouts = PrintOut::all();
        // dd($students);
        return view('students.getAll', compact('students', 'centers', 'printouts'));
    }

    public function registerStudent()
    {

        $types = Type::all();
        $zones = Zone::all();
        $grades = Grade::all();
        $schools = School::all();
        $subjects = Subject::all();
        $departments = Department::all();
        return view('students.registerStudent', [
            'types' => $types,
            'zones' => $zones,
            'grades' => $grades,
            'schools' => $schools,
            'subjects' => $subjects,
            'departments' => $departments,
        ]);
    }


    public function create(Request $request)
    {

        $createUser = User::whereId(Auth::user()->id)->update([
            'institution' => $request['institution'],
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'image' => $this->passport($request),
            'gender' => $request['gender'],
            // 'age' => $request['age'],
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


        return redirect(route('get.print'));
    }

    protected function createInstitution($request)
    {
        $departments = Department::all();
        foreach ($departments as $department) {
            if ($department->name ==  $request['department']) {
                $alias = $department->alias;
            }
        }
        // generate a pin based on 4 digit with department alias
        $pad = str_pad(auth()->user()->id, 4, '0', STR_PAD_LEFT);
        $pin =  $alias . $pad;

        $institution = [
            'institution' => $request['institution'],
            'department' => $request['department'],
            'jamb_reg_no' => $request['jamb_reg_no'],
            'jamb_score' => $request['jamb_score'],
            'school' => $request['school'],
            'user_id' => Auth::user()->id,
            'reg_no' => $pin,
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
            'dob' => $request['dob'],
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
        Storage::disk('public')->put($attach->getFilename() . '.' . $extension,  File::get($attach));

        $store = $attach->getFilename() . '.' . $extension;
        return $store;
    }

    public function delete($id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        return redirect()->back()->with('status', 'successfully deleted.');
    }
}
