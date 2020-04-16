<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animalito extends Model
{
    public function animalitoHistoria(){
        return $this->hasOne(AnimalitoHistoria::class,'id_animalito');
    }

    public function animalitoGaleria(){
        return $this->hasMany(AnimalitoGaleria::class,'id_animalito');
    }
}
