<?php
class Alumno
{
	private $pdo;
	public $nombre;
	public $primerApellido;
	public $segundoApellido;
	public $noCtrl;
	public $idAlumno;
	public $grupo;
	public $calificacion;


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
	public function Registrar(Alumno $data)
	{
		try 
		{
			$sql = "INSERT INTO alumnos VALUES (?,?,?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->noCtrl,
					$data->nombre,
					$data->primerApellido,
					$data->segundoApellido,
					$data->grupo,
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
			$stm = $this->pdo->prepare("SELECT * FROM alumnos");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarL()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT alumnos.noCtrl, alumnos.nombre, alumnos.primerApellido, alumnos.segundoApellido, cursos_alumnos.calificacion FROM cursos_alumnos, alumnos WHERE alumnos.noCtrl=cursos_alumnos.noCtrl");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarU()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * from unidades where claveMateria=2");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarU2()
	{
		try
		{
			$stm = $this->pdo->prepare(" SELECT unidades.noUnidad, calificacionesParciales.calificacion FROM unidades, calificacionesParciales WHERE claveMateria=2 AND unidades.noUnidad=calificacionesParciales.idUnidad;");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	//Metdod para registrar
	public function RegistrarCalificacion($idUnidad, $calificacion,$idCurso)
	{
		try 
		{
			$sql = "INSERT INTO calificacionesParciales VALUES (?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$idUnidad,
					$calificacion,
					$idCurso
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
?>