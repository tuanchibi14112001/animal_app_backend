<?php

namespace App\Http\Controllers;

use App\Models\AnimalFamily;
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

    public function getAnimalFamilyByName(Request $request)
    {
        $query = AnimalType::where('name', $request->animal_name)->first();
        if ($query) {
            $query_family = $query->animalFamily;
            foreach ($query_family as $family) {
                $url1 = $family['img_url'];
                $family['img_url'] = $this->url . "/animal_img/family_img/" . $url1;
            }
            return $query_family;
        }
        return $query;
    }
}
