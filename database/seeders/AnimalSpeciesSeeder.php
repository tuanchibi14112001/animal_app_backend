<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_species')->insert([
            [
                'animal_family_id' => 1,
                'name' => 'American Cocker Spaniel',
                'animal_length' => '61-74 cm',
                'animal_tail' => '36-43 cm',
                'animal_weight' => '12-16 kg',
                'average_lifespan' => '12-15 years',
                'comments' => 'originally used in hunting; now primarily a pet or show dog',
                'img_url' => '1.jpg',
            ],

            [
                'animal_family_id' => 1,
                'name' => 'Brittany',
                'animal_length' => '44-52 cm',
                'animal_tail' => '56-66 cm',
                'animal_weight' => '14-20 kg',
                'average_lifespan' => '12-14 years',
                'comments' => 'The Brittany is a gun dog breed named after its origin- Brittany, a province in northwest France.',
                'img_url' => '2.jpg',
            ],

            [
                'animal_family_id' => 1,
                'name' => 'Chesapeake Bay Retrievers',
                'animal_length' => '79-94 cm',
                'animal_tail' => '71-86 cm',
                'animal_weight' => '25-36 kg',
                'average_lifespan' => '10-13 years',
                'comments' => 'Its name comes from its area of development in the Chesapeake Bay in the United States. Market hunters utilized the breed to retrieve waterfowl, to pull fishing nets, and to rescue fishermen.',
                'img_url' => '3.jpg',
            ],
        ]);
    }
}
