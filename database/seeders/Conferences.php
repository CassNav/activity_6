<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Conferences extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        conferences::create([
            'conference_name' => 'NFC',
            'conference_logo' => 'nfc_logo.png',
            'superbowl_titles_in_conference' => 5, 
        ]);
        
        // Create the second record for AFC
        conferences::create([
            'conference_name' => 'AFC',
            'conference_logo' => 'afc_logo.png',
            'superbowl_titles_in_conference' => 3, 
        ]);
    }
}
