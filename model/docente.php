<?php
class Docente
{
	private $pdo;
	public $nombre;
	public $primerApellido;
	public $segundoApellido;
	public $idDocente;

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
		//Metdod para registrar
	public function Registrar(Docente $data)
	{
		try 
		{
			$sql = "INSERT INTO docentes VALUES (null,?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->nombre,
					$data->primerApellido,
					$data->segundoApellido
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

		//Metdodo para listar
	public function Listar()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM docentes");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
}
?>