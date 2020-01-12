<?php
include 'Conexion.php';
include '../entidades/Reporte.php';
class ReporteDao extends conexion{
    protected static $cnx;

    public static function getConexion(){
        self::$cnx = Conexion::conectar();

    }
    private static function desconectar(){
        self::$cnx = null;
    }
    //este metodo sirev para poder insertar los reportes que realizaen los usuario
    public static function registro($reporte){
        $query="INSERT INTO `Reporte`(`nombre`, `correo`, `rut`, `reporte`) VALUES (:nombre,:correo,:rut,:reporte)";
     
        
        self::getConexion();
        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":nombre",$reporte->getNombre());
        $resultado->bindValue(":rut",$reporte->getRut());
        $resultado->bindValue(":correo",$reporte->getCorreo());
        $resultado->bindValue(":reporte",$reporte->getReporte());
        

        if($resultado->execute()){
            return true;

        }
        return false;

    }

}


?>