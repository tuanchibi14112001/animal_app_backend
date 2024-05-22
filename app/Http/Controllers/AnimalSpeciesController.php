<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecies;
use App\Utilities\Constant;
use Illuminate\Http\Request;

class AnimalSpeciesController extends Controller
{
    public $url = Constant::BASE_URL;
    public function getAll(){
        $qurey = AnimalSpecies::all();
        return $qurey;
    }
    public function getAnimalById(Request $request){
        $query =  AnimalSpecies::find($request->id);
            $url1 = $query['img_url'];
            $query['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
        return $query;
    }
}
