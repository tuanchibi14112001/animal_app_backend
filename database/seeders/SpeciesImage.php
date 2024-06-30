<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesImage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_species_img')->insert([
            [
                'animal_specie_id' => 1,
                'img_url' => '1.jpg'
            ],
            [
                'animal_specie_id' => 2,
                'img_url' => '2.jpg'
            ],
            [
                'animal_specie_id' => 3,
                'img_url' => '3.jpg'
            ],
            [
                'animal_specie_id' => 4,
                'img_url' => '4.jpg'
            ],
            [
                'animal_specie_id' => 5,
                'img_url' => '5.jpg'
            ],
            [
                'animal_specie_id' => 6,
                'img_url' => '6.jpg'
            ],
            [
                'animal_specie_id' => 7,
                'img_url' => '7.jpg'
            ],
            [
                'animal_specie_id' => 8,
                'img_url' => '8.jpg'
            ],
        ]);
    }
}
