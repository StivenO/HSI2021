@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Tipo Operación</title>
</head>
@section('content')

<body>
    <div class="container">
        <a href="{{ url('operationtype/new') }}" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Agregar Tipo</a>
        <h1>Tipo de Operaciones</h1><br>
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
                            <th style="width: 1660px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td style="width: 15%;">{{$row->idopetype}}</td>
                            <td style="width: 70%;">{{$row->nomopetype}}</td>
                            <td style="width: 166px; text-align: center;">
                                <a class="btn btn-info btn-sm" href="{{ url('operationtype/edit/'.$row->idopetype) }}"><i class='fas fa-edit ' style='size:5x'></i></a>
                                <a class="btn btn-danger btn-sm" href="{{ url('operationtype/destroy/'.$row->idopetype) }}" onclick="return confirm('¿Desea eliminar el registro?')"><i class='fas fa-trash-alt'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <table class="table table-responsive table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th style="width: 1660px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data2 as $row)
                        <tr>
                            <td style="width: 15%;">{{$row->idopetype}}</td>
                            <td style="width: 70%;">{{$row->nomopetype}}</td>
                            <td style="width: 166px; text-align: center;">
                                <a class="btn btn-success btn-sm" href="{{ url('operationtype/recovery/'.$row->idopetype) }}" onclick=" return confirm('¿Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a>
                                <a class="btn btn-danger btn-sm" href="{{ url('operationtype/delete/'.$row->idopetype) }}" onclick=" return confirm('¿Desea eliminarlo definitivamente?')" title="Eliminar Definitivamente"><i class="fas fa-times"></i></a>
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
@section('scripts')
<!-- Export -->
<script>
    $('table').dataTable({
        language: {
            url: 'plugins/datatables/lang/Spanish.json'
        },
        dom: 'Blfrtip',
        dom: "<'row mt-1'<'col-sm-6'B><'col-sm-6'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-4'i><'col-sm-2'l><'col-sm-6 text-right'p>>",
        "lengthMenu": [4, 10, 25, 50, 100],
        buttons: [{
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel">',
                titleAttr: 'Exportar a excel',
                className: 'btn btn-success btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf">',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1]
                }
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print">',
                titleAttr: 'Imprimir',
                className: 'btn btn-info btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1]
                }
            },
        ]
    });
</script>
@stop

</html>