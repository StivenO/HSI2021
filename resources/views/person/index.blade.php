@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
</head>
@section('content')

<body>

	<div class="container">
		<a href="{{ url('person/new') }}" class="btn btn-primary float-end mt-2"> + Nuevo </a>
		<h1>Personas</h1>
		<hr>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
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
							<th width="20">Tipo de Persona</th>
							<th>TipoID</th>
							<th>Número ID</th>
							<th style="text-align: center">Nombre</th>
							<th style="text-align: center">Apellido</th>
							<th style="text-align: center">Dirección</th>
							<th style="text-align: center">Teléfono</th>
							<th style="text-align: center">Email</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $row)
						<tr>
							<td> {{ $row->ptype->nomptype}} </td>
							<td> {{ $row->typeid->nomtypeid }} </td>
							<td> {{ $row->numid }} </td>
							<td> {{ $row->nomperson }} </td>
							<td> {{ $row->apeperson }} </td>
							<td> {{ $row->address }} </td>
							<td> {{ $row->phone }} </td>
							<td> {{ $row->emailperson }} </td>
							<td>
								<a class="btn btn-info btn-sm" href="{{url( 'person/edit/'.$row->idperson )}}" title="Editar Registro"><i class="fas fa-edit"></i></a>
								<a class="btn btn-danger btn-sm" href="{{url( 'person/destroy/'.$row->idperson )}}" onclick=" return confirm('Desea eliminar el registro?')" title="Enviar a Papelera"> <i class="far fa-trash-alt"></i> </a>
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
							<th>Tipo de Persona</th>
							<th>TipoID</th>
							<th>Número ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Dirección</th>
							<th>Teléfono</th>
							<th>Email</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data2 as $row)
						<tr>
							<td> {{ $row->ptype->nomptype}} </td>
							<td> {{ $row->typeid->nomtypeid }} </td>
							<td> {{ $row->numid }} </td>
							<td> {{ $row->nomperson }} </td>
							<td> {{ $row->apeperson }} </td>
							<td> {{ $row->address }} </td>
							<td> {{ $row->phone }} </td>
							<td> {{ $row->emailperson }} </td>
							<td>
								<a class="btn btn-success btn-sm" href="{{url( 'person/recovery/'.$row->idperson )}}" onclick=" return confirm('Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a>
								<a class="btn btn-danger btn-sm" href="{{url( 'person/destroy/'.$row->idperson )}}" onclick=" return confirm('Desea eliminar el registro?')" title="Enviar a Papelera"> <i class="far fa-trash-alt"></i> </a>
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
					columns: [0, 1, 2, 3, 4, 5, 6, 7]
				}
			},
			{
				extend: 'pdfHtml5',
				text: '<i class="fas fa-file-pdf">',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger btn-lg',
				filename: 'Reporte de Existentes',
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6, 7]
				}
			},
			{
				extend: 'print',
				text: '<i class="fas fa-print">',
				titleAttr: 'Imprimir',
				className: 'btn btn-info btn-lg',
				filename: 'Reporte de Existentes',
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6, 7]
				}
			},
		]
	});
</script>
@stop

</html>