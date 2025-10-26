<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Revit
        Skill::create([
            'skill'=>'Revit',
            'percentage'=>'90',
        ]);

        // AutoCAD
        Skill::create([
            'skill'=>'Revit',
            'percentage'=>'95',
        ]);

        // Point Cloud Modeling
        Skill::create([
            'skill'=>'Point Cloud Modeling',
            'percentage'=>'85',
        ]);
        
        // Structural Drafting
        Skill::create([
            'skill'=>'Structural Drafting',
            'percentage'=>'90',
        ]);
        
        // Naviswork
        Skill::create([
            'skill'=>'Naviswork',
            'percentage'=>'85',
        ]);
        
        // IDEA Statica
        Skill::create([
            'skill'=>'IDEA Statica',
            'percentage'=>'80',
        ]);
        
        // Enscape 3D View
        Skill::create([
            'skill'=>'Enscape 3D View',
            'percentage'=>'50',
        ]);
    }
}
