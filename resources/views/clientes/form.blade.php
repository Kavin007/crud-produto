@extends('layout.template')
@section('content')


<div class="card" style="width: 40rem;">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Cadastro de Clientes</h5>
        <form action="">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="nome">
            </div>

            <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome">
            </div>

            <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="text" name="senha" class="form-control" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-outline-success">Salvar</button>
        </form>

    </div>
</div>

@stop