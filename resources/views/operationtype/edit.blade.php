@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Editar Operación</title>
</head>
@section('content')

<body>
    <div class="container">
        <a href="{{ url('operationtype') }}" class="btn btn-secondary float-end mt-2"> Volver </a>
        <h1>Editar Tipo*</h1>
        <hr>
        <form action="{{url('operationtype/edit/'.$data->idopetype)}}" method="POST">
            @csrf
            <input name="nomopetype" type="text" class="form-control form-control-user" placeholder="Nombre Del Tipo*" value="{{ $data->nomopetype }}">
            <br>
            <input type="submit" class="btn btn-success">
        </form>
    </div>
</body>
@stop

</html>