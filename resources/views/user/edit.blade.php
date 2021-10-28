@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Editar Usuario</title>
</head>
@section('content')

<body>

	<div class="container">
		<a href="{{ url('user') }}" class="btn btn-secondary float-end mt-2">
			<< Volver </a>
				<h1>Editar Usuario</h1>
				<hr>
				<form action="{{ url('user/editar/'.$data->iduser ) }}" method="POST" class="col-md-6">
					@csrf

					<select name="typeid_id" class="form-control" required>
						<option>Seleccione Tipo De Identificacion*</option>
						@foreach ($identificaciones as $identificacion)
						@if(($identificacion->idtypeid) == ($data->typeid_id))
						<option value="{{$identificacion->idtypeid}}" selected>{{ $identificacion->nomtypeid }}</option>
						@else
						<option value="{{$identificacion->idtypeid}}">{{ $identificacion->nomtypeid }}</option>
						@endif
						@endforeach
					</select>
					<input name="numid" placeholder="Numero identificacion" class="form-control" value="{{ $data->numid }}">
					<input name="image" placeholder="Imagen" class="form-control" value="{{ $data->image }}">
					<input name="nomuser" placeholder="Nombre" class="form-control" value="{{ $data->nomuser }}">
					<input name="apeuser" placeholder="Apellido" class="form-control" value="{{ $data->apeuser }}">
					<input name="emailuser" placeholder="Email" class="form-control" value="{{ $data->emailuser }}">
					<input name="nick" placeholder="Nick" class="form-control" value="{{ $data->nick }}">
					<input name="pass" placeholder="Contra" class="form-control" value="{{ $data->pass }}">

					<input type="submit" class="btn btn-success mt-3">

				</form>
	</div>
</body>
@stop

</html>