<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(CollegesTableSeeder::class);
        $this->call(FacultyTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ProgDbTableSeeder::class);
        $this->call(StudentsDbTableSeeder::class);
    }
}
