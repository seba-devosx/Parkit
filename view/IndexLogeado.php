
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
<title>Perfil-usuario</title>
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
 <!--separar el estilo del html--->

  
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(document).ready(function(){
    $("#hola").click(function(){
          jQuery(function() {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Reserva Realizada y pago realizado',
              showConfirmButton: false,
              timer: 3000
            });
         });
         
      });
   });
   $(document).ready(function(){
    $("#hola2").click(function(){
          jQuery(function() {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Reserva Realizada y pago realizado',
              showConfirmButton: false,
              timer: 3000
            });
         });
         
      });
   });
   $(document).ready(function(){
    $("#hola3").click(function(){
          jQuery(function() {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Reserva Realizada y pago realizado',
              showConfirmButton: false,
              timer: 3000
            });
         });
         
      });
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
          <a class="dropdown-item" href="./Modifcar-perfil.php?rut=<?php echo $_SESSION["usuario"]["rut"]?>">Mi Perfil </a>
          <a href=""></a>
          <a class="dropdown-item" href="./Mis_Pagos.php">Mis Pagos</a>

        </div>
      </li>
        <li><a href="#tour">REALIZAR RESERVA</a></li>
        <li><a href="./Mis_Reserva.php"> MIS RESERVAS</a></li>
        <li><a href="#contact">REPORTE DE INCIDENTES</a></li>
        <li id="cerrar"><a href="../validations/CerrarSession.php">CERRAR SESION</a></li>
      </ul>
      <br>
      
    </div>
  </div>
</nav>
<?php

?>


