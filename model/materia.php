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
}
?>