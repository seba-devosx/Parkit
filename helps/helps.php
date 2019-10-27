<?php
/*a quei se deben limpiar los campos, esto ayuda a completar la validacion, esto aplica a todo los campos de tipo post*/
function validar_campo($campo){

    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}
?>