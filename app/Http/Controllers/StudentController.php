<?php

namespace App\Http\Controllers;

use App\Institution;
use App\Olevel;
use App\Student;
use App\User;
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
        return view('profile.getProfile');
    }

    public function registerStudent()
    {
        return view('students.registerStudent');
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $createUser = User::whereId(Auth::user()->id)->update([
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'age' => $request['age'],
        ]);

        if ($createUser) {
            $student = Student::updateOrCreate(
                $this->createStudent($request)
            );
        }

        if ($student) {
            $olevel = Olevel::updateOrCreate(
                $this->createOlevel($request)
            );
        }

        if ($olevel) {
         Institution::updateOrCreate(
            $this->createInstitution($request)
        );
     }


     return redirect()->back()->with('status','created successfully.');
 }

 protected function createInstitution($request)
 {
    $institution = [
        'institution_name' => $request['institution_name'],
        'department' => $request['department'],
        'school_id' => 1,
        'user_id' => Auth::user()->id,
    ];

    return $institution;
}

protected function createOlevel($request)
{
    $olevel = [
        'center_number' => $request['center_number'],
        'reg_no' => $request['reg_no'],
        'exam_year' => $request['exam_year'],
        'type_id' => 1,
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
        'zone_id' => $request['zone'],
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


