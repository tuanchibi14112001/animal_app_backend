<?php

namespace App\Http\Controllers;

use App\Models\AnimalBreed;
use App\Models\AnimalSpecie;
use App\Utilities\Constant;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

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



    public function getAll()
    {
        $query = AnimalSpecie::all();
        return $query;
    }

    public function getAnimalBreeds(Request $request)
    {
        $animalSpecie = AnimalSpecie::find($request->id);
        if ($animalSpecie) {
            $breeds = $animalSpecie->animalBreed;
            // if ($breeds->isEmpty()) {
            //     $breeds['id'] = 0;
            // }
            foreach ($breeds as  $breed) {
                $breed['img_url'] = $this->getBreedImageUrl($breed);
            }
            return $breeds;
        }
        return null;
    }

    public function getAnFInfoByName(Request $request)
    {
        $animalSpecieInfo = AnimalSpecie::where('name', $request->animalf_name)->first();
        if ($animalSpecieInfo) {
            $animalSpecieInfo['img_url'] = $this->getImageUrl($animalSpecieInfo);
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
                $name = ucfirst($name);
                $animalSpecieInfo = AnimalSpecie::where('name', $name)->first();
                if ($animalSpecieInfo) {
                    $animalSpecieInfo['img_url'] = $this->getImageUrl($animalSpecieInfo);
                    $animalSpecieInfo['video_url'] = $this->getVideoUrl($animalSpecieInfo);
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
