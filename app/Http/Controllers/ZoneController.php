<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Zone;

class ZoneController extends Controller
{
    public function index()
    {

        return view('')->with('zone', Zone::all());
    }

    public function create(Request $request)
    {
        $zone = new Zone;

        $zone-> name = $request->input('name');

        $zone->save();
        return redirect()->back()->with('status','created successfully.');
    }


    public function edit($id)
    {
        $zone = Zone::where('id', $id)->first();
        return view('', compact('zone'));

    }


    public function update($id,Request $request)
    {

        // VALIDATION FOR UPDATE METHOD

        $this->validate(request(),[
            'name' => 'required',
        ]);

        //  UPDATE METHOD
        $zone = Zone::where('id',$id)->first();

        $zone-> name = $request->input('name');

        $zone->save();
        return redirect()->back()->with('status','updated successfully.');
    }


    public function delete($id)
    {
        $zone = Zone::where('id', $id)->first();

        $zone->delete();

        return redirect()->back()->with('status','successfully deleted.');
    }
}
