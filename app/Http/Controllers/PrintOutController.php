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
		$user = User::find(auth()->user()->id)->load('institutions', 'student');
		$olevel = Olevel::where('user_id', auth()->user()->id)->first();
		$centers = Center::all();

		// dd($user->institutions);

		return view('printout.getprintout', compact('user', 'olevel', 'centers'));
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
