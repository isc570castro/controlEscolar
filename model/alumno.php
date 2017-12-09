<?php
class Alumno
{
	private $pdo;
	public $nombre;
	public $primerApellido;
	public $segundoApellido;
	public $noCtrl;
	public $idAlumno;

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
			$sql = "INSERT INTO alumnos VALUES (null,?,?,?,?)";

			$this->pdo->prepare($sql)
			->execute(
				array(
					$data->nombre,
					$data->primerApellido,
					$data->segundoApellido,
					$data->noCtrl
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>