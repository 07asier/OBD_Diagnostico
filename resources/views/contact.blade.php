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

        @import "compass/css3";

@import url(https://fonts.googleapis.com/css?family=Merriweather);
$red: #e74c3c;

*, 
*:before, 
*:after {
   @include box-sizing(border-box); 
}


h1 {
   text-align: center;
   color: #a8a8a8;
   @include text-shadow(1px 1px 0 rgba(white, 1));
}

form {
   max-width: 600px;
   text-align: center;
   margin: 20px auto;
  font-family: 'Merriweather', sans-serif;
  
  input, textarea {
     border:0; outline:0;
     padding: 1em;
     @include border-radius(8px);
     display: block;
     width: 100%;
     margin-top: 1em;
     font-family: 'Merriweather', sans-serif;
     @include box-shadow(0 1px 1px rgba(black, 0.1));
     resize: none;
    
    &:focus {
       @include box-shadow(0 0px 2px rgba($red, 1)!important);
    }
  }
  
  #input-submit {
     color: white; 
     background: $red;
     cursor: pointer;
    
    &:hover {
       @include box-shadow(0 1px 1px 1px rgba(#aaa, 0.6)); 
    }
  }
  #input-clear {
     color: white; 
     background: $red;
     cursor: pointer;
    
    &:hover {
       @include box-shadow(0 1px 1px 1px rgba(#aaa, 0.6)); 
    }
  }
  
  textarea {
      height: 126px;
  }
}


.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right { width: 50%; }

.left {
     margin-right: 2%; 
}


@media (max-width: 480px) {
  .half {
     width: 100%; 
     float: none;
     margin-bottom: 0; 
  }
}


/* Clearfix */
.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}
    </style>

    <script type="text/javascript">
        
    function limpiar() { 
        document.getElementById('form').reset(); 
      } 
      function enviar(event){ 
        let nom = document.getElementById('form').elements; 
        for (var i = 0; i < nom.length; i++) { 
            //nom.elements[i].value; 
            if (nom[i].value === "") { 
              nom[i].style.backgroundColor = "red"; 
              event.preventDefault(); 
            } 
        } 
 
      } 

    </script>

</head>

<body >

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
                <li><a href="contact" id="menus">Quienes somos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register2" id="menus"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                <li><a href="login2" id="menus"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div >
                <h1 class="text-uppercase">
                    <p>CONTACTO</p>
                    <h3>Póngase en contacto con nosotros</h3>
                    
                </h1>
        
<form class="cf" onsubmit="enviar(event)">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Nombre">
    <input type="email" id="input-email" placeholder="Email">
    <input type="text" id="input-subject" placeholder="Asunto">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Mensaje"></textarea>
  </div>
  <input type="submit" value="Submit" id="input-submit">
  <input type="submit" value="Clear" id="input-clear" onclick="limpiar()">
</form>

           
</section>
<div id="footer1">


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
            Hecho por: Julen,Sergio y Asier-2017
            <a href="http://www.paradigmOz.com" target="_blank"></a>
        </p>
    </div>
</div>
</footer>


</body>


</html>
