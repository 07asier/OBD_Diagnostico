<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>OBD Diagnostico</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="css/estiloshome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Estilos del footer -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <style type="text/css">
            footer {
                background-color: black;
            }
            #footer1 {
                height: 82vh;
            }
            #parrafo{
                color: lightblue;
            }
        </style>

    </head>
    <body>
    <!-- Navigation -->
        <nav class="navbar-inverse" id="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" id="titulo">Racegnostic</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="" id="menus">Inicio</a></li>
                        <li><a href="" id="menus">Quienes somos</a></li>
                        <li><a href="contact" id="menus">Contacto</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register2" id="menus"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                        <li><a href="login2" id="menus"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
        @if($errors->any())
            <div class="alert alert-danger">
                <p>No se puede iniciar sesión, no has introducido un código</p>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Inicio de sesión de administrador</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Código de acceso</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="codigo" value="{{ old('codigo') }}" required autofocus>

                                        @if ($errors->has('codigo'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('codigo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                    <br />
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Iniciar sesión como Invitado
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer p-t-1">
            <div class="container">
                <div class="pull-right">
                    <nav class="navbar" style="background:transparent; color: black;">
                        <nav class="nav navbar-nav izquierda">
                            <a class="nav-item nav-link" href="#navbar">Home</a>
                            <a class="nav-item nav-link" href="contact">Contacto</a>
                            <p id="parrafo">Diagnostico Coches Team©</p>

                        </nav>
                    </nav>
                </div>

                <a href="http:\\facebook.es"><i class="fa fa-facebook-official fa-2x"></i></a>
                <a href="http:\\pinterest.com"><i class="fa fa-pinterest-p fa-2x"></i></a>
                <a href="http:\\twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="http:\\flickr.com"><i class="fa fa-flickr fa-2x"></i></a>
                <a href="http:\\linkedin.com"><i class="fa fa-linkedin fa-2x"></i></a>

                <p class="h6">
                    Hecho por: Julen, Sergio y Asier - 2017
                    <a href="http://www.paradigmOz.com" target="_blank"></a>
                </p>
            </div>
        </footer>
    </body>
</html>
