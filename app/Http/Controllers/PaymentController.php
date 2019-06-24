<?php

namespace App\Http\Controllers;

use App\AllInstitution;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
     // Make payment
	public function makePayment(Request $request)
	{
		Validator::make($request->all(), [
			'reg_no' => 'required|string|unique',
			'amount' => 'required|min:4500',
		]);
		// dd($request->except('_token')->all());
		if ($request->amount >= 4500) {
			$payment = Payment::create([
				'reg_no' => $request->reg_no,
				'amount' => $request->amount,
				'user_id'  => $request->user_id
			]);
			if ($payment) {
				$student = DB::table('all_institutions')
				->whereId(Auth::user()->all_institution_id)
				->increment('registered_students', 1);
				DB::table('all_institutions')
				->whereId(Auth::user()->all_institution_id)
				->decrement('number_of_students', 1);
				
			}
			 // dd($student);
			
		}
		return redirect()->back()->with('payment', 'Your transaction has been done successfully.');
	}
}
