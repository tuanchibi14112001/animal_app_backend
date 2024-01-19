<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecies;
use ArrayObject;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public $url = 'http://192.168.1.6:8000';

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
                $query3['is_clicked'] = 0;
                $query3['is_checked'] = 0;
            }

            array_push($result,$query2);
        }
        return $result;
    }
}
