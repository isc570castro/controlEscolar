<?php
require_once 'model/curso.php';
require_once 'model/docente.php';
require_once 'model/materia.php';
require_once 'model/alumno.php';


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
	public function Carga(){
		$curso = new Curso();
		$modelAlumno = new Alumno();
		$curso->idCurso=$_REQUEST['idCurso'];
		$info=$this->model->InfoCurso($curso->idCurso);
		$cursos=true;
		$page="view/cursos/carga.php";
		require_once 'view/index.php';
	}
	public function AsignaAlumno(){
		$curso= new Curso();
		$noCtrl=$_REQUEST['noCtrl'];
		$idCurso=$_REQUEST['idCurso'];
		$this->model->AsignarAlumno($noCtrl,$idCurso);
		$this->mensaje="El alumno se ha asignado correctamente al curso";
		$this->Carga();
	}
	public function ActivarMateria(){
		unset($_SESSION['claveMateria']);
		unset($_SESSION['materia']);
		unset($_SESSION['idCurso']);
		$_SESSION['claveMateria']=$_REQUEST['claveMateria'];
		$_SESSION['materia']=$_REQUEST['materia'];
		$_SESSION['idCurso']=$_REQUEST['idCurso'];
		$this->Seleccion();
	}
	public function DesactivarMateria(){
		unset($_SESSION['claveMateria']);
		unset($_SESSION['materia']);
		unset($_SESSION['idCurso']);
		$this->Seleccion();
	}
	public function Listas(){
		$listas=true;
		$page="view/cursos/listas.php";
		require_once 'view/index.php';
	}
	public function RegistraCalificacion(){
		$idCursoAlumno=$_REQUEST['idCursoAlumno'];
		$suma=0;
		for ($i=1; $i <= 5; $i++) { 
			$c='calificacion'.$i;
			$calificacion=$_REQUEST[$c];
			$suma=$suma+$calificacion;
			$u='idUnidad'.$i;
			$idUnidad=$_REQUEST[$u];
			$this->model->RegistrarCalificacion($idUnidad,$calificacion,$idCursoAlumno);
		}
		$promedio=$suma/5;
		$this->model->AsignaCalificacionFinal($promedio,$idCursoAlumno);
		$this->mensaje="Se ha calificado correctamente al alumno";
		$this->Listas();
	}
}
?>