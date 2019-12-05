
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
            $txtPrivilegio =2;
            $txtPatente =$_POST["txtPatente"];
            $txtNumero =$_POST["txtNumero"];
            
           

       

         if(UsuarioControlador::Registrar_usuario_Admin($txtNombre,$txtApellido,$txtRut,$txtCorreo,$txtPass,$txtUsuario,$txtPrivilegio,$txtPatente,$txtNumero)){
                //echo"resgitrado";
              header("Location:http://localhost/parkit/viewAdmin/Ver_usuarios.php");
            


        }
        else{
            //echo "este usuario ya esta registrado";      
            $resultado = array("estado"=>"false");
            return print(json_encode($resultado));   

    
        }
   
    }
}
?>