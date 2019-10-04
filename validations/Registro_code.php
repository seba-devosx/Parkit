<!--a ca se de colocar el codigo que debe ser pporbado para el registor y el login el kl del video lo utiliza -->
<?php

include '../controller/UsuarioControlador.php';

if(isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])&& isset($_POST["txtRut"])&& isset($_POST["txtCorreo"])
&& isset($_POST["txtPass"])&& isset($_POST["txtUsuario"])){

    $txtNombre = $_POST["txtNombre"];
    $txtApellido =$_POST["txtApellido"];
    $txtRut = $_POST["txtRut"];
    $txtCorreo =$_POST["txtCorreo"];
    $txtPass= $_POST["txtPass"];
    $txtUsuario =$_POST["txtUsuario"];

    if(UsuarioControlador::registro($txtNombre,$txtApellido,$txtRut,$txtCorreo,$txtPass,$txtUsuario)){
        echo "listoco" ;
       
    }
    else{

    
    }
   
}





?>