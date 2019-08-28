<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'first_name' => 'Slydo',
    		'amount' => '',
    		'gender' => 'male',
    		'email' => 'slydo@gmail.com',
			'role' => 'admin',
			'image' => 'default.jpg',
    		'password' => Hash::make('password'),
    		'remember_token' => Str::random(10),
    	]);
    }
}
