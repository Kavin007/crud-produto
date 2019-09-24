@extends('layout.template')
@section('content')

<div class="card" style="width: 35rem;">
    <div class="card-header d-flex justify-content-center">Nova Compra</div>
    <div class="card-body">
        <form method="POST" action="{{url('compras')}}">

            @csrf
            <div class="form-group">
                <label><b>Cliente</b></label>
                <select name="compras[clientes_id]" class="form-control">
                    @foreach($data['clientes'] as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>Data</b></label>
                        <input type="date" value="{{old('compras.data', '')}}" name="compras[data]"
                            class="form-control data">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label><b>Produtos</b></label>
                        <select name="produtos[0][produtos_id]" class="form-control">
                            @foreach($data['produtos'] as $produto)
                            <option value="{{$produto->id}}">{{$produto->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                        <label><b>Quantidade:</b></label>
                        <input type="text" value="{{old('compras.quantidade', '')}}" name="compras[quantidade]" class="form-control" placeholder="Quantidade">
                    
                </div>

            </div>
            <input type="submit" value="Salvar" class="btn btn-success mt-3">
        </form>
    </div>
</div>

@stop