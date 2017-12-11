<?php
class Curso
{
	private $pdo;
	public $idCurso;
	public $claveMateria;
	public $idDocente;
	public $periodo;
	public $grupo;
	public $horario;

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
	public function Registrar(Curso $data)
	{
		try 
		{
			$sql = "INSERT INTO cursos VALUES (null,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->claveMateria,
					$data->idDocente,
					$data->periodo,
					$data->grupo,
					$data->horario,
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	//Metdodo para listar
	public function listarCursos()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM cursos,materias,docentes  WHERE cursos.idDocente=docentes.idDocente AND cursos.claveMateria=materias.claveMateria");
			
			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
		//Metdodo para listar
	public function listarCursos2($idDocente)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM cursos,materias,docentes  WHERE cursos.idDocente=docentes.idDocente AND cursos.claveMateria=materias.claveMateria AND cursos.idDocente=?");
			
			$stm->execute(array($idDocente));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
		//Metdodo para listar
	public function ListarAlumnosCurso($idCurso)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM cursos_alumnos WHERE idCurso=?");
			
			$stm->execute(array($idCurso));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function InfoCurso($idCurso)
	{
		try
		{
			$stm = $this->pdo
			->prepare("SELECT * FROM cursos, materias, docentes WHERE idCurso = ? AND cursos.claveMateria=materias.claveMateria AND cursos.idDocente=docentes.idDocente");
			$stm->execute(array($idCurso));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>