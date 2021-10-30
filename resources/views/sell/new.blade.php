@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Nueva Venta</title>
</head>
@section('content')

<body>

	<div class="container">
		<a href="{{ url('sell') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

		<!-- Encabezado de página -->
		<h1 class="h3 mb-4 text-gray-800">Generar una Transacción</h1>

		<form action="{{ url('sell') }}" method="POST" class="user">
			@csrf
			<!-- Fila de columna -->
			<div class="col-lg-6 mb-4">

				<!-- Formulario -->
				<div class="card shadow mb-4" style="width: 60rem;">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary text-center">Realizar Transacción</h6>
					</div>
					<div class="card-body">
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<input name="person_id" placeholder="Nombre" class="form-control form-control-user" autofocus>
							</div>

							<div class="col-sm-4">
								<input name="user_id" placeholder="Usuario" class="form-control form-control-user">
							</div>

							<div class="col-sm-4 mb-3 mb-sm-0">

								<select name="opetype_id" class="form-control form-control-user" required>
									<option>Seleccione Tipo de Transaccion *</option>
									@foreach ($operaciones as $operacion)
									<option value="{{$operacion->idopetype}}">{{ $operacion->nomopetype }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<select name="product_id" class="form-control form-control-user" required>
									<option>Seleccione el Producto *</option>
									@foreach ($productos as $producto)
									<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-sm-4">
								<input name="cantproduct" placeholder="Cantidad" class="form-control form-control-user">
							</div>
							<div class="col-sm-4">
								<input name="cash" placeholder="Valor" class="form-control form-control-user">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<input name="disc" placeholder="Descuento" class="form-control form-control-user">
							</div>
							<div class="col-sm-4">
								<input name="date" placeholder="Fecha" class="form-control form-control-user" type="datetime-local">
							</div>
							<div class="col-sm-4">
								<input name="total" placeholder="Total" class="form-control form-control-user">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4">
							</div>
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success btn-user btn-block">
							</div>
							<div class="col-sm-4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

</body>
@stop

</html>