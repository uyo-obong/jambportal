<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $data)
    {
        Validator::make($data->all(), [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        if($data['age'] <= 15 ){
            return back()->with('status', 'You must be 16 years old and above to register');
        }
         User::create([
            'first_name' => $data['name'],
            'age' => $data['age'],
            'email' => $data['email'],
            'role' => 'student',
            'password' => Hash::make($data['password']),
        ]);
         return redirect(route('register.student'));
    }
}