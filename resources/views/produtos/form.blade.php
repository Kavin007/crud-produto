@extends('layout.template')
@section('content')


<div class="card" style="width: 40rem;">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Cadastro de Produtos</h5>
        <form action="">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="nome">
            </div>

            <div class="form-group">
                <label for="sobrenome">Validade:</label>
                <input type="date" name="validade" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control rounded-0" rows="3" name="descricao" placeholder="Descrição"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Salvar</button>
        </form>

    </div>
</div>

@stop