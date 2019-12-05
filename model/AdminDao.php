<?php
include 'Conexion.php';
include '../entidades/Admin.php';

class AdminDao extends conexion{

    protected static $cnx;

    public static function getConexion(){
        self::$cnx = Conexion::conectar();

    }
    private static function desconectar(){
        self::$cnx = null;
    }
    /*este este metodo es pra poder hacer el login de usuario este debe ser llamado en el ususrio controlador*/
    public static function login($admin){
        $query="SELECT * FROM `Admin` WHERE `usuario`=:usuario AND `pass`=:pass";
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

       

        $resultado->bindValue(":usuario", $admin->getUsuario());
        $resultado->bindValue(":pass",$admin->getPass());

        $resultado->execute();

        if($resultado->rowCount() > 0 ){
            $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
            if($filas["usuario"]==$admin->getUsuario() && $filas["pass"]==$admin->getPass()){
                return true;

            }
        }
        return false;

    }
     /*este este metodo es para poder obtener usuario y este sea visualizado en el indexlogin.php*/
    public static function getAdmin($admin){
        $query="SELECT `nombre`, `apellido`, `correo`, `usuario`, `privilegio`  FROM `Admin` WHERE `usuario`=:usuario AND `pass`=:pass";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario",$admin->getUsuario());
        $resultado->bindValue(":pass",$admin->getPass());

        $resultado->execute();

       $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
        
       $admin = new $admin();
       $admin->setNombre($filas["nombre"]);
       $admin->setApellido($filas["apellido"]);
       $admin->setUsuario($filas["usuario"]);
       $admin->setCorreo($filas["correo"]);
       $admin->setPrivilegio($filas["privilegio"]);
     

       return $admin;

    }
    public static function getAdmins(){
        $query="SELECT `nombre`, `apellido`, `rut`, `correo`, `usuario`, `privilegio`  FROM `Admin` ";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->execute();

       $filas=$resultado->fetchAll();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
    
       return $filas;

    }


}

?>