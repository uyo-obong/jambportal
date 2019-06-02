<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

class TypeController extends Controller
{

    public function index()
    {
        $types = Type::all();
        return view('exam.type', compact('types'));
    }

    public function create(Request $request)
    {
        $type = new Type;
        $type->name = $request->name;   
        $type->save();

        return redirect()->back()->with('success','Exam type has been created.');
    }


    public function edit($id)
    {
        $Type = Type::where('id', $id)->first();
        return view('', compact('Type'));

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
        $Type = Type::where('id',$id)->first();

        $Type-> name = $request->input('name');

        $Type-> address = $request->input('address');

        $Type-> city = $request->input('city');

        $Type-> local_government = $request->input('local_government');

        $Type-> state = $request->input('state');

        $Type->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $Type = Type::where('id', $id)->first();
        $Type->delete();
        return redirect()->back()->with('status','successfully deleted.');
    }

}
