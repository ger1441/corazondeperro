<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalitoHistoria extends Model
{
    protected $table = 'animalitos_historia';
    protected $primaryKey = 'id';
    protected $fillable = ['id_animalito','historia','created_at','updated_at'];

    public function animalito(){
        return $this->hasOne(Animalito::class, 'id', 'id_animalito');
    }
}
