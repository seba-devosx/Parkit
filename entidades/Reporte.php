<?php
class Reporte{
    private $nombre;
    private $correo;
    private $rut;
    private $reporte;

    public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getRut(){
		return $this->rut;
	}

	public function setRut($rut){
		$this->rut = $rut;
	}

	public function getReporte(){
		return $this->reporte;
	}

	public function setReporte($reporte){
		$this->reporte = $reporte;
	}

}
?>