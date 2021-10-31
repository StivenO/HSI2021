@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Hacer una Venta</title>
</head>
@section('content')

<body>
	<div class="container">

		<a href="{{ url('h_ventas') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

		<!-- Encabezado de página -->
		<h1 class="h3 mb-4 text-gray-800">Hacer una Venta</h1>

		<form action="{{ url('h_ventas') }}" method="POST" class="user">
			@csrf
			<!-- Fila -->
			<div class="row">

				<!-- Columna -->
				<div class="col-md-12 col-sm-12 col-xs-10 col-auto">
					<div class="p-3 py-3">

						<!-- Formulario -->
						<div class="card shadow col-md-12 col-sm-12 col-xs-10 col-auto" style="width: 60rem;">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary text-center">Realiza una Venta</h6>
							</div>
							<div class="card-body">
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nombre del usuario</label>
										<input name="user_id" type="" class="form-control form-control-user" id="ejemploNomuser" placeholder="Nombre del usuario" value="{{Auth::user()->nomuser}} " required readonly>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nombre del Cliente</label>
										<select name="person_id" class="select-acostica form-control" required>
											<option disabled selected>Seleccione el Cliente *</option>
											@foreach ($personas as $persona)
											<option value="{{$persona->idperson}}">{{ $persona->nomperson }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nombre del Producto</label>
										<select name="product_id" class="select-acostica form-control" required>
											<option disabled selected>Seleccione un Producto *</option>
											@foreach ($productos as $producto)
											<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Cantidad del Producto</label>
										<input name="cantproduct" type="number" class="form-control form-control-user" id="cantidad" placeholder="Cantidad" oninput="calcular()" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Precio Unitario</label>
										<input name="cash" type="number" class="form-control form-control-user" id="precio" placeholder="Precio unitario" oninput="calcular()" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Aplicar Descuento</label>
										<input name="disc" type="number" class="form-control form-control-user" id="descuento" placeholder="Descuento" oninput="calcular()" required>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Fecha de la Venta</label>
										<input name="date" type="datetime-local" class="form-control form-control-user" id="ejemplodate" placeholder="Fecha y hora" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Total Calculado</label>
										<input name="total" type="number" class="form-control form-control-user" id="total" placeholder="Total" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels"></label>
										<input type="submit" name="" value="Confirmar Venta" class="btn btn-success btn-user btn-block"></input>
									</div>
								</div>
							</div>
							<script tipe="text/javascript">
								function calcular() {
									try {
										var a = parseFloat(document.getElementById("cantidad").value) || 0,
											b = parseFloat(document.getElementById("precio").value) || 0;
										c = parseFloat(document.getElementById("descuento").value) || 0;

										document.getElementById("total").value = (a * b) - c;
									} catch (e) {}
								}
							</script>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
@stop

</html>