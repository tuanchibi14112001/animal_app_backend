<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreedImage extends Model
{
    use HasFactory;
    protected $table = 'animal_breed_img';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalSpecie(){
        return $this->belongsTo(AnimalBreed::class, 'animal_breed_id', 'id');
    }
}
