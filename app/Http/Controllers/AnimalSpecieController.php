<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecie;
use App\Utilities\Constant;
use Illuminate\Http\Request;


class AnimalSpecieController extends Controller
{
    public $url = Constant::BASE_URL;
    public function getAll()
    {
        $query = AnimalSpecie::all();
        return $query;
    }

    public function getAnimalBreeds(Request $request)
    {
        $animalSpecie = AnimalSpecie::find($request->id);
        if ($animalSpecie) {
            $querys = $animalSpecie->animalBreed;
            // if($querys->isEmpty()){
            // }
            foreach ($querys as $query) {
                $url1 = $query['img_url'];
                $query['img_url'] = $this->url . "/animal_img/breeds_img/" . $url1;
            }
            return $querys;
        }
        return $animalSpecie;
    }

    public function getAnFInfoByName(Request $request)
    {
        $animalSpecieInfo = AnimalSpecie::where('name', $request->animalf_name)->first();
        if ($animalSpecieInfo) {
            $url1 = $animalSpecieInfo['img_url'];
            $animalSpecieInfo['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
            $animalSpecieInfo['is_exist'] = 1;
            return response()->json(
                $animalSpecieInfo,
            );
        } else {
            return response()->json([
                'is_exist' => 0,
            ]);
        }
    }

    public function getPredictInfoByName(Request $request)
    {
        $result = [];
        $otherNames = $request->name;
        if ($otherNames) {
            foreach ($otherNames as $name) {
                $animalSpecieInfo = AnimalSpecie::where('name', $name)->first();
                if ($animalSpecieInfo) {
                    $url1 = $animalSpecieInfo['img_url'];
                    $animalSpecieInfo['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
                    $animalSpecieInfo['is_exist'] = 1;
                } else {
                    $animalSpecieInfo['name'] = $name;
                    $animalSpecieInfo['is_exist'] = 0;
                }
                array_push($result, $animalSpecieInfo);
            }
        }
        return $result;
    }
}
