<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Olevel;

class OlevelController extends Controller
{
    public function index()
    {

        return view('')->with('olevel', Olevel::all());
    }

    public function create(Request $request)
    {
        $olevel = new Olevel;

        $olevel-> exam_type = $request->input('exam_type');

        $olevel-> center_number = $request->input('center_number');

        $olevel-> reg_no = $request->input('reg_no');

        $olevel-> exam_year = $request->input('exam_year');

        $olevel->five_subject = $request->input('five_subject');

        $olevel->save();
        return redirect()->back()->with('status','created successfully.');
    }


    public function edit($id)
    {
        $olevel = Olevel::where('id', $id)->first();

        return view('', compact('olevel'));

    }


    public function update($id,Request $request)
    {

        // VALIDATION FOR UPDATE METHOD

        $this->validate(request(),[
            'exam_type' => 'required',
            'center_number' => 'required',
            'reg_no' => 'required',
            'exam_year' => 'required',
            'five_subject' => 'five_subject'
        ]);

        //  UPDATE METHOD
        $olevel = Olevel::where('id',$id)->first();

        $olevel-> exam_type = $request->input('exam_type');

        $olevel-> center_number = $request->input('center_number');

        $olevel-> reg_no = $request->input('reg_no');

        $olevel-> exam_year = $request->input('exam_year');

        $olevel-> five_subject = $request->input('five_subject');

        $olevel->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $olevel = Olevel::where('id', $id)->first();

        $olevel->delete();

        return redirect()->back()->with('status','successfully deleted.');
    }
}
