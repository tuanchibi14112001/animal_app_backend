<?php

namespace App\Http\Controllers;

use App\Models\AnimalFamily;
use App\Utilities\Constant;
use Illuminate\Http\Request;


class AnimalFamilyController extends Controller
{
    public $url = Constant::BASE_URL;
    public function getAll()
    {
        $query = AnimalFamily::all();
        return $query;
    }

    public function getAnimalBreeds(Request $request)
    {
        $animalFamily = AnimalFamily::find($request->id);
        if ($animalFamily) {
            $querys = $animalFamily->animalSpecies;
            // if($querys->isEmpty()){
            // }
            foreach ($querys as $query) {
                $url1 = $query['img_url'];
                $query['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
            }
            return $querys;
        }
        return $animalFamily;
    }

    public function getAnFInfoByName(Request $request)
    { 
        $animalFamilyInfo = AnimalFamily::where('name', $request->animalf_name)->first();
        if($animalFamilyInfo){
            $url1 = $animalFamilyInfo['img_url'];
            $animalFamilyInfo['img_url'] = $this->url . "/animal_img/family_img/" . $url1;
            $animalFamilyInfo['is_exist'] = 1;
            return response()->json(
                $animalFamilyInfo,
            );
        }
        else{
            return response()->json([
                'is_exist' => 0,
            ]);
        }
    }

    public function getPredictInfoByName(Request $request){
        $result = [];
        $predictName = $request->predicted_result;
        $otherNames = $request->other_results;

        $predictAnimalInfo = $this->getAnFInfoByName($predictName);


        return $predictAnimalInfo;


    }

}
