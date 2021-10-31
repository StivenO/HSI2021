@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Abastecer</title>
</head>
@section('content')

<body>
    <div class="container-fluid">
        <a href="{{ url('product/new') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar Producto</a>
        <h1>Abastecer</h1><br>
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-responsive table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 10%"> Nombre</th>
                        <th style="width: 30%">Descripción</th>
                        <th style="width: 8%"> StockMín</th>
                        <th style="width: 8%">Cantidad</th>
                        <th style="width: 16%">Abastecer</th>
                        <th style="width: 8%">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td style="width: 5%">{{$row->idproduct}}</td>
                        <td style="width: 10%">{{$row->nomproduct}}</td>
                        <td style="width: 30%">{{$row->description}}</td>
                        <td style="width: 8%">{{$row->stockmin}}</td>
                        <td style="width: 8%">{{$row->quantity}}</td>
                        <td style="width: 16%">
                            <input name="newcantidad" type="number" class="form-control form-control-user" placeholder="Nueva Cantidad" autofocus required>
                        </td>

                        <td style="width: 8%; text-align: center;">
                            <a style="width: 80%" class="btn btn-info btn-sm" href="{{ url('product/edit/'.$row->idproduct) }}" onclick=" return confirm('¿Está seguro de Agregar esta Cantidad?')" title="Confirmar Abastecimiento"><i class='fas fa-dolly-flatbed' style='size:7x'></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
                    columns: [0, 1, 2, 3, 4]
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf">',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4]
                }
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print">',
                titleAttr: 'Imprimir',
                className: 'btn btn-info btn-lg',
                filename: 'Reporte de Existentes',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4]
                }
            },
        ]
    });
</script>
@stop

</html>