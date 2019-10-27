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
        
        $query ="INSERT INTO `Reserva`(`hora_in`, `rut`, `fecha`, `usuario`) VALUES (:hora_in,:rut,:fecha,:usuario)";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":hora_in",$reserva->getHora_in());
        $resultado->bindValue(":rut",$reserva->getRut());
        $resultado->bindValue(":fecha",$reserva->getFecha());
        $resultado->bindValue(":usuario",$reserva->getUsuario());

        if($resultado->execute()){
            return true;

        }
        return false;

    }
    public static function getReservas(){
        $query="SELECT `hora_in`, `rut`, `usuario`, `fecha`, `id_reserva` FROM `Reserva` ";
       
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->execute();
       $filas = $resultado->fetchAll();

       return $filas;

    }
    


}

?>