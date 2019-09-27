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
        return view('compras.vendas', compact('data'));
    }




    public function store(Request $request) {
        DB::beginTransaction();
        try {        
            
            $produto = Produtos::findOrFail($request->produtos_id);
             
            $compras = Compras::create([
                'data' => $request['compras']['data'],
                'clientes_id' => $request['compras']['clientes_id']
            ]);
            
            
            $compras->produtos()->attach($produto,array('quantidade'=>$request->quantidade));
           
            
            
            DB::commit();
            return view('compras.home');
        } catch(\Exception $e) {
            DB::rollback();
            return view('compras.home'); 
        }
     }


     public function listar($id){
         
         return $id;
     }
}
