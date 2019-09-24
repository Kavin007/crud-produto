<?php

namespace App\Http\Controllers;
use App\Clientes;
use App\Produtos;
use App\Compras;
use DB;
use Illuminate\Http\Request;

class CompraController extends Controller
{

    public function index ($id)
    {   
        
        $data = ['cliente' => Clientes::findOrFail($id)
        ];
        return view('vendas', compact('data'));
    }



    public function create() {
        
        $data = [
            'clientes' => Clientes::all(),
            'produtos' => produtos::all()
        ];
        return view('vendas', compact('data'));
    }




    public function store(Request $request) {
        // DB::beginTransaction();
        // try {        
            $compras = Compras::create([
                'data' => $request['compras']['data'],
                'clientes_id' => $request['compras']['clientes_id']
            ]);
            
            
            $compras->produtos()->attach($request['compras']);
           
            
            
        //     DB::commit();
        //     return redirect('compras');
        // } catch(\Exception $e) {
        //     DB::rollback();
        //     return redirect('compras'); 
        // }
    }
}
