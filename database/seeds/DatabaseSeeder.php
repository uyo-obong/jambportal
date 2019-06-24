<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(ExamtypeTableSeeder::class);
        $this->call(GradeTableSeeder::class);
        $this->call(ZoneTableSeeder::class);
        
    }
}
