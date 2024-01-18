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
            [
                'animal_family_id' => 2,
                'name' => 'Abyssinian Cat',
                'animal_length' => '30-41 cm',
                'animal_tail' => '20-25 cm',
                'animal_weight' => '3-4 kg',
                'average_lifespan' => '9-15 years',
                'comments' => 'Some call Abys “Cats from the Blue Nile”, believing they’re the sacred cat of Egyptian Pharaohs.',
                'img_url' => '4.jpg',
            ],
            [
                'animal_family_id' => 2,
                'name' => 'American Bobtail Cat',
                'animal_length' => '43-48 cm',
                'animal_tail' => '23-25 cm',
                'animal_weight' => '3.2-8.2 kg',
                'average_lifespan' => '13-15 years',
                'comments' => 'The American Bobtail has a naturally short bobtail that can be seen clearly above the back when she is alert. No tail is exactly the same, but the average length is 1 to 4 inches.',
                'img_url' => '5.jpg',
            ],
            [
                'animal_family_id' => 3,
                'name' => 'White-Footed Mouse',
                'animal_length' => '150 - 205 mm',
                'animal_tail' => '65 - 95 mm',
                'animal_weight' => '15 - 25 g',
                'average_lifespan' => '45.5 months ',
                'comments' => 'They have good eyesight, hearing, and sense of smell, and they use their whiskers to touch the world around them.',
                'img_url' => '6.jpg',
            ],
            [
                'animal_family_id' => 3,
                'name' => 'Deer Mouse',
                'animal_length' => '119 - 222 mm',
                'animal_tail' => '45 - 105 mm',
                'animal_weight' => '10 - 24 g',
                'average_lifespan' => '47.5 months ',
                'comments' => 'Deer mice have round and slender bodies. The head has a pointed nose with large, black, beady eyes. The ears are large and have little fur covering them',
                'img_url' => '7.jpg',
            ],
        ]);
    }
}
