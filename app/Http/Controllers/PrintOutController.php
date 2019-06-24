<?php

namespace App\Http\Controllers;

use App\PrintOut;
use Illuminate\Http\Request;

class PrintOutController extends Controller
{
	public function getprintout()
	{ 
		return view('printout.getprintout');
	}

	public function print(Request $request)
	{

		$pin = sprintf("%04d", rand(1, 1000));
		$print = $request->except('_token');
		$print['sit_no'] = $pin;
		// dd($print);
		PrintOut::create($print);

		return back()->with('success', 'Print-Out has been send!!');
	}
}
