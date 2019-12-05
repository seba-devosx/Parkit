
<?php
include '../controller/AdminControlador.php';
include '../helps/helps.php';
header('Content-Type: application/json');
session_start();
$resultado = array();


if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if(isset($_POST["txtUsuario"]) && isset($_POST["txtPass"])){
        $txtUsuario =validar_campo( $_POST["txtUsuario"]);
        $txtPass = validar_campo($_POST["txtPass"]);
    
        $resultado = array("estado"=>"true" ); 
        
        

        if(AdminControlador::login($txtUsuario,$txtPass)){
            
            $admin = AdminControlador::getAdmin($txtUsuario,$txtPass);
            $_SESSION["admin"]= array(
              "nombre"      => $admin->getNombre(),
              "apellido"    => $admin->getApellido(),
              "usuario"     => $admin->getUsuario(),
              "correo"      => $admin->getCorreo(),
              "privilegio" =>  $admin->getPrivilegio(),
              

            );
            return print(json_encode($resultado));
           
           
        }
    }
}

$resultado = array("estado"=>"false");
return print(json_encode($resultado));








?>