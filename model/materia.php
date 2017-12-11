<?php
class Materia
{
	private $pdo;
	public $claveMateria;
	public $materia;

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
	public function Registrar(Materia $data)
	{
		try 
		{
			$sql = "INSERT INTO materias VALUES (null,?)";
			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->materia,
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
			$stm = $this->pdo->prepare("SELECT * FROM materias");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function RegistraUnidades($noUnidad, $unidad, $claveMateria)
	{
		try 
		{
			$sql = "INSERT INTO unidades VALUES (null,?,?,?)";
			$this->pdo->prepare($sql)
			->execute(
				array(
					$noUnidad,
					$unidad,
					$claveMateria
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
		//Metdodo para listar
	public function ListarUnidades($claveMateria)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM unidades WHERE claveMateria=?");
			
			$stm->execute(array($claveMateria));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ObtenerMateria($claveMateria)
	{
		try
		{
			$stm = $this->pdo
			->prepare("SELECT * FROM materias WHERE claveMateria = ?");
			$stm->execute(array($claveMateria));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>