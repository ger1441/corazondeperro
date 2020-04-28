<?php

namespace App;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Animalito extends Model
{
    use SoftDeletes;

    public function animalitoHistoria(){
        return $this->hasOne(AnimalitoHistoria::class,'id_animalito');
    }

    public function animalitoGaleria(){
        return $this->hasMany(AnimalitoGaleria::class,'id_animalito');
    }
}
