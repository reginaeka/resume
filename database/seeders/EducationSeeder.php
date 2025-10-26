<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bachelor
         Education::create([
            'degree'=>'Bachelor of Structural',
            'school'=>'Mercu Buana University',
            'thesis'=>'Redesign of a Ten-Story Hotel Utilizing Steel Structure in Compliance with SNI 1729:2020 and SNI 1726:2019',
            'startYear'=>'2017',
            'endYear'=>'2022',
        ]);

        // High School
         Education::create([
            'degree'=>'High School Graduate',
            'school'=>'SMK Negeri 1 Rembang',
            'thesis'=>'Building Design and Drafting',
            'startYear'=>'2012',
            'endYear'=>'2015',
        ]);
    }
}
