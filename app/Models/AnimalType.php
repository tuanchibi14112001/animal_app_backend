<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    use HasFactory;
    protected $table = 'animal_type';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function animalFamily(){
        return $this->hasMany(AnimalFamily::class, 'animal_type_id', 'id');
    }



}
