<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

class SchoolController extends Controller
{

    public function index()
    {

        return view('')->with('school', School::all());
    }

    public function create(Request $request)
    {
        $school = new School;

        $school-> name = $request->input('name');

        $school->save();
        return redirect()->back()->with('status','created successfully.');
    }


    public function edit($id)
    {
        $school = School::where('id', $id)->first();
        return view('', compact('school'));

    }


    public function update($id,Request $request)
    {

        // VALIDATION FOR UPDATE METHOD

        $this->validate(request(),[
            'name' => 'required',
        ]);

        //  UPDATE METHOD
        $school = School::where('id',$id)->first();

        $school-> name = $request->input('name');

        $school->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $school = School::where('id', $id)->first();

        $school->delete();

        return redirect()->back()->with('status','successfully deleted.');
    }
}