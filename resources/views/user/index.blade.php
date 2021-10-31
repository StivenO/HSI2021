@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Usuarios</title>
</head>
@section('content')

<body>
	<div class="container">
		<a href="{{ url('user/new') }}" class="btn btn-primary float-right"><i class="fas fa-user-plus"></i> Agregar Usuaio</a>
		<h1>Usuarios</h1><br>
		<ul class="nav nav-tabs float-right" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Activos</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Papelera</button>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<table id="example" class="table table-responsive table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th style="width: 5%">TipoID</th>
							<th style="width: 14%">Numero ID</th>
							<th style="width: 13%">Nombre</th>
							<th style="width: 13%">Apellido</th>
							<th style="width: 15%">Email</th>
							<th style="width: 13%">Nick</th>
							<th style="width: 11%">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $row)
						<tr>
							<td style="width: 5%"> {{ $row->typeid->nomtypeid }} </td>
							<td style="width: 14%"> {{ $row->numid }} </td>
							<td style="width: 13%"> {{ $row->nomuser }} </td>
							<td style="width: 13%"> {{ $row->apeuser }} </td>
							<td style="width: 15%"> {{ $row->email }} </td>
							<td style="width: 13%"> {{ $row->nick }} </td>
							<td style="width: 11%; text-align: center;">
								<a class="btn btn-info btn-sm" href="{{url( 'user/editar/'.$row->iduser )}}" title="Editar Registro"><i class="fas fa-edit"></i></a>
								<a class="btn btn-danger btn-sm" href="{{url( 'user/destroy/'.$row->iduser )}}" onclick=" return confirm('¿Desea eliminar el registro?')" title="Enviar a Papelera"> <i class="far fa-trash-alt"></i> </a>
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
							<th style="width: 5%">TipoID</th>
							<th style="width: 14%">Numero ID</th>
							<th style="width: 13%">Nombre</th>
							<th style="width: 13%">Apellido</th>
							<th style="width: 15%">Email</th>
							<th style="width: 13%">Nick</th>
							<th style="width: 11%">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data2 as $row)
						<tr>
							<td style="width: 5%"> {{ $row->typeid->nomtypeid }} </td>
							<td style="width: 14%"> {{ $row->numid }} </td>
							<td style="width: 13%"> {{ $row->nomuser }} </td>
							<td style="width: 13%"> {{ $row->apeuser }} </td>
							<td style="width: 15%"> {{ $row->email }} </td>
							<td style="width: 13%"> {{ $row->nick }} </td>
							<td style="width: 11%; text-align: center;">
								<a class="btn btn-success btn-sm" href="{{url( 'user/recovery/'.$row->iduser )}}" onclick=" return confirm('¿Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a>
								<a class="btn btn-danger btn-sm" href="{{url( 'user/delete/'.$row->iduser )}}" onclick=" return confirm('¿Desea eliminarlo definitivamente?')" title="Eliminar Definitivamente"><i class="fas fa-times"></i></a>
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