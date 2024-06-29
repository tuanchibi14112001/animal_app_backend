<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecie;
use App\Utilities\Constant;
use Illuminate\Http\Request;


class AnimalSpecieController extends Controller
{
    public $url = Constant::BASE_URL;

    private function getVideoUrl(AnimalSpecie $animalspecie)
    {
        $query_video = $animalspecie->speciesVideos()->first();
        if ($query_video) {
            $video_url = $query_video['video_url'];
            $query_video['video_url'] = $this->url . "/animal_video/species_video/" . $video_url;
            return $query_video['video_url'];
        } else
            return null;
    }

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
            $animalSpecieInfo['video_url'] = $this->getVideoUrl($animalSpecieInfo);

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
        $animalNames = $request->name;
        if ($animalNames) {
            foreach ($animalNames as $name) {
                $animalSpecieInfo = AnimalSpecie::where('name', $name)->first();
                if ($animalSpecieInfo) {
                    $url1 = $animalSpecieInfo['img_url'];
                    $animalSpecieInfo['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
                    $animalSpecieInfo['is_exist'] = 1;
                    $animalSpecieInfo['video_url'] = $this->getVideoUrl($animalSpecieInfo);
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
