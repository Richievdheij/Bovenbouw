<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genreArray = array(
            "Progressive house",
            "Dubstep",
            "Drum n Bass",
            "Big room",
            "Techno",
            "Hard techno",
            "Harstyle",
            "Hardcore",
            "Frenchcore",
            "Uptempo",
            "Freestyle"
        );

        foreach ($genreArray as $genre){ 
            \App\Models\Genre::factory()->create([
                'name' =>  $genre,
            ]);           
        }

    }
}
