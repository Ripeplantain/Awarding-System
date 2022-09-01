<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('faculty')->delete();
        
        DB::table('faculty')->insert(array (
            0 => 
            array (
                'facultyid' => '0000',
                'long_name' => 'EXTERNAL ORGANIZATION',
                'short_name' => 'EXTERNAL ORGANIZATION',
                'collegeid' => NULL,
                'type' => '',
                'fte_norms' => 0,
            ),
            1 => 
            array (
                'facultyid' => '1000',
                'long_name' => 'FACULTY OF ARTS',
                'short_name' => 'ARTS',
                'collegeid' => '04',
                'type' => 'ACADEMIC',
                'fte_norms' => 18,
            ),
            2 => 
            array (
                'facultyid' => '1100',
                'long_name' => 'SCHOOL OF MEDICAL SCIENCES',
                'short_name' => 'SCHOOL OF MEDICAL SCIENCES',
                'collegeid' => '03',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            3 => 
            array (
                'facultyid' => '1200',
                'long_name' => 'EXCHANGE PROGRAMME',
                'short_name' => 'EXCHANGE PROG',
                'collegeid' => NULL,
                'type' => 'ACADEMIC',
                'fte_norms' => 18,
            ),
            4 => 
            array (
                'facultyid' => '1300',
                'long_name' => 'SCHOOL OF NURSING',
                'short_name' => 'SCHOOL OF NURSING',
                'collegeid' => '03',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            5 => 
            array (
                'facultyid' => '1400',
                'long_name' => 'SCHOOL OF ALLIED HEALTH SCIENCES',
                'short_name' => 'SCHOOL OF ALLIED HEALTH SCIENCES',
                'collegeid' => '03',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            6 => 
            array (
                'facultyid' => '1500',
                'long_name' => 'SCHOOL OF PHARMACY AND PHARMACEUTICAL SCIENCES',
                'short_name' => 'SCHOOL OF PHARMACY AND PHARMACEUTICAL SCIENCES',
                'collegeid' => '03',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            7 => 
            array (
                'facultyid' => '2000',
                'long_name' => 'SCHOOL OF AGRICULTURE',
                'short_name' => 'SCHOOL OF AGRICULTURE',
                'collegeid' => '01',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            8 => 
            array (
                'facultyid' => '3000',
                'long_name' => 'FACULTY OF EDUCATION',
                'short_name' => 'EDUCATION',
                'collegeid' => '02',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            9 => 
            array (
                'facultyid' => '3100',
                'long_name' => 'FACULTY OF HUMANITIES AND SOCIAL SCIENCES EDUCATION',
                'short_name' => 'HUMANITIES AND SOCIAL SCIENCES EDUCATION',
                'collegeid' => '02',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            10 => 
            array (
                'facultyid' => '3200',
                'long_name' => 'FACULTY OF SCIENCE AND TECHNOLOGY EDUCATION',
                'short_name' => 'SCIENCE AND TECHNOLOGY EDUCATION',
                'collegeid' => '02',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            11 => 
            array (
                'facultyid' => '3300',
                'long_name' => 'FACULTY OF EDUCATIONAL FOUNDATIONS',
                'short_name' => 'EDUCATIONAL FOUNDATIONS',
                'collegeid' => '02',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            12 => 
            array (
                'facultyid' => '3400',
                'long_name' => 'SCHOOL OF EDUCATIONAL DEVELOPMENT AND OUTREACH',
                'short_name' => 'EDUCATIONAL DEVELOPMENT AND OUTREACH',
                'collegeid' => '02',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            13 => 
            array (
                'facultyid' => '4000',
                'long_name' => 'FACULTY OF LAW',
                'short_name' => 'FACULTY OF LAW',
                'collegeid' => '04',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            14 => 
            array (
                'facultyid' => '5000',
                'long_name' => 'FACULTY OF SOCIAL SCIENCES',
                'short_name' => 'SOCIAL SCIENCES',
                'collegeid' => '04',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            15 => 
            array (
                'facultyid' => '5100',
                'long_name' => 'SCHOOL FOR DEVELOPMENT STUDIES',
                'short_name' => 'SCHOOL FOR DEVELOPMENT STUDIES',
                'collegeid' => '04',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            16 => 
            array (
                'facultyid' => '5200',
                'long_name' => 'SCHOOL OF ECONOMICS',
                'short_name' => 'SCHOOL OF ECONOMICS',
                'collegeid' => '04',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            17 => 
            array (
                'facultyid' => '6000',
                'long_name' => 'CENTRAL ADMINISTRATION',
                'short_name' => 'ADMINISTRATION',
                'collegeid' => NULL,
                'type' => 'NON-ACADEMIC',
                'fte_norms' => 0,
            ),
            18 => 
            array (
                'facultyid' => '7000',
                'long_name' => 'SCHOOL OF BIOLOGICAL SCIENCES',
                'short_name' => 'SCHOOL OF BIOLOGICAL SCIENCES',
                'collegeid' => '01',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            19 => 
            array (
                'facultyid' => '8000',
                'long_name' => 'SCHOOL OF BUSINESS',
                'short_name' => 'SCHOOL OF BUSINESS',
                'collegeid' => '04',
                'type' => 'ACADEMIC',
                'fte_norms' => 15,
            ),
            20 => 
            array (
                'facultyid' => '9000',
                'long_name' => 'SCHOOL OF PHYSICAL SCIENCES',
                'short_name' => 'SCHOOL OF PHYSICAL SCIENCES',
                'collegeid' => '01',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
            21 => 
            array (
                'facultyid' => '9500',
                'long_name' => 'CENTRE FOR CONTINUING EDUCATION',
                'short_name' => 'CENTRE FOR CONTINUING EDUCATION',
                'collegeid' => '05',
                'type' => 'ACADEMIC',
                'fte_norms' => 12,
            ),
        ));
        
        
    }
}