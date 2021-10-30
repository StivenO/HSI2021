<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">    
        <a href="{{ url('ptype') }}" class="btn btn-secondary float-end mt-2"> << Volver </a>
    <h1>Agregar Tipo</h1>
    <hr>
    <form action="{{url('ptype')}}" method="POST">
        @csrf
        <input name="nomptype" type="text" class="form-control form-control-user" placeholder="Nombre Del Tipo*" autofocus>
        <br>
        <input type="submit" class="btn btn-success" >
    </form>

    </div>
</body>
</html>