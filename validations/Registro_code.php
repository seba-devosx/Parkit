
<?php

include '../controller/UsuarioControlador.php';
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])&& isset($_POST["txtRut"])&& isset($_POST["txtCorreo"])
        && isset($_POST["txtPass"])&& isset($_POST["txtUsuario"])&& isset($_POST["txtPatente"])&& isset($_POST["txtNumero"])){

            $txtNombre = $_POST["txtNombre"];
            $txtApellido =$_POST["txtApellido"];
            $txtRut = $_POST["txtRut"];
            $txtCorreo =$_POST["txtCorreo"];
            $txtPass= $_POST["txtPass"];
            $txtUsuario =$_POST["txtUsuario"];
            $txtPrivilegio =2;
            $txtPatente =$_POST["txtPatente"];
            $txtNumero =$_POST["txtNumero"];
            
           

            $resultado = array("estado"=>"true");

         if(UsuarioControlador::registro($txtNombre,$txtApellido,$txtRut,$txtCorreo,$txtPass,$txtUsuario,$txtPrivilegio,$txtPatente,$txtNumero)){
                //echo"resgitrado";
              return print(json_encode($resultado));
            


        }
        else{
            //echo "este usuario ya esta registrado";      
            $resultado = array("estado"=>"false");
            return print(json_encode($resultado));   

    
        }
   
    }
}
?>