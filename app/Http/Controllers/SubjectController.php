<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;

class SubjectController extends Controller
{
    // MIDDLEWARE CHECK
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('')->with('subject', Subject::all());
    }

    public function create(Request $request)
    {
        // VALIDATION CHECK
        $this->validate(request(),[
            'name' => 'required',
            'grades' => 'required'
        ]);

        // CREATE CHECK
        $subject = new Subject;
        $subject-> name = $request->input('name');
        $subject-> grades = $request->input('grades');

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
        return response('post updated successfully');

    }

    public function delete($id)
    {
        $subject = Subject::where('id', $id)->first();
        $subject->delete();
        return response('post deleted successfully');

    }
}
