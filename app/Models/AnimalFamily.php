<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalFamily extends Model
{
    use HasFactory;
    protected $table = 'animal_family';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalType(){
        return $this->belongsTo(AnimalType::class, 'animal_type_id', 'id');
    }

    public function animalSpecies(){
        return $this->hasMany(AnimalSpecies::class, 'animal_family_id', 'id');
    }
}
