@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Nuevo Tipo ID</title>
</head>
@section('content')

<body>

    <div class="container">
        <a href="{{ url('typeid') }}" class="btn btn-secondary float-end mt-2">
            << Volver </a>
                <h1>Agregar Tipo</h1>
                <hr>
                <form action="{{url('typeid')}}" method="POST">
                    @csrf
                    <input name="nomtypeid" type="text" class="form-control form-control-user" placeholder="Nombre Del Tipo*" autofocus>
                    <br>
                    <input type="submit" class="btn btn-success">
                </form>

    </div>
</body>
@stop

</html>