<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalBreed extends Model
{
    use HasFactory;
    protected $table = 'animal_breeds';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalSpecie(){
        return $this->belongsTo(AnimalSpecie::class, 'animal_specie_id', 'id');
    }

    
    public function breedImages(){
        return $this->hasMany(BreedImage::class, 'animal_breed_id', 'id');
    }

    public function likedUsers(){
        return $this->belongsToMany(User::class, 'favourite', 'animal_breed_id', 'user_id');
    }
}
