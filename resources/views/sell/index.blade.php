@extends('layaut')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
</head>
@section('content')
<body>

	<div class="container">
		<a href="{{ url('sell/new') }}" class="btn btn-primary float-end mt-2"> + Nuevo </a>
		<h1>Transacciones</h1>
		<hr>
		
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item" role="presentation">
		    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Activos</button>
		  </li>
		  <li class="nav-item" role="presentation">
		 <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Papelera</button>
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  		<table class="table table-bordered table-hover table-striped">
		  		<thead>
				<tr>
				
					<th>ID Personas</th>
					<th>Id Usuarios</th>
					<th>Transaccion </th>
					<th>Producto</th>
					<th>Cantidad Productos</th>
					<th>Valor</th>
					<th>Descuentos</th>
					<th>Fecha</th>
					<th>Total</th>
					<th>ACCIONES</th>
				</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
						<tr>
							<td> {{ $row->person_id }} </td>
							<td> {{ $row->user_id }} </td>
							<td>{{$row->operationtype->nomopetype}}</td>
							<td>{{$row->product->nomproduct}}</td>
							<td> {{ $row->cantproduct }} </td>
							<td> {{ $row->cash }} </td>
							<td> {{ $row->disc }} </td>
							<td> {{ $row->date }} </td>
							<td> {{ $row->total }} </td>

							<td> 
							<a class="btn btn-info btn-sm" href="{{url( 'sell/editar/'.$row->idsell )}}" title="Editar Registro"><i class="fas fa-edit"></i></a>
							
							<a class="btn btn-danger btn-sm" href="{{url( 'sell/destroy/'.$row->idsell )}}" onclick= " return confirm('Desea eliminar el registro?')" title="Enviar a Papelera"> <i class="far fa-trash-alt"></i> </a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		  </div>
		  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  	
		  	<table class="table table-bordered table-hover table-striped">
		  		<thead>
				<tr>	
					<th>ID Personas</th>
					<th>Id Usuarios</th>
					<th>Transaccion </th>
					<th>Producto</th>
					<th>Cantidad Productos</th>
					<th>Valor</th>
					<th>Descuentos</th>
					<th>Fecha</th>
					<th>Total</th>
					<th>ACCIONES</th>
				</tr>
				</thead>
				<tbody>
					@foreach($data2 as $row)
						<tr>
							<td> {{ $row->person_id }} </td>
							<td> {{ $row->user_id }} </td>
							<td>{{$row->operationtype->nomopetype}}</td>
							<td>{{$row->product->nomproduct}}</td>
							<td> {{ $row->cantproduct }} </td>
							<td> {{ $row->cash }} </td>
							<td> {{ $row->disc }} </td>
							<td> {{ $row->date }} </td>
							<td> {{ $row->total }} </td>
							<td>
							<a class="btn btn-success btn-sm" href="{{url( 'sell/recovery/'.$row->idsell )}}" onclick= " return confirm('Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a> 
							
							<a class="btn btn-danger btn-sm" href="{{url( 'sell/delete/'.$row->idsell )}}" onclick= " return confirm('Desea eliminarlo definitivamente?')" title="Eliminar Definitivamente" ><i class="fas fa-times"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		  </div>
		</div>			
	</div>
@stop 
</body>
</html>