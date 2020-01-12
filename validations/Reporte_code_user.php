
<?php

include '../controller/ReporteControlador.php';
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtNombre"]) && isset($_POST["txtRut"])&& isset($_POST["txtCorreo"])&& isset($_POST["txtReporte"])){

            $txtNombre = $_POST["txtNombre"];
            $txtRut = $_POST["txtRut"];
            $txtCorreo =$_POST["txtCorreo"];
            $txtReporte =$_POST["txtReporte"];

            
           

            $resultado = array("estado"=>"true");
         if(ReporteControlador::registro($txtNombre,$txtRut,$txtCorreo,$txtReporte)){
                //echo"resgitrado";
              return print(json_encode($resultado));
            


        }
        else{
            echo 'esto no funciona ';
            echo"$txtNombre,$txtRut,$txtCorreo,$txtReporte";      
            $resultado = array("estado"=>"false");
            return print(json_encode($resultado));   

    
        }
   
    }
}
?>