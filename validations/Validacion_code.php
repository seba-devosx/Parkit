
<?php
include '../controller/UsuarioControlador.php';
include '../helps/helps.php';
header('Content-Type: application/json');
session_start();
$resultado = array();

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if(isset($_POST["txtUsuario"]) && isset($_POST["txtPass"])){
        $txtUsuario =validar_campo( $_POST["txtUsuario"]);
        $txtPass = validar_campo($_POST["txtPass"]);
    
        $resultado = array("estado"=>"true");

        if(UsuarioControlador::login($txtUsuario,$txtPass)){
            
            $usuario =UsuarioControlador::getUsuario($txtUsuario,$txtPass);
            $_SESSION["usuario"]= array(
              "nombre"      => $usuario->getNombre(),
              "apellido"    => $usuario->getApellido(),
              "usuario"     => $usuario->getUsuario(),
              "correo"      => $usuario->getCorreo(),
              "rut"      =>    $usuario->getRut(),
              "privilegio" =>  $usuario->getPrivilegio(),
             
            );
            return print(json_encode($resultado));
        
           
        }
    }
}

$resultado = array("estado"=>"false");
return print(json_encode($resultado));








?>