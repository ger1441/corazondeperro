<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalitoGaleria extends Model
{
    protected $table = 'animalitos_galeria';

    public function animalito(){
        return $this->belongsTo(Animalito::class, 'id_animalito', 'id');
    }
}
