<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_breeds')->insert([
            [
                'animal_specie_id' => 1,
                'name' => 'American Cocker Spaniel',
                'animal_length' => '61-74 cm',
                'animal_tail' => '36-43 cm',
                'animal_weight' => '12-16 kg',
                'average_lifespan' => '12-15 years',
                'comments' => 'originally used in hunting; now primarily a pet or show dog',
            ],

            [
                'animal_specie_id' => 1,
                'name' => 'Brittany',
                'animal_length' => '44-52 cm',
                'animal_tail' => '56-66 cm',
                'animal_weight' => '14-20 kg',
                'average_lifespan' => '12-14 years',
                'comments' => 'The Brittany is a gun dog breed named after its origin- Brittany, a province in northwest France.',
            ],

            [
                'animal_specie_id' => 1,
                'name' => 'Chesapeake Bay Retrievers',
                'animal_length' => '79-94 cm',
                'animal_tail' => '71-86 cm',
                'animal_weight' => '25-36 kg',
                'average_lifespan' => '10-13 years',
                'comments' => 'Its name comes from its area of development in the Chesapeake Bay in the United States. Market hunters utilized the breed to retrieve waterfowl, to pull fishing nets, and to rescue fishermen.',
            ],
            [
                'animal_specie_id' => 2,
                'name' => 'Abyssinian Cat',
                'animal_length' => '30-41 cm',
                'animal_tail' => '20-25 cm',
                'animal_weight' => '3-4 kg',
                'average_lifespan' => '9-15 years',
                'comments' => 'Some call Abys “Cats from the Blue Nile”, believing they’re the sacred cat of Egyptian Pharaohs.',
            ],
            [
                'animal_specie_id' => 2,
                'name' => 'American Bobtail Cat',
                'animal_length' => '43-48 cm',
                'animal_tail' => '23-25 cm',
                'animal_weight' => '3.2-8.2 kg',
                'average_lifespan' => '13-15 years',
                'comments' => 'The American Bobtail has a naturally short bobtail that can be seen clearly above the back when she is alert. No tail is exactly the same, but the average length is 1 to 4 inches.',
            ],
            [
                'animal_specie_id' => 3,
                'name' => 'White-Footed Mouse',
                'animal_length' => '150 - 205 mm',
                'animal_tail' => '65 - 95 mm',
                'animal_weight' => '15 - 25 g',
                'average_lifespan' => '45.5 months ',
                'comments' => 'They have good eyesight, hearing, and sense of smell, and they use their whiskers to touch the world around them.',
            ],
            [
                'animal_specie_id' => 3,
                'name' => 'Deer Mouse',
                'animal_length' => '119 - 222 mm',
                'animal_tail' => '45 - 105 mm',
                'animal_weight' => '10 - 24 g',
                'average_lifespan' => '47.5 months ',
                'comments' => 'Deer mice have round and slender bodies. The head has a pointed nose with large, black, beady eyes. The ears are large and have little fur covering them',
            ],
            [
                'animal_specie_id' => 4,
                'name' => 'Abacot Ranger',
                'animal_length' => '56 to 71 cm',
                'animal_tail' => '20-24 cm',
                'animal_weight' => '2.5 - 3 kg',
                'average_lifespan' => '3 - 4 years',
                'comments' => 'During the 1922 egg-laying trials at Wye College, using 4 ducks, they achieved an average of 233.75 eggs per duck and came first!',
            ],
            [
                'animal_specie_id' => 4,
                'name' => 'Aylesbury',
                'animal_length' => '30 to 40 cm',
                'animal_tail' => '16 - 20 cm',
                'animal_weight' => '3 - 4 kg',
                'average_lifespan' => '2.5 - 4 years',
                'comments' => 'During the 1922 egg-laying trials at Wye College, using 4 ducks, they achieved an average of 233.75 eggs per duck and came first!',
            ],
            [
                'animal_specie_id' => 5,
                'name' => 'Cow shark',
                'animal_length' => '309 - 330 cm ',
                'animal_tail' => '50 - 55 cm',
                'animal_weight' => '590 kg',
                'average_lifespan' => '50 - 70 years',
                'comments' => 'The bluntnose sixgill shark has a heavy, powerful body with a broad head and small florescent green-blue eyes. They range in color from brown to tan to black, with darker colored spots on the sides.',
            ],
            [
                'animal_specie_id' => 5,
                'name' => 'Great white',
                'animal_length' => '4.6 to 4.9 m ',
                'animal_tail' => '1.2 m',
                'animal_weight' => '680 - 1.100 kg',
                'average_lifespan' => '70 years',
                'comments' => 'Adult great white sharks grow to a maximum size of approximately 20 feet in length, weigh up to 6,600 pounds, and are estimated to live for 30 years. ',
            ],
            [
                'animal_specie_id' => 6,
                'name' => 'American crocodile',
                'animal_length' => ' 2.9 - 4.1 m',
                'animal_tail' => '53 - 82 cm',
                'animal_weight' => ' 400 kg ',
                'average_lifespan' => '50 - 60 years',
                'comments' => 'American crocodiles (Crocodylus acutus) are a shy and reclusive species. They live in coastal areas throughout the Caribbean, and occur at the northern end of their range in south Florida',
            ],
            [
                'animal_specie_id' => 6,
                'name' => 'Freshwater crocodile',
                'animal_length' => ' 2.9 - 4.1 m',
                'animal_tail' => '53 - 82 cm',
                'animal_weight' => ' 40 - 100 kg ',
                'average_lifespan' => '50 - 60 years',
                'comments' => 'Freshwater crocodiles are a protected species and play an important role in balancing the ecosystem',
            ],
            [
                'animal_specie_id' => 7,
                'name' => 'Iberian midwife toad',
                'animal_length' => '  40 mm ',
                'animal_tail' => '5 - 8.3 cm',
                'animal_weight' => ' 2 - 14 g ',
                'average_lifespan' => '10 - 15 years',
                'comments' => 'Tiny, often orange, warts occur on the upper eyelids. The parotoid glands are relatively small and the tympani are distinct.',
            ],
            [
                'animal_specie_id' => 7,
                'name' => 'Hula painted frog',
                'animal_length' => '  40 mm ',
                'animal_tail' => '5 - 8.3 cm',
                'animal_weight' => ' 2 - 14 g ',
                'average_lifespan' => '10 - 15 years',
                'comments' => 'The Hula painted frog was thought to be extinct as a result of habitat destruction during the 1950s until the species was rediscovered in 2011.',
            ],
            [
                'animal_specie_id' => 8,
                'name' => 'Dromia personata',
                'animal_length' => '  10.2 cm ',
                'animal_tail' => '4.6 - 8 cm',
                'animal_weight' => ' 0.45 - 0.9 kg ',
                'average_lifespan' => '3 - 5 years',
                'comments' => 'Dromia personata, also known as the sponge crab or sleepy crab, is a species of crab found in the North Sea, the Mediterranean Sea, and connecting parts of the northeastern Atlantic Ocean.',
            ],
            [
                'animal_specie_id' => 8,
                'name' => 'King crabs',
                'animal_length' => '13 - 25.3 cm ',
                'animal_tail' => '9.8 - 16.4 cm',
                'animal_weight' => ' 10.9 - 12.7 kg',
                'average_lifespan' => '20 - 30 years',
                'comments' => 'Males grow faster and larger than females. Female red king crabs reproduce once a year and release between 50,000 and 500,000 eggs.',
            ],

            [
                'animal_specie_id' => 17,
                'name' => 'Scarlet Macaw',
                'animal_length' => '81 - 96 cm',
                'animal_tail' => '31 - 36 cm',
                'animal_weight' => '0.9 - 1.5 kg',
                'average_lifespan' => '40 - 50 years',
                'comments' => 'Scarlet Macaws are known for their vibrant plumage and strong beaks. They are highly social and can mimic human speech. They lay 2-4 eggs per clutch and the incubation period is about 24-26 days.',
            ],

            [
                'animal_specie_id' => 17,
                'name' => 'Sun Conure',
                'animal_length' => '30 cm',
                'animal_tail' => '12 - 15 cm',
                'animal_weight' => '110 - 120 g',
                'average_lifespan' => '20 - 30 years',
                'comments' => 'Sun Conures are known for their bright yellow, orange, and green plumage. They are very social and can be quite loud. They typically lay 3-5 eggs per clutch, with an incubation period of about 23-27 days.',
            ],

            [
                'animal_specie_id' => 21,
                'name' => 'Ice Pigeon',
                'animal_length' => '32 - 37 cm',
                'animal_tail' => '10 - 12 cm',
                'animal_weight' => '250 - 300 g',
                'average_lifespan' => '5 - 10 years',
                'comments' => 'Ice Pigeons are known for their distinctive white or pale plumage with dark wing markings. They are a domesticated breed that originated in Germany and are popular among pigeon fanciers for their unique appearance and calm temperament.',
            ],

            [
                'animal_specie_id' => 21,
                'name' => 'Oriental Roller',
                'animal_length' => '30 - 34 cm',
                'animal_tail' => '10 - 12 cm',
                'animal_weight' => '200 - 300 g',
                'average_lifespan' => '5 - 10 years',
                'comments' => 'Oriental Rollers are a breed of domesticated pigeon known for their acrobatic flight patterns, which include rolling and tumbling in the air. They are popular in pigeon flying competitions and are valued for their unique flying abilities and varied plumage colors.',
            ],

            [
                'animal_specie_id' => 25,
                'name' => 'Dwarf Seahorse',
                'animal_length' => '2.5 - 3.5 cm',
                'animal_tail' => 'N/A',
                'animal_weight' => 'Less than 1 g',
                'average_lifespan' => '1 - 2 years',
                'comments' => 'Dwarf seahorses are one of the smallest seahorse species, found in shallow waters and seagrass beds in the Gulf of Mexico, the Caribbean, and parts of South America. They are known for their tiny size, slow movement, and ability to anchor themselves to seagrass using their prehensile tails. Dwarf seahorses are often kept in home aquariums due to their diminutive size and interesting behaviors.',
            ],
            [
                'animal_specie_id' => 25,
                'name' => 'Spiny Seahorse',
                'animal_length' => '12 - 18 cm',
                'animal_tail' => 'N/A',
                'animal_weight' => '10 - 30 g',
                'average_lifespan' => '3 - 5 years',
                'comments' => 'Spiny seahorses are characterized by their spiny appearance and can be found in coastal waters throughout the Mediterranean Sea and parts of the Atlantic Ocean. They have a distinctive upright posture and are capable of changing color to blend in with their surroundings. Spiny seahorses are threatened by habitat loss and are protected under various conservation measures.',
            ],

            [
                'animal_specie_id' => 24,
                'name' => 'Black Moor',
                'animal_length' => '12 - 15 cm',
                'animal_tail' => '5 - 6 cm',
                'animal_weight' => '25 - 50 g',
                'average_lifespan' => '10 - 15 years',
                'comments' => 'Black Moor goldfish are a variety of fancy goldfish known for their distinctive deep-black coloration and protruding eyes. They are popular in aquariums due to their unique appearance and calm temperament. Black Moors are omnivorous and require a well-maintained tank with adequate filtration and a varied diet.',
            ],

            [
                'animal_specie_id' => 24,
                'name' => 'Bubble Eye',
                'animal_length' => '12 - 18 cm',
                'animal_tail' => '7 - 10 cm',
                'animal_weight' => '20 - 30 g',
                'average_lifespan' => '10 - 15 years',
                'comments' => 'Bubble Eye goldfish are known for their unique characteristic of having large fluid-filled sacs under their eyes. These sacs are delicate and can be easily damaged, so care must be taken to ensure they are kept in a safe environment. Bubble Eyes are peaceful and should be housed with other gentle fish to avoid injuries.',
            ],
        ]);
    }
}
