<?php
require_once 'model/docente.php';
class DocenteController{

	private $model;
	private $mensaje;
	private $error;

	public function __CONSTRUCT(){
		$this->model = new Docente();
	}

	public function Index(){
		$admin=true;
		$docentes=true;
		$page="view/docentes/index.php";
		require_once 'view/index.php';
	}
	public function Crud(){
			$docente = new Docente();
			if(isset($_REQUEST['idDocente'])){
				$docente = $this->model->Obtener($_REQUEST['idDocente']);
			}
			$admin=true;
			$docentes=true;
			$page="view/docentes/docente.php";
			require_once 'view/index.php';
	}
	public function Guardar(){
		$docente= new Docente();
		$docente->nombre=$_REQUEST['nombre'];
		$docente->primerApellido=$_REQUEST['primerApellido'];
		$docente->segundoApellido=$_REQUEST['segundoApellido'];

		$this->model->Registrar($docente);
		$this->mensaje="El docente se ha registrado correctamente";
		$this->Index();
	}

}
?>