<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Favourite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favourite')->insert([
            [
                'user_id' => 1,
                'animal_breed_id' => 1
            ],
            [
                'user_id' => 1,
                'animal_breed_id' => 2
            ],
            [
                'user_id' => 1,
                'animal_breed_id' => 3
            ],
            [
                'user_id' => 1,
                'animal_breed_id' => 5
            ],
            [
                'user_id' => 1,
                'animal_breed_id' => 7
            ],
            [
                'user_id' => 1,
                'animal_breed_id' => 9
            ],
            [
                'user_id' => 2,
                'animal_breed_id' => 1
            ],
        ]);
    }
}
