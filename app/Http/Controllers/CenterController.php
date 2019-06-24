<?php

namespace App\Http\Controllers;

use App\Center;
use App\Zone;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index()
    {
    	$centers = Center::all();
    	$zones = Zone::all();
    	return view('Center.create', compact('centers', 'zones'));
    }

    public function create(Request $request)
    {
    	$char = 'ABCDEF';
    	 $pin = rand(00000, 99999).$char;
    	 $center_no = str_shuffle($pin);

    	$center = new Center;
    	$center->name = $request->name;
    	$center->center_no = $center_no;
    	$center->zone_id = $request->zone_id;
    	// dd($center);
    	$center->save();

    	return back()->with('success', 'Center Has Been Registered!!');
    }
}
