
<?php

include '../controller/UsuarioControlador.php';


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])&& isset($_POST["txtRut"])&& isset($_POST["txtCorreo"])
        && isset($_POST["txtPass"])&& isset($_POST["txtUsuario"])&& isset($_POST["txtPatente"])&& isset($_POST["txtNumero"])){

            $txtNombre = $_POST["txtNombre"];
            $txtApellido =$_POST["txtApellido"];
            $txtRut = $_POST["txtRut"];
            $txtCorreo =$_POST["txtCorreo"];
            $txtPass= $_POST["txtPass"];
            $txtUsuario =$_POST["txtUsuario"];
            $txtPatente =$_POST["txtPatente"];
            $txtNumero =$_POST["txtNumero"];
            
           

       

         if(UsuarioControlador::actualizarUsuario($txtNombre,$txtApellido,$txtRut,$txtCorreo,$txtPass,$txtUsuario,$txtPatente,$txtNumero)){
                //echo"resgitrado";
              header("Location:http://localhost/parkit/");
            


        }
        else{
            echo "esto no funciona--$txtNombre,$txtApellido,$txtRut,$txtCorreo,$txtPass,$txtUsuario,$txtPatente,$txtNumero";      
          

    
        }
   
    }
}
?>