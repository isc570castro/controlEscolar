<?php
require_once 'model/usuario.php';
class UsuarioController{
	
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Usuario();
	}
	public function Index(){
		$admin=true;
		$usuarios=true;
		$page="view/usuario/index.php";
		require_once 'view/index.php';
	}
	public function Crud(){
	
			$usuario = new Usuario();
			if(isset($_REQUEST['idUsuario'])){
				$usuario = $this->model->Obtener($_REQUEST['idUsuario']);
			}
			$admin=true;
			$usuarios=true;
			$page="view/usuario/usuario.php";
			require_once 'view/index.php';
	
	}
	public function Guardar(){
		$usuario= new Usuario();
		$usuario->usuario=$_REQUEST['usuario'];
		$usuario->password=$_REQUEST['password'];
		$usuario->idRelacional=$_REQUEST['idDocente'];
		
		$this->model->Registrar($usuario);
		$this->mensaje="El usuario se ha registrado correctamente";
		$this->Index();
	}
}

