<?php
    include ("../../controller/UsuarioControlador.php");
    $filas = UsuarioControlador::getUsuarios();
   echo json_encode($filas);

    
?>