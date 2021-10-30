<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<a href="{{ url('clientes') }}" class="btn btn-secondary float-end mt-2"> << Volver </a>
		<h1>Nueva Cliente</h1>
		<hr>
		<form action="{{ url('clientes') }}" method="POST" class="col-md-6">
			@csrf


			<select name="typeid_id" class="form-control" required>
				<option >Seleccione Tipo De Identificacion*</option>
				@foreach ($identificaciones as $identificacion)		
						<option value="{{$identificacion->idtypeid}}"> {{ $identificacion->nomtypeid }}</option>
				@endforeach
			</select>
			<input name="numid" placeholder="Numero identificacion" class="form-control">
			<input name="nomperson" placeholder="Nombre" class="form-control">
			<input name="apeperson" placeholder="Apellido" class="form-control"  >
			<input name="address" placeholder="Direccion" class="form-control"  >
			<input name="phone" placeholder="Telefono" class="form-control"  >		
			<input name="emailperson" placeholder="Email" class="form-control" >

			<input type="submit" class="btn btn-success mt-3">

		</form>
	</div>


</body>
</html>