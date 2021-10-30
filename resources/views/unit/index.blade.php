@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Tipo Unidades</title>
</head>
@section('content')

<body>
    <div class="container">
        <a href="unit/new" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Agregar Unidad</a>
        <h1>Unidades</h1><br>
        <ul class="nav nav-tabs float-right" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Activos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Papelera</button>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-responsive table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th style="width: 1660px">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td style="width: 15%;">{{$row->idunit}}</td>
                            <td style="width: 70%;">{{$row->nomunit}}</td>
                            <td style="width: 166px; text-align: center;">
                                <a class="btn btn-info btn-sm" href="{{ url('unit/edit/'.$row->idunit) }}"><i class='fas fa-edit ' style='size:5x'></i></a>
                                <a class="btn btn-danger btn-sm" href="{{ url('unit/destroy/'.$row->idunit) }}" onclick="return confirm('¿Desea eliminar el registro?')"><i class='fas fa-trash-alt'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th style="width: 1660px">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data2 as $row)
                        <tr>
                            <td style="width: 15%;">{{$row->idunit}}</td>
                            <td style="width: 70%;">{{$row->nomunit}}</td>
                            <td style="width: 166px; text-align: center;">
                                <a class="btn btn-success btn-sm" href="{{ url('unit/recovery/'.$row->idunit) }}" onclick=" return confirm('¿Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a>
                                <a class="btn btn-danger btn-sm" href="{{ url('unit/delete/'.$row->idunit) }}" onclick=" return confirm('¿Desea eliminarlo definitivamente?')" title="Eliminar Definitivamente"><i class="fas fa-times"></i></a>
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