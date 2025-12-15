<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categorias extends Component
{
    public $cat;
    public function __construct($data)
    {
        if($data->estado === "Activo"){
            $this->cat = $data->nombre_categoria;
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categorias');
    }
}
