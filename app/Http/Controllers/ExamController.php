<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exam;

class ExamController extends Controller
{

    public function index()
    {

        return view('')->with('exam', Exam::all());
    }

    public function create(Request $request)
    {
        $exam = new Exam;

        $exam-> name = $request->input('name');

        $exam-> address = $request->input('address');

        $exam-> city = $request->input('city');

        $exam-> local_government = $request->input('local_government');

        $exam-> state = $request->input('state');

        $exam->save();
        return redirect()->back()->with('status','created successfully.');
    }


    public function edit($id)
    {
        $exam = Exam::where('id', $id)->first();
        return view('', compact('exam'));

    }


    public function update($id,Request $request)
    {

        // VALIDATION FOR UPDATE METHOD

        $this->validate(request(),[
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'local_government' => 'required',
            'state' => 'required',
        ]);

        //  UPDATE METHOD
        $exam = Exam::where('id',$id)->first();

        $exam-> name = $request->input('name');

        $exam-> address = $request->input('address');

        $exam-> city = $request->input('city');

        $exam-> local_government = $request->input('local_government');

        $exam-> state = $request->input('state');

        $exam->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $exam = Exam::where('id', $id)->first();
        $exam->delete();
        return redirect()->back()->with('status','successfully deleted.');
    }

}
