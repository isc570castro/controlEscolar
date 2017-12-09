<?php
require_once 'model/login.php';
class InicioController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Login();
	}

	public function Index(){
		$inicio=true;
		$page="view/inicio.php";
		require_once 'view/index.php';
	}
}
?>