<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fanart extends Model
{
    protected $fillable = [
        'usu_id',
        'cat_id',
        'nombre_arte',
        'picture',
        'descripcion',
        'estado'
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
