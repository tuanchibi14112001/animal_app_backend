<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_species')->insert([
            [
                'animal_type_id' => 1,
                'name' => 'Dog',
                'desc' => 'A dog is a domestic mammal of the family Canidae and the order Carnivora. Its scientific name is Canis lupus familiaris. Dogs are a subspecies of the gray wolf, and they are also related to foxes and jackals. Dogs are one of the two most ubiquitous and most popular domestic animals in the world',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Cat',
                'desc' => 'Cat (Felis catus), also called house cat or domestic cat, is a member of the family Felidae in the order Carnivora. It is also the smallest member of that family, which includes lions, tigers, and pumas.',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Mouse',
                'desc' => 'A mouse (pl.: mice) is a small rodent. Characteristically, mice are known to have a pointed snout, small rounded ears, a body-length scaly tail, and a high breeding rate. The best known mouse species is the common house mouse (Mus musculus). Mice are also popular as pets. In some places, certain kinds of field mice are locally common. They are known to invade homes for food and shelter.',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Duck',
                'desc' => 'Duck are a group of species of water birds - relatively small in size and with shorter necks than their close cousins of swans and geese',
            ],
            [
                'animal_type_id' => 3,
                'name' => 'Elasmobranchii',
                'desc' => 'Members of this subclass are characterised by having five to seven pairs of gill clefts opening individually to the exterior, rigid dorsal fins and small placoid scales on the skin.',
            ],
            [
                'animal_type_id' => 4,
                'name' => 'Crocodylidae',
                'desc' => 'Crocodiles (family Crocodylidae) or true crocodiles are large semiaquatic reptiles that live throughout the tropics in Africa, Asia, the Americas and Australia.',
            ],
            [
                'animal_type_id' => 5,
                'name' => 'Alytidae',
                'desc' => 'The Alytidae are a family of primitive frogs. Their common name is painted frogs or midwife toads',
            ],
            [
                'animal_type_id' => 6,
                'name' => 'Crab',
                'desc' => 'Crabs are decapod crustaceans of the infraorder Brachyura, which typically have a very short projecting "tail" (abdomen), usually hidden entirely under the thorax (brachyura means "short tail" in Greek)',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Leopard',
                'desc' => 'The leopard (Panthera pardus) is one of the five extant species in the genus Panthera. It has a pale yellowish to dark golden fur with dark spots grouped in rosettes.',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Lion',
                'desc' => 'Lion (Panthera leo) is a species. It belongs to the family Felidae (the cat family) and is one of the big cat species within the genus Panthera. Other members of this genus include the tiger (Panthera tigris), leopard (Panthera pardus), and jaguar (Panthera onca).',
            ],
            [
                'animal_type_id' => 1,
                'name' => 'Tiger',
                'desc' => 'The tiger (Panthera tigris) is a member of the genus Panthera and the largest living cat species native to Asia. It has a powerful, muscular body with a large head and paws, a long tail and orange fur with black, mostly vertical stripes.',
            ],
            [
                'animal_type_id' => 1, 
                'name' => 'Wolf',
                'desc' => "The wolf (Canis lupus), also known as the gray wolf or grey wolf, is a large canine native to Eurasia and North America. The wolf's fur is usually mottled white, brown, gray, and black, although subspecies in the arctic region may be nearly all white.",
            ],
            [
                'animal_type_id' => 1, 
                'name' => 'Raccoon',
                'desc' => "The raccoon (Procyon lotor), also spelled racoon and sometimes called the common raccoon or northern raccoon to distinguish it from the other species, is a mammal native to North America.",
            ],
            [
                'animal_type_id' => 1, 
                'name' => 'Pig',
                'desc' => "The domestic pig is scientifically known as Sus scrofa domesticus. It is a subspecies of the wild boar (Sus scrofa). Therefore, domestic pigs and wild boars are part of the same species, but domestic pigs are specifically bred and raised by humans.",
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Goose',
                'desc' => 'A goose (pl.: geese) is a bird of any of several waterfowl species in the family Anatidae. This group comprises the genera Anser (grey geese and white geese) and Branta (black geese).',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Eagle',
                'desc' => 'Eagle is the common name for the golden eagle, bald eagle, and other birds of prey in the family Accipitridae. Most of the 68 species of eagles are from Eurasia and Africa.',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Parrot',
                'desc' => 'Parrots are highly intelligent birds known for their vibrant plumage and ability to mimic human speech and other sounds. They belong to the order Psittaciformes and are found in tropical and subtropical regions around the world.',
            ],
        ]);
    }
}
