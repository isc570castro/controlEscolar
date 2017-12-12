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
			$sql = "INSERT INTO usuariosdocentes VALUES (null,?,?,?)";

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
	//Metdod para registrar
	public function RegistrarUsuarioAlumno($noCtrl,$password)
	{
		try 
		{
			$sql = "INSERT INTO usuariosalumnos VALUES (null,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$noCtrl,
					$password
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
		//Metdodo para listar
	public function ListarUsuariosDocentes()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuariosDocentes, docentes WHERE usuariosDocentes.idDocente=docentes.idDocente");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
		//Metdodo para listar
	public function ListarUsuariosAlumnos()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuariosAlumnos, alumnos WHERE usuariosAlumnos.noCtrl=alumnos.noCtrl");
			
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