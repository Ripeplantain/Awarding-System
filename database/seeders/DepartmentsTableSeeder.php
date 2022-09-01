<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('departments')->delete();
        
        DB::table('departments')->insert(array (
            0 => 
            array (
                'deptid' => 1001,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF CLASSICS AND PHILOSOPHY',
                'short_name' => 'CLASSICS AND PHILOSOPHY DEPART',
                'type' => 'ACADEMIC',
            ),
            1 => 
            array (
                'deptid' => 1002,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF ENGLISH',
                'short_name' => 'ENGLISH DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            2 => 
            array (
                'deptid' => 1003,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF FRENCH',
                'short_name' => 'FRENCH DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            3 => 
            array (
                'deptid' => 1004,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF GHANAIAN LANGUAGES AND LINGUISTICS',
                'short_name' => 'GHANAIAN LANGUAGE AND LINGUISTICS DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            4 => 
            array (
                'deptid' => 1005,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF HISTORY',
                'short_name' => 'HISTORY DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            5 => 
            array (
                'deptid' => 1006,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF MUSIC',
                'short_name' => 'MUSIC DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            6 => 
            array (
                'deptid' => 1007,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF RELIGION AND HUMAN VALUES',
                'short_name' => 'RELIGION AND HUMAN VALUES DEPT',
                'type' => 'ACADEMIC',
            ),
            7 => 
            array (
                'deptid' => 1008,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF ARTS',
                'short_name' => 'ARTS DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            8 => 
            array (
                'deptid' => 1009,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF COMMUNICATION STUDIES',
                'short_name' => 'DEPT. OF COMM. STUDIES ',
                'type' => 'ACADEMIC',
            ),
            9 => 
            array (
                'deptid' => 1010,
                'facultyid' => 1000,
                'long_name' => 'DEPARTMENT OF THEATRE AND FILM STUDIES',
                'short_name' => 'DEPT OF THEATRE & FILM STDS.',
                'type' => 'ACADEMIC',
            ),
            10 => 
            array (
                'deptid' => 1016,
                'facultyid' => 1000,
                'long_name' => 'CENTRE FOR AFRICAN AND INTERNATIONAL STUDIES',
                'short_name' => 'CENTRE FOR AFRICAN AND INTERNATIONAL STD.',
                'type' => 'ACADEMIC',
            ),
            11 => 
            array (
                'deptid' => 1017,
                'facultyid' => 1000,
                'long_name' => 'INFORMATION LITERACY UNIT',
                'short_name' => 'INFORMATION LITERACY UNIT',
                'type' => 'ACADEMIC',
            ),
            12 => 
            array (
                'deptid' => 1020,
                'facultyid' => 1000,
                'long_name' => 'CONFICIUS INSTITUTE',
                'short_name' => 'CONFICIUS INSTITUTE',
                'type' => 'ACADEMIC',
            ),
            13 => 
            array (
                'deptid' => 1101,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF ANATOMY',
                'short_name' => 'ANATOMY DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            14 => 
            array (
                'deptid' => 1102,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF INTERNAL MEDICINE',
                'short_name' => 'INTERNAL MEDICINE DEPT',
                'type' => 'ACADEMIC',
            ),
            15 => 
            array (
                'deptid' => 1103,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF CHEMICAL PATHOLOGY',
                'short_name' => 'CHEMICAL PATHOLOGY DEPT.',
                'type' => 'ACADEMIC',
            ),
            16 => 
            array (
                'deptid' => 1501,
                'facultyid' => 1500,
                'long_name' => 'DEPARTMENT OF PHARMACOLOGY AND TOXICOLOGY',
                'short_name' => 'DEPT. OF PHARMACOLOGY AND TOXICOLOGY',
                'type' => 'ACADEMIC',
            ),
            17 => 
            array (
                'deptid' => 2001,
                'facultyid' => 2000,
                'long_name' => 'DEPARTMENT OF CROP SCIENCE',
                'short_name' => 'CROP SCIENCE DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            18 => 
            array (
                'deptid' => 2002,
                'facultyid' => 2000,
                'long_name' => 'DEPARTMENT OF ANIMAL SCIENCE',
                'short_name' => 'ANIMAL SCIENCE DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            19 => 
            array (
                'deptid' => 2003,
                'facultyid' => 2000,
                'long_name' => 'DEPARTMENT OF SOIL SCIENCE',
                'short_name' => 'SOIL SCIENCE DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            20 => 
            array (
                'deptid' => 2004,
                'facultyid' => 2000,
                'long_name' => 'DEPARTMENT OF AGRICULTURAL ECONOMICS AND EXTENSION',
                'short_name' => 'AGRICULTURAL ECON. AND EXT. DEPT.',
                'type' => 'ACADEMIC',
            ),
            21 => 
            array (
                'deptid' => 2005,
                'facultyid' => 2000,
                'long_name' => 'DEPARTMENT OF AGRICULTURAL ENGINEERING',
                'short_name' => 'AGRICULTURAL ENGINEERING DEPT.',
                'type' => 'ACADEMIC',
            ),
            22 => 
            array (
                'deptid' => 2006,
                'facultyid' => 2000,
                'long_name' => 'COLLEGE OF AGRICULTURAL EXTENSION KWADASO',
                'short_name' => 'AGRICULTURAL EXTENSION KWADASO',
                'type' => 'ACADEMIC',
            ),
            23 => 
            array (
                'deptid' => 3001,
                'facultyid' => 3000,
                'long_name' => 'DEPARTMENT OF EDUCATIONAL FOUNDATIONS',
                'short_name' => 'EDUCATIONAL FOUNDATIONS DEPT.',
                'type' => 'ACADEMIC',
            ),
            24 => 
            array (
                'deptid' => 3005,
                'facultyid' => 3000,
                'long_name' => 'DEPARTMENT OF ARTS AND SOCIAL SCIENCES EDUCATION',
                'short_name' => 'ARTS AND SOCIAL SCIENCES EDU. DEPT.',
                'type' => 'ACADEMIC',
            ),
            25 => 
            array (
                'deptid' => 3006,
                'facultyid' => 3000,
                'long_name' => 'DEPARTMENT OF SCIENCE AND MATHEMATICS EDUCATION',
                'short_name' => 'DEPT. OF SCI. & MATHS EDU.',
                'type' => 'ACADEMIC',
            ),
            26 => 
            array (
                'deptid' => 3009,
                'facultyid' => 3000,
                'long_name' => 'TEACHING PRACTICE UNIT',
                'short_name' => 'TEACHING PRACTICE UNIT',
                'type' => 'ACADEMIC',
            ),
            27 => 
            array (
                'deptid' => 3011,
                'facultyid' => 3000,
                'long_name' => 'HEALTH SCIENCE EDUCATION',
                'short_name' => 'HEALTH SCIENCE EDUCATION DEPT.',
                'type' => 'ACADEMIC',
            ),
            28 => 
            array (
                'deptid' => 3012,
                'facultyid' => 3000,
                'long_name' => 'COUNSELLING SERVICES CENTRE',
                'short_name' => 'COUNSELLING UNIT',
                'type' => 'NON-ACADEM',
            ),
            29 => 
            array (
                'deptid' => 3014,
                'facultyid' => 9500,
                'long_name' => 'CENTRE FOR CONTINUING EDUCATION',
                'short_name' => 'CENTRE FOR CONTINUING EDUCATION',
                'type' => 'ACADEMIC',
            ),
            30 => 
            array (
                'deptid' => 3101,
                'facultyid' => 3100,
                'long_name' => 'DEPARTMENT OF ARTS EDUCATION',
                'short_name' => 'ARTS EDU. DEPT.',
                'type' => 'ACADEMIC',
            ),
            31 => 
            array (
                'deptid' => 3102,
                'facultyid' => 3100,
                'long_name' => 'DEPARTMENT OF BUSINESS AND SOCIAL SCIENCES EDUCATION',
                'short_name' => 'BUS. AND SOC. SCI. EDUC. DEPT',
                'type' => 'ACADEMIC',
            ),
            32 => 
            array (
                'deptid' => 3201,
                'facultyid' => 3200,
                'long_name' => 'DEPARTMENT OF SCIENCE EDUCATION',
                'short_name' => 'SCI. EDUC. DEPT',
                'type' => 'ACADEMIC',
            ),
            33 => 
            array (
                'deptid' => 3202,
                'facultyid' => 3200,
                'long_name' => 'DEPARTMENT OF MATHEMATICS AND INFORMATION & COMMUNICATION TECHNOLOGY EDUCATION',
                'short_name' => 'MATHS AND INFO, COMM. AND TECH EDUC. DEPT',
                'type' => 'ACADEMIC',
            ),
            34 => 
            array (
                'deptid' => 3203,
                'facultyid' => 3200,
                'long_name' => 'DEPARTMENT OF HEALTH SCIENCES EDUCATION',
                'short_name' => 'HEALTH SCIENCES EDUC. DEPT',
                'type' => 'ACADEMIC',
            ),
            35 => 
            array (
                'deptid' => 3204,
                'facultyid' => 3200,
                'long_name' => 'DEPARTMENT OF HEALTH, PHYSICAL EDUCATION AND RECREATION',
                'short_name' => 'HEALTH, PHYSICAL EDU. AND REC. DEPT.',
                'type' => 'ACADEMIC',
            ),
            36 => 
            array (
                'deptid' => 3205,
                'facultyid' => 3200,
                'long_name' => 'DEPARTMENT OF VOCATIONAL AND TECHNICAL EDUCATION',
                'short_name' => 'VOCATIONAL AND TECHNICAL DEPT.',
                'type' => 'ACADEMIC',
            ),
            37 => 
            array (
                'deptid' => 3301,
                'facultyid' => 3300,
                'long_name' => 'DEPARTMENT OF EDUCATION AND PSYCHOLOGY',
                'short_name' => 'EDUC. AND PSY. DEPT',
                'type' => 'ACADEMIC',
            ),
            38 => 
            array (
                'deptid' => 3302,
                'facultyid' => 3300,
                'long_name' => 'DEPARTMENT OF BASIC EDUCATION',
                'short_name' => 'BASIC EDUCATION DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            39 => 
            array (
                'deptid' => 3303,
                'facultyid' => 3300,
                'long_name' => 'DEPARTMENT OF GUIDANCE AND COUNSELLING',
                'short_name' => 'GUIDANCE AND COUNSELLING DEPT',
                'type' => 'ACADEMIC',
            ),
            40 => 
            array (
                'deptid' => 3304,
                'facultyid' => 3300,
                'long_name' => 'COUNSELLING CENTRE',
                'short_name' => 'COUNSELLING CENTRE',
                'type' => '',
            ),
            41 => 
            array (
                'deptid' => 3305,
                'facultyid' => 3300,
                'long_name' => 'CENTRE FOR CHILD DEVELOPMENT RESEARCH AND REFERRAL',
                'short_name' => 'CENTRE FOR CHILD DEV. RESEARCH AND REFERRAL',
                'type' => 'ACADEMIC',
            ),
            42 => 
            array (
                'deptid' => 3401,
                'facultyid' => 3400,
                'long_name' => 'CENTRE FOR TEACHING SUPPORT',
                'short_name' => 'CENTRE FOR TEACHING SUPPORT',
                'type' => '',
            ),
            43 => 
            array (
                'deptid' => 3402,
                'facultyid' => 3400,
                'long_name' => 'INSTITUTE OF EDUCATION',
                'short_name' => 'INSTITUTE OF EDU. DEPT.',
                'type' => 'ACADEMIC',
            ),
            44 => 
            array (
                'deptid' => 3403,
                'facultyid' => 3400,
                'long_name' => 'INSTITUTE  FOR EDUCATION PLANNING AND ADMINISTRATION',
                'short_name' => 'INSTITUTE  FOR EDU. PLAN. AND ADMIN. DEPT.',
                'type' => 'ACADEMIC',
            ),
            45 => 
            array (
                'deptid' => 3404,
                'facultyid' => 3400,
                'long_name' => 'CENTRE FOR EDUCATIONAL RESEARCH, EVALUATION AND DEVELOPMENT',
                'short_name' => 'CENTRE FOR EDU\'L RESEARCH, EVALUATION AND DEVT.',
                'type' => '',
            ),
            46 => 
            array (
                'deptid' => 3405,
                'facultyid' => 3400,
                'long_name' => 'CENTRE FOR TEACHER PROFESSIONAL DEVELOPMENT',
                'short_name' => 'CENTRE FOR TEACHER. PROF. DEVT.',
                'type' => 'ACADEMIC',
            ),
            47 => 
            array (
                'deptid' => 4001,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF CHEMISTRY',
                'short_name' => 'CHEMISTRY DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            48 => 
            array (
                'deptid' => 4002,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF MATHEMATICS AND STATISTICS',
                'short_name' => 'MATHEMATICS AND STATISTICS DEPT.',
                'type' => 'ACADEMIC',
            ),
            49 => 
            array (
                'deptid' => 4004,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF ZOOLOGY',
                'short_name' => 'ZOOLOGY DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            50 => 
            array (
                'deptid' => 4005,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF PHYSICS',
                'short_name' => 'PHYSICS DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            51 => 
            array (
                'deptid' => 4006,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF CONSERVATION BIOLOGY AND ENTOMOLOGY',
                'short_name' => 'DEPT OF CONSERVATION BIO. AND ENT.',
                'type' => 'ACADEMIC',
            ),
            52 => 
            array (
                'deptid' => 4007,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF LABORATORY TECHNOLOGY',
                'short_name' => 'LABTEC DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            53 => 
            array (
                'deptid' => 4009,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF COMPUTER SCIENCE AND INFORMATION TECHNOLOGY',
                'short_name' => 'COMPUTER SCIENCE DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            54 => 
            array (
                'deptid' => 4010,
                'facultyid' => 9000,
                'long_name' => 'COMPUTER CENTRE',
                'short_name' => 'COMPUTER CENTRE DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            55 => 
            array (
                'deptid' => 4011,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF OPTOMETRY',
                'short_name' => 'OPTOMETRY DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            56 => 
            array (
                'deptid' => 4012,
                'facultyid' => 9000,
                'long_name' => 'AFRICAN VIRTUAL UNIVERSITY DEPARTMENT',
                'short_name' => 'AFRICAN VIRTUAL UNIVERSITY',
                'type' => 'ACADEMIC',
            ),
            57 => 
            array (
                'deptid' => 4014,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF BIOCHEMISTRY',
                'short_name' => 'DEPARTMENT OF BIOCHEMISTRY',
                'type' => 'ACADEMIC',
            ),
            58 => 
            array (
                'deptid' => 4050,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF ENVIRONMENTAL SCIENCES',
                'short_name' => 'ENVIRONMENTAL SCIENCES DEPT.',
                'type' => 'ACADEMIC',
            ),
            59 => 
            array (
                'deptid' => 4051,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF MOLECULAR BIOLOGY AND BIOTECHNOLOGY',
                'short_name' => 'MOLECULAR BIOLOGY AND BIOTECH DEPT.',
                'type' => 'ACADEMIC',
            ),
            60 => 
            array (
                'deptid' => 4052,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF FISHERIES AND AQUATIC SCIENCES',
                'short_name' => 'FISHERIES AND AQUATIC SCIENCES DEPT.',
                'type' => 'ACADEMIC',
            ),
            61 => 
            array (
                'deptid' => 4053,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF CONSERVATION BIOLOGY AND ENTOMOLOGY',
                'short_name' => 'DEPT OF CONSERVATION BIO. AND ENT.',
                'type' => 'ACADEMIC',
            ),
            62 => 
            array (
                'deptid' => 4054,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF FORENSIC SCIENCES',
                'short_name' => 'DEPARTMENT OF FORENSIC SCIENCES',
                'type' => 'ACADEMIC',
            ),
            63 => 
            array (
                'deptid' => 4055,
                'facultyid' => 1300,
                'long_name' => 'DEPARTMENT OF NURSING AND MIDWIFERY',
                'short_name' => 'DEPT. OF NURSING',
                'type' => 'ACADEMIC',
            ),
            64 => 
            array (
                'deptid' => 4400,
                'facultyid' => 4000,
                'long_name' => 'DEPARTMENT OF LAW',
                'short_name' => 'LAW DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            65 => 
            array (
                'deptid' => 4500,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF MATHEMATICS',
                'short_name' => 'DEPT. OF MATHEMATICS',
                'type' => 'ACADEMIC',
            ),
            66 => 
            array (
                'deptid' => 4600,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF STATISTICS',
                'short_name' => 'DEPT. OF STATISTICS',
                'type' => 'ACADEMIC',
            ),
            67 => 
            array (
                'deptid' => 5001,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF BUSINESS STUDIES',
                'short_name' => 'BUSINESS STUDIES DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            68 => 
            array (
                'deptid' => 5002,
                'facultyid' => 5000,
                'long_name' => 'DEPARTMENT OF ECONOMICS',
                'short_name' => 'ECONOMICS DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            69 => 
            array (
                'deptid' => 5003,
                'facultyid' => 5000,
                'long_name' => 'DEPARTMENT OF GEOGRAPHY AND TOURISM',
                'short_name' => 'GEOGRAPHY AND TOURISM  DEPT.',
                'type' => 'ACADEMIC',
            ),
            70 => 
            array (
                'deptid' => 5004,
                'facultyid' => 5000,
                'long_name' => 'DEPARTMENT OF SOCIOLOGY AND ANTHROPOLOGY',
                'short_name' => 'SOCIOLOGY AND ANTHROPOLOGY DEPT.',
                'type' => 'ACADEMIC',
            ),
            71 => 
            array (
                'deptid' => 5005,
                'facultyid' => 5000,
                'long_name' => 'INSTITUTE FOR DEVELOPMENT STUDIES',
                'short_name' => 'INSTITUTE OF DEV. STUDIES',
                'type' => 'ACADEMIC',
            ),
            72 => 
            array (
                'deptid' => 5006,
                'facultyid' => 5000,
                'long_name' => 'CONSULTANCY UNIT',
                'short_name' => 'CONSULTANCY UNIT',
                'type' => 'NON-ACADEM',
            ),
            73 => 
            array (
                'deptid' => 5007,
                'facultyid' => 5000,
                'long_name' => 'DEPARTMENT OF GEOGRAPHY AND REGIONAL PLANNING',
                'short_name' => 'GEOG. AND REGIONAL PLAN.  DEPT.',
                'type' => 'ACADEMIC',
            ),
            74 => 
            array (
                'deptid' => 5008,
                'facultyid' => 5000,
                'long_name' => 'DEPARTMENT OF POPULATION AND HEALTH',
                'short_name' => 'POP. AND HEALTH DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            75 => 
            array (
                'deptid' => 5009,
                'facultyid' => 5000,
                'long_name' => 'DEPARTMENT OF HOSPITALITY AND TOURISM MANAGEMENT',
                'short_name' => 'HOSP. & TOURISM DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            76 => 
            array (
                'deptid' => 5010,
                'facultyid' => 5000,
                'long_name' => 'GENDER CENTRE',
                'short_name' => '',
                'type' => 'ACADEMIC',
            ),
            77 => 
            array (
                'deptid' => 5011,
                'facultyid' => 5000,
                'long_name' => 'INSTITUTE FOR OIL AND GAS STUDIES',
                'short_name' => 'INST. FOR OIL AND GAS STUDIES',
                'type' => 'ACADEMIC',
            ),
            78 => 
            array (
                'deptid' => 5101,
                'facultyid' => 5100,
                'long_name' => 'DEPARTMENT OF PEACE STUDIES',
                'short_name' => 'DEPT. OF PEACE STUDIES',
                'type' => 'ACADEMIC',
            ),
            79 => 
            array (
                'deptid' => 5102,
                'facultyid' => 5100,
                'long_name' => 'DEPARTMENT OF INTEGRATED DEVELOPMENT STUDIES',
                'short_name' => 'DEPT. OF INTEGRATED DEV. STUDIES',
                'type' => 'ACADEMIC',
            ),
            80 => 
            array (
                'deptid' => 5103,
                'facultyid' => 5100,
                'long_name' => 'DEPARTMENT OF ENVIRONMENT, GOVERNANCE AND SUSTAINABLE DEVELOPMENT',
                'short_name' => 'DEPT. OF ENV, GOV. & SUSTAINABLE DEV.',
                'type' => 'ACADEMIC',
            ),
            81 => 
            array (
                'deptid' => 5104,
                'facultyid' => 5100,
                'long_name' => 'DEPARTMENT OF LABOUR AND HUMAN RESOURCE STUDIES',
                'short_name' => 'DEPT. OF LAB. & HUMAN RESOURCE STUDIES',
                'type' => 'ACADEMIC',
            ),
            82 => 
            array (
                'deptid' => 5201,
                'facultyid' => 5200,
                'long_name' => 'DEPARTMENT OF ECONOMIC STUDIES',
                'short_name' => 'DEPARTMENT OF ECONOMIC STUDIES',
                'type' => 'ACADEMIC',
            ),
            83 => 
            array (
                'deptid' => 5202,
                'facultyid' => 5200,
                'long_name' => 'DEPARTMENT OF APPLIED ECONOMICS',
                'short_name' => 'DEPT. OF APPLIED ECONOMICS',
                'type' => 'ACADEMIC',
            ),
            84 => 
            array (
                'deptid' => 5203,
                'facultyid' => 5200,
                'long_name' => 'DEPARTMENT OF DATA SCIENCE AND ECONOMIC POLICY',
                'short_name' => 'DEPT. OF DATA SCIENCE AND ECONOMIC POLICY',
                'type' => 'ACADEMIC',
            ),
            85 => 
            array (
                'deptid' => 6001,
                'facultyid' => 6000,
                'long_name' => 'OFFICE OF THE REGISTRAR',
                'short_name' => 'REGISTRY',
                'type' => 'NON-ACADEM',
            ),
            86 => 
            array (
                'deptid' => 6002,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF FINANCE',
                'short_name' => 'FINANCE',
                'type' => 'NON-ACADEM',
            ),
            87 => 
            array (
                'deptid' => 6003,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF INTERNAL AUDIT',
                'short_name' => 'AUDIT',
                'type' => 'NON-ACADEM',
            ),
            88 => 
            array (
                'deptid' => 6004,
                'facultyid' => 6000,
                'long_name' => 'DEVELOPMENT SECTION',
                'short_name' => 'DEVELOPMENT',
                'type' => 'NON-ACADEM',
            ),
            89 => 
            array (
                'deptid' => 6005,
                'facultyid' => 1000,
                'long_name' => 'CENTRAL LIBRARY',
                'short_name' => 'LIBRARY',
                'type' => 'NON-ACADEM',
            ),
            90 => 
            array (
                'deptid' => 6006,
                'facultyid' => 1200,
                'long_name' => 'CENTER FOR INTERNATIONAL EDUCATION',
                'short_name' => 'INTERNATIONAL PROGRAMS',
                'type' => 'NON-ACADEM',
            ),
            91 => 
            array (
                'deptid' => 6007,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF ACADEMIC PLANNING AND QUALITY ASSURANCE',
                'short_name' => 'DAPQA',
                'type' => 'NON-ACADEM',
            ),
            92 => 
            array (
                'deptid' => 6060,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF ICT SERVICES',
                'short_name' => 'DIRECTORATE OF ICT SERVICES',
                'type' => 'NON-ACADEM',
            ),
            93 => 
            array (
                'deptid' => 7001,
                'facultyid' => 7000,
                'long_name' => 'DEPARTMENT OF BOTANY',
                'short_name' => 'BOTANY DEPARTMENT',
                'type' => 'ACADEMIC',
            ),
            94 => 
            array (
                'deptid' => 7002,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF ACADEMIC AFFAIRS',
                'short_name' => 'OFFICE OF INTERNATIONAL PROGRA',
                'type' => 'NON-ACADEM',
            ),
            95 => 
            array (
                'deptid' => 8001,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF MANAGEMENT',
                'short_name' => 'DEPT OF MANAGEMENT',
                'type' => 'ACADEMIC',
            ),
            96 => 
            array (
                'deptid' => 8002,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF ACCOUNTING AND FINANCE',
                'short_name' => 'DEPT OF ACCOUNTING AND FINANCE',
                'type' => 'ACADEMIC',
            ),
            97 => 
            array (
                'deptid' => 8003,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF HUMAN RESOURCE MANAGEMENT',
                'short_name' => 'DEPT. OF HUMAN RESOURCE MGT.',
                'type' => 'ACADEMIC',
            ),
            98 => 
            array (
                'deptid' => 8004,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF MARKETING AND SUPPLY CHAIN MANAGEMENT',
                'short_name' => 'DEPT. OF MKT. AND SUPPLY CHAIN MGT.',
                'type' => 'ACADEMIC',
            ),
            99 => 
            array (
                'deptid' => 8005,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF ACCOUNTING',
                'short_name' => 'DEPT. OF ACCOUNTING',
                'type' => 'ACADEMIC',
            ),
            100 => 
            array (
                'deptid' => 8006,
                'facultyid' => 8000,
                'long_name' => 'DEPARTMENT OF FINANCE',
                'short_name' => 'DEPT. OF FINANCE',
                'type' => 'ACADEMIC',
            ),
            101 => 
            array (
                'deptid' => 8007,
                'facultyid' => 8000,
                'long_name' => 'CENTRE FOR ENTREPRENEURSHIP AND SMALL ENTERPRISE DEVELOPMENT',
                'short_name' => 'CENTRE FOR ENT. AND SMALL ENTER. DEVT.',
                'type' => 'ACADEMIC',
            ),
            102 => 
            array (
                'deptid' => 9001,
                'facultyid' => 9000,
                'long_name' => 'SCHOOL OF PHYSICAL SCIENCES',
                'short_name' => 'SCHOOL OF PHYSICAL SCIENCES',
                'type' => 'ACADEMIC',
            ),
            103 => 
            array (
                'deptid' => 9002,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF HUMAN RESOURCES',
                'short_name' => 'DIRECTORATE OF HUMAN RESOURCES',
                'type' => 'NON-ACADEM',
            ),
            104 => 
            array (
                'deptid' => 9003,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF LEGAL CONSULAR AND GENERAL SERVICES',
                'short_name' => 'DIRECTORATE OF LEGAL CONSULAR AND GENERAL SERVICES',
                'type' => 'NON-ACADEM',
            ),
            105 => 
            array (
                'deptid' => 9004,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF PUBLIC AFFAIRS',
                'short_name' => 'DIRECTORATE OF PUBLIC AFFAIRS',
                'type' => 'NON-ACADEM',
            ),
            106 => 
            array (
                'deptid' => 9005,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF RESEARCH, INNOVATION AND CONSULTANCY',
                'short_name' => 'DRIC',
                'type' => 'NON-ACADEM',
            ),
            107 => 
            array (
                'deptid' => 9006,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF PHYSICAL DEVELOPMENT AND ESTATE MANAGEMENT',
                'short_name' => 'DIRECTORATE OF PHYSICAL DEVELOPMENT AND ESTATE MAN',
                'type' => 'NON-ACADEM',
            ),
            108 => 
            array (
                'deptid' => 9007,
                'facultyid' => 6000,
                'long_name' => 'DIRECTORATE OF UNIVERSITY HEALTH SERVICES',
                'short_name' => 'DIRECTORATE OF UNIVERSITY HEALTH SERVICES',
                'type' => 'NON-ACADEM',
            ),
            109 => 
            array (
                'deptid' => 9008,
                'facultyid' => 6000,
                'long_name' => 'OFFICE OF THE DEAN OF STUDENTS',
                'short_name' => 'OFFICE OF THE DEAN OF STUDENTS',
                'type' => 'NON-ACADEM',
            ),
            110 => 
            array (
                'deptid' => 9009,
                'facultyid' => 6000,
                'long_name' => 'SECURITY SECTION',
                'short_name' => 'SECURITY SECTION',
                'type' => 'NON-ACADEM',
            ),
            111 => 
            array (
                'deptid' => 9010,
                'facultyid' => 1000,
                'long_name' => 'DEAN\'S OFFICE - FACULTY OF ARTS',
                'short_name' => 'DEAN\'S OFFICE - FACULTY OF ARTS',
                'type' => '',
            ),
            112 => 
            array (
                'deptid' => 9011,
                'facultyid' => 3000,
                'long_name' => 'DEAN\'S OFFICE - FACULTY OF EDUCATION',
                'short_name' => 'DEAN\'S OFFICE - FACULTY OF EDUCATION',
                'type' => '',
            ),
            113 => 
            array (
                'deptid' => 9012,
                'facultyid' => 3000,
                'long_name' => 'CENTRE FOR RESEARCH ON IMPROVING QUALITY OF PRIMARY EDUCATION IN GHANA',
            'short_name' => '(CRIQPEG)',
                'type' => '',
            ),
            114 => 
            array (
                'deptid' => 9013,
                'facultyid' => 5000,
                'long_name' => 'DEAN\'S OFFICE - SOCIAL SCIENCES',
                'short_name' => 'DEAN\'S OFFICE - SOCIAL SCIENCES',
                'type' => '',
            ),
            115 => 
            array (
                'deptid' => 9014,
                'facultyid' => 6000,
                'long_name' => 'DEAN\'S OFFICE - SCHOOL OF GRADUATE STUDIES AND RESEARCH',
                'short_name' => 'DEAN\'S OFFICE - SCHOOL OF GRADUATE STUDIES AND RES',
                'type' => '',
            ),
            116 => 
            array (
                'deptid' => 9015,
                'facultyid' => 2000,
                'long_name' => 'DEAN\'S OFFICE - SCHOOL OF AGRICULTURE',
                'short_name' => 'DEAN\'S OFFICE - SCHOOL OF AGRICULTURE',
                'type' => '',
            ),
            117 => 
            array (
                'deptid' => 9016,
                'facultyid' => 2000,
                'long_name' => 'TECHNOLOGY VILLAGE',
                'short_name' => 'TECHNOLOGY VILLAGE',
                'type' => 'NON-ACADEM',
            ),
            118 => 
            array (
                'deptid' => 9017,
                'facultyid' => 7000,
                'long_name' => 'DEAN\'S OFFICE - SCHOOL OF BIOLOGICAL SCIENCES',
                'short_name' => 'DEAN\'S OFFICE - SCHOOL OF BIOLOGICAL SCIENCES',
                'type' => '',
            ),
            119 => 
            array (
                'deptid' => 9018,
                'facultyid' => 8000,
                'long_name' => 'DEAN\'S OFFICE - SCHOOL OF BUSINESS',
                'short_name' => 'DEAN\'S OFFICE - SCHOOL OF BUSINESS',
                'type' => '',
            ),
            120 => 
            array (
                'deptid' => 9019,
                'facultyid' => 1100,
                'long_name' => 'DEAN\'S OFFICE - SCHOOL OF MEDICAL SCIENCES',
                'short_name' => 'DEAN\'S OFFICE - SCHOOL OF MEDICAL SCIENCES',
                'type' => '',
            ),
            121 => 
            array (
                'deptid' => 9020,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF ANESTHESIA AND PAIN MANAGEMENT',
                'short_name' => 'ANESTHESIA & PAIN MANAGEMENT DEPT.',
                'type' => 'ACADEMIC',
            ),
            122 => 
            array (
                'deptid' => 9021,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF MEDICAL BIOCHEMISTRY',
                'short_name' => 'MEDICAL BIOCHEMISTRY DEPT.',
                'type' => 'ACADEMIC',
            ),
            123 => 
            array (
                'deptid' => 9022,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF COMMUNITY MEDICINE',
                'short_name' => 'COMMUNITY MEDICINE DEPT.',
                'type' => 'ACADEMIC',
            ),
            124 => 
            array (
                'deptid' => 9023,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF MICROBIOLOGY AND IMMUNOLOGY',
                'short_name' => 'MICROBIOLOGY AND IMMUNOLOGY DEPT.',
                'type' => 'ACADEMIC',
            ),
            125 => 
            array (
                'deptid' => 9025,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF PSYCHOLOGICAL MEDICINE AND MENTAL HEALTH',
                'short_name' => 'PSYCHOLOGICAL MEDICINE & MENTAL HEALTH DPET.',
                'type' => 'ACADEMIC',
            ),
            126 => 
            array (
                'deptid' => 9026,
                'facultyid' => 1100,
                'long_name' => 'DEPARTMENT OF SURGERY',
                'short_name' => 'SURGERY DEPT.',
                'type' => 'ACADEMIC',
            ),
            127 => 
            array (
                'deptid' => 9027,
                'facultyid' => 9000,
                'long_name' => 'DEAN\'S OFFICE - PHYSICAL SCIENCES',
                'short_name' => 'DEAN\'S OFFICE - PHYSICAL SCIENCES',
                'type' => '',
            ),
            128 => 
            array (
                'deptid' => 9028,
                'facultyid' => 6000,
                'long_name' => 'ICT CENTER',
                'short_name' => 'ICT CENTER',
                'type' => 'NON-ACADEM',
            ),
            129 => 
            array (
                'deptid' => 9029,
                'facultyid' => 6000,
                'long_name' => 'UNIVERSITY KINDERGARTEN',
                'short_name' => 'UNIVERSITY KINDERGARTEN',
                'type' => '',
            ),
            130 => 
            array (
                'deptid' => 9030,
                'facultyid' => 6000,
                'long_name' => 'UNIVERSITY PRIMARY SCHOOL',
                'short_name' => 'UNIVERSITY PRIMARY SCHOOL',
                'type' => '',
            ),
            131 => 
            array (
                'deptid' => 9031,
                'facultyid' => 6000,
                'long_name' => 'UNIVERSITY JUNIOR HIGH SCHOOL',
                'short_name' => 'UNIVERSITY JUNIOR HIGH SCHOOL',
                'type' => '',
            ),
            132 => 
            array (
                'deptid' => 9032,
                'facultyid' => 6000,
                'long_name' => 'UTAG OFFICE',
                'short_name' => 'UTAG OFFICE',
                'type' => 'NON-ACADEM',
            ),
            133 => 
            array (
                'deptid' => 9033,
                'facultyid' => 6000,
                'long_name' => 'PRINTING PRESS',
                'short_name' => 'PRINTING PRESS',
                'type' => 'NON-ACADEM',
            ),
            134 => 
            array (
                'deptid' => 9034,
                'facultyid' => 6000,
                'long_name' => 'CREDIT UNION',
                'short_name' => 'CREDIT UNION',
                'type' => 'NON-ACADEM',
            ),
            135 => 
            array (
                'deptid' => 9035,
                'facultyid' => 6000,
                'long_name' => 'TRANSPORT SECTION',
                'short_name' => 'TRANSPORT SECTION',
                'type' => 'NON-ACADEM',
            ),
            136 => 
            array (
                'deptid' => 9036,
                'facultyid' => 6000,
                'long_name' => 'SRC OFFICE',
                'short_name' => 'SRC OFFICE',
                'type' => 'NON-ACADEM',
            ),
            137 => 
            array (
                'deptid' => 9037,
                'facultyid' => 2000,
                'long_name' => 'SASAKAWA CENTER',
                'short_name' => 'SASAKAWA CENTER',
                'type' => 'NON-ACADEM',
            ),
            138 => 
            array (
                'deptid' => 9038,
                'facultyid' => 0,
                'long_name' => 'NATIONAL COUNCIL FOR TERTIARY EDUCATION, ACCRA',
                'short_name' => 'NATIONAL COUNCIL FOR TERTIARY EDUCATION, ACCRA',
                'type' => 'NON-ACADEM',
            ),
            139 => 
            array (
                'deptid' => 9039,
                'facultyid' => 0,
                'long_name' => 'TERTIARY INSTITUTIONS IN GHANA',
                'short_name' => 'TERTIARY INSTITUTIONS IN GHANA',
                'type' => 'NON-ACADEM',
            ),
            140 => 
            array (
                'deptid' => 9040,
                'facultyid' => 0,
                'long_name' => 'MINISTRY OF HEALTH',
                'short_name' => 'MINISTRY OF HEALTH',
                'type' => 'NON-ACADEM',
            ),
            141 => 
            array (
                'deptid' => 9041,
                'facultyid' => 9000,
                'long_name' => 'LASER AND FIBRE OPTIC CENTRE',
                'short_name' => 'LAFOC',
                'type' => 'ACADEMIC',
            ),
            142 => 
            array (
                'deptid' => 9042,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF INDUSTRIAL CHEMISTRY',
                'short_name' => 'INDUSTRIAL CHEMISTRY DEPT.',
                'type' => 'ACADEMIC',
            ),
            143 => 
            array (
                'deptid' => 9043,
                'facultyid' => 9500,
                'long_name' => 'CoDE GRADUATE SCHOOL',
                'short_name' => 'CoDE GRADUATE SCHOOL',
                'type' => 'ACADEMIC',
            ),
            144 => 
            array (
                'deptid' => 9044,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF PHYSICIAN ASSISTANT STUDIES',
                'short_name' => 'PHYSICIAN ASSISTANT STUDIES DEPT.',
                'type' => 'ACADEMIC',
            ),
            145 => 
            array (
                'deptid' => 9045,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF CLINICAL NUTRITION AND DIETETICS',
                'short_name' => 'CLINICAL NUTRITION AND DIETETICS DEPT.',
                'type' => 'ACADEMIC',
            ),
            146 => 
            array (
                'deptid' => 9046,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF IMAGING TECHNOLOGY AND SONOGRAPHY',
                'short_name' => 'IMAGING TECH. AND SONOGRAPHY DEPT,',
                'type' => 'ACADEMIC',
            ),
            147 => 
            array (
                'deptid' => 9047,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF SPORTS AND EXERCISE SCIENCE',
                'short_name' => 'SPORTS AND EXERCISE SCIENCE DEPT.',
                'type' => 'ACADEMIC',
            ),
            148 => 
            array (
                'deptid' => 9048,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF HEALTH INFORMATION MANAGEMENT',
                'short_name' => 'HEALTH INFORMATION MANAGEMENT DEPT.',
                'type' => 'ACADEMIC',
            ),
            149 => 
            array (
                'deptid' => 9049,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF MEDICAL LABORATORY SCIENCE',
                'short_name' => 'MEDICAL LABORATORY SCIENCE DEPT.',
                'type' => 'ACADEMIC',
            ),
            150 => 
            array (
                'deptid' => 9050,
                'facultyid' => 1400,
                'long_name' => 'DEPARTMENT OF BIOMEDICAL SCIENCES',
                'short_name' => 'BIOMEDICAL SCIENCES DEPT.',
                'type' => 'ACADEMIC',
            ),
            151 => 
            array (
                'deptid' => 9501,
                'facultyid' => 9500,
                'long_name' => 'CoDE DEPARTMENT OF EDUCATION',
                'short_name' => 'CoDE DEPT. EDUCATION',
                'type' => 'ACADEMIC',
            ),
            152 => 
            array (
                'deptid' => 9502,
                'facultyid' => 9500,
                'long_name' => 'CoDE DEPARTMENT OF BUSINESS STUDIES',
                'short_name' => 'CoDE DEPT. BUSINESS STUDIES',
                'type' => 'ACADEMIC',
            ),
            153 => 
            array (
                'deptid' => 9503,
                'facultyid' => 8000,
                'long_name' => 'CoDE-DEPARTMENT OF MANAGEMENT',
                'short_name' => 'DEPT. OF MANAGEMENT',
                'type' => 'ACADEMIC',
            ),
            154 => 
            array (
                'deptid' => 9504,
                'facultyid' => 9500,
                'long_name' => 'CoDE DEPARTMENT OF MATHS AND SCIENCE EDUCATION',
                'short_name' => 'CoDE DEPT. OF MATHS AND SCIENCE EDUCATION',
                'type' => 'ACADEMIC',
            ),
            155 => 
            array (
                'deptid' => 9505,
                'facultyid' => 6000,
                'long_name' => 'VICE CHANCELLOR\'S OFFICE ',
                'short_name' => 'VC\'S OFFICE',
                'type' => 'NON-ACADEM',
            ),
            156 => 
            array (
                'deptid' => 9506,
                'facultyid' => 9000,
                'long_name' => 'DEPARTMENT OF WATER AND SANITATION',
                'short_name' => 'WATER AND SANITATION DEPT.',
                'type' => 'ACADEMIC',
            ),
        ));
        
        
    }
}