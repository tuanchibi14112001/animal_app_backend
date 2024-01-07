<?php

namespace App\Http\Controllers;

use App\Models\AnimalType;
use Illuminate\Http\Request;

class AnimalTypeController extends Controller
{
    public function getAll(){
        $query = AnimalType::get('name');
        return $query;
    }
}
