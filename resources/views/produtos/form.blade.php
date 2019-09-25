@extends('layout.template')
@section('content')

<div class="row d-flex justify-content-center">
<div class="card" style="width: 40rem;">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">{{$data['produto'] ? 'Editar Produto' : 'Novo Produto'}}
        </h5>

        <form method="POST" action="{{url($data['url'])}}">
            @if($data['method'] == 'PUT')
            @method('PUT')
            @endif
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" value="{{old('produto.nome', $data['produto'] ? $data['produto']->nome : '')}}" name="produto[nome]" class="form-control" placeholder="nome">
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" value="{{old('produto.preco', $data['produto'] ? $data['produto']->preco : '')}}" name="produto[preco]" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea value="{{old('produto.descricao', $data['produto'] ? $data['produto']->descricao : '')}}" name="produto[descricao]" class="form-control rounded-0" rows="3" name="descricao" placeholder="Descrição"></textarea>
            </div>
            <button type="submit" value="{{$data['produto'] ? 'Atualizar' : 'Salvar'}}" class="btn btn-outline-success">Salvar</button>
        </form>

    </div>
</div>
</div>  
@stop