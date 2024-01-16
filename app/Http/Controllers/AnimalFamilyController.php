<?php

namespace App\Http\Controllers;

use App\Models\AnimalFamily;
use Illuminate\Http\Request;

class AnimalFamilyController extends Controller
{
    public function getAll(){
        $query = AnimalFamily::all();
        return $query;
    }
}
