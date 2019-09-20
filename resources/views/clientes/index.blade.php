@extends('layout.template')
@section('content')


<div class="card" style=" width: 50rem;">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Clientes</h5>
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
            @foreach($data['clientes'] as $cliente)
            <tbody>
                <tr>
                    <th scope="row">{{$cliente->id}}</th>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->sobrenome}}</td>
                    <td>{{$cliente->email}}</td>
                    
                    <td><a href="{{url('clientes/'.$cliente->id.'/edit')}}" class="btn btn-warning">Editar</td>
                    
                    <td>
                        <form action="{{url('clientes', [$cliente->id])}}" method="POST">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}
                            
                            <button type="submit" class="btn btn-danger">Danger</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop