<?php

namespace App\Http\Controllers;

use App\AllInstitution;
use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllInstitutionController extends Controller
{
	public function index()
	{
		$institutions = AllInstitution::all();
		return view('institution.create', compact('institutions'));
	}

	public function create(Request $request)
	{
		Validator::make($request->all(), [
			'name' => 'required|string',
			'location' => 'required|string'
		]);

		$institution = new AllInstitution;
		$institution->institution_name = $request->name;
		$institution->number_of_students = $request->no_student;
		$institution->location = $request->location;

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
