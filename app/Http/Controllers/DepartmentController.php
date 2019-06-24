<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
	public function index()
	{
		$departments = Department::all();
		return view('department.create', compact('departments'));
	}

	public function create(Request $request)
	{
		Validator::make($request->all(), [
			'name' => 'required|string',
		]);

		$department = new Department;
		$department->name = $request->name;
		$department->save();

		return redirect()->back()->with('success','New department has been added.');
	}


	public function edit($id)
	{
		

	}


	public function update($id,Request $request)
	{


	}


	public function delete($id)
	{
		
	}
}
