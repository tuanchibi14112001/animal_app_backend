<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalSpecies extends Model
{
    use HasFactory;
    protected $table = 'animal_species';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalFamily(){
        return $this->belongsTo(AnimalFamily::class, 'animal_family_id', 'id');
    }
}
