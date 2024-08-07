<?php

namespace App\Http\Controllers;

use App\Models\AnimalBreed;
use App\Models\AnimalSpecie;
use App\Utilities\Constant;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $url = Constant::BASE_URL;

    public function preparetoSearch(Request $request)
    {
        $result = [];
        // type 1 is specie
        $species = AnimalSpecie::select('id', 'name')->orderBy('name')->get();
        foreach ($species as $specie) {
            $specie['type'] = 1;
            // $url1 = $specie['img_url'];
            // $specie['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
            array_push($result, $specie);
        }

        // type 2 is breed
        $breeds = AnimalBreed::select('id', 'name')->orderBy('name')->get();
        foreach ($breeds as $breed) {
            $breed['type'] = 2;
            // $url1 = $breed['img_url'];
            // $breed['img_url'] = $this->url . "/animal_img/breeds_img/" . $url1;
            array_push($result, $breed);
        }

        return $result;
    }

    public function getSearchDetail(Request $request)
    {
        $type = $request->type;
        $result = [];
        if ($type == 1) {
            $animalSpecieInfo = AnimalSpecie::where('name', $request->name)->first();
            $animalSpecieInfo['img_url'] = $this->getImageUrl($animalSpecieInfo);
            $animalSpecieInfo['is_exist'] = 1;
            return $animalSpecieInfo;
        }

        if ($type == 2) {
            $query =  AnimalBreed::where('name', $request->name)->first();
            $query['img_url'] = $this->getBreedImageUrl($query);
            return $query;
        }

        return $result;
    }

    private function getImageUrl(AnimalSpecie $animalspecie)
    {
        $query_image = $animalspecie->speciesImages()->first();
        if ($query_image) {
            $img_url = $query_image['img_url'];
            $query_image['img_url'] = $this->url . "/animal_img/species_img/" . $img_url;
            return $query_image['img_url'];
        } else
            return null;
    }

    private function getBreedImageUrl(AnimalBreed $animalBreed)
    {
        $query_image = $animalBreed->breedImages()->first();
        if ($query_image) {
            $img_url = $query_image['img_url'];
            $query_image['img_url'] = $this->url . "/animal_img/breeds_img/" . $img_url;
            return $query_image['img_url'];
        } else
            return null;
    }
}
