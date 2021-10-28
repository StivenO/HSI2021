@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Nueva Venta</title>
</head>
@section('content')

<body>

	<div class="container">
		<a href="{{ url('sell') }}" class="btn btn-secondary float-end mt-2">
			<< Volver </a>
				<h1> * Nueva Venta * </h1>
				<hr>
				<form action="{{ url('sell') }}" method="POST" class="col-md-6">
					@csrf

					<input name="person_id" placeholder="Nombre" class="form-control" autofocus>
					<input name="user_id" placeholder="Usuario" class="form-control">
					<select name="opetype_id" class="form-control" required>
						<option>Seleccione Tipo De Transaccion*</option>
						@foreach ($operaciones as $operacion)
						<option value="{{$operacion->idopetype}}">{{ $operacion->nomopetype }}</option>
						@endforeach
					</select>
					<select name="product_id" class="form-control" required>
						<option>Seleccione Tipo De Producto*</option>
						@foreach ($productos as $producto)
						<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
						@endforeach
					</select>
					<input name="cantproduct" placeholder="Cantidad" class="form-control">
					<input name="cash" placeholder="Valor" class="form-control">
					<input name="disc" placeholder="Descuento" class="form-control">
					<input name="date" placeholder="Fecha" class="form-control" type="datetime-local">
					<input name="total" placeholder="Total" class="form-control">

					<input type="submit" class="btn btn-success mt-3">

				</form>
	</div>


</body>
@stop

</html>