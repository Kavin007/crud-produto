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
            'produtos' => Produtos::get(),

        ];
        return view('home', compact('data'));

    }

    public function inativo(){
        $clientesInativos = Clientes::onlyTrashed()->get();
        $produtosInativos =  Produtos::onlyTrashed()->get();
        return view('inativo.inativo',compact('clientesInativos','produtosInativos'));
    }
}
