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
}
