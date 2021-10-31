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
			<!-- Fila -->
			<div class="row">

				<!-- Columna -->
				<div class="col-md-12 col-sm-12 col-xs-10 col-auto">
					<div class="p-3 py-3">

						<!-- Formulario -->
						<div class="card shadow col-md-12 col-sm-12 col-xs-10 col-auto" style="width: 60rem;">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary text-center">Formulario para hacer una Transacción</h6>
							</div>
							<div class="card-body">
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nombre Persona</label>
										<input name="person_id" placeholder="Nombre" class="form-control form-control-user" autofocus required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nombre Usuario</label>
										<input name="user_id" placeholder="Usuario" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Tipo de Transacción</label>
										<select name="opetype_id" class="select-acostica form-control form-control-user" required>
											<option>Seleccione Tipo de Transaccion *</option>
											@foreach ($operaciones as $operacion)
											<option value="{{$operacion->idopetype}}">{{ $operacion->nomopetype }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Seleccione el Producto</label>
										<select name="product_id" class="select-acostica form-control form-control-user" required>
											<option>Seleccione el Producto *</option>
											@foreach ($productos as $producto)
											<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Cantidad</label>
										<input name="cantproduct" placeholder="Cantidad" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Precio de venta/compra</label>
										<input name="cash" placeholder="$ Valor" class="form-control form-control-user" required>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Descuento</label>
										<input name="disc" placeholder="Descuento" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Fecha</label>
										<input name="date" placeholder="Fecha" class="form-control form-control-user" type="datetime-local" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Total</label>
										<input name="total" placeholder="Total" class="form-control form-control-user" required>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels"></label>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels"></label>
										<input type="submit" class="btn btn-success btn-user btn-block">
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels"></label>
									</div>
								</div>
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