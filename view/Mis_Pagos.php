
<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
      header("location:Administrador.php");
    }
  
  }
  else{
    header("location:Portada.php");
  }
  
  ?>
<head>
<title>Mis-Reservas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


  <!--efecto de notificaciones-->
<script src="./../assets/js/Alertas_reporte.js"></script>
  <link rel="stylesheet" type="text/css" href="./../assets/css/overhang.min.css" />
<script type="text/javascript" src="./../assets/js/overhang.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<!--notificaciones push-->
  <script src="../assets/plugins/push.js-master/push.js"></script>
  <script src="../assets/plugins/push.js-master/serviceWorker.js"></script>
  
  <script>
     
    
  
  </script>
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
.glyphicon.glyphicon-qrcode{
    font-size: 75px;
    color:black;
}

#drop{
  background:#424245!important;
  color-tex:black;
}

  
  </style>

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
      <a class="navbar-brand" href="http://localhost/Parkit/view/IndexLogeado.php"><div></div><img src="../assets/img/Logo.png" width="70" height="70"></a>
      <h5 class="navbar-brand"navbar-brand">Parkit</h5>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION["usuario"]["usuario"]?>
        </a>
        <div class="dropdown-menu" id="drop"aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Mi Perfil </a> <br>
          <a class="dropdown-item" href="#">Mis Pagos</a>

        </div>
      </li>

        <li><a href="./IndexLogeado.php">REALIZAR RESERVA</a></li>
        <li><a href="./Mis_Reserva.php">MIS RESERVAS</a></li>
        <li><a href="#contact">CONTACTO</a></li>
        <li id="cerrar"><a href="../validations/CerrarSession.php">CERRAR SESION</a></li>
      </ul>
      <br>
      
    </div>
  </div>
</nav>


<!-- Container (Usuario Section) -->
<div id="band" class="container text-center">
<i id="user"class='fas fa-user-circle' style='font-size:60px;color:black'></i>
  <h3 class="text-uppercase">Bienvenido:<?php echo $_SESSION["usuario"]["nombre"]?>-<?php echo $_SESSION["usuario"]["apellido"]?>||<?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'admin' : 'cliente';?></h3>
  <p></p>
  <br>
  <div class="row">
      <div class="col-lg-12 text-center ">
         
          
          </div>
          <br>
    </div>

</div>




<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center text-uppercase"> PAGOS RELIZADAS POR TI <?php echo $_SESSION["usuario"]["nombre"]?> </h3>
  
      
      <table align="center" cellspacing="2" cellpadding="2" border="1" bgcolor=dddddd>
		<tr>
      <td>ID Pago</td>
			<td>Rut</td>
			<td>Pago Cancelado</td>
      <td>Numero</td>
			<td>Fecha</td>
			<td>Hora</td>	
		</tr>

    <?php 
    $rut = $_SESSION["usuario"]["rut"];
		$conexion=mysqli_connect('localhost','root','','Parkit2');
		$sql="SELECT `rut`, `numero`, `id_pago`, `fecha`, `Hora_in`, `pago` FROM `Pagos` WHERE `rut` ='".$rut."'";
		$result=mysqli_query($conexion,$sql);
    if (mysqli_num_rows($result)==0) {
      echo'<h1 align="center">No tienes Pagos Registrado</h1>';
    }
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
		
     
			<td><?php echo $mostrar['id_pago'] ?></td>
			<td><?php echo $mostrar['rut'] ?></td>
			<td><?php echo $mostrar['pago'] ?></td>
      <td><?php echo $mostrar['numero'] ?></td>
      <td><?php echo $mostrar['fecha'] ?></td>
      <td><?php echo $mostrar['Hora_in'] ?></td>
    
		</tr>
	<?php 
	}
	 ?>
	</table>
      
    
       

 
  </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contacto</h3>
  <p class="text-center"><em>Soporte las 24hrs!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Escribenos!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Santiago, Chile</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefono: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: SoportParkit@Parkitchile.cl</p>
    </div>
    <div class="col-md-8">
    <form id="Registro-form" action="../validations/Reporte_code_user.php" method="POST">
        <div class="row">
          <div class="col-sm-4 form-group">
            <input class="form-control" id="name" name="txtNombre"  value="<?php echo $_SESSION["usuario"]["nombre"]?>" type="text"  readonly>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="txtCorreo"  value="<?php echo $_SESSION["usuario"]["correo"]?>" type="email"  readonly>
          </div>
          <div class="col-sm-4 form-group">
            <input class="form-control" id="email" name="txtRut" value="<?php echo $_SESSION["usuario"]["rut"]?>" type="text" readonly>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="txtReporte" placeholder="Comenta tus problemas con el sistema" rows="5" required></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button  class="btn pull-right" type="submit" >Enviar</button>
          </div>
        </div>
        </form>
    </div>
  </div>
  <br>
  <h3 class="text-center">Dueños</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Sebastian</a></li>
    <li><a data-toggle="tab" href="#menu1">Joaquin</a></li>
    <li><a data-toggle="tab" href="#menu2">Rafael</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Sebastian Aravena, Dueño</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Joaquin Dreau, Dueño</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Rafael Guerra, Dueño</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<!-- Image of location/map <img src="" class="img-responsive" style="width:100%"> -->


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="#" data-toggle="tooltip" title="Email"></a>Parkit.solution@parkitchile.cl</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
   