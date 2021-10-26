<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<a href="{{ url('user/new') }}" class="btn btn-primary float-end mt-2"> + Nuevo </a>
		<h1>Usuarios</h1>
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
					<th>Tipo ID</th>
					<th>Numero ID</th>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Nick</th>
					<th>Contra</th>
					<th>ACCIONES</th>
				</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
						<tr>
							<td> {{ $row->typeid->nomtypeid }} </td>
							<td> {{ $row->numid }} </td>
							<td> {{ $row->image }} </td>
							<td> {{ $row->nomuser }} </td>
							<td> {{ $row->apeuser }} </td>
							<td> {{ $row->emailuser }} </td>
							<td> {{ $row->nick }} </td>
							<td> {{ $row->pass }} </td>
							<td> 
							<a class="btn btn-info btn-sm" href="{{url( 'user/editar/'.$row->iduser )}}" title="Editar Registro"><i class="fas fa-edit"></i></a>
							<a class="btn btn-danger btn-sm" href="{{url( 'user/destroy/'.$row->iduser )}}" onclick= " return confirm('Desea eliminar el registro?')" title="Enviar a Papelera"> <i class="far fa-trash-alt"></i> </a>
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
					<th>Tipo ID</th>
					<th>Numero ID</th>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Nick</th>
					<th>Contra</th>
					<th>ACCIONES</th>
				</tr>
				</thead>
				<tbody>
					@foreach($data2 as $row)
						<tr>
							<td> {{ $row->typeid->nomtypeid}} </td>
							<td> {{ $row->numid }} </td>
							<td> {{ $row->image }} </td>
							<td> {{ $row->nomuser }} </td>
							<td> {{ $row->apeuser }} </td>
							<td> {{ $row->emailuser }} </td>
							<td> {{ $row->nick }} </td>
							<td> {{ $row->pass }} </td>
							<td>
							<a class="btn btn-success btn-sm" href="{{url( 'user/recovery/'.$row->iduser )}}" onclick= " return confirm('Desea recuperar el registro?')" title="Recuperar registro"><i class="fas fa-undo"></i></a> 
							<a class="btn btn-danger btn-sm" href="{{url( 'user/delete/'.$row->iduser )}}" onclick= " return confirm('Desea eliminarlo definitivamente?')" title="Eliminar Definitivamente" ><i class="fas fa-times"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		  </div>
		</div>			
	</div>

</body>
</html>