<?php

use App\Http\Controllers\AnimalFamilyController;
use App\Http\Controllers\AnimalSpeciesController;
use App\Http\Controllers\AnimalTypeController;
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

Route::prefix('animal_type')->group(function () {
    Route::get('/', [AnimalTypeController::class, 'getAll']);
    Route::get('/{animal_name}', [AnimalTypeController::class, 'getAnimalFamilyByName']);
});

Route::prefix('animal_family')->group(function () {
    Route::get('/', [AnimalFamilyController::class, 'getAll']);
    Route::get('/{id}', [AnimalFamilyController::class, 'getAnimalBreeds']);
});

Route::prefix('animal_species')->group(function () {
    Route::get('/', [AnimalSpeciesController::class, 'getAll']);
});
