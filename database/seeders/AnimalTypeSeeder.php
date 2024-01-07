<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_type')->insert([
            [
                'name' => 'Mammals',
            ],
            [
                'name' => 'Birds',
            ],
            [
                'name' => 'Fish',
            ],
            [
                'name' => 'Reptiles',
            ],
            [
                'name' => 'Amphibians',
            ],
            [
                'name' => 'Arthropods',
            ],
        ]);
    }
}
