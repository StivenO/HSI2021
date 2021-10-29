@extends('layaut')
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
  <title>HSI - Caja</title>
</head>
@section('content')

<body>

  <!-- Encabezado de página -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Caja financiera🤑</h1>
  </div><br>

  <!-- Fila de contenido -->
  <div class="row">

    <!-- Tarjeta de Activos -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                Activos</div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">$ <label class="text-gray-600">300.000</label></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-globe-americas fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjeta de Pasivos -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-danger text-uppercase mb-1">
                Pasivos </div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">$ <label class="text-gray-600">200.000</label></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-hourglass-half fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjeta de Patrimonio -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                Total</div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">$ <label class="text-gray-600">100.000</label></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cash-register fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <img class="img-fluid sombra1" src="{{ url('img/caja1.JPEG') }}" alt="Caja">


</body>
@stop

</html>