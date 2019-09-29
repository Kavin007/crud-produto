@extends('layout.template')
@section('content')

<div class="container mt-5">
<div class="card" style=" width: 40rem;">
<div class="card-header d-flex justify-content-center">Produtos Inativos</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            @foreach($produtosInativos as $produto)
            <tbody>
                <tr>
                    <th scope="row">{{$produto->id}}</th>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->preco}}</td>
                    <td>{{$produto->descricao}}</td>
                    
                    <td>
                    <form action="{{url('produtos', [$produto->id])}}" method="POST">
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}
                            <input type="submit" class="btn btn-success" value="Ativar"/>
                    </form>
                    
                    
                </tr>
                @endforeach
        </table>
    </div>
</div>
</div>

<div class="container mt-5">
<div class="card" style="width: 40rem; ">
<div class="card-header d-flex justify-content-center">Clientes Inativos</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            @foreach($clientesInativos as $cliente)
            <tbody>
                <tr>
                    <th scope="row">{{$cliente->id}}</th>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->sobrenome}}</td>
                    <td>{{$cliente->email}}</td>
                    
                    <td>
                    <form action="{{url('clientes', [$cliente->id])}}" method="POST">
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}
                            <input type="submit" class="btn btn-success" value="Ativar"/>
                    </form>
                    
                    
                </tr>
                @endforeach
        </table>
    </div>
</div>
</div>
@stop