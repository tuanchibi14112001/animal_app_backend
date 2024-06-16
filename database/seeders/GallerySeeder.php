<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gallery')->insert([
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Dog',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Dog',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Mouse',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Ducks',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Ducks',
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Elasmobranchii',
                'img_url' => 'abcd',
            ],

        ]);
    }
}
