<?php

namespace App\Http\Controllers;

use App\Models\AnimalBreed;
use App\Utilities\Constant;
use ArrayObject;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public $url = Constant::BASE_URL;

    private function getBreedImageUrl(AnimalBreed $animalBreed)
    {
        $query_image = $animalBreed->breedImages()->inRandomOrder()->first();
        if ($query_image) {
            $img_url = $query_image['img_url'];
            $query_image['img_url'] = $this->url . "/animal_img/breeds_img/" . $img_url;
            return $query_image['img_url'];
        } else
            return null;
    }

    public function playGameController()
    {
        $result = [];
        $query = AnimalBreed::groupBy('animal_specie_id')->havingRaw('COUNT(*) >= 2')->inRandomOrder()
            ->limit(3)
            ->get('animal_specie_id');
        foreach ($query as $specie) {
            $query2 = AnimalBreed::where('animal_specie_id', $specie['animal_specie_id'])->inRandomOrder()->limit(2)->get(['id', 'animal_specie_id', 'name']);
            foreach ($query2 as $breed) {
                $breed['img_url'] = $this->getBreedImageUrl($breed);
                $breed['is_clicked'] = boolval(false);
                $breed['is_checked'] = boolval(false);
                array_push($result, $breed);
            }
        }
        return $result;
    }
}
