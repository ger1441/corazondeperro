<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalitoHistoria extends Model
{
    protected $table = 'animalitos_historia';

    public function animalito(){
        return $this->hasOne(Animalito::class, 'id', 'id_animalito');
    }
}
