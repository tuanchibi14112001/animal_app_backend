<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecie;
use App\Models\AnimalType;
use App\Utilities\Constant;
use Illuminate\Http\Request;

class AnimalTypeController extends Controller
{
    public $url = Constant::BASE_URL;

    public function getAll()
    {
        $query = AnimalType::get('name');
        return $query;
    }

    public function getAnimalSpecieByName(Request $request)
    {
        $query = AnimalType::where('name', $request->animal_name)->first();
        if ($query) {
            $query_specie = $query->animalSpecie;
            foreach ($query_specie as $specie) {
                $specie['img_url'] = $this->getImageUrl($specie);
                $specie['video_url'] = $this->getVideoUrl($specie);
                $specie['is_exist'] = 1;
            }
            return $query_specie;
        }
        return $query;
    }

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
}
