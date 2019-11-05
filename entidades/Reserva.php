<?php
class Reserva{
 private $usuario;
 private $rut;
 private $id_reserva;
 private $hora_in;
 private $fecha;
 private $reserva;

 public function getUsuario(){
    return $this->usuario;
}

public function setUsuario($usuario){
    $this->usuario = $usuario;
}

public function getRut(){
    return $this->rut;
}

public function setRut($rut){
    $this->rut = $rut;
}

public function getId_reserva(){
    return $this->id_reserva;
}

public function setId_reserva($id_reserva){
    $this->id_reserva = $id_reserva;
}

public function getHora_in(){
    return $this->hora_in;
}

public function setHora_in($hora_in){
    $this->hora_in = $hora_in;
}

public function getFecha(){
    return $this->fecha;
}

public function setFecha($fecha){
    $this->fecha = $fecha;
}

public function getReserva(){
    return $this->reserva;
}

public function setReserva($reserva){
    $this->reserva = $reserva;
}
}

?>