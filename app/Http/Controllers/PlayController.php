<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecies;
use App\Utilities\Constant;
use ArrayObject;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public $url = Constant::BASE_URL;

    public function playGameController()
    {
        $query = AnimalSpecies::groupBy('animal_family_id')->havingRaw('COUNT(*) >= 2')->inRandomOrder()
            ->limit(3)
            ->get('animal_family_id');
        $result = [];
        foreach ($query as $family) {
            $query2 = AnimalSpecies::where('animal_family_id', $family['animal_family_id'])->inRandomOrder()->limit(2)->get(['id','animal_family_id', 'name', 'img_url']);
            foreach ($query2 as $query3){
                $url1 = $query3['img_url'];
                $query3['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
                $query3['is_clicked'] = boolval(false);
                $query3['is_checked'] = boolval(false);
                array_push($result,$query3);
            }
           
        }
        return $result;
    }
}