<!-- Container (Usuario Section) -->
<div id="band" class="container text-center">
<i id="user"class='fas fa-user-circle' style='font-size:60px;color:black'></i>
  <h3 class=" col-md-12 text-uppercase ">Bienvenido:</h3>
  <h3 class="col-6 text-uppercase"><?php echo $_SESSION["usuario"]["nombre"]?></h3>
 <h3 class="text-uppercase "><?php echo $_SESSION["usuario"]["apellido"]?>||<?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'admin' : 'cliente';?></h3>
  <p class="text-justify text text-capitalize center-block"><h1 class="text-capitalize">nota:</h1>Antes de iniciar a interactuar con el sistema de reserva te dejamos unas intrucciones para su uso,
     si ya conoces el funcionamiento omite este comentario y sube al siguiente nivel del desarrollo plazas 100% automatizadas del pais.</p>
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
                 <p class="text-uppercase">1.-debes seleccionar una ubicacion a tu gusto</p>
                 <p class="text-uppercase">2.-Algunos campos se rellena de forma automatica asi que no te asustes tu solo ajusta la hora y fecha y el lugar a autilizar</p>
                 <p class="text-uppercase">3.-Luego de que finaliza te llevara a otro apartado donde optendras un codigo QR que est tu ticket para poder accesar</p>
                 <p class="text-uppercase">4.-En caso de problemas futuros podras dejar tu problema expresa en el reporte de inicdencias</p>
                 
                                    
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
    <h3 class="text-center">ESTACIONAMIENTOS</h3>
    <p class="text-center">El Mejor Servicio De Automatizacion De Estacionamiento
        <br>Selecciona cualquier estacionamiento</p>

 <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../assets/img/ubi.png" alt="Paris" width="400" height="300">
          <p class="text-uppercase" ><strong>Boulevard</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Reservar Ya!!</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img  src="../assets/img/ubi.png" alt="New York" width="400" height="300">
          <p class="text-uppercase" ><strong>Cine</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal2" >Reservar Ya!!</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../assets/img/ubi.png" alt="San Francisco" width="400" height="300">
          <p class="text-uppercase"><strong>Supermercado</strong></p>
          <button class="btn" data-toggle="modal" data-target="#myModal3" >Reservar Ya!!</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content boulevard-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Reserva1</h4>
        </div>
        <div class="modal-body">
          <form id="formRegistro" role="form" action="../validations/Reserva_code.php" method="post">
          <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span class="strong">Hola, la siguiente reserva se realizara al nombre de: </label>
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut(este campo se completa de manera automatica)</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["usuario"]?>"  name="txtUsuario" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut(este campo se completa de manera automatica)</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["rut"]?>"  name="txtRut" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span>Numero de emergencia</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["numero"]?>"  name="txtNumero" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span>Patente del vehiculo </label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["patente"]?>"  name="txtPatente" readonly >
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span> Hora de Entrada</label>
              <input type="time" class="form-control" id="horaentrada"  min="08:00:00" max="20:00:00" name="txtHora_in" required>
            </div>
      
            <div class="form-group">
              <label for="psw"><span class=""></span> Fecha Reserva</label>
              <input type="date" class="form-control" id="horasalida"  value="2020-06-01"  min="2020-06-01"  max="2030-04-01" name="txtFecha" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span>Selecciona estacionamiento</label>
              <select name="txtIdestaciona" id="id_estacionamientos" >
              <?php
                      try {
                        $cnx = new PDO('mysql:host=localhost;dbname=Parkit2;charset=utf8', 'root', '');
                        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $cnx->prepare("SELECT `ubicacion`, `id_estacionamiento`, `estacionamiento`FROM `Estacionamientos` WHERE `ubicacion` = 'Boulevard'"); 
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC); 

                        /* creamos un while para optener fila a fila los refultados devueltos mediante fetch() */
                        while ($row = $stmt->fetch()) {

                            if ($row['reserva']) {
                              
                           }
                            echo '<option value="'.$row['id_estacionamiento'].' ">'.$row['ubicacion']."-".$row['estacionamiento'].'</option>';

                           $reserva = $row["id_estacionamiento"];
                            
                        }
                        

                    }
                    catch(PDOException $e) {
                      $e = "No hay Reservas Realizadas";
                      echo '<option value="'.$row['estacionamiento'].' "></option>';
                        //echo "Error: " . $e->getMessage();
                    }
                    $cn = null;
           
              
              ?>
              </select>

            </div>
            
            
            <h1>MONTO TOTAL DE LA RESERVA: $1000.</h1>
           
            
            
              <button id="hola" type="submit"  class="btn btn-block">Reservar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
              
          </form>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left"  data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
          <p><a href="#">Necesitas Ayuda ?</a></p>
        </div>
      </div>
    </div>  
  </div>
