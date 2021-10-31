@extends('layaut')
<!DOCTYPE html>
<html>

<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
	<title>HSI - Nuevo Usuario</title>
</head>
@section('content')

<body>
	<div class="container">

		<a href="{{ url('user') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

		<!-- Encabezado de página -->
		<h1 class="h3 mb-4 text-gray-800">Agregar un Usuario</h1>

		<form action="{{ url('user') }}" method="POST" class="user">
			@csrf
			<!-- Fila -->
			<div class="row">

				<!-- Columna -->
				<div class="col-md-12 col-sm-12 col-xs-10 col-auto">
					<div class="p-3 py-3">

						<!-- Formulario -->
						<div class="card shadow col-md-12 col-sm-12 col-xs-10 col-auto" style="width: 60rem;">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary text-center">Formulario para agregar un Usuario</h6>
							</div>
							<div class="card-body">
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Tipo de Identificación</label>
										<select name="typeid_id" class="form-control form-control-user" required>
											<option>Seleccione Tipo de Identificación *</option>
											@foreach ($identificaciones as $identidicacion)
											<option value="{{$identidicacion->idtypeid}}">{{ $identidicacion->nomtypeid }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Número de Identificación</label>
										<input name="numid" placeholder="Número de ID" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nombres del Usuario</label>
										<input name="nomuser" placeholder="Nombres" class="form-control form-control-user" required>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Apellidos del Usuario</label>
										<input name="apeuser" placeholder="Apellidos" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Correo Electónico</label>
										<input name="email" placeholder="Correo Electónico" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Nickname</label>
										<input name="nick" placeholder="Nick" class="form-control form-control-user" required>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-md-4 col-sm-6">
										<label class="labels">Contraseña</label>
										<input name="password" placeholder="Contraseña" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels">Repetir Contraseña</label>
										<input name="password" placeholder="Repetir Contraseña" class="form-control form-control-user" required>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="labels"></label>
										<input type="submit" name="" value="Crear Usuario" class="btn btn-success btn-user btn-block"></input>
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