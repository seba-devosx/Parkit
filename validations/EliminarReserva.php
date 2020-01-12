<?php

include '../controller/ReservaControlador.php';
include '../helps/helps.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    if (isset($_GET["rut"])) {

        $rut = validar_campo($_GET["rut"]);

        if (UsuarioControlador::eliminar($rut)) {
         header("Location:http://localhost/Parkit/view/Mis_Reserva.php");
        }
    }

    else{
        header("Location:Ver_usuarios.php?error=1");
    }
} 
?>