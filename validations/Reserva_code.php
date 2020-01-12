
<script src="../assets/js/jquery-3.4.1.js"></script>
  <script src="../assets/plugins/push.js-master/push.js"></script>
  <script src="../assets/plugins/push.js-master/serviceWorker.js"></script>
<?php

include '../controller/ReservaControlador.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtHora_in"]) && isset($_POST["txtFecha"]) && isset($_POST["txtRut"])&& isset($_POST["txtUsuario"])
    && isset($_POST["txtNumero"])&& isset($_POST["txtPatente"])&& isset($_POST["txtIdestaciona"])){

            $txtHora_in = $_POST["txtHora_in"];
            $txtFecha = $_POST["txtFecha"];
            $txtRut = $_POST["txtRut"];
            $txtUsuario = $_POST["txtUsuario"];
            $txtNumero = $_POST["txtNumero"];
            $txtPatente = $_POST["txtPatente"];
            $txtIdestaciona = $_POST["txtIdestaciona"];
            
     
         
            
            
            
        if(ReservaControlador::registro($txtHora_in,$txtRut,$txtFecha,$txtUsuario,$txtNumero,$txtPatente,$txtIdestaciona)){
            if ( ReservaControlador::pago($txtRut,$txtNumero,$txtFecha,$txtHora_in)) {
                if ( ReservaControlador::eliminar_estacionamiento($txtIdestaciona)) {
                    sleep(6);
                    header("Location:http://localhost/parkit/view/Boleta_QR.php");
               
                }
           
            }
           
            
            
            
        }
        else{
            echo "esto no funciona"; 
            echo"$txtHora_in,$txtRut,$txtFecha,$txtUsuario,$txtNumero,$txtPatente,$txtIdestaciona";
    
        }
   
    }
}
?>