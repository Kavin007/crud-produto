@extends('layout.template')
@section('content')


<div class="card" style="width: 40rem;">
    
<div class="card-header d-flex justify-content-center">{{$data['cliente'] ? 'Editar cliente' : 'Novo cliente'}}</div>
        <div class="card-body">
        <form method="POST" action="{{url($data['url'])}}">
        @if($data['method'] == 'PUT')
                @method('PUT')
            @endif
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                
                <input type="text" value="{{old('cliente.nome', $data['cliente'] ? $data['cliente']->nome : '')}}" name="cliente[nome]" name="cliente[nome]" class="form-control" placeholder="nome">
            </div>

            <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" value="{{old('cliente.sobrenome', $data['cliente'] ? $data['cliente']->sobrenome : '')}}" name="cliente[sobrenome] "class="form-control" placeholder="Sobrenome">
            </div>

            <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" value="{{old('cliente.email', $data['cliente'] ? $data['cliente']->email : '')}}" name="cliente[email]" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" value="{{old('cliente.senha', $data['cliente'] ? $data['cliente']->senha : '')}}" name="cliente[senha]" class="form-control" placeholder="Senha">
            </div>

            <input type="submit" value="{{$data['cliente'] ? 'Atualizar' : 'Salvar'}}" class="btn btn-outline-success">
            
        </form>

    </div>
</div>

@stop