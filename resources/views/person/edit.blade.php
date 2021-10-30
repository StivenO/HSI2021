<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<a href="{{ url('person') }}" class="btn btn-secondary float-end mt-2"> << Volver </a>
		<h1>Editar Persona</h1>
		<hr>
		<form action="{{ url('person/edit/'.$data->idperson ) }}" method="POST" class="col-md-6">
			@csrf
			
			<select name="ptype_id" class="form-control" required>
            <option >Seleccione Tipo De Persona*</option>
            @foreach ($tipopersonas as $tipopersona)
                @if(($tipopersona->idptype) == ($data->ptype_id))
                    <option value="{{$tipopersona->idptype}}" selected>{{ $tipopersona->nomptype }}</option>
                    @else
                    <option value="{{$tipopersona->idptype}}">{{ $tipopersona->nomptype }}</option>
                @endif
        	 @endforeach
       		 </select>
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
</html>