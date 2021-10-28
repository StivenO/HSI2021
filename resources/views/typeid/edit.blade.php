<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<a href="{{ url('typeid') }}" class="btn btn-secondary float-end mt-2">
			<< Volver </a>
				<h1>Editar Tipo</h1>
				<hr>
				<form action="{{ url('typeid/edit/'.$data->idtypeid ) }}" method="POST" class="col-md-6">
					@csrf
					<input name="nomtypeid" placeholder="Nombre" class="form-control" value="{{ $data->nomtypeid }}">
					<br>
					<input type="submit" class="btn btn-success">
				</form>
	</div>
</body>

</html>