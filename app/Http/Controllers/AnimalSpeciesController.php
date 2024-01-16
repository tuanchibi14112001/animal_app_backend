<?php

namespace App\Http\Controllers;

use App\Models\AnimalSpecies;
use Illuminate\Http\Request;

class AnimalSpeciesController extends Controller
{
    public function getAll(){
        $qurey = AnimalSpecies::all();
        return $qurey;
    }
}
