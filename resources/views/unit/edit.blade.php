<!DOCTYPE html>
<html>
  <head>
    <tittle></tittle>
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    </head>
<body>
    <div class="container">    
    <center>
        <a href="{{ url('unit') }}" class="btn btn-secondary float-end mt-2"> Volver </a>
    <h1>Editar Categoría</h1>
    <hr>
    <form action="{{url('unit/edit/'.$data->idunit)}}" method="POST">
        @csrf
        <input name="nomunit" type="text" class="form-control form-control-user" placeholder="Nombre De La Unidad*" value="{{ $data->nomunit }}">
        <br>
        <input type="submit" class="btn btn-success" >
    </form>
    </center>
    </div>
</body>
</html>