<?php

namespace App\Http\Controllers;
use App\Clientes;
use App\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'clientes' => Clientes::get(),
            'produtos' => Produtos::get()
            //     'clientesInativos' => Clientes::onlyTrashed()->get()
        ];
        return view('home', compact('data'));

    }
}
