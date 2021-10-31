@extends('layaut')
<!DOCTYPE html>
<html>

<head>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
  <title>HSI - Equipo</title>
</head>
@section('content')

<body>
  <div class="container">

    <!-- Encabezado de página -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Equipo de Desarrollo</h1>
    </div>

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>

      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="col-md-6" style="float:left">
            <div class="card mb-2">
              <img class="img-fluid card-img-top" src="{{ url('img/acosta.JPEG') }}" alt="Acosta">
              <div class="card-body">
                <h4 class="card-title text-gray-800">Andrés David Acosta Buitrago</h4>
                <p class="card-text">Software Developer Front-end.</p>
                <a href="https://api.whatsapp.com/send?phone=573184464480&text=Hola!!%20Me%20interesa%20saber%20m%C3%A1s%20sobre%20Hardware%20Store%20Inventory..." class="btn btn-success">Contáctame!</a>
              </div>
            </div>
          </div>

          <div class="col-md-6" style="float:left">
            <div class="card mb-2">
              <img class="img-fluid card-img-top" src="{{ url('img/stiven.JPEG') }}" alt="Stiven">
              <div class="card-body">
                <h4 class="card-title text-gray-800">Nelson Stiven Ortega Urbano</h4>
                <p class="card-text">Software Developer Back-end.</p>
                <a href="https://api.whatsapp.com/send?phone=573002999905&text=Hola!!%20Me%20interesa%20saber%20m%C3%A1s%20sobre%20Hardware%20Store%20Inventory..." class="btn btn-success">Contáctame!</a>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="col-md-6" style="float:left">
            <div class="card mb-2">
              <img class="img-fluid card-img-top" src="{{ url('img/marlon.JPEG') }}" alt="Marlon">
              <div class="card-body">
                <h4 class="card-title text-gray-800">Marlon Steven Mayorga Moncayo</h4>
                <p class="card-text">Software Developer Back-end.</p>
                <a href="https://api.whatsapp.com/send?phone=573233794426&text=Hola!!%20Me%20interesa%20saber%20m%C3%A1s%20sobre%20Hardware%20Store%20Inventory..." class="btn btn-success">Contáctame!</a>
              </div>
            </div>
          </div>

          <div class="col-md-6" style="float:left">
            <div class="card mb-2">
              <img class="img-fluid card-img-top" src="{{ url('img/arroyave.JPEG') }}" alt="Arroyave">
              <div class="card-body">
                <h4 class="card-title text-gray-800">Andrés Felipe Arroyave Chicangana</h4>
                <p class="card-text">Software Developer Back-end.</p>
                <a href="https://api.whatsapp.com/send?phone=573106268204&text=Hola!!%20Me%20interesa%20saber%20m%C3%A1s%20sobre%20Hardware%20Store%20Inventory..." class="btn btn-success">Contáctame!</a>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>

</body>
@stop

</html>