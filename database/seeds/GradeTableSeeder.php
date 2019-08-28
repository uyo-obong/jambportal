<?php

use App\Grade;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$date =  Carbon::now();
        $grade = [
        	['name' => 'A',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'B',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'C',  'created_at' => $date, 'updated_at' => $date],
        	// ['name' => 'D',  'created_at' => $date, 'updated_at' => $date],
        	// ['name' => 'E',  'created_at' => $date, 'updated_at' => $date],
        	// ['name' => 'F',  'created_at' => $date, 'updated_at' => $date],
        ];
        Grade::insert($grade);
    }
}
