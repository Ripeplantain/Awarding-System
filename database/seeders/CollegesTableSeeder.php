<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('colleges')->delete();
        
        DB::table('colleges')->insert(array (
            0 => 
            array (
                'collegeid' => '01',
                'college_name' => 'College of Agriculture And Natural Sciences',
                'college_code' => 'CANS',
            ),
            1 => 
            array (
                'collegeid' => '02',
                'college_name' => 'College of Education Studies',
                'college_code' => 'CES',
            ),
            2 => 
            array (
                'collegeid' => '03',
                'college_name' => 'College of Health And Allied Sciences',
                'college_code' => 'CHAS',
            ),
            3 => 
            array (
                'collegeid' => '04',
                'college_name' => 'College of Humanities And Legal Studies',
                'college_code' => 'CHLS',
            ),
            4 => 
            array (
                'collegeid' => '05',
                'college_name' => 'College of Distance Education',
                'college_code' => 'CODE',
            ),
        ));
        
        
    }
}