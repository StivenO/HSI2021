@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Hacer una Venta</title>

</head>
@section('content')

<body>
	<div class="container-fluid">

		<a href="{{ url('h_ventas') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

		<!-- Encabezado de página -->
		<h1 class="h3 mb-4 text-gray-800">Hacer una Venta</h1>

		<form action="{{ url('h_ventas') }}" method="POST" class="user">
			@csrf
			<!-- Fila de columna -->
			<div class="col-lg-6 mb-4">

				<!-- Formulario -->
				<div class="card shadow mb-4" style="width: 60rem;">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary text-center">Realiza la venta</h6>
					</div>
					<div class="card-body">
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<input name="person_id" type="" class="form-control form-control-user" id="ejemploNomuser" placeholder="Nombre del usuario" required>
							</div>

							<div class="col-sm-4">
								<input name="user_id" type="" class="form-control form-control-user" id="ejemploNomperson" placeholder="Nombre del cliente" required>
							</div>

							<div class="col-sm-4 mb-3 mb-sm-0">

								<select name="product_id" class="select-acostica form-control" required>
									<option disabled selected>Seleccione un Producto *</option>
									@foreach ($productos as $producto)
									<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<input name="cantproduct" type="number" class="form-control form-control-user" id="ejemploCant" placeholder="Cantidad" required>
							</div>
							<div class="col-sm-4">
								<input name="cash" type="number" class="form-control form-control-user" id="ejemploPriceout" placeholder="Precio unitario" required>
							</div>
							<div class="col-sm-4">
								<input name="disc" type="number" class="form-control form-control-user" id="ejemploDesc" placeholder="Descuento" required>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<input name="date" type="datetime-local" class="form-control form-control-user" id="ejemplodate" placeholder="Fecha y hora" required>
							</div>
							<div class="col-sm-4">
								<input name="total" type="number" class="form-control form-control-user" id="" placeholder="Total" required>
							</div>
							<div class="col-sm-4">
								<input type="submit" value="Confirmar Venta" class="btn btn-success btn-user btn-block"></input>
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