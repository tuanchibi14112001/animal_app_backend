<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalSpecie extends Model
{
    use HasFactory;
    protected $table = 'animal_species';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalType(){
        return $this->belongsTo(AnimalType::class, 'animal_type_id', 'id');
    }

    public function animalBreed(){
        return $this->hasMany(AnimalBreed::class, 'animal_specie_id', 'id');
    }

    public function speciesVideos(){
        return $this->hasMany(SpeciesVideo::class, 'animal_specie_id', 'id');
    }

}
