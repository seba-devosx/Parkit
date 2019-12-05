<?php
class Usuario{
    private $nombre;
	private $apellido;  
	private $rut;
	private $correo;
	private $pass;
	private $usuario;
	private $privilegio;
	private $numero;
	private $patente;

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

	public function getRut(){
		return $this->rut;
	}

	public function setRut($rut){
		$this->rut = $rut;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getPass(){
		return $this->pass;
	}

	public function setPass($pass){
		$this->pass=$pass;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getPrivilegio(){
		return $this->Privilegio;
	}

	public function setPrivilegio($privilegio){
		$this->Privilegio = $privilegio;
	}

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getPatente(){
		return $this->patente;
	}
	public function setPatente($patente){
		$this->patente = $patente;
	}





}
?>