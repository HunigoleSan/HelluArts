<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class ArteController extends Controller
{
    public function index(){
         $data  = [
            'getCategorias' => Categoria::getAll()
        ];

        return view ('web.artes',compact("data"));
    }

  
}
