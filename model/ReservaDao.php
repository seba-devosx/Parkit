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


    //esta funcion registra la reserva 
    public static function registro_reserva($reserva){
        $query="INSERT INTO `Reserva`(`hora_in`, `rut`, `usuario`, `fecha`, `patente`, `numero`, `estacionamiento`) VALUES (:hora_in,:rut,:usuario,:fecha,:patente,:numero,:estacionamiento)";
        
        //este codigo recibe los datos de la reserva desde el controlador 
        self::getConexion(); // obtiene la conexion
        $resultado = self::$cnx->prepare($query);// prepara la query para que pueda ser ejecutada
        
        $resultado->bindValue(":hora_in",$reserva->getHora_in());
        $resultado->bindValue(":rut",$reserva->getRut());
        $resultado->bindValue(":fecha",$reserva->getFecha());
        $resultado->bindValue(":usuario",$reserva->getUsuario());
        $resultado->bindValue(":numero",$reserva->getNumero());
        $resultado->bindValue(":patente",$reserva->getPatente());
        $resultado->bindValue(":estacionamiento",$reserva->getEstacionamiento());
        
       

        if ($resultado->execute()) {
            return true;
        
        }
        return false;
    }
    //esta funcion registra los pagos 
    public static function pago($reserva){
        //$query="INSERT INTO `rut`(`rut`) VALUES (:rut)";
        $query="INSERT INTO `Pagos`(`rut`, `numero`, `fecha`, `hora_in`,`pago`) VALUES (:rut,:numero,:fecha,:hora_in,1000)";
        self::getConexion(); // obtiene la conexion
        $resultado = self::$cnx->prepare($query);// prepara la query para que pueda ser ejecutada

        $resultado->bindValue(":rut",$reserva->getRut());
        $resultado->bindValue(":numero",$reserva->getNumero());
        $resultado->bindValue(":fecha",$reserva->getFecha());
        $resultado->bindValue(":hora_in",$reserva->getHora_in());
       
        
        if ($resultado->execute()) {
            return true;
        
        }
        return false;
        
    }
    public static function eliminar_estacionamiento($reserva){
        $query="DELETE FROM `Estacionamientos` WHERE `id_estacionamiento` = :id_estacionamiento";
        self::getConexion(); // obtiene la conexion
        $resultado = self::$cnx->prepare($query);// prepara la query para que pueda ser ejecutada
        $resultado->bindValue(":id_estacionamiento",$reserva->getEstacionamiento());
        if ($resultado->execute()) {
            return true;
        
        }
        return false;

    }
    public static function devolver_estacionamiento($reserva){
        $query="INSERT INTO `Estacionamientos`(`ubicacion`, `id_estacionamiento`, `estacionamiento`) VALUES (:ubicacion,:estacionamiento,:id)";
        self::getConexion(); // obtiene la conexion
        $resultado = self::$cnx->prepare($query);// prepara la query para que pueda ser ejecutada
        $resultado->bindValue(":estacionamiento",$reserva->getEstacionamiento());
        if ($resultado->execute()) {
            return true;
        
        }
        return false;

    }
  
  
    
    // este metodo es para poder rellenar la tabala con los datos de las reservas actuales  
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
    //este metodo permite llevar datos al momento de querer hacer modificaciones en las reservas actuales 
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
    public function eliminar($rut){
        $query="DELETE FROM `Reserva` WHERE `rut`=:rut";
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
    
   

   
    


}

?>