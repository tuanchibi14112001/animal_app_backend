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
                'name' => 'Shark',
                'desc' => 'Sharks are a group of elasmobranch fish characterized by a cartilaginous skeleton, five to seven gill slits on the sides of the head, and pectoral fins that are not fused to the head.',
            ],
            [
                'animal_type_id' => 4,
                'name' => 'Crocodile',
                'desc' => 'Crocodiles are large aquatic reptiles that live throughout the tropics in Africa, Asia, the Americas, and Australia. They have a streamlined body, powerful jaws, and a long, muscular tail. Known for their stealth and strength, crocodiles inhabit freshwater habitats like rivers, lakes, and wetlands.',
            ],
            [
                'animal_type_id' => 5,
                'name' => 'Frog',
                'desc' => 'Frogs are amphibians belonging to the order Anura. They are characterized by their short bodies, long hind legs adapted for jumping, and smooth or warty skin. Frogs undergo metamorphosis from tadpoles (aquatic larvae) to adults with lungs for breathing air. They are found in diverse habitats worldwide, from tropical rainforests to deserts and even urban areas. They are known for their diverse reproductive strategies, including external fertilization of eggs laid in water.',
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
            [
                'animal_type_id' => 2,
                'name' => 'Crow',
                'desc' => 'Crow are highly intelligent, adaptable birds belonging to the Corvidae family. Known for their glossy black plumage and raucous calls, they thrive in a variety of habitats worldwide, from forests to urban areas.',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Hornbill',
                'desc' => 'Hornbill are birds found in tropical and subtropical Africa, Asia and Melanesia of the family Bucerotidae. They are characterized by a long, down-curved bill which is frequently brightly coloured and sometimes has a horny casque on the upper mandible.',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Penguin',
                'desc' => 'Penguins are a group of aquatic flightless birds from the family Spheniscidae of the order Sphenisciformes. They live almost exclusively in the Southern Hemisphere.',
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Pigeon',
                'desc' => "The domestic pigeon (Columba livia f. domestica) was derived from the Rock Pigeon. The Rock pigeon is the world's oldest domesticated bird. Mesopotamian cuneiform tablets mention the domestication of pigeons more than 5,000 years ago, as do Egyptian hieroglyphics." ,
            ],
            [
                'animal_type_id' => 2,
                'name' => 'Swan',
                'desc' => "Swans are birds of the genus Cygnus within the family Anatidae. Swans are the largest extant members of the waterfowl family Anatidae and are among the largest flying birds." ,
            ],

            [
                'animal_type_id' => 1,
                'name' => 'Dolphin',
                'desc' => "A dolphin is an aquatic mammal in the clade Odontoceti (toothed whale).  Known for their playful behavior and complex communication skills, dolphins use echolocation to navigate and hunt." ,
            ],

            [
                'animal_type_id' => 3,
                'name' => 'Goldfish',
                'desc' => "The goldfish (Carassius auratus) is a freshwater fish in the family Cyprinidae of order Cypriniformes. It is commonly kept as a pet in indoor aquariums, and is one of the most popular aquarium fish." ,
            ],

            [
                'animal_type_id' => 3,
                'name' => 'Seahorse',
                'desc' => "A seahorse (also written sea-horse and sea horse) is any of 46 species of small marine bony fish in the genus Hippocampus. Seahorses are mainly found in shallow tropical and temperate salt water throughout the world, from about 45°S to 45°N." ,
            ],

            [
                'animal_type_id' => 3,
                'name' => 'Carp',
                'desc' => "The carp is a hardy greenish brown fish. It is native to Eurasia but has been introduced into North America and elsewhere. A large-scaled fish with two barbels on each side of its upper jaw, the carp lives alone or in small schools in quiet weedy mud-bottomed ponds, lakes, and rivers." ,
            ],

            [
                'animal_type_id' => 3,
                'name' => 'Clownfish',
                'desc' => "The clownfish is a brightly colored fish with distinctive white bands across its orange body. It inhabits warm waters of the Indian and Pacific Oceans, including the Great Barrier Reef and the Red Sea. Known for its symbiotic relationship with sea anemones, the clownfish is immune to the stings of these predators, finding protection among their tentacles.",
            ],

            [
                'animal_type_id' => 3,
                'name' => 'Tuna',
                'desc' => "The tuna is a fast-swimming, streamlined fish with a metallic blue back and silvery belly. It is native to both temperate and tropical waters of the world's oceans. A highly migratory species, the tuna travels in large schools and is known for its long-distance migrations. It is a prized species for commercial fishing due to its high-quality meat.",
            ],

            [
                'animal_type_id' => 3,
                'name' => 'Catfish',
                'desc' => "Catfish are a diverse group of ray-finned fish named for their prominent barbels, which resemble a cat's whiskers. They inhabit freshwater and coastal regions around the world. Known for their scaleless bodies and variety of sizes, catfish species can be found in rivers, lakes, and ponds, often thriving in murky or muddy waters.",
            ],

            [
                'animal_type_id' => 4,
                'name' => 'Turtle',
                'desc' => 'Turtles are reptiles characterized by a bony or cartilaginous shell developed from their ribs, acting as a shield. They are found in a variety of habitats, including oceans, rivers, lakes, and forests. Turtles are known for their longevity, slow movements, and unique ability to retract their heads and limbs into their shells for protection.',
            ],

            [
                'animal_type_id' => 4,
                'name' => 'Lizard',
                'desc' => 'Lizards are a widespread group of reptiles characterized by their elongated bodies, scaly skin, and typically four legs (although some species are legless). They vary greatly in size, color, and habitat, ranging from tiny geckos that can fit on a fingertip to large monitor lizards that can exceed 6 feet in length. Lizards are found on every continent except Antarctica and inhabit diverse environments, from deserts and rainforests to mountains and urban areas. They are ectothermic, relying on external sources of heat to regulate their body temperature, and are known for their ability to regenerate lost tails.',
            ],

            [
                'animal_type_id' => 4,
                'name' => 'Snake',
                'desc' => 'Snakes are elongated, legless reptiles belonging to the suborder Serpentes. They are characterized by their flexible bodies covered in scales, lack of eyelids, and ability to swallow prey whole. Snakes are found on every continent except Antarctica and inhabit a wide range of environments, from forests and grasslands to deserts and oceans. They use their highly specialized jaws to swallow prey much larger than their own heads and can dislocate their jaws for this purpose. Most snakes are carnivorous, feeding primarily on rodents, birds, insects, and other small animals.',
            ],

            [
                'animal_type_id' => 5,
                'name' => 'Toad',
                'desc' => 'Toads are a type of amphibian belonging to the family Bufonidae within the order Anura. They are characterized by dry, warty skin, short legs, and often a more squat body compared to frogs. Toads are generally terrestrial and can be found in a variety of habitats, from forests and grasslands to gardens and urban areas. They have glands behind their eyes that secrete toxins as a defense mechanism against predators. Toads feed on insects and other small invertebrates and play important roles in controlling pest populations.',
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Bee',
                'desc' => 'Bees are flying insects closely related to wasps and ants, known for their role in pollination and producing honey. They have specialized body structures such as pollen baskets on their hind legs and a stinger for defense. Bees live in colonies organized around a queen bee, workers, and drones. They play a crucial role in ecosystems by pollinating flowering plants, which is essential for agricultural crops and natural biodiversity.',
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Butterfly',
                'desc' => 'Butterflies are insects belonging to the order Lepidoptera. They are known for their colorful wings adorned with intricate patterns and scales. Butterflies undergo a complete metamorphosis from egg to larva (caterpillar) to pupa (chrysalis) and finally to adult butterfly. They have a proboscis, a long, coiled tube used for feeding on nectar from flowers. Butterflies are found in diverse habitats worldwide, from tropical rainforests to temperate meadows and gardens.'
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Cockroach',
                'desc' => 'Cockroaches are insects belonging to the order Blattodea. They are characterized by their flat bodies, long antennae, and rapid scurrying movements. Cockroaches are omnivorous scavengers and can be found in diverse habitats worldwide, from tropical forests to urban environments. They are known for their resilience and ability to survive in harsh conditions. Cockroaches play roles in ecosystems as decomposers, breaking down organic matter, although they are often considered pests in human environments due to their association with unsanitary conditions.',
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Mosquito',
                'desc' => 'Mosquitoes are small flying insects belonging to the family Culicidae. They are known for their slender bodies, long legs, and elongated mouthparts (proboscis) used for feeding on the blood of animals, including humans. Only female mosquitoes feed on blood, which they require for egg development. Mosquitoes are found in various habitats worldwide, particularly in areas with standing water where their larvae develop. They are vectors for several diseases, including malaria, dengue fever, Zika virus, and West Nile virus, making them significant pests and health concerns in many regions.',
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Spider',
                'desc' => 'Spiders are arachnids belonging to the order Araneae. They are characterized by their eight legs, ability to produce silk, and usually have fangs that inject venom into their prey. Spiders are found worldwide in almost every habitat, including terrestrial, arboreal, and aquatic environments. They are known for their diverse hunting strategies, including webs, ambush tactics, and actively hunting prey.',
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Lobster',
                'desc' => 'Lobsters are crustaceans belonging to the family Nephropidae. They have long bodies covered with a hard exoskeleton, ten legs, and claws used for feeding and defense. Lobsters inhabit marine environments, typically living on rocky or sandy bottoms. They are omnivorous scavengers, feeding on a variety of marine organisms and detritus.',
            ],

            [
                'animal_type_id' => 6,
                'name' => 'Grasshopper',
                'desc' => 'Grasshoppers are insects belonging to the suborder Caelifera. They are known for their powerful hind legs adapted for jumping, typically long antennae, and chewing mouthparts. Grasshoppers are herbivorous, feeding on grasses, leaves, and other vegetation. They are found in grasslands, meadows, and agricultural fields worldwide. Grasshoppers play roles in ecosystems as prey for birds and other predators and can be significant agricultural pests in large numbers.',
            ],
        ]);
    }
}
