<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Email
         SocialMedia::create([
            'type'=>'email',
            'href'=>'ekaregina846@gmail.com',
            'label'=>'ekaregina846@gmail.com',
            'icon'=>'bi bi-envelope',
        ]);

        // LinkedIn
         SocialMedia::create([
            'type'=>'linkedin',
            'href'=>'https://www.linkedin.com/in/regina-septianad/',
            'label'=>'Regina Septianadrah',
            'icon'=>'bi bi-linkedin',
        ]);
    }
}
