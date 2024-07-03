<?php

use App\Http\Controllers\AnimalBreedsController;
use App\Http\Controllers\AnimalSpecieController;
use App\Http\Controllers\AnimalTypeController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);

Route::prefix('animal_type')->group(function () {
    Route::get('/', [AnimalTypeController::class, 'getAll']);
    Route::get('/{animal_name}', [AnimalTypeController::class, 'getAnimalSpecieByName']);
});

Route::prefix('animal_specie')->group(function () {
    Route::get('/', [AnimalSpecieController::class, 'getAll']);
    Route::get('/result_detail', [AnimalSpecieController::class, 'getPredictInfoByName']);
    Route::get('/detail/{animalf_name}', [AnimalSpecieController::class, 'getAnFInfoByName']);
    Route::get('/get_breeds/{id}', [AnimalSpecieController::class, 'getAnimalBreeds']);
});

Route::prefix('animal_breed')->group(function () {
    Route::get('/', [AnimalBreedsController::class, 'getAll']);
    Route::get('/{id}', [AnimalBreedsController::class, 'getAnimalById'])->middleware('auth:sanctum');
});

Route::prefix('play')->group(function () {
    Route::get('/', [PlayController::class, 'playGameController']);
});

Route::prefix('quizz')->group(function () {
    Route::get('/', [QuizController::class, 'gRandomQuizController']);
});


Route::middleware('auth:sanctum')->prefix('user')->group(function () {
    Route::get('/gallery', [UserController::class, 'getGallery']);
    Route::get('/gallery-detail', [UserController::class, 'getGallerybyFamilyName']);
    Route::post('/gallery-delete', [UserController::class, 'deleteImage']);
    Route::post('/gallery-upload', [UserController::class, 'storeImage']);

    Route::get('/favourite', [UserController::class, 'getFavourite']);
    Route::post('/favourite-like', [UserController::class, 'postLikeBreed']);
    Route::post('/favourite-unlike', [UserController::class, 'postUnLikeBreed']);


});

Route::prefix('search')->group(function () {
    Route::get('/prepare', [SearchController::class, 'preparetoSearch']);
    Route::get('/detail', [SearchController::class, 'getSearchDetail']);

});

Route::prefix('test')->group(function () {
    Route::post('/upload', [UserController::class, 'storeImage']);
});