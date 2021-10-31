@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Transacciones</title>
</head>
@section('content')

<body>

	<div class="container">
		<a href="{{ url('sell/new') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Generar Transacción </a>
		<h1>Transacciones</h1><br>
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
							<th>Persona</th>
							<th>Usuario</th>
							<th>Transacción</th>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Valor</th>
							<th>Descuento</th>
							<th>Fecha</th>
							<th>Total</th>
							@if ( Auth::user()->rol->nomrol == "Administrador")
							<th>Acciones</th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach($data as $row)
						<tr>
							<td> {{ $row->person_id }} </td>
							<td> {{ $row->user_id }} </td>
							<td>{{$row->operationtype->nomopetype}}</td>
							<td>{{$row->product->nomproduct}}</td>
							<td> {{ $row->cantproduct }} </td>
							<td>${{ $row->cash }} </td>
							<td>${{ $row->disc }} </td>
							<td style="width: 18%"> {{ $row->date }} </td>
							<td>${{ $row->total }} </td>
							@if ( Auth::user()->rol->nomrol == "Administrador")
							<td style="width: 15%; text-align: center;">
								<a style="width: 40%" class="btn btn-info btn-sm" href="{{url( 'sell/editar/'.$row->idsell )}}" title="Editar Registro"><i class="fas fa-edit"></i></a>

								<a style="width: 40%" class="btn btn-danger btn-sm" href="{{url( 'sell/destroy/'.$row->idsell )}}" onclick=" return confirm('Desea eliminar el registro?')" title="Enviar a Papelera"> <i class="far fa-trash-alt"></i> </a>
							</td>
							@endif
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

				<table class="table table-responsive table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Persona</th>
							<th>Usuario</th>
							<th>Transacción </th>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Valor</th>
							<th>Descuentos</th>
							<th>Fecha</th>
							<th>Total</th>
							@if ( Auth::user()->rol->nomrol == "Administrador")
							<th>Acciones</th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach($data2 as $row)
						<tr>
							<td> {{ $row->person_id }} </td>
							<td> {{ $row->user_id }} </td>
							<td>{{$row->operationtype->nomopetype}}</td>
							<td>{{$row->product->nomproduct}}</td>
							<td> {{ $row->cantproduct }} </td>
							<td>${{ $row->cash }} </td>
							<td>${{ $row->disc }} </td>
							<td style="width: 18%"> {{ $row->date }} </td>
							<td>${{ $row->total }} </td>
							@if ( Auth::user()->rol->nomrol == "Administrador")
							<td style="width: 15%; text-align: center;">
								<a style="width: 40%" class="btn btn-success btn-sm" href="{{url( 'sell/recovery/'.$row->idsell )}}" onclick=" return confirm('¿Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a>

								<a style="width: 40%" class="btn btn-danger btn-sm" href="{{url( 'sell/delete/'.$row->idsell )}}" onclick=" return confirm('¿Desea eliminarlo definitivamente?')" title="Eliminar Definitivamente"><i class="fas fa-times"></i></a>
							</td>
							@endif
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
					columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
				}
			},
			{
				extend: 'pdfHtml5',
				text: '<i class="fas fa-file-pdf">',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger btn-lg',
				filename: 'Reporte de Existentes',
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
				}
			},
			{
				extend: 'print',
				text: '<i class="fas fa-print">',
				titleAttr: 'Imprimir',
				className: 'btn btn-info btn-lg',
				filename: 'Reporte de Existentes',
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
				}
			},
		]
	});
</script>
@stop

</html>