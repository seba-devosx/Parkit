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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cliente WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE cliente SET 
						dni      		= ?,
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
                        Telefono        = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

						$data->Correo,
                        $data->Nombre,                        
                        $data->Apellido,
                        $data->pass, 
                     
					)
				);
		} catch (Exception $e) 
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