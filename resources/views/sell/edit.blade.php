@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Editar Transacción</title>
</head>
@section('content')

<body>
	<div class="container">

		<a href="{{ url('sell') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

		<!-- Encabezado de página -->
		<h1 class="h3 mb-4 text-gray-800">Editar Transacción</h1>

		<form action="{{ url('sell/editar/'.$data->idsell ) }}" method="POST" class="user">
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
								<input name="person_id" placeholder="Nombre" class="form-control form-control-user" value="{{ $data->person_id }}" autofocus>
							</div>

							<div class="col-sm-4">
								<input name="user_id" placeholder="Usuario" class="form-control form-control-user" value="{{ $data->user_id }}">
							</div>

							<div class="col-sm-4 mb-3 mb-sm-0">
								<select name="opetype_id" class="form-control form-control-user" required>
									<option>Seleccione Tipo De Transaccion*</option>
									@foreach ($operaciones as $operacion)
									@if(($operacion->idopetype) == ($data->opetype_id))
									<option value="{{$operacion->idopetype}}" selected>{{ $operacion->nomopetype }}</option>
									@else
									<option value="{{$operacion->idopetype}}">{{ $operacion->nomopetype }}</option>
									@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<select name="opetype_id" class="form-control form-control-user" required>
									<option>Seleccione Tipo De Producto*</option>
									@foreach ($productos as $producto)
									@if(($producto->idproduct) == ($data->product_id))
									<option value="{{$producto->idproduct}}" selected>{{ $producto->nomproduct }}</option>
									@else
									<option value="{{$producto->idproduct}}">{{ $producto->nomproduct }}</option>
									@endif
									@endforeach
								</select>
							</div>
							<div class="col-sm-4">
								<input name="cantproduct" placeholder="Cantidad" class="form-control form-control-user" value="{{ $data->cantproduct }}">
							</div>
							<div class="col-sm-4">
								<input name="cash" placeholder="Valor" class="form-control form-control-user" value="{{ $data->cash }}">

							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4 mb-3 mb-sm-0">
								<input name="disc" placeholder="Descuento" class="form-control form-control-user" value="{{ $data->disc }}">
							</div>
							<div class="col-sm-4">
								<input name="date" placeholder="Fecha" class="form-control form-control-user" value="{{ $data->date }}" readonly>
							</div>
							<div class="col-sm-4">
								<input name="total" placeholder="Total" class="form-control form-control-user" value="{{ $data->total }}">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4">
							</div>
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success btn-user btn-block" value="Editar">
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