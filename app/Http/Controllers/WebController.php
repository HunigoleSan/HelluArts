<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    function index (){

        $data  = [
            'getCategorias' => Categoria::getAll()
        ];

        return view ('web.index',compact('data'));
    }

}
