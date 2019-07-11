<?php

namespace App\Http\Controllers;

use App\User;
use App\Center;
use App\Olevel;
use App\PrintOut;
use App\AllInstitution;
use Illuminate\Http\Request;

class PrintOutController extends Controller
{
	public function getprintout()
	{
		$user = User::find(auth()->user()->id)->load('institution', 'payment');
		$print = PrintOut::where('studentid', auth()->user()->id)->first();
		$olevel = Olevel::where('user_id', auth()->user()->id)->first();
		$institutions = AllInstitution::all();
		$centers = Center::all();
// dd($olevel);
		return view('printout.getprintout', compact('user', 'print', 'olevel',  'institutions', 'centers'));
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
