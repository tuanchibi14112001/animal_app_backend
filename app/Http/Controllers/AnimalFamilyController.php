<?php

namespace App\Http\Controllers;

use App\Models\AnimalFamily;
use App\Utilities\Constant;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

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
}