<!-- Modal -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content cine-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Reserva2</h4>
        </div>
        <div class="modal-body">
          <form id="formRegistro" role="form" action="../validations/Reserva_code.php" method="post">
          <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span class="strong">Hola, la siguiente reserva se realizara al nombre de: </label>
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut(este campo se completa de manera automatica)</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["usuario"]?>"  name="txtUsuario" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut(este campo se completa de manera automatica)</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["rut"]?>"  name="txtRut" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span>Numero de emergencia</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["numero"]?>"  name="txtNumero" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span>Patente del vehiculo </label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["patente"]?>"  name="txtPatente" readonly >
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span> Hora de Entrada</label>
              <input type="time" class="form-control" id="horaentrada"  min="08:00:00" max="20:00:00" name="txtHora_in" required>
            </div>
      
            <div class="form-group">
              <label for="psw"><span class=""></span> Fecha Reserva</label>
              <input type="date" class="form-control" id="horasalida"  value="2020-06-01"  min="2020-06-01"  max="2030-04-01" name="txtFecha" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span>Selecciona estacionamiento</label>
              <select name="txtIdestaciona" id="id_estacionamientos" >
              <?php
                      try {
                        $cnx = new PDO('mysql:host=localhost;dbname=Parkit2;charset=utf8', 'root', '');
                        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $cnx->prepare("SELECT `ubicacion`, `id_estacionamiento`, `estacionamiento`FROM `Estacionamientos` WHERE `ubicacion` = 'Cine'"); 
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC); 

                        /* creamos un while para optener fila a fila los refultados devueltos mediante fetch() */
                        while ($row = $stmt->fetch()) {
                            //echo $row['ubicacion'] . " - " . $row['id_estacionamiento'] . " - " .$row['estado'] . "<br>";
                            if ($row['reserva']) {
                              
                           }
                            echo '<option value="'.$row['id_estacionamiento'].' ">'.$row['ubicacion']."-".$row['estacionamiento'].'</option>';
                        }

                    }
                    catch(PDOException $e) {
                      $e = "No hay Reservas Realizadas";
                      echo'<h1 class="text-center">No Hay Reservas Realizadas</h1>';
                        //echo "Error: " . $e->getMessage();
                    }
                    $cn = null;
           
              
              ?>
              </select>

            </div>
            
            <h1>MONTO TOTAL DE LA RESERVA: $1000.</h1>
            
            
              <button id="hola2" type="submit"  class="btn btn-block">Reservar 
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
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content supermercado-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Reserva3</h4>
        </div>
        <div class="modal-body">
          <form id="formRegistro" role="form" action="../validations/Reserva_code.php" method="post">
          <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span class="strong">Hola, la siguiente reserva se realizara al nombre de: </label>
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut(este campo se completa de manera automatica)</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["usuario"]?>"  name="txtUsuario" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span> Rut(este campo se completa de manera automatica)</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["rut"]?>"  name="txtRut" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span>Numero de emergencia</label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["numero"]?>"  name="txtNumero" readonly >
            </div>
            <div class="form-group">
              <label for="usrname"><span class=""></span>Patente del vehiculo </label>
              <input type="text" class="form-control" id="horasalida" value="<?php echo $_SESSION["usuario"]["patente"]?>"  name="txtPatente" readonly >
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span> Hora de Entrada</label>
              <input type="time" class="form-control" id="horaentrada"  min="08:00:00" max="20:00:00" name="txtHora_in" required>
            </div>
      
            <div class="form-group">
              <label for="psw"><span class=""></span> Fecha Reserva</label>
              <input type="date" class="form-control" id="horasalida" value="2020-06-01"  min="2020-06-01"  max="2030-04-01" name="txtFecha" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class=""></span>Selecciona estacionamiento</label>
              <select name="txtIdestaciona" id="id_estacionamientos" >
              <?php
                      try {
                        $cnx = new PDO('mysql:host=localhost;dbname=Parkit2;charset=utf8', 'root', '');
                        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $cnx->prepare("SELECT `ubicacion`, `id_estacionamiento`, `estacionamiento`FROM `Estacionamientos` WHERE `ubicacion` = 'Supermercado'"); 
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC); 

                        /* creamos un while para optener fila a fila los refultados devueltos mediante fetch() */
                        while ($row = $stmt->fetch()) {
                            //echo $row['ubicacion'] . " - " . $row['id_estacionamiento'] . " - " .$row['estado'] . "<br>";
                            if ($row['reserva']) {
                              
                           }
                            echo '<option value="'.$row['id_estacionamiento'].' ">'.$row['ubicacion']."-".$row['estacionamiento'].'</option>';
                        }


                    }
                    catch(PDOException $e) {
                      $e = "No hay Reservas Realizadas";
                      echo'<h1 class="text-center">No Hay Reservas Realizadas</h1>';
                        //echo "Error: " . $e->getMessage();
                    }
                    $cn = null;
           
              
              ?>
              </select>

            </div>
            <h1>MONTO TOTAL DE LA RESERVA: $1000.</h1>
            
            
              <button id="hola3" type="submit"  class="btn btn-block">Reservar 
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
  <h3 class="text-center">Reporte de incidentes</h3>
  <p class="text-center"><em>Soporte las 24hrs!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Escribe tu problema para poder ayudarte en alguna solucion</p>
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
            <button class="btn pull-right" type="submit">Enviar</button>
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



                        