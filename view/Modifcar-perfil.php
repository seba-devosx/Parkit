
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
      
      
    }
    else{
      header("location:http://localhost/parkit/");
    }
  }
  else{
    header("location:http://localhost/parkit/");
  }
  
  ?>
  
<head>
<title>Parkit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!--datatable content-->
  <script src="../../assets/js/datatable.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/js/jquery-ui/jquery-ui.min.css" />
  <link href="../../assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <script src="../../assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
  <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
  <script src="../../assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

	<!--aqui comienza el codigo para el icono de la app en los dispositivos moviles y que para que la barra cambie de color-->
	<meta name="theme-color" content="#BBB9BE">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../../assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-startup-image" href="../../assets/favicon/apple-icon-144x144.png">
  <link rel="manifest" href="../cliente/manifest.json">
<!--efacto de notificaciones-->
<script src="./assets/js/Alertas-login.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/overhang.min.css" />
<script type="text/javascript" src="./assets/js/overhang.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  /*.container {
    padding: 110px 120px;
  }*/
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
    height: 80px;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
#user{
  margin-top:10px;
}
#Nombre_usuario{
    border-right: none;
    border-left: none;
    border-top: none;
  }
#Apellido_usuario{
  border-right: none;
    border-left: none;
    border-top: none;
}
#Rut_usuario{
border-right: none;
    border-left: none;
    border-top: none;
}
#Correo_usuario{
border-right: none;
    border-left: none;
    border-top: none;
}
#Edad_usuario{
border-right: none;
    border-left: none;
    border-top: none;
} 
#Pass_usuario{
border-right: none;
    border-left: none;
    border-top: none;
} 
#Patente{
border-right: none;
    border-left: none;
    border-top: none;
} 
#Numero{
border-right: none;
    border-left: none;
    border-top: none;
} 
  
  </style>

<?php
    require_once '../controller/UsuarioControlador.php';
    require '../helps/helps.php';

    $usuario = null;
      if (isset($_GET["rut"])) {
        $rut  = validar_campo($_GET["rut"]);
        $usuario = UsuarioControlador::getUsuarioporrut($rut);
      }
 ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-expand-md "><!--navbar-fixed-top-->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://localhost/Parkit/view/IndexLogeado.php"><div></div><img src="./../assets/img/Logo.png" width="70" height="70"></a>
      <h5 class="navbar-brand"navbar-brand">Parkit</h5>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION["usuario"]["usuario"]?>
        </a>
        <div class="dropdown-menu" id="drop"aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./Modifcar-perfil.php">Mi Perfil </a> <br>
          <a class="dropdown-item" href="./Mis_Pagos.php">Mis Pagos</a>

        </div>
      </li>
        <li><a href="http://localhost/Parkit/view/IndexLogeado.php">VOLVER AL INCIO</a></li>
        <li><a href="../validations/CerrarSession.php">CERRAR SESION</a></li>
      </ul>
      <br>
      
    </div>
  </div>
</nav>



<!-- Container (Usuario Section) -->
<div id="band" class="container text-center">
<i id="user"class='fas fa-user-circle' style='font-size:60px;color:black'></i>
  <h3 class="text-uppercase">Bienvenido:<?php echo $_SESSION["usuario"]["nombre"]?>-<?php echo $_SESSION["usuario"]["apellido"]?>||<?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'admin' : 'cliente';?></h3>
  <br>
  <div class="row">
    <div class="col-md-12">
    <div class="w3-container">
    <div id="Instrucciones" class="btn" data-toggle="collapse" data-target="#Instrucciones-collapse">Instrucciones</div>
          <div class="w3-container">
              <div id="Instrucciones-collapse" class="collapse w3-panel w3-card">
                <p class="text-capitalize">Hola,<?php echo $_SESSION["usuario"]["nombre"]?> si has llegado hasta aqui es por que tienes alguno de tus datos incorrectos, de ser asi editalos para mejorar la experiencia</p>
                 <!--aca se inicia el slide de intrucciones para explicar el funcionamiento del sistem de reserva-->
                 <p class="text-uppercase">Instrucciones de edicion</p>
                 <p class="text-uppercase">1.-debes ver el campo donde tu dato este incorrecto o mal escrito y vuelvelo a escribir</p>
                 <p class="text-uppercase">2.-Cuando finalices selecciona Guardar Cambios y Listo !!</p>
                 <p class="text-uppercase">1.-Si ya no quieres pertenecer a este servicio puedes dar tu cuenta de baja</p>
                </div>
                
                
            </div>
              <div class="w3-panel w3-card">
                <p class="text-capitalize text-center">Panel de edicion[<?php echo $usuario->getNombre()?>]</p>
                <form id="Registro-form" action="../validations/Actualizar.php" method="POST">
                   <p class="text-center">NOMBRE:</p>
                   <div class="text-center"><input type="text" name="txtNombre" id="Nombre_usuario" size="30"placeholder="Ingresa el nombre del cliente" value="<?php echo $usuario->getNombre()?>" required></div>
                   <p class="text-center">APELLIDO:</p>
                   <div class="text-center"><input type="text" name="txtApellido" id="Apellido_usuario" size="30"placeholder="Ingrese su Apellido" value="<?php echo $usuario->getApellido()?>" required></div>
                   <p class="text-center">RUT:(sin puntos solo guion)</p>
                   <div class="text-center"><input type="text" name="txtRut" id="Rut_usuario" size="30"placeholder="Ingrese su Rut" value="<?php echo $usuario->getRut()?>" required></div>
                   <p class="text-center">CORREO:</p>
                   <div class="text-center"><input type="text" name="txtCorreo" id="Correo_usuario" size="30"placeholder="Ingrese su Correo@.com" value="<?php echo $usuario->getCorreo()?>" required></div><br>
                   <p class="text-center">NICKNAME:</p>
                   <div class="text-center"><input type="text" name="txtUsuario" id="Correo_usuario" size="30"placeholder="Ingrese su nickname" value="<?php echo $usuario->getUsuario()?>" required></div><br>
                   <p class="text-center">NUMERO TELEFONICO:</p>
                   <div class="text-center"><input type="text" name="txtNumero" id="Numero" size="30"placeholder="Ingrese su numero" value="<?php echo $usuario->getNumero()?>" required></div><br>
                   <p class="text-center">PATENTE DE TU VEHICULO:</p>
                   <div class="text-center"><input type="text" name="txtPatente" id="Patente" size="30"placeholder="Ingrese su patente" value="<?php echo $usuario->getPatente()?>" required></div><br>
                   <p class="text-center">CONSTRASEÑA:</p>
                   <div class="text-center"><input type="text" name="txtPass" id="Patente" size="30"placeholder="Ingrese su contraseña" value="<?php echo $usuario->getPass()?>" required></div><br>
                                
                    <button class="btn btn-block" type="submit">Registar</button>
                      
                  </form>
                  <br>
                  <p class="text-justify text-capitalize ">Seleccionando aqui puedes dar de baja tu cuenta</p>
                  
                 
                  <a  id="boton" class="btn btn-danger btn-sm"  href="./Eliminar.php">Dar de baja</a>
                      
              
                                
                
                
                
              </div>
        </div>    
    </div>
    <div class="col-md-12">
       
    </div>
  </div>

    <br>
    <br>
</div>


</body>
</html>