
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
<title>Boleta-QR</title>
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

<!--efectos de alertas-notificaciones-->
  <script src="../../assets/js/alertas_push.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/overhang.min.css" />
<script type="text/javascript" src="./assets/js/overhang.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--notificaciones push-->
  <script src="../assets/plugins/push.js-master/push.js"></script>
  <script src="../assets/plugins/push.js-master/serviceWorker.js"></script>
  
  <script>
        Push.create("Tu Reserva Esta Lista!!",{
            body: "Tu Reserva Esta Lista, Presenta El QR Al Llegar al Estacionamiento",
            icon: '../assets/img/Logo.png',
            timeout: 10000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    
  
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
      <a class="navbar-brand" href="#myPage"><div></div><img src="../assets/img/Logo.png" width="70" height="70"></a>
      <h5 class="navbar-brand"navbar-brand">Parkit</h5>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      
      <li><a class="text-uppercase"><?php echo $_SESSION["usuario"]["usuario"]?></a></li>
        <li><a href="../view/cliente/IndexLogeado.php">REALIZAR RESERVA</a></li>
        <li><a href="#tour">TICKET DE RESERVA</a></li>
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
  <p class="text-justify text text-capitalize center-block"><h1 class="text-capitalize">En hora Buena!!</h1>Tu reserva ya fue registrada,
    Si no conoces que paso realizar porfavor cosulta las indicaciones en el apartado de las intrucciones .</p>
  <p><em>No Esperes Mas!!!</em></p>
  <p></p>
  <br>
  <div class="row">
      <div class="col-lg-12 text-center ">
          <div id="Registro" class="btn" data-toggle="collapse" data-target="#Registro-collapse">Registro</div>
          <div class="w3-container">
              <div id="Registro-collapse" class="collapse w3-panel w3-card">
                <p class="text-capitalize">complete el formulario para ser parte de este gran servicio de estacionamientos</p>
                 <!--aca se inicia el slide de intrucciones para explicar el funcionamiento del sistem de reserva-->
                 <p class="text-uppercase">instrucciones de uso:</p>
                
                </div>
            </div>
          </div>
          <br>
         

   
    </div>
    <br>
    <br>
    
</div>
  

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">TICKET DE ESTACIONAMIENTO</h3>
    <p class="text-center">El siguiente tickect es tu pase para poder habilitar tu reserva en el estacionamiento
        <br>Vamos quema tu codigo y vive la experiencia parkit!!</p>

 <div class="row text-center">
      <div class="col-sm-4 col-md-offset-4">
        <div class="thumbnail">
        <br>
        <i class="glyphicon glyphicon-qrcode"></i>
          <p><strong>Codigo QR que Representa Tu Entrada</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Codigo QR estacionamiento</button>
        </div>
      </div>
      
      
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> CodigoQR</h4>
        </div>
        <div class="modal-body">
          <div class="text-center">
          <h2>Debe Mostrar Este Codigo Al Entrar</h2>
          <?php

                  include('./../assets/lib/phpqrcode/qrlib.php');
                

                  // how to save PNG codes to server
                  
                  $tempDir = './../temp/';
                  
                  $codeContents = echo $_SESSION["usuario"]["apellido"];
                  
                  // we need to generate filename somehow, 
                  // with md5 or with database ID used to obtains $codeContents...
                  $fileName = '005_file_'.md5($codeContents).'.png';
                  
                  $pngAbsoluteFilePath = $tempDir.$fileName;
                  $urlRelativeFilePath = $tempDir.$fileName;
                  
                  // generating
                  if (!file_exists($pngAbsoluteFilePath)) {
                      QRcode::png($codeContents, $pngAbsoluteFilePath);
                      //echo 'File generated!';
                      echo '<hr />';
                  } else {
                      //echo 'File already generated! We can use this cached file to speed up site on common codes!';
                      //echo '<hr />';
                  }
                  
                  // echo 'Server PNG File: '.$pngAbsoluteFilePath;
                 // echo '<hr />';
                  
                  // displaying
                  echo '<img src="'.$urlRelativeFilePath.'" />';
                  

            ?>
          
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
          <p><a href="#">Necesitas Ayuda ?</a></p>
        </div>
      </div>
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
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
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