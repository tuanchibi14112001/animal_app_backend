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

        // Questions 1
        $query = AnimalSpecies::inRandomOrder()->limit(5)->get(['animal_family_id', 'id', 'name', 'img_url']);
        foreach ($query as $imgQuiz) {
            $answers = [];
            $url1 = $imgQuiz['img_url'];
            $imgQuiz['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
            $imgQuiz['correctAnswer'] = $imgQuiz['name'];
            $query1 = AnimalSpecies::where('id', '!=', $imgQuiz['id'])->inRandomOrder()->limit(3)->get('name');
            foreach ($query1 as $animal) {
                array_push($answers, $animal['name']);
            }
            array_push($answers, $imgQuiz['correctAnswer']);
            shuffle($answers);
            $imgQuiz['answers'] = $answers;
            $imgQuiz['score'] = 10;
            $imgQuiz['clickedAnswer'] = '';
            $imgQuiz['type'] = 1;
            array_push($result, $imgQuiz);
        }
        //data_forget($query, '*.animal_family_id');

        // Questions 2
        $queryTextQuestion = AnimalSpecies::inRandomOrder()->limit(5)->get(['animal_family_id', 'id', 'name', 'img_url']);
        foreach ($queryTextQuestion as $txtQuiz) {
            $answers = [];
            $url1 = $txtQuiz['img_url'];
            $txtQuiz['img_url'] = $this->url . "/animal_img/species_img/" . $url1;
            $txtQuiz['correctAnswer'] = $txtQuiz['img_url'];
            $query1 = AnimalSpecies::where('id', '!=', $txtQuiz['id'])->inRandomOrder()->limit(3)->get('img_url');
            foreach ($query1 as $animal) {
                $url2 = $animal['img_url'];
                $animal['img_url'] = $this->url . "/animal_img/species_img/" . $url2;
                array_push($answers, $animal['img_url']);
            }
            array_push($answers, $txtQuiz['correctAnswer']);
            shuffle($answers);
            $txtQuiz['answers'] = $answers;
            $txtQuiz['score'] = 10;
            $txtQuiz['clickedAnswer'] = '';
            $txtQuiz['type'] = 2;
            array_push($result, $txtQuiz);
        }

        return $result;
    }
}
