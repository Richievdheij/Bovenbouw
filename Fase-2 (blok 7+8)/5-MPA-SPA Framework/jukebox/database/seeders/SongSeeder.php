<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songArray = array(
            "Sentio",
            "Frenchcore worldwide",
            "Acid water",
            "Reflections",
            "Barbera streisand",
            "YMCA",
            "Animals",
            "10:35",
            "Lay low",
            "Blah Blah Blah"
        );

        foreach ($songArray as $song){ 
            \App\Models\Song::factory()->create([
                'name' =>  $song,
            ]);           
        }

    }
}
