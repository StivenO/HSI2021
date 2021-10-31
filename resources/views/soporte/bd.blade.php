@extends('layaut')
<!DOCTYPE html>
<html>

<head>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
  <title>HSI - BD</title>
</head>
@section('content')

<body>
  <div class="container">
    <!-- Encabezado de página -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Relaciones en la Base de Datos</h1>
    </div><br>

    <img class="img-fluid card-img-top sombra2" src="{{ url('img/relacionesbd.JPEG') }}" alt="Relaciones BD">

  </div>

</body>
@stop

</html>