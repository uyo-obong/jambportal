<?php

use App\Subject;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$date =  Carbon::now();
        $subjects = [
        	['name' => 'English',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Mathematics',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Physics',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Chemistry',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Biology',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Economics',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Government',  'created_at' => $date, 'updated_at' => $date],
        ];

        Subject::insert($subjects);
    }
}
