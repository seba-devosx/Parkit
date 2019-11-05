<script src="../assets/js/jquery-3.4.1.js"></script>
  <script src="../assets/plugins/push.js-master/push.js"></script>
  <script src="../assets/plugins/push.js-master/serviceWorker.js"></script>
<?php

include '../controller/ReservaControlador.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtHora_in"]) && isset($_POST["txtFecha"]) && isset($_POST["txtRut"])&& isset($_POST["txtUsuario"])){

            $txtHora_in = $_POST["txtHora_in"];
            $txtFecha = $_POST["txtFecha"];
            $txtRut = $_POST["txtRut"];
            $txtUsuario = $_POST["txtUsuario"];
            
            
        if(ReservaControlador::registro($txtHora_in,$txtRut,$txtFecha,$txtUsuario)){
            header('Location: Boleta_QR.php');
            
        }
        else{
            echo "esto no funciona";      
            echo"$txtRut,$txtHora_in,$txtFecha,$txtUsuario";
    
        }
   
    }
}
?>