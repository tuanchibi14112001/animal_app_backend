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
                'img_url' => '1.jpg',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => '2.jpg',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => '3.jpg',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Cat',
                'img_url' => '4.jpg',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Dog',
                'img_url' => '5.jpg',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Dog',
                'img_url' => '6.jpg',
            ],
            [
                'user_id' => 1,
                'animal_specie_name' => 'Mouse',
                'img_url' => '7.jpg',
            ],

        ]);
    }
}
