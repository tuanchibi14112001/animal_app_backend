<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesVideo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('animal_species_video')->insert([
            [
                'animal_specie_id' => 2,
                'video_url' => '1.mp4'
            ],
        ]);
    }
}
