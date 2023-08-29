<?php

namespace App\Http\Controllers;

use App\Models\Categoria;


class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return $categorias;
    }

    public function show(Categoria $categoria)
    {
    }
}
