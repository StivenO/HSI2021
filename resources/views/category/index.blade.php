@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Categorías</title>
</head>
@section('content')

<body>
    <div class="container">
        <a href="category/new" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Agregar Categoría</a>
        <h1 class="h3 mb-0 text-gray-800">Categorías</h1>
        <hr>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Activos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Papelera</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th style='width:350px'>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->idcategory}}</td>
                            <td>{{$row->nomcategory}}</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{ url('category/destroy/'.$row->idcategory) }}" onclick="return confirm('¿desea eliminar el registro?')"><i class='fas fa-trash-alt'></i></a>
                                <a class="btn btn-info btn-sm" href="{{ url('category/edit/'.$row->idcategory) }}"><i class='fas fa-edit ' style='size:5x'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th style='width:350px'>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data2 as $row)
                        <tr>
                            <td>{{$row->idcategory}}</td>
                            <td>{{$row->nomcategory}}</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{ url('category/delete/'.$row->idcategory) }}" onclick="return confirm('¿desea eliminar definitivamente este registro?')"><i class='fas fa-trash-alt'></i></a>
                                <a class="btn btn-outline-info btn-sm" href="{{ url('category/recovery/'.$row->idcategory) }}"><i class="fas fa-undo"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@stop

</html>