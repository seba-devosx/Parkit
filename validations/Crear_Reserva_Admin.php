
<?php

include '../controller/ReservaControlador.php';
header('Content-Type: application/json');
$resultado = array();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtHora_in"]) && isset($_POST["txtFecha"]) && isset($_POST["txtRut"])&& isset($_POST["txtUsuario"])
    && isset($_POST["txtNumero"])&& isset($_POST["txtPatente"])){

            $txtHora_in = $_POST["txtHora_in"];
            $txtFecha = $_POST["txtFecha"];
            $txtRut = $_POST["txtRut"];
            $txtUsuario = $_POST["txtUsuario"];
            $txtNumero = $_POST["txtNumero"];
            $txtPatente = $_POST["txtPatente"];
            
            $resultado = array("estado"=>"true");
        if(ReservaControlador::registroAdmin($txtHora_in,$txtRut,$txtFecha,$txtUsuario,$txtNumero,$txtPatente)){
            return print(json_encode($resultado));
            
        }
        else{
            echo "esto no funciona";      
            echo"$txtRut,$txtHora_in,$txtFecha,$txtUsuario,$txtNumero,$txtPatente";
            $resultado = array("estado"=>"false");
            return print(json_encode($resultado));   
    
        }
   
    }
}
?>