
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Espacio para realizar ecript-->
	<title>IT-Parking</title>
	<meta name="IT-Parking" content="Bienvenido al nuevo sistema de estacionamientos que revolucionara el mercado chileno">
	<!--aqui comienza el codigo para el icono de la app en los dispositivos moviles y que para que la barra cambie de color-->
	<meta name="theme-color" content="#BBB9BE">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="shortcut icon" type="image/png" href="assets/img/logo1.png">
	<link rel="apple-touch-icon" href="assets/img/logo1.png">
	<link rel="apple-touch-startup-image" href="assets/img/logo1.png">
	<link rel="manifest" href="assets/js/manifest.json">



	<!--jquery para que funcione el deslazamiento de la navbar-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
	<!--css de bootstrap-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!--css-hoja de estilo-->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/Miestilo-portada.css">

  

</head>
<body>
	<!--barra de navegacion que contiene los accesos directos a los demas en laces a los demas apartados de la pagina web
	-navbar-xpanda=hace que se expandan los elemtaros de la barra al agranadar la pantalla,
	-sticky-top=hace que la barra se quede pegada al desplazar la pnatalla
	-mr-auto=ajuste de margenes automatico
	-text-center=centr los textos dentro del menu de amburguesa
	-d-flex justify contetnt-around=separa dos botones dentro del menu de hamburguesa
     -ml-auto=centra los textos de la barra
     m-2= clase que ayuda arealizar un epsaciado de 2 pixeles o deenediedo del numero de margen que deseas
     text-justify=acomoda de mejor manera el texto en los parrafos
    text-capitalize=coloca de manera automatica las mayusculas-->

<nav class="navbar navbar-dark bg-secondary  navbar-expand-md ">
	 <!--logo y texto-->
	<a class="navbar-brand font-weight-bold	 text-dark" href="http://localhost:8080/pwa/html/Portada.html">
    <img src="assets/img/logo1.png" width="100" height="100" class="d-inline-block align-top" alt="">
    <h2 class="d-inline-center " height="-100px">IT-Parking</h2>
  </a>
 <!--boton tipo hamburguesa-->
  <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" 						aria-expanded=" false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 <!--iconos tipo texto en la barra -->
  <div class="collapse navbar-collapse  text-dark" id="navbarTogglerDemo01">
	<div class="navbar-nav mr-auto ml-auto text-center  ">
      <a class="nav-item nav-link   text-dark" href="#">Postulaciones</a>
      <!--aqui se añade la clase nav-item-dropdown-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Trabaja con nosotros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink
        ">
          <a class="dropdown-item" href="#">Envia tu CV </a>
          <a class="dropdown-item" href="#">Mas novedades</a>

        </div>
      </li>
      <!--aqui finaliza el añadido para hacer un menu desplegable-->
     <a class="nav-item nav-link  text-dark" href="#">Ubicaciones del servicio</a>
      <a class="nav-item nav-link  text-dark" href="#">Conocenos</a>
    </div>
    <!-- div class="d-flex justify-content-center ">
    	<a href="" class="btn btn-secondary mr-2 mr-sm-2">Registrate</a>
    	<a href="" class="btn btn-secondary	">Login</a>
    </div>
   </div>-->
</nav>
<!--fin de nabvar-->

<!-- inicio jumbotron  -->
<div id="jumbotron"class="jumbotron jumbotron-fluid ">
  <h1 class="display-4 text-justify text-capitalize ml-2">bienvenido a IT-Parking </h2>
  <p class="lead ml-2 text text-capitalize text-capitalize">este es un servicio que revolucionara el mercado de los estacionamiento en chile.</p>
  <hr class="my-4 bg-secondary">
  <p class="ml-2 text capitalize">si deseas aprender como funciona nuestro servicio o ser parte de esta empresa por favor picha qui abajo</p>
  <a class="btn btn-primary btn-lg ml-2 text-justify text-capitalize" href="http://localhost:8080/pwa/php/cerrar-perfil.php" role="button">Cerrar-Session</a>
</div>
<!-- fin jumbotron  -->
<!--inicio de contenido-->
<div id="contenido"class="container-fluid  ">
	<div class="row d-flex justify-content-around  ">
		<div id="uno"class="col-12 col-md-12">
		</div>
		<!--textopara hacer efecto parallax-->
				<div id=texto1 class="col-12 col-md-12">
						<p class=" col-12 col-md-12 text-justify text-capitalize" >el nuevo sistema de innovacion en chile, qure realizara una revolucion en el mercado Nacional</p>
				</div>


		<!--textopara hacer efecto parallax-->


		<br>
		<!--textopara hacer efecto parallax-->

<!---->

<!--fin de contenido-->
<div id=barrainferior class="col-12 col-md-12">
	<ul>
		<li>Numero telefonico:+5699875690</li>
		<li>Correo:Sebax_06@live.com</li>
		<li>Redes-sociales</li>
	</ul>
</div>
</div>
</div>
<main>
	<script type="text/javascript" src="assets/js/script.js"></script>
</main>
</body>
</html>
