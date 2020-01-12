<?php
include '../model/ReporteDao.php';
class ReporteControlador{
    public static function registro($nombre,$rut,$correo,$reporte){
        $obj_reporte = new Reporte();
        $obj_reporte->setNombre($nombre);
        $obj_reporte->setRut($rut);
        $obj_reporte->setCorreo($correo);
        $obj_reporte->setReporte($reporte);
  
    

        return ReporteDao::registro($obj_reporte);
    }
}
?>