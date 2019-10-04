<?php
include 'Conexion.php';
include '../entidades/Usuario.php';
class UsuarioDao extends conexion{

    protected static $cnx;

    public static function getConexion(){
        self::$cnx = Conexion::conectar();

    }
    private static function desconectar(){
        self::$cnx = null;
    }
    /*este este metodo es pra poder hacer el login de usuario este debe ser llamado en el ususrio controlador*/
    public static function login($usuario){
        $query="SELECT * FROM `Usuario` WHERE `usuario`=:usuario AND `pass`=:pass";
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario",$usuario->getUsuario());
        $resultado->bindValue(":pass",$usuario->getPass());

        $resultado->execute();

        if($resultado->rowCount() > 0 ){
            $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
            if($filas["usuario"]==$usuario->getUsuario() && $filas["pass"]==$usuario->getPass()){
                return true;

            }
        }
        return false;

    }
    /*esta funcion esppara el registo de usuario y debe ser llaamada en el usuario controlador  */
    public static function registro($usuario){
        $query="INSERT INTO `Usuario`(`nombre`, `apellido`, `rut`, `correo`, `pass`, `usuario`,`privilegio`) VALUES (:nombre,:apellido,:rut,:correo,:pass,:usuario,'2')";
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindValue(":nombre",$usuario->getNombre());
        $resultado->bindValue(":apellido",$usuario->getApellido());
        $resultado->bindValue(":rut",$usuario->getRut());
        $resultado->bindValue(":correo",$usuario->getCorreo());
        $resultado->bindValue(":pass",$usuario->getPass());
        $resultado->bindValue(":usuario",$usuario->getUsuario());

        if($resultado->execute()){
            return true;

        }
        return false;

    }
     /*este este metodo es para poder obtener usuario y este sea visualizado en el indexlogin.php*/
    public static function getUsuario($usuario){
        $query="SELECT `nombre`, `apellido`, `rut`, `correo`, `usuario`, `privilegio`  FROM `Usuario` WHERE `usuario`=:usuario AND `pass`=:pass";
       
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario",$usuario->getUsuario());
        $resultado->bindValue(":pass",$usuario->getPass());

        $resultado->execute();

       $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
        
       $usuario = new $usuario();
       $usuario->setNombre($filas["nombre"]);
       $usuario->setApellido($filas["apellido"]);
       $usuario->setUsuario($filas["usuario"]);
       $usuario->setCorreo($filas["correo"]);
       $usuario->setRut($filas["rut"]);
       $usuario->setPrivilegio($filas["privilegio"]);
     

       return $usuario;

    }


}

?>