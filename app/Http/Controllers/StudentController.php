<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;


class StudentController extends Controller
{

    public function index()
    {

        return view('')->with('student', Student::all());
    }

    public function create(Request $request)
    {
        $student = new Student;

        $student-> first_name = $request->input('first_name');

        $student-> middle_name = $request->input('middle_name');

        $student-> last_name = $request->input('last_name');

        $student-> age = $request->input('age');

        $student-> phone = $request->input('phone');

        $student-> email = $request->input('email');

        $student-> state = $request->input('state');

        $student-> zones_id = $request->input('zones_id');

        $student-> local_government = $request->input('local_government');

        $student-> country = $request->input('country');

        $student-> address = $request->input('address');

        $student->save();
        return redirect()->back()->with('status','created successfully.');
    }


    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('', compact('student'));

    }


    public function update($id,Request $request)
    {

        // VALIDATION FOR UPDATE METHOD

        $this->validate(request(),[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'state' => 'required',
            'zones_id' => 'required',
            'local_government' => 'required',
            'country' => 'required',
            'address' => 'required'
        ]);

        //  UPDATE METHOD
        $student = Student::where('id',$id)->first();

        $student-> first_name = $request->input('first_name');

        $student-> middle_name = $request->input('middle_name');

        $student-> last_name = $request->input('last_name');

        $student-> age = $request->input('age');

        $student-> phone = $request->input('phone');

        $student-> email = $request->input('email');

        $student-> state = $request->input('state');

        $student-> zones_id = $request->input('zones_id');

        $student-> local_government = $request->input('local_government');

        $student-> country = $request->input('country');

        $student-> address = $request->input('address');

        $student->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        return redirect()->back()->with('status','successfully deleted.');
    }
}


