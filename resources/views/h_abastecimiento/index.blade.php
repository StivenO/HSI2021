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
		<a href="{{ url('sell/new') }}" class="btn btn-primary float-right"><i class="fas fa-share-square"></i> Ir a vender</a>
		<h1 class="h3 mb-4 text-gray-800">Historial de abastecimiento</h1>
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
		  <div class="table-responsive">
		  	<table class="table table-hover table-striped table-bordered table-sm">
		  		<thead>
				<tr>
				
					<th>ID Personas</th>
					<th>Id Usuarios</th>
					<th>Producto</th>
					<th>Cantidad Productos</th>
					<th>Valor</th>
					<th>Descuentos</th>
					<th>Fecha</th>
					<th>Total</th>
				</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
						<tr>
							<td> {{ $row->person_id }} </td>
							<td> {{ $row->user_id }} </td>
							<td>{{$row->product->nomproduct}}</td>
							<td> {{ $row->cantproduct }} </td>
							<td> {{ $row->cash }} </td>
							<td> {{ $row->disc }} </td>
							<td> {{ $row->date }} </td>
							<td> {{ $row->total }} </td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		  </div>
		  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  
		  <div class= "table-responsive">
		  	<table class="table table-hover table-striped table-bordered table-sm">
		  		<thead>
				<tr>	
					<th>ID Personas</th>
					<th>Id Usuarios</th>
					<th>Producto</th>
					<th>Cantidad Productos</th>
					<th>Valor</th>
					<th>Descuentos</th>
					<th>Fecha</th>
					<th>Total</th>
				</tr>
				</thead>
				<tbody>
					@foreach($data2 as $row)
						<tr>
							<td> {{ $row->person_id }} </td>
							<td> {{ $row->user_id }} </td>
							<td>{{$row->product->nomproduct}}</td>
							<td> {{ $row->cantproduct }} </td>
							<td> {{ $row->cash }} </td>
							<td> {{ $row->disc }} </td>
							<td> {{ $row->date }} </td>
							<td> {{ $row->total }} </td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		  </div>
		</div>			
	</div>
@stop 
</body>
</html>