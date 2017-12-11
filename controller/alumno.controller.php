<?php
require_once 'model/alumno.php';
class AlumnoController{

	private $model;
	private $mensaje;
	private $error;

	public function __CONSTRUCT(){
		$this->model = new Alumno();
	}

	public function Index(){
		$admin=true;
		$alumnos=true;
		$page="view/alumnos/index.php";
		require_once 'view/index.php';
	}
	public function Crud(){
		$alumno = new Alumno();
		if(isset($_REQUEST['noCtrl'])){
			$alumno = $this->model->Obtener($_REQUEST['noCtrl']);
		}
		$admin=true;
		$alumnos=true;
		$page="view/alumnos/alumno.php";
		require_once 'view/index.php';
	}
	public function Guardar(){
		$alumno= new Alumno();
		$alumno->nombre=$_REQUEST['nombre'];
		$alumno->primerApellido=$_REQUEST['primerApellido'];
		$alumno->segundoApellido=$_REQUEST['segundoApellido'];
		$alumno->noCtrl=$_REQUEST['noCtrl'];
		$alumno->idAlumno=$_REQUEST['idAlumno'];
		$alumno->grupo=$_REQUEST['grupo'];

		$this->model->Registrar($alumno);
		$this->mensaje="El alumno se ha registrado correctamente";
		$this->Index();
	}
}
?>