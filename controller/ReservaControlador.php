<?php
include '../model/ReservaDao.php';


class ReservaControlador{
 
    public static function registro($hora_in,$rut,$fecha,$usuario,$numero,$patente){
        
        $obj_reserva = new Reserva();
        $obj_reserva->setHora_in($hora_in);
        $obj_reserva->setRut($rut);
        $obj_reserva->setFecha($fecha);
        $obj_reserva->setUsuario($usuario);
        $obj_reserva->setNumero($numero);
        $obj_reserva->setPatente($patente);


        return ReservaDao::registro_reserva($obj_reserva);
    }
    
    public function getReservas(){
        
        return ReservaDao::getReservas();
    }

    public static function registroAdmin($hora_in,$rut,$fecha,$usuario,$numero,$patente){
        
        $obj_reserva = new Reserva();
        $obj_reserva->setHora_in($hora_in);
        $obj_reserva->setRut($rut);
        $obj_reserva->setFecha($fecha);
        $obj_reserva->setUsuario($usuario);
        $obj_reserva->setNumero($numero);
        $obj_reserva->setPatente($patente);


        return ReservaDao::registro_reserva_Admin($obj_reserva);
    }
    
    public function getRuts(){
        
        return ReservaDao::getRuts();
    }
   
    //funcion de 
    public function getInfoReserva($rut){

        return ReservaDao::getInfoReserva($rut);
    }

  



}


?>

       