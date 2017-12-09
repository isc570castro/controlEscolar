<<?php
require_once 'model/calificacion.php';
class InicioController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Calificiacion();
	}

	public function Index(){
		$inicio=true;
		$page="view/calificacion.php";
		require_once 'view/index.php';
	}
}
?>