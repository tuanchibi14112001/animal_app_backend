<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedImage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_breed_img')->insert([
            [
                'animal_breed_id' => 1,
                'img_url' => '1.jpg'
            ],
            [
                'animal_breed_id' => 2,
                'img_url' => '2.jpg'
            ],
            [
                'animal_breed_id' => 3,
                'img_url' => '3.jpg'
            ],
            [
                'animal_breed_id' => 4,
                'img_url' => '4.jpg'
            ],
            [
                'animal_breed_id' => 5,
                'img_url' => '5.jpg'
            ],
            [
                'animal_breed_id' => 6,
                'img_url' => '6.jpg'
            ],
            [
                'animal_breed_id' => 7,
                'img_url' => '7.jpg'
            ],
            [
                'animal_breed_id' => 8,
                'img_url' => '8.jpg'
            ],
            [
                'animal_breed_id' => 9,
                'img_url' => '9.jpg'
            ],
            [
                'animal_breed_id' => 10,
                'img_url' => '10.jpg'
            ],
            [
                'animal_breed_id' => 11,
                'img_url' => '11.jpg'
            ],
            [
                'animal_breed_id' => 12,
                'img_url' => '12.jpg'
            ],
            [
                'animal_breed_id' => 13,
                'img_url' => '13.jpg'
            ],
            [
                'animal_breed_id' => 14,
                'img_url' => '14.jpg'
            ],
            [
                'animal_breed_id' => 15,
                'img_url' => '15.jpg'
            ],
            [
                'animal_breed_id' => 16,
                'img_url' => '16.jpg'
            ],
            [
                'animal_breed_id' => 17,
                'img_url' => '17.jpg'
            ],
            [
                'animal_breed_id' => 18,
                'img_url' => '18.jpg'
            ],
            [
                'animal_breed_id' => 19,
                'img_url' => '19.jpg'
            ],
            [
                'animal_breed_id' => 20,
                'img_url' => '20.jpg'
            ],
            [
                'animal_breed_id' => 21,
                'img_url' => '21.jpg'
            ],
            [
                'animal_breed_id' => 22,
                'img_url' => '22.jpg'
            ],
            [
                'animal_breed_id' => 23,
                'img_url' => '23.jpg'
            ],
            [
                'animal_breed_id' => 24,
                'img_url' => '24.jpg'
            ],
            [
                'animal_breed_id' => 25,
                'img_url' => '25.jpg'
            ],
        
        ]);
    }
}
