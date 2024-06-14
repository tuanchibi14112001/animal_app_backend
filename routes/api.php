<?php

use App\Http\Controllers\AnimalFamilyController;
use App\Http\Controllers\AnimalSpeciesController;
use App\Http\Controllers\AnimalTypeController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\QuizController;
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
    Route::get('/{animal_name}', [AnimalTypeController::class, 'getAnimalFamilyByName']);
});

Route::prefix('animal_family')->group(function () {
    Route::get('/', [AnimalFamilyController::class, 'getAll']);
    Route::get('/result_detail', [AnimalFamilyController::class, 'getPredictInfoByName']);
    Route::get('/detail/{animalf_name}', [AnimalFamilyController::class, 'getAnFInfoByName']);
    Route::get('/get_breeds/{id}', [AnimalFamilyController::class, 'getAnimalBreeds']);
});

Route::prefix('animal_species')->group(function () {
    Route::get('/', [AnimalSpeciesController::class, 'getAll']);
    Route::get('/{id}', [AnimalSpeciesController::class, 'getAnimalById']);
});

Route::prefix('play')->group(function () {
    Route::get('/', [PlayController::class, 'playGameController']);
});

Route::prefix('quizz')->group(function () {
    Route::get('/', [QuizController::class, 'gRandomQuizController']);
});


Route::middleware('auth:sanctum')->prefix('user')->group(function () {
    Route::get('/gallery', [UserController::class, 'getGallery']);
    Route::get('/gallery-detail', [UserController::class, 'getGallerybyFamilyId']);
    Route::post('/gallery-upload', [UserController::class, 'storeImage']);

});

Route::prefix('test')->group(function () {
    Route::post('/upload', [UserController::class, 'storeImage']);
});