@extends('layout.template')
@section('content')

<div class="container">
<div class="card" style=" width: 40rem;">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Produtos Inativos</h5>
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
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><button type="button" class="btn-sm btn-outline-success">Ativar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="container">
<div class="card" style="width: 40rem; ">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Clientes Inativos</h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><button type="button" class="btn-sm btn-outline-success">Ativar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@stop