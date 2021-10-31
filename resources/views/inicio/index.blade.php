@extends('layaut')
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
  <tittle></tittle>
  <!-- CSS only -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
@section('content')

<body>

  <!-- Encabezado de página -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Página Principal</h1>
  </div><br>

  <!-- Fila de contenido -->
  <div class="row">

    <!-- Tarjeta de inventario -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                Inventario</div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">{{$inventario}} <label class="text-gray-500">prods</label></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjeta de ventas (mensuales) -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                Ventas </div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">$ {{$ventas}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjeta de historial -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-info text-uppercase mb-1">
                Clientes</div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">{{$nclientes}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjeta de proveedores -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-warning text-uppercase mb-1">
                Proveedores</div>
              <div class="h5 mb-0 font-weight-bold text-gray-600">{{$nproveedores}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fila de contenido -->
  <br>
  <div class="row">

  </div>

  <!-- Fila de contenido -->
  <div class="row">

    <!-- Fila de columna -->
    <div class="col-lg-4 mb-3">

      <!-- Espacio de alertas Stock Mínimo -->
      <div class="card shadow mb-3">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Espacio de alertas</h6>
        </div>
        <div class="card-body text-gray-600">
          @if ($alerta > '0')
          <p>
            <hr />
          <p class=""><a style="colo:#c0c0c0" href="{{ url('h_abastecimiento/abastecer') }}"> Hay {{$alerta}} productos por debajo del Stock mínimo </a></p>
          <hr />
          </p>
          @else {
          <p> No hay alertas </p>
          }
          @endif
        </div>
      </div>
    </div>

    <div class="col-lg-8 mb-6">

      <!-- Enfoque de desarrollo -->
      <div class="card shadow mb-2">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Info Material Externo</h6>
        </div>
        <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 22rem;" src="img/externo.svg" alt="computador unDraw">
          </div>
          <p>Esta aplicación web tomó como base la plantilla SB Admin2 de
            <a target="_blank" rel="nofollow" href="https://startbootstrap.com/theme/sb-admin-2">Bootstrap</a>, y
            facilitó el uso de imágenes gratuitas con <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw.</a>
            Aparte de eso, fue desarrollada con el framework <a target="_blank" rel="nofollow" href="https://laravel.com/">Laravel.</a>
          </p>
        </div>
      </div>

    </div>
  </div>

</body>
@stop

</html>