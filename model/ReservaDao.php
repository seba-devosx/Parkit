<?php
include 'Conexion.php';
include '../entidades/Reserva.php';
class ReservaDao extends conexion{

    protected static $cnx;

    public static function getConexion(){
        self::$cnx = Conexion::conectar();

    }
    private static function desconectar(){
        self::$cnx = null;
    }
    /*este este metodo es pra poder hacer el login de usuario este debe ser llamado en el ususrio controlador*/
    //INSERT INTO `Reserva`(`hora_in`, `rut`, `fecha`) VALUES ('13:00:00','198595098','09-08-12')
    public static function registro_reserva($reserva){
        
        $query ="INSERT INTO `Reserva`(`hora_in`, `rut`, `fecha`, `usuario`,`numero`,`patente`) VALUES (:hora_in,:rut,:fecha,:usuario,:numero,:patente)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":hora_in",$reserva->getHora_in());
        $resultado->bindValue(":rut",$reserva->getRut());
        $resultado->bindValue(":fecha",$reserva->getFecha());
        $resultado->bindValue(":usuario",$reserva->getUsuario());
        $resultado->bindValue(":numero",$reserva->getNumero());
        $resultado->bindValue(":patente",$reserva->getPatente());

        if($resultado->execute()){
            return true;

        }
        return false;

    }
    public static function getReservas(){
        $query="SELECT `hora_in`, `rut`, `usuario`, `fecha`, `id_reserva`,`numero`, `patente` FROM `Reserva` ";
       
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->execute();
        $filas = $resultado->fetchAll();

        return $filas;

    }
    // este metyodo sirve para poder crear usuarios desde el lado del administrador
    //INSERT INTO `Reserva`(`hora_in`, `rut`, `fecha`) VALUES ('13:00:00','198595098','09-08-12')
    public static function registro_reserva_Admin($reserva){
        
        $query ="INSERT INTO `Reserva`(`hora_in`, `rut`, `fecha`, `usuario`,`numero`,`patente`) VALUES (:hora_in,:rut,:fecha,:usuario,:numero,:patente)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":hora_in",$reserva->getHora_in());
        $resultado->bindValue(":rut",$reserva->getRut());
        $resultado->bindValue(":fecha",$reserva->getFecha());
        $resultado->bindValue(":usuario",$reserva->getUsuario());
        $resultado->bindValue(":numero",$reserva->getNumero());
        $resultado->bindValue(":patente",$reserva->getPatente());

        if($resultado->execute()){
            return true;

        }
        return false;

        

    }
    public static function getInfoReserva($rut){
        $query="SELECT  `hora_in`, `rut`, `usuario`, `fecha`, `id_reserva`, `numero`, `patente`  FROM `Reserva` WHERE `rut`=:rut";
        //inner join:SELECT Reserva.hora_in, Reserva.fecha, Reserva.id_reserva, Reserva.rut FROM Reserva INNER JOIN Usuario ON  Usuario.nombre = Usuario.nombre ORDER BY Usuario.nombre;
        self::getConexion();
        $resultado = self::$cnx->prepare($query);


        $resultado->bindParam(":rut", $rut);

        $resultado->execute();

       $filas=$resultado->fetch();/*lo que hace la varible fecth es rellenar la variable resultado y los maneja como un array */
        
       $reserva = new Reserva();
       $reserva->setHora_in($filas["hora_in"]);
       $reserva->setRut($filas["rut"]);
       $reserva->setUsuario($filas["usuario"]);
       $reserva->setFecha($filas["fecha"]);
       $reserva->setId_reserva($filas["id_reserva"]);
       $reserva->setNumero($filas["numero"]);
       $reserva->setPatente($filas["patente"]);
      
     

       return $reserva;

    }
   

   
    


}

?>