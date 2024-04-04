<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecies;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public $url = 'http://192.168.1.6:8000';

    // Generate random quiz controller
    public function gRandomQuizController()
    {
        $result = [];

        // Question with pictures
        $query = AnimalSpecies::inRandomOrder()->limit(5)->get(['animal_family_id', 'id', 'name as correctAnswer', 'img_url']);
        foreach ($query as $imgQuiz) {
            $answers = [];
            $url1 = $imgQuiz['img_url'];
            $imgQuiz['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
            $query1 = AnimalSpecies::where('id', '!=', $imgQuiz['id'])->inRandomOrder()->limit(3)->get('name');
            foreach($query1 as $animal){
                array_push($answers, $animal['name']);
            }
            array_push($answers, $imgQuiz['correctAnswer']);
            shuffle($answers);
            $imgQuiz['answers'] = $answers;
            $imgQuiz['score'] = 10;
            $imgQuiz['clickedAnswer'] = '';
            array_push($result, $imgQuiz);
        }
        //data_forget($query, '*.animal_family_id');
        return $result;
    }
}
