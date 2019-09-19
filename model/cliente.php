<?php
class cliente
{
	private $pdo;
    
    public $Nombre;
	public $Apellido;  
	public $Rut;
    public $Correo;
	public $Pass;

	

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $error)
		{
			die($error->getMessage());
		}
	}



	public function Registrar(cliente $data)
	{
		try {
		//$sql = "INSERT INTO cliente (dni,Nombre,Apellido,Correo,telefono) 
				//VALUES (?, ?, ?, ?, ?)";
		$sql="INSERT INTO `Cliente`(Nombre,Apellido,Rut,Correo,Pass) 
		VALUES (?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->Nombre,	
					$data->Apellido,
					$data->Rut,
                    $data->Correo, 
                    $data->Pass,
                   
                )
			);
		} catch (Exception $error) {
			require_once 'view/cliente/yaregistrado.html';
			die($error->getMessage());
		}
	}

	public function Login (cliente $data){
		try{

		}
		catch(){

		}
	}
}