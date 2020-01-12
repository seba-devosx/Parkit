<?php
include '../model/ReservaDao.php';


class ReservaControlador{
 // esta funcion sirva para poder regiustrar reservas desde el lado deol cliente
    public static function registro($hora_in,$rut,$fecha,$usuario,$numero,$patente,$Idestaciona){
        
        $obj_reserva = new Reserva();
        $obj_reserva->setHora_in($hora_in);
        $obj_reserva->setRut($rut);
        $obj_reserva->setFecha($fecha);
        $obj_reserva->setUsuario($usuario);
        $obj_reserva->setNumero($numero);
        $obj_reserva->setPatente($patente);
        $obj_reserva->setEstacionamiento($Idestaciona);
        
        return ReservaDao::registro_reserva($obj_reserva);
    }

    public static function pago($rut,$numero,$fecha,$hora_in){
        
        $obj_reserva = new Reserva();
        $obj_reserva->setRut($rut);
        $obj_reserva->setNumero($numero);
        $obj_reserva->setFecha($fecha);
        $obj_reserva->setHora_in($hora_in);

        return ReservaDao::pago($obj_reserva);
    }

    public static function eliminar_estacionamiento($Idestaciona){
        
        $obj_reserva = new Reserva();
        $obj_reserva->setEstacionamiento($Idestaciona);
        return ReservaDao::eliminar_estacionamiento($obj_reserva);
    }

    public function eliminar($rut){
      

        return ReservaDao::eliminar($rut);
    }
  
    
    //esta funcion sirve para poder llevar los datos y completar las tablas con las reserva realizadas
    public function getReservas(){
        
        return ReservaDao::getReservas();
    }
    //esta funcion sirva para poder registrar reservas desde el lado del administrador

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
    
  
    //funcion de 
    public function getInfoReserva($rut){

        return ReservaDao::getInfoReserva($rut);
    }

    
   
  



}


?>

       