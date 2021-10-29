@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Nuevo Usuario</title>
</head>
@section('content')

<body>
	<div class="container">
		<a href="{{ url('user') }}" class="btn btn-secondary float-end mt-2">
			<< Volver </a>
				<h1>Nuevo Usuario</h1>
				<hr>
				<form action="{{ url('user') }}" method="POST" class="col-md-6">
					@csrf
					<select name="typeid_id" class="form-control" required>
						<option>Seleccione Tipo de Identificacion*</option>
						@foreach ($identificaciones as $identidicacion)
						<option value="{{$identidicacion->idtypeid}}">{{ $identidicacion->nomtypeid }}</option>
						@endforeach
					</select>
					<input name="numid" placeholder="Numero ID" class="form-control">
					<input name="image" placeholder="Imagen" class="form-control">
					<input name="nomuser" placeholder="Nombre" class="form-control">
					<input name="apeuser" placeholder="Apellido" class="form-control">
					<input name="email" placeholder="Email" class="form-control">
					<input name="nick" placeholder="Nick" class="form-control" required>
					<input name="password" placeholder="Contra" class="form-control">

					<input type="submit" class="btn btn-success mt-3">

				</form>
	</div>
</body>
@stop

</html>