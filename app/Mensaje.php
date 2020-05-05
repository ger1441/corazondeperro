<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = "mensajes";
    protected $primaryKey = "id";

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
