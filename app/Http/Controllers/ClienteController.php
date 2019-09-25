<?php

namespace App\Http\Controllers;

use App\Clientes;
use DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'clientes' => Clientes::get(),
            
    //         //     'clientesInativos' => Clientes::onlyTrashed()->get()
    //     ];
    //     return view('home', compact('data'));

    // }


    public function create()
    {
        $data = [
            'cliente' => '',
            'url' => 'clientes',
            'method' => 'POST',
        ];

        return view('clientes.form', compact('data'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $cliente = Clientes::create([
                'nome' => $request['cliente']['nome'],
                'sobrenome' => $request['cliente']['sobrenome'],
                'email' => $request['cliente']['email'],
                'senha' => $request['cliente']['senha'],

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
        $cliente = Clientes::findOrFail($id);
        $data = [
            'cliente' => $cliente,
            'url' => 'clientes/' . $id,
            'method' => 'PUT',
        ];
        return view('clientes.form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        
        $cliente = Clientes::findOrFail($id);
        
        DB::beginTransaction();
        try {
            $cliente->update([
                'nome' => $request['cliente']['nome'],
                'sobrenome' => $request['cliente']['sobrenome'],
                'email' => $request['cliente']['email'],
                'senha' => $request['cliente']['senha']
            ]);

            
            DB::commit();
            return redirect('clientes');
        } catch(\Exception $e) {
            DB::rollback();
            return redirect('clientes');
        }
    }

    public function destroy($id)
    {
        $cliente = Clientes::withTrashed()->findOrFail($id);
        if($cliente->trashed()) {
            $cliente->restore();
            return back();
        } else {
            $cliente->delete();
            return back();
        }
    }
}