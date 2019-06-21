<?php
class cliente
{
	private $pdo;
    
    public $Nombre;
    public $Apellido;  
	public $Correo;
	public $pass;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cliente $data)
	{
		try 
		{
		$sql = "INSERT INTO usuarios (`email`, `nombre`, `apellido`, `pass`,`idtipo`) 
		        VALUES (?, ?, ?, ?, '2')";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					
					$data->email,
                    $data->nombre,
                    $data->apellido, 
                    $data->pass,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}