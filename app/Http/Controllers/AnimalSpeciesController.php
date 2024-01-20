<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecies;
use Illuminate\Http\Request;

class AnimalSpeciesController extends Controller
{
    public $url = 'http://192.168.1.6:8000';
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
