<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeciesVideo extends Model
{
    use HasFactory;
    protected $table = 'animal_species_video';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalSpecie(){
        return $this->belongsTo(AnimalSpecie::class, 'animal_specie_id', 'id');
    }
}
