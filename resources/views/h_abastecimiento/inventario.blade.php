@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Inventario</title>
</head>
@section('content')

<body>

    <div class="container">
        <a href="{{ url('product/new') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar Producto</a>
        <h1>Inventario</h1><br>
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-responsive table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th style="width: 10%">Nombre</th>
                        <th style="width: 40%">Descripción</th>
                        <th style="width: 8%">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td style="width: 10%">{{$row->nomproduct}}</td>
                        <td style="width: 40%">{{$row->description}}</td>
                        <td style="width: 8%">{{$row->quantity}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @stop
</body>
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
                    columns: [0, 1, 2]
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf">',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print">',
                titleAttr: 'Imprimir',
                className: 'btn btn-info btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1, 2]
                }
            },
        ]
    });
</script>
@stop

</html>