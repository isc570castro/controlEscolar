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
}
?>