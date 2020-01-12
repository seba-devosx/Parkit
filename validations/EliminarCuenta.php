<?php

include '../controller/UsuarioControlador.php';
include '../helps/helps.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    if (isset($_GET["rut"])) {

        $rut = validar_campo($_GET["rut"]);

        if (UsuarioControlador::eliminarUsuario($rut)) {
         header("Location:http://localhost/parkit/");
        }
    }

    else{
        header("Location:Ver_usuarios.php?error=1");
    }
} 
?>