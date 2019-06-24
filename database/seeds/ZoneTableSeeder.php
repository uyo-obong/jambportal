<?php

use App\Zone;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date =  Carbon::now();
        $zone = [
        	['name' => 'North East',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'North West',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'North Central',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'South South',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'South East',  'created_at' => $date, 'updated_at' => $date],
        	['name' => 'South West',  'created_at' => $date, 'updated_at' => $date],
        ];
        Zone::insert($zone);
    }
}
