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

       

        $resultado->bindValue(":usuario", $usuario->getUsuario());
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
    /*esta funcion es para el registo de usuario y debe ser llamada en el usuario a travez del controlador, si el booleano es verdaro se va a insertar en la base de datos y mostrara
    un mesaje de que se relizado de no ser asi y es falso mostrara un mensaje de que ya se encuentra almacenado en la base de datos, dichos valores ya pueden estar almacenados */
    public static function registro($usuario){
        $query="INSERT INTO `Usuario`(`nombre`, `apellido`, `rut`, `correo`, `pass`, `usuario`,`privilegio`, `patente`, `numero`) VALUES (:nombre,:apellido,:rut,:correo,:pass,:usuario,:privilegio,:numero,:patente)";
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":nombre",$usuario->getNombre());
        $resultado->bindValue(":apellido",$usuario->getApellido());
        $resultado->bindValue(":rut",$usuario->getRut());
        $resultado->bindValue(":correo",$usuario->getCorreo());
        $resultado->bindValue(":pass",$usuario->getPass());
        $resultado->bindValue(":usuario",$usuario->getUsuario());
        $resultado ->bindValue(":privilegio",$usuario->getPrivilegio());
        $resultado ->bindValue(":patente",$usuario->getPatente());
        $resultado ->bindValue(":numero",$usuario->getNumero());
        

        if($resultado->execute()){
            return true;

        }
        return false;

    }
    
     /*este este metodo es para poder obtener usuario y este sea visualizado en el indexlogin.php*/
    public static function getUsuario($usuario){
        $query="SELECT `nombre`, `apellido`, `rut`, `correo`, `usuario`, `privilegio`, `patente`, `numero`  FROM `Usuario` WHERE `usuario`=:usuario AND `pass`=:pass";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario",$usuario->getUsuario());
        $resultado->bindValue(":pass",$usuario->getPass());

        $resultado->execute();

       $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
        
       $usuario = new Usuario();
       $usuario->setNombre($filas["nombre"]);
       $usuario->setApellido($filas["apellido"]);
       $usuario->setUsuario($filas["usuario"]);
       $usuario->setCorreo($filas["correo"]);
       $usuario->setRut($filas["rut"]);
       $usuario->setPrivilegio($filas["privilegio"]);
       $usuario->setNumero($filas["numero"]);
       $usuario->setPatente($filas["patente"]);
     

       return $usuario;

    }
    //este emtodo sirve para porder trer todos los usuarios contenidos en la base de datos 
    public static function getUsuarios(){
        $query="SELECT `nombre`, `apellido`, `rut`, `correo`, `usuario`, `privilegio`, `patente`, `numero`  FROM `Usuario` ";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->execute();

       $filas=$resultado->fetchAll();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
    
       return $filas;

    }






   //aqui empeiza los metoso dirgidos hacia usuario pero desde el lado del administrador

    //este metodo sirva para poder eleiminar un usuario atraves de sus propio id, esto lo unico que retorna es un boolen
    public function eliminarUsuario($rut){
        $query="DELETE FROM `Usuario` WHERE `rut`=:rut";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":rut",$rut);

        $resultado->execute();

        if($resultado->execute()){
            return true;

        }
        return false;

    }
  
    
    
    //este metodo sirve para actualizar los datos del suario dentro de la base de datos, esto sirve siempre y cuando el usuario exista
    public static function actualizarUsuario($usuario){
        $query="UPDATE `Usuario` SET `nombre`=':nombre',`apellido`=':apellido',`rut`=':rut',`correo`=':correo',`pass`=':pass',`usuario`=':usuario',`patente`=':patente',`numero`=':numero' WHERE `rut` = :rut)";
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":nombre",$usuario->getNombre());
        $resultado->bindValue(":apellido",$usuario->getApellido());
        $resultado->bindValue(":rut",$usuario->getRut());
        $resultado->bindValue(":correo",$usuario->getCorreo());
        $resultado->bindValue(":pass",$usuario->getPass());
        $resultado->bindValue(":usuario",$usuario->getUsuario()); 
        $resultado->bindValue(":patente",$usuario->getPatente()); 
        $resultado->bindValue(":numero",$usuario->getNumero()); 
        
      

        if($resultado->execute()){
            return true;

        }
        return false;

    }  
    //esta funcion sirve para poder crear usuarios desde el lado del administrador
    public static function CrearAdmin($usuario){
        $query="INSERT INTO `Usuario`(`nombre`, `apellido`, `rut`, `correo`, `pass`, `usuario`,`privilegio`, `patente`, `numero`) VALUES (:nombre,:apellido,:rut,:correo,:pass,:usuario,:privilegio,:numero,:patente)";
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":nombre",$usuario->getNombre());
        $resultado->bindValue(":apellido",$usuario->getApellido());
        $resultado->bindValue(":rut",$usuario->getRut());
        $resultado->bindValue(":correo",$usuario->getCorreo());
        $resultado->bindValue(":pass",$usuario->getPass());
        $resultado->bindValue(":usuario",$usuario->getUsuario());
        $resultado ->bindValue(":privilegio",$usuario->getPrivilegio());
        $resultado ->bindValue(":patente",$usuario->getPatente());
        $resultado ->bindValue(":numero",$usuario->getNumero());
        

        if($resultado->execute()){
            return true;

        }
        return false;

    }
   

     //este emtodo sirve para porder traer todos los uaurios contenidos en la abse de datos 
      public static function getUsuarioporrut($rut){
        $query="SELECT `nombre`, `apellido`, `rut`, `correo`, `usuario`, `privilegio`, `patente`, `numero`,`pass`  FROM `Usuario` WHERE `rut`=:rut";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);


        $resultado->bindParam(":rut", $rut);

        $resultado->execute();

       $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
        
       $usuario = new Usuario();
       $usuario->setNombre($filas["nombre"]);
       $usuario->setApellido($filas["apellido"]);
       $usuario->setUsuario($filas["usuario"]);
       $usuario->setCorreo($filas["correo"]);
       $usuario->setRut($filas["rut"]);
       $usuario->setPrivilegio($filas["privilegio"]);
       $usuario->setNumero($filas["numero"]);
       $usuario->setPatente($filas["patente"]);
       $usuario->setPass($filas["pass"]);
     

       return $usuario;

    }
   


}

?>