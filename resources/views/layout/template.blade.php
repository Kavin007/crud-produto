<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/produtos/create')}}">Produto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/clientes/create')}}">Cliente</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/compras/create')}}">Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="{{url('/inativo')}}">Inativos</a>
        </li>
    </ul>
    <div class="container d-flex justify-content-center " style="padding: 60px">
        @yield('content')
    </div>
</body>

</html>