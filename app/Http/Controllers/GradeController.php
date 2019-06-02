<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Grade;

class GradeController extends Controller
{
    // MIDDLEWARE CHECK
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $grades = Grade::all();
        return view('grade.create', compact('grades'));
    }

    public function create(Request $request)
    {
        // VALIDATION CHECK
        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        // CREATE CHECK
        $grade = new Grade;
        $grade->name = $request->name;
        $grade->save();

        return redirect()->back()->with('success', 'New grade Point has been added.');

    }

    public function edit($id)
    {
        $subject = Subject::where('id', $id)->first();
        return view('', compact('subject'));
    }

    public function update($id,Request $request)
    {
        // VALIDATION CHECK
        $this->validate(request(),[
            'name' => 'required',
            'grades' => 'required'
        ]);

        // UPDATE CHECK
        $subject = Subject::where('id', $id)->first();
        $subject-> name = $request->input('name');
        $subject-> grades = $request->input('grades');
        $subject->save();
        return response('post updated succesfully');

    }

    public function delete($id)
    {
        $subject = Subject::where('id', $id)->first();
        $subject->delete();
        return response('post deleted successfully');

    }
}
