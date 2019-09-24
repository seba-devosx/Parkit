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
			require_once 'view/cliente/Error.html';
			die($error->getMessage());
		}
	}
	public function Login (cliente $data, $Rut,$Pass){
		try{
		$sql="SELECT * FROM `Cliente` WHERE Rut =? AND Pass =?";
		$this->pdo->prepare($sql)
		->execute(array( 
			$data->$Rut,
		    $data->$Pass
		)
		
	);
		$clienteRow=$sql->fetch(PDO::FETCH_ASSOC);
		if ($sql->rowCount() >0) {
			if(password_verify($Pass, $clienteRow['Pass']))
			{
			   $_SESSION['user_session'] = $userRow['Rut'];
			   return true;
			}
			
		}
		else{
			return false;

		}
		}catch(Exception $error){
			require_once 'view/cliente/yaregistrado.html';
			die($error->getMessage()); 

		}
	}


	public function Login(cliente $data){
		try{
			$sql="SELECT * FROM `Cliente` WHERE `Rut` ='?' AND `Pass`='?'";
			

		}catch(Exceptio $error){
			die($error->getMessage());

		}
	}

}