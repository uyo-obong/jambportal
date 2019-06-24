<?php

use App\Type;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExamtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date =  Carbon::now();
        
        Type::insert([
        	['name' => 'Waec',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Neco',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Private Waec',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'Private Neco',  'created_at' => $date, 'updated_at' => $date],
        ]);

  
    }
}
