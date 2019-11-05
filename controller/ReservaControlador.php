<?php
include '../model/ReservaDao.php';

class ReservaControlador{
 
    public static function registro($hora_in,$rut,$fecha,$usuario){
        
        $obj_reserva = new Reserva();
        $obj_reserva->setHora_in($hora_in);
        $obj_reserva->setRut($rut);
        $obj_reserva->setFecha($fecha);
        $obj_reserva->setUsuario($usuario);


        return ReservaDao::registro_reserva($obj_reserva);
    }
    
    public function getReservas(){
        
        return ReservaDao::getReservas();
    }

}


?>

       