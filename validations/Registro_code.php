
<?php

include '../controller/UsuarioControlador.php';
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])&& isset($_POST["txtRut"])&& isset($_POST["txtCorreo"])
        && isset($_POST["txtPass"])&& isset($_POST["txtUsuario"])){

            $txtNombre = $_POST["txtNombre"];
            $txtApellido =$_POST["txtApellido"];
            $txtRut = $_POST["txtRut"];
            $txtCorreo =$_POST["txtCorreo"];
            $txtPass= $_POST["txtPass"];
            $txtUsuario =$_POST["txtUsuario"];
            $txtPrivilegio =2;

            $resultado = array("estado"=>"true");

         if(UsuarioControlador::registro($txtNombre,$txtApellido,$txtRut,$txtCorreo,$txtPass,$txtUsuario,$txtPrivilegio)){
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