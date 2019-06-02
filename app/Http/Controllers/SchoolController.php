<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

class SchoolController extends Controller
{

    public function index()
    {
        $schools = School::all();
        return view('school.create', compact('schools'));
    }

    public function create(Request $request)
    {
        $school = new School;
        $school->name = $request->name;
        $school->save();

        return redirect()->back()->with('success','Successfully Created.');
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
