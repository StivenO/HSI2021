@extends('layaut')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
@section('content')
<body>

	<div class="container">
		<a href="{{ url('proveedores') }}" class="btn btn-secondary float-end mt-2"> << Volver </a>
		<h1>Editar Proveedor</h1>
		<hr>
		<form action="{{ url('proveedores/edit/'.$data->idperson ) }}" method="POST" class="col-md-6">
			@csrf
			

			<select name="typeid_id" class="form-control" required>
				<option >Seleccione Tipo De Identificacion*</option>
				@foreach ($identificaciones as $identificacion)
					@if(($identificacion->idtypeid) == ($data->typeid_id))
						<option value="{{$identificacion->idtypeid}}" selected>{{ $identificacion->nomtypeid }}</option>
						@else
						<option value="{{$identificacion->idtypeid}}">{{ $identificacion->nomtypeid }}</option>
					@endif
				@endforeach
			</select>
			<input name="numid" placeholder="Numero identificacion" class="form-control" value="{{ $data->numid }}" >
			<input name="nomperson" placeholder="Nombre" class="form-control" value="{{ $data->nomperson }}" >
			<input name="apeperson" placeholder="Apellido" class="form-control" value="{{ $data->apeperson }}" >
			<input name="address" placeholder="Direccion" class="form-control" value="{{ $data->address }}" >
			<input name="phone" placeholder="Telefono" class="form-control" value="{{ $data->phone }}" >
			<input name="emailperson" placeholder="Email" class="form-control" value="{{ $data->emailperson }}"  >

			<input type="submit" class="btn btn-success mt-3">

		</form>
	</div>
</body>
@stop
</html>