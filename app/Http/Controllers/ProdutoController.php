<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('produtos.form');
    }

    public function inativo()
    {
        return view('invativos.inativo');
    }
}
