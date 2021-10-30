<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title> HSI - Registrarse </title>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 d-none d-lg-block"> <img class="img-fluid" id="img-registrar" src="img/login.jpeg" alt="Regístrate!"></div>

                    <div class="col-lg-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Create una Cuenta!</h1>
                            </div>
                            <form class="user" role="form" method="POST" action="{{ url('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico" required="" name="email">

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="" name="password">

                                </div>
                                <div class="form-group">
                                    <div class="checkbox i-checks">
                                        <label>
                                            <input type="checkbox" required=""><i></i> Aceptar terminos y condiciones
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-user btn-block">Registrar Cuenta</button>
                                <hr>
                                <a href="login" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registrarse con Google
                                </a>
                                <a href="login" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Registrarse con Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login">¿Ya tienes una Cuenta? Ingresa!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>