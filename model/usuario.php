<?php
class Usuario
{
	private $pdo;
	public $usuario;
	public $password;
	public $idRelacional;

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
	public function Registrar(Usuario $data)
	{
		try 
		{
			$sql = "INSERT INTO usuarios VALUES (null,?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->usuario,
					$data->password,
					$data->idRelacional
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
		//Metdodo para listar
	public function ListarDocentes()
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