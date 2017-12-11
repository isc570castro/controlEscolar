<?php
require_once 'model/curso.php';
require_once 'model/docente.php';
require_once 'model/materia.php';

class CursoController{

	private $model;
	private $mensaje;
	private $error;

	public function __CONSTRUCT(){
		$this->model = new Curso();
	}

	public function Index(){
		$admin=true;
		$cursos=true;
		$page="view/cursos/index.php";
		require_once 'view/index.php';
	}
	public function Crud(){
		$modelMateria = new Materia();
		$modelDocente = new Docente(); 
		$admin=true;
		$alumnos=true;
		$page="view/cursos/curso.php";
		require_once 'view/index.php';
	}
	public function Guardar(){
		$curso= new Curso();
		$curso->claveMateria=$_REQUEST['claveMateria'];
		$curso->idDocente=$_REQUEST['idDocente'];
		$curso->periodo=$_REQUEST['periodo'];
		$curso->grupo=$_REQUEST['grupo'];
		$horario1=$_REQUEST['horario1'];
		$horario2=$_REQUEST['horario2'];
		$curso->horario=$horario1." - ".$horario2;
		$this->model->Registrar($curso);
		$this->mensaje="El curso se ha registrado correctamente";
		$this->Index();
	}
	public function Seleccion(){
		$cursos2=true;
		$page="view/cursos/seleccion.php";
		require_once 'view/index.php';
	}
}
?>