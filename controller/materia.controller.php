<?php
require_once 'model/materia.php';
class MateriaController{

	private $model;
	private $mensaje;
	private $error;

	public function __CONSTRUCT(){
		$this->model = new Materia();
	}

	public function Index(){
		$admin=true;
		$materias=true;
		$page="view/materias/index.php";
		require_once 'view/index.php';
	}
	public function Crud(){
			$materia = new Materia();
			if(isset($_REQUEST['claveMateria'])){
				$materia = $this->model->Obtener($_REQUEST['claveMateria']);
			}
			$admin=true;
			$materias=true;
			$page="view/materias/materia.php";
			require_once 'view/index.php';
	}
		public function Guardar(){
		$materia= new Materia();
		$materia->materia=$_REQUEST['materia'];

		$this->model->Registrar($materia);
		$this->mensaje="La materia se ha registrado correctamente";
		$this->Index();
	}

}
?>