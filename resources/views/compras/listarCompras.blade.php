@extends('layout.template')
@section('content')
<div class="container mt-5 d-flex justify-content-center">
<div class="card" style=" width: 40rem;">
<div class="card-header d-flex justify-content-center">Compras do(a) {{$clientes->nome}}</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            @foreach($compras as $compra)
            <tbody>
                <tr>
                    <th scope="row">{{$compra->id}}</th>
                    <td>{{$compra->data}}</td>
                    <td><a href="{{url('/compras/detalhar')}}"  class="btn btn-info">Detalhar</a></td>
                        <td>                   
                </tr>
                @endforeach
        </table>
    </div>
</div>
</div>

@stop