<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios_x_artes extends Model
{
    protected $fillable = [
        'cat_id',
        'nombre_arte',
        'picture',
        'descripcion',
        'estado'
    ];
}
