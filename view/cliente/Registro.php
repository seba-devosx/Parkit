
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
	<link rel="stylesheet" type="text/css" href="assets/css/Miestilo-Registro.css">
  <link rel="stylesheet" type="text/css" href="assets/css/estilologin.css">

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
	<a class="navbar-brand font-weight-bold	 text-dark" href="">
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

<!--inicio de div de inicio-->
<div id="contenido"class="container-fluid  ">
	<div class="row d-flex justify-content-around  ">
		<div id="uno"class="col-12 col-md-12">
      <!--inicio de estructura de Login-->
      <div class="row d-flex justify-content-around logos">
				<div class="col-12 col-sm-12 col-md-12 mt-5 logos ">
					<div id="logitos">
            <div class="login-wrap">
            	<div class="login-html">
            		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingreso</label>
            		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registro</label>
            		<div class="login-form">
                  <form action="" method="post">
            			<div class="sign-in-htm">
            				<div class="group">
            					<label for="user" class="label ">Email</label>
            					<input id="user" type="text" class="input" name="txtemail">
            				</div>
            				<div class="group">
            					<label for="pass" class="label ">Contraseña</label>
            					<input id="pass" type="password" class="input" data-type="password"  name="txtpass">
            				</div>
            				<div class="group">
            					<input id="check" type="checkbox" class="check" checked>
            					<label for="check"><span class="icon"></span> Recuerdame</label>
            				</div>
            				<div class="group">
            					<input type="submit" class="button" value="Ingresar">
            				</div>
                  </form>
            				<div class="hr"></div>
            				<div class="foot-lnk">
            					<a class="text-light "href="#forgot">Olvidaste la contraseña?</a>
            				</div>
            			</div>
                  <form action="?c=cliente&a=Guardar" method="post">
            			<div class="sign-up-htm">
            				<div class="group">
            					<label for="user" class="label ">Nombre </label>
            					<input id="nombre" type="text" class="input"   required placeholder="Ingrese su nombre" name="nombre" >
            				</div>
            				<div class="group">
            					<label for="pass" class="label">Apellido</label>
            					<input id="apellido" type="text" class="input"  required placeholder="Ingrese su nombre" class="form-control" name="apellido" >
            				</div>
                    <div class="group">
                      <label for="pass" class="label ">Email </label>
                      <input id="email" type="text" class="input"  required placeholder="Ingrese su nombre" name="email" >
                    </div>
            				<div class="group">
            					<label for="pass" class="label ">Contraseña</label>
            					<input id="pass" type="password" class="input" data-type="password" required placeholder="Ingrese su nombre" name="pass">
            				</div>
            				<div class="group">
            					<input type="submit" class="button" value="Registro">
							</div>
							
							
                    </form>
            				<div class="hr"></div>
            				<div class="foot-lnk">
            					<label for="tab-1">Ya estas registrado?</a>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
					</div>
				</div>


			</div>
		</div>
    <div id=barrainferior class="col-12 col-md-12">
      <ul>
        <li>Numero telefonico:+5699875690</li>
        <li>Correo:Sebax_06@live.com</li>
        <li>Redes-sociales</li>
      </ul>
    </div>



		<!--textopara hacer efecto parallax-->



		<!--textopara hacer efecto parallax-->

<!---->

<!--fin de contenido-->

</div>
</div>
<main>
	<script type="text/javascript" src="assets/js/script.js"></script>
</main>
</body>
</html>
