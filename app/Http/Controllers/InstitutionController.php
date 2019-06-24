<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Institution;

class InstitutionController extends Controller
{
    public function index()
    {

        return view('');
    }

    public function create(Request $request)
    {
        $institution = new Institution;

        $institution-> institution_name = $request->input('institution_name');

        $institution-> school_name = $request->input('school_name');

        $institution-> department = $request->input('department');

        $institution->save();
        return redirect()->back()->with('status','created successfully.');
    }


    public function edit($id)
    {
        $institution = Institution::where('id', $id)->first();
        return view('', compact('institution'));

    }


    public function update($id,Request $request)
    {

        // VALIDATION FOR UPDATE METHOD

        $this->validate(request(),[
            'institution_name' => 'required',
            'school_name' => 'required',
            'department' => 'required'
        ]);

        //  UPDATE METHOD
        $institution = Institution::where('id',$id)->first();

        $institution-> institution_name = $request->input('institution_name');

        $institution-> school_name = $request->input('school_name');

        $institution-> department = $request->input('department');

        $institution->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $institution = Institution::where('id', $id)->first();

        $institution->delete();

        return redirect()->back()->with('status','successfully deleted.');
    }
}
