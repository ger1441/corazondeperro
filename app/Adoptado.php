<?php

namespace App;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Adoptado extends Model
{
    use SoftDeletes;

    protected $table = "adoptados";
    protected $primaryKey = "id";
}
