<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_family')->insert([
            [
                'animal_type_id' => 1,
                'name' => 'Dog',
                'desc' => 'A dog is a domestic mammal of the family Canidae and the order Carnivora. Its scientific name is Canis lupus familiaris. Dogs are a subspecies of the gray wolf, and they are also related to foxes and jackals. Dogs are one of the two most ubiquitous and most popular domestic animals in the world',
                'img_url' => '1.jpg',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Cat',
                'desc' => 'Cat (Felis catus), also called house cat or domestic cat, is a member of the family Felidae in the order Carnivora. It is also the smallest member of that family, which includes lions, tigers, and pumas.',
                'img_url' => '2.jpg',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Mouse',
                'desc' => 'A mouse (pl.: mice) is a small rodent. Characteristically, mice are known to have a pointed snout, small rounded ears, a body-length scaly tail, and a high breeding rate. The best known mouse species is the common house mouse (Mus musculus). Mice are also popular as pets. In some places, certain kinds of field mice are locally common. They are known to invade homes for food and shelter.',
                'img_url' => '3.jpg',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Ducks',
                'desc' => 'Ducks are a group of species of water birds – relatively small in size and with shorter necks than their close cousins of swans and geese',
                'img_url' => '4.jpg',
            ],
        ]);
    }
}
