<?php

namespace App\Http\Controllers;

use App\Models\AnimalFamily;
use App\Models\AnimalType;
use Illuminate\Http\Request;

class AnimalTypeController extends Controller
{
    public function getAll(){
        $query = AnimalType::get('name');
        return $query;
    }

    public function getAnimalFamilyByName(Request $request){
        $query = AnimalType::where('name', $request->animal_name)->first();
        $query_family = $query->animalFamily;
        foreach ($query_family as $family){
            $url = $family['img_url'];
            $family['img_url'] = "animal_img/family_img/".$url;
        }
        return $query_family;
    }
}
