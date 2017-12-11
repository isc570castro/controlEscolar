<?php
class Login
{
	private $pdo;
	public $usuario;
	public $password;
	public $tipousuario;

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
	public function Comprueba(Login $log){
		try {
			$sql=$this->pdo->prepare("SELECT * FROM usuariosDocentes WHERE usuario=? AND password=?");
			$resultado=$sql->execute(
			 	array(
			 		$log->usuario,
			 		$log->password
			 	)
			);
			return $sql->fetch(PDO::FETCH_OBJ,PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function verificar(Login $data)
	{
		try 
		{
			$sql= $this->pdo->prepare("SELECT * FROM usuariosDocentes WHERE usuario=?");
			$resultado=$sql->execute(
				array(
                    $data->usuario,
                )
			);
			return $sql->fetch(PDO::FETCH_OBJ,PDO::FETCH_ASSOC);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function VerificaAlumno($noCtrl,$password)
	{
		try 
		{
			$sql= $this->pdo->prepare("SELECT * FROM usuariosAlumnos,alumnos WHERE usuariosAlumnos.noCtrl=? AND password=? AND usuariosAlumnos.noCtrl=alumnos.noCtrl");
			$resultado=$sql->execute(
				array(
                    $noCtrl,
                    $password
                )
			);
			return $sql->fetch(PDO::FETCH_OBJ,PDO::FETCH_ASSOC);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>