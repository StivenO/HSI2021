@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Nueva Unidad</title>
</head>
@section('content')

<body>
    <div class="container">
        <a href="{{ url('unit') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>
        <!-- Encabezado de página -->
        <h1 class="h3 mb-4 text-gray-800">Agregar una Unidad</h1>

        <form action="{{url('unit')}}" method="POST" class="user">
            @csrf
            <!-- Fila -->
            <div class="row">
                <div class="col-md-1 col-sm-1"></div>

                <!-- Columna -->
                <div class="col-md-10 col-sm-10">
                    <div class="p-3 py-5">

                        <!-- Formulario -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary text-center">Formulario para agregar una Unidad</h6>
                            </div>
                            <div class="card-body">
                                <div class="row mt-2">
                                    <div class="col-md-7">
                                        <label class="labels">Nombre de la Unidad</label>
                                        <input name="nomunit" type="text" class="form-control form-control-user" placeholder="Nombre Unidad" autofocus>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <label class="labels"></label>
                                        <input type="submit" value="Agregar Unidad" class="btn btn-success btn-user btn-block"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
@stop

</html>