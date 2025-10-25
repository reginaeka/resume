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
            'sosmed'=>'email',
            'link'=>'ekaregina846@gmail.com',
            'icon'=>'bi bi-envelope',
        ]);

        // LinkedIn
         SocialMedia::create([
            'sosmed'=>'linkedin',
            'link'=>'https://www.linkedin.com/in/regina-septianad/',
            'icon'=>'bi bi-linkedin',
        ]);
    }
}
