<?php

namespace App\Http\Controllers;

use App\Models\AnimalBreed;
use App\Utilities\Constant;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public $url = Constant::BASE_URL;

    private function getBreedImageUrl(AnimalBreed $animalBreed)
    {
        $query_image = $animalBreed->breedImages()->first();
        if ($query_image) {
            $img_url = $query_image['img_url'];
            $query_image['img_url'] = $this->url . "/animal_img/breeds_img/" . $img_url;
            return $query_image['img_url'];
        } else
            return null;
    }

    // Generate random quiz controller
    public function gRandomQuizController()
    {
        $result = [];

        // Questions 1
        $query = AnimalBreed::inRandomOrder()->limit(10)->get(['id', 'name']);
        foreach ($query as $imgQuiz) {
            $answers = [];
            $imgQuiz['img_url'] = $this->getBreedImageUrl($imgQuiz);
            // $url1 = $imgQuiz['img_url'];
            // $imgQuiz['img_url'] = $this->url . "/animal_img/breeds_img/" . $url1;
            $imgQuiz['correctAnswer'] = $imgQuiz['name'];
            $query1 = AnimalBreed::where('id', '!=', $imgQuiz['id'])->inRandomOrder()->limit(3)->get('name');
            foreach ($query1 as $animal) {
                array_push($answers, $animal['name']);
            }
            array_push($answers, $imgQuiz['correctAnswer']);
            shuffle($answers);
            $imgQuiz['answers'] = $answers;
            $imgQuiz['score'] = 10;
            $imgQuiz['clickedAnswer'] = null;
            $imgQuiz['type'] = 1;
            array_push($result, $imgQuiz);
        }

        // Questions 2
        // $queryTextQuestion = AnimalBreed::inRandomOrder()->limit(5)->get(['animal_specie_id', 'id', 'name', 'img_url']);
        // foreach ($queryTextQuestion as $txtQuiz) {
        //     $answers = [];
        //     $url1 = $txtQuiz['img_url'];
        //     $txtQuiz['img_url'] = $this->url . "/animal_img/breeds_img/" . $url1;
        //     $txtQuiz['correctAnswer'] = $txtQuiz['img_url'];
        //     $query1 = AnimalBreed::where('id', '!=', $txtQuiz['id'])->inRandomOrder()->limit(3)->get('img_url');
        //     foreach ($query1 as $animal) {
        //         $url2 = $animal['img_url'];
        //         $animal['img_url'] = $this->url . "/animal_img/breeds_img/" . $url2;
        //         array_push($answers, $animal['img_url']);
        //     }
        //     array_push($answers, $txtQuiz['correctAnswer']);
        //     shuffle($answers);
        //     $txtQuiz['answers'] = $answers;
        //     $txtQuiz['score'] = 10;
        //     $txtQuiz['clickedAnswer'] = '';
        //     $txtQuiz['type'] = 2;
        //     array_push($result, $txtQuiz);
        // }

        return $result;
    }
}
