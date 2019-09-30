<!--a ca se de colocar el codigo que debe ser pporbado para el registor y el login el kl del video lo utiliza -->
<?php

include '../controller/UsuarioControlador.php';

if(isset($_POST["txtUsuario"]) && isset($_POST["txtPass"])){
    $txtUsuario = $_POST["txtUsuario"];
    $txtPass =$_POST["txtPass"];

    if(UsuarioControlador::login($txtUsuario,$txtPass)){
        echo "listoco" ;
        include '../view/cliente/bienvenido.php';
    }
    else{
        include '../view/cliente/Error.html';
    echo"wena kl no funciona esta wea jaja XD";
    }
   
}





?>