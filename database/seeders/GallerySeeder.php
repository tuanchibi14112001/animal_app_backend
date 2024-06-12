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
                'animal_family_id' => 1,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 1,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 1,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 1,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 2,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 2,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 3,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 4,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 4,
                'img_url' => 'abcd',
            ],
            [
                'user_id' => 1,
                'animal_family_id' => 5,
                'img_url' => 'abcd',
            ],

        ]);
    }
}
