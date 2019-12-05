<?php
class Admin{
private $nombre;
private $apellido;
private $usuario;
private $pass;
private $correo;
private $privilegio;

public function getNombre(){
    return $this->nombre;
}

public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function getApellido(){
    return $this->apellido;
}

public function setApellido($apellido){
    $this->apellido = $apellido;
}

public function getUsuario(){
    return $this->usuario;
}

public function setUsuario($usuario){
    $this->usuario = $usuario;
}

public function getPass(){
    return $this->pass;
}

public function setPass($pass){
    $this->pass = $pass;
}

public function getCorreo(){
    return $this->correo;
}

public function setCorreo($correo){
    $this->correo = $correo;
}

public function getPrivilegio(){
    return $this->privilegio;
}

public function setPrivilegio($privilegio){
    $this->privilegio = $privilegio;
}
}

?>