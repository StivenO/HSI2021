@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Editar Venta</title>
</head>
@section('content')

<body>
	<div class="container">
		<a href="{{ url('sell') }}" class="btn btn-secondary float-end mt-2">
			<< Volver </a>
				<h1>Editar Transacción</h1>
				<hr>
				<form action="{{ url('sell/editar/'.$data->idsell ) }}" method="POST" class="col-md-6">
					@csrf

					<input name="person_id" placeholder="Nombre" class="form-control" value="{{ $data->person_id }}" autofocus>
					<input name="user_id" placeholder="Usuario" class="form-control" value="{{ $data->user_id }}">
					<select name="opetype_id" class="form-control" required>
						<option>Seleccione Tipo De Transaccion*</option>
						@foreach ($operaciones as $operacion)
						@if(($operacion->idopetype) == ($data->opetype_id))
						<option value="{{$operacion->idopetype}}" selected>{{ $operacion->nomopetype }}</option>
						@else
						<option value="{{$operacion->idopetype}}">{{ $operacion->nomopetype }}</option>
						@endif
						@endforeach
					</select>
					<select name="opetype_id" class="form-control" required>
						<option>Seleccione Tipo De Producto*</option>
						@foreach ($productos as $producto)
						@if(($producto->idproduct) == ($data->product_id))
						<option value="{{$producto->idproduct}}" selected>{{ $producto->nomproduct }}</option>
						@else
						<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
						@endif
						@endforeach
					</select>
					<input name="cantproduct" placeholder="Cantidad" class="form-control" value="{{ $data->cantproduct }}">
					<input name="cash" placeholder="Valor" class="form-control" value="{{ $data->cash }}">
					<input name="disc" placeholder="Descuento" class="form-control" value="{{ $data->disc }}">
					<input name="date" placeholder="Fecha" class="form-control" value="{{ $data->date }}" readonly>
					<input name="total" placeholder="Total" class="form-control" value="{{ $data->total }}">
					<input type="submit" class="btn btn-success mt-3">

				</form>
	</div>


</body>
@stop

</html>