<?php

namespace App\Http\Controllers;

use App\Models\AnimalBreed;
use App\Utilities\Constant;
use Illuminate\Http\Request;

class AnimalBreedsController extends Controller
{
    public $url = Constant::BASE_URL;
    public function getAll(){
        $qurey = AnimalBreed::all();
        return $qurey;
    }
    public function getAnimalById(Request $request){
        $query =  AnimalBreed::find($request->id);
            $url1 = $query['img_url'];
            $query['img_url'] = $this->url . "/animal_img/breeds_img/" . $url1;
        return $query;
    }
}
