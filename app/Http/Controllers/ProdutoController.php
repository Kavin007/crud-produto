<?php

namespace App\Http\Controllers;
use App\Produtos;
use DB;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{   


    // public function index()
    // {
    //     $data = [
    //         'produtos' => Produtos::get()
    //         //     'clientesInativos' => Clientes::onlyTrashed()->get()
    //     ];
    //     return view('produtos.index', compact('data'));

    // }


    public function create()
    {   $data = [
            'produto' => '',
            'url' => 'produtos',
            'method' => 'POST',
    ];
        return view('produtos.form',compact('data'));
    }

    public function store(Request $request)
    {   
        DB::beginTransaction();

        try {
            $produto = Produtos::create([
                'nome' => $request['produto']['nome'],
                'preco' => $request['produto']['preco'],
                'descricao' => $request['produto']['descricao']

                
            ]);
            
            DB::commit();
            return redirect('/');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $produto = Produtos::findOrFail($id);
        $data = [
            'produto' => $produto,
            'url' => 'produtos/' . $id,
            'method' => 'PUT',
        ];
        return view('produtos.form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        
        $produto = Produtos::findOrFail($id);
        
        DB::beginTransaction();
        try {
            $produto->update([
                'nome' => $request['produto']['nome'],
                'preco' => $request['produto']['preco'],
                'descricao' => $request['produto']['descricao']
                
            ]);

            
            DB::commit();
            return redirect('produtos');
        } catch(\Exception $e) {
            DB::rollback();
            return redirect('produtos');
        }
    }

    public function destroy($id)
    {
        $produto = Produtos::withTrashed()->findOrFail($id);
        if($produto->trashed()) {
            $produto->restore();
            return back();
        } else {
            $produto->delete();
            return back();
        }
    }

}