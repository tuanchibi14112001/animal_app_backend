<?php

namespace App\Http\Controllers;

use App\Models\AnimalBreed;
use App\Utilities\Constant;
use Illuminate\Http\Request;

class AnimalBreedsController extends Controller
{
    public $url = Constant::BASE_URL;
    public function getAll()
    {
        $qurey = AnimalBreed::all();
        return $qurey;
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

    public function getAnimalById(Request $request)
    {
        $query =  AnimalBreed::find($request->id);
        $query['img_url'] = $this->getBreedImageUrl($query);
        if ($request->user()) {
            $userFavouriteList = $request->user()->favouriteBreed()->pluck('animal_breed_id')->toArray();
            $query['is_liked'] = in_array($query['id'], $userFavouriteList);
        } else {
            $query['is_liked'] = false;
        }
        return $query;
    }
}
