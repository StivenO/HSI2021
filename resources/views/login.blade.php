<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hardware Store Inventory es una Aplicación Web destinada a la gestión de inventario de las ferreterías">
    <meta name="keywords" content="Ferreteria, Hardware Store, Inventario, Inventory, Aplicación Web">
    <meta name="author" content="Hardware Store Inventory">
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">

    <title>HSI - Login</title>

    <!-- Fuentes personalizadas para esta plantilla-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla-->
    <link href="{{ url('css/estilo.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e44764d2ff.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container">

        <!-- Fila exterior -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Fila anidada dentro del cuerpo de la tarjeta -->
                        <div class="row">
                            <div class="col-lg-7 d-none d-lg-block"><img class="img-fluid" id="img-registrar" src="img/registrar.jpeg" alt="Regístrate!"></div>
                            <div class="col-lg-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/logo.png" alt="Logo Hardware Store Inventory" width="100%" height="100%" />
                                    </div><br>
                                    @if(Session::get('mensaje2'))
                                    <div class="alert alert-{{Session::get('tipo2')}} alert-dismissible fade show" role="alert">
                                        {!! Session::get('icono2') !!}
                                        {{ Session::get('mensaje2') }}
                                    </div>
                                    @endif
                                    <form form class="m-t" role="form" action="validate" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input name="nick" class="form-control form-control-user" placeholder="Usuario" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Contraseña" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center">
                                                Los datos deben ser válidos
                                            </div><br>
                                            @if(Session::get('mensaje'))
                                            <div class="alert alert-{{Session::get('tipo')}} alert-dismissible fade show" role="alert">
                                                {!! Session::get('icono') !!}
                                                {{ Session::get('mensaje') }}
                                            </div>
                                            @endif
                                        </div>
                                        <input type="Submit" class="btn btn-primary btn-user btn-block" value="Ingresar">
                                        </a><br>

                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="register">¿No tienes Cuenta? ¡Registrate!</a>
                                    </div>
                                    <footer class="text-center">
                                        <hr>
                                        <p>&copy; 2021 <a> Hardware Store Inventory </a></p>
                                    </footer> <!-- / #pie de página principal -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>