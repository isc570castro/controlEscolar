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

	public function Seleccion(){
		$listas=true;
		$page="view/alumnos/listas.php";
		require_once 'view/index.php';
	}
	public function ActualizarCalificaciones(){
		//$noUnidades=$_POST['noUnidades'];
		$noCtrl=$_REQUEST['txtnoCtrl'];
		if($noUnidades=1){
			for ($i=1; $i <= 4; $i++) { 
				$u='calificacion'.$i;
				$unidadn=$_REQUEST[$u];
				$this->model->RegistrarCalificacion($i,$unidadn,$noCtrl);
			}
		}
		$this->mensaje="Succes";
		$this->Index();
	}

}
?>