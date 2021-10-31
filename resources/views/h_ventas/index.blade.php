@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Ventas</title>
</head>
@section('content')

<body>

	<div class="container">
		<a href="{{ url('h_ventas/new') }}" class="btn btn-primary float-right"><i class="fas fa-share-square"></i> Ir a vender</a>
		<h1>Historial de Ventas</h1><br>
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<table class="table table-responsive table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>Personas</th>
						<th>Usuarios</th>
						<th style="width: 30%">Producto</th>
						<th>Cantidad</th>
						<th style="width: 15%">Valor</th>
						<th style="width: 15%">Descuento</th>
						<th style="width: 28%">Fecha</th>
						<th style="width: 15%">Total</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td> {{ $row->person->nomperson }} </td>
						<td> {{ $row->user->nomuser }} </td>
						<td style="width: 30%">{{$row->product->nomproduct}}</td>
						<td> {{ $row->cantproduct }} </td>
						<td style="width: 15%">$ {{ $row->cash }} </td>
						<td style="width: 15%"> $ {{ $row->disc }} </td>
						<td style="width: 28%"> {{ $row->date }} </td>
						<td style="width: 15%">$ {{ $row->total }} </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@stop
</body>

</html>