
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pa</title>
  <!--aqui comienza el codigo para el icono de la app en los dispositivos moviles y que para que la barra cambie de color-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#BBB9BE">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon-3.png">
	<link rel="apple-touch-icon" href="assets/img/favicon-3.png">
	<link rel="apple-touch-startup-image" href="assets/img/favicon-3.png">
	<link rel="manifest" href="assets/js/manifest.json">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/estilologin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	
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
  .container {
    padding: 80px 120px;
  }
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
  </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><div></div><img src="assets/img/favicon-3.png" width="30" height="30"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">INICIO</a></li>
        <li><a href="#tour">RESERVA</a></li>
        <li><a href="#contact">CONTACTO</a></li>
        <li><a href="../php/CerrarSesion.php">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="assets/img/estacionamiento1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Bienvenido</h3>
          <p>A Parkit reserva tu estacionamiento!</p>
        </div>      
      </div>

      <div class="item">
        <img src="assets/img/estacinamiento2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Plazas Automatizadas</h3>
          <p>A lo largo de todo Chile</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="assets/img/estacionamiento5.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Usa Parkit</h3>
          <p>Registrate Ahora!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (Usuario Section) -->
<div id="band" class="container text-center">
  <h3>BIENVENIDO<?php echo ":". $_SESSION["email"]?></h3>
  <p><em>No Esperes Mas y has tu reserva!</em></p>
  <p>Estacionamientos Reservados:</p>
  <br>

  <div class="row">
    <div class="col-sm-12 ">
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">ESTACIONAMIENTOS</h3>
    <p class="text-center">El Mejor Servicio De Automatizacion De Estacionamiento
        <br>Selecciona cualquier estacionamiento</p>

 <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/img/ubi.png" alt="Paris" width="400" height="300">
          <p><strong>Estacionamiento 1</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Reservar</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/img/ubi.png" alt="New York" width="400" height="300">
          <p><strong>Estacionamiento 2</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Reservar</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="assets/img/ubi.png" alt="San Francisco" width="400" height="300">
          <p><strong>Estacionamiento 3</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Reservar</button>
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
          <h4><span class="glyphicon glyphicon-lock"></span> Reserva</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="assets/php/Reserva.php" method="post">
          <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span><?php echo " ". $_SESSION["email"]?></label>
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span> Hora de Entrada</label>
              <input type="time" class="form-control" id="horaentrada" name="txtentrada">
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Hora de Salida</label>
              <input type="time" class="form-control" id="horasalida" name="txtsalida">
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut</label>
              <input type="text" class="form-control" id="horasalida" name="txtrut">
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Estacionamiento</label>
              <select name="txtesta" id="">
                <option value="E1">Estacionamiento 1</option>
                <option value="E2">Estacionamiento 2</option>
                <option value="E3">Estacionamiento 3</option>
              </select>
            </div>
              <button type="submit" class="btn btn-block">Reservar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
              
          </form>
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