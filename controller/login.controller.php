<?php
require_once 'model/login.php';
class LoginController{

  private $model;
  
  public function __CONSTRUCT(){
    $this->model = new Login();
  }
  public function Index(){
    require_once 'view/login.php';
  }

  public function Acceder(){
   $log = new Login();
   $usuario=$log->usuario = $_REQUEST['usuario'];
   $password = $_REQUEST['password'];
   if($usuario=="admin" && $password=="admin123"){
      $this->login($usuario,$password,"Administrador","0");
        header ('Location: index.php?c=Inicio');
   }else{
     $consulta=$this->model->verificar($log);
     if($consulta!=null){
      if($consulta->password == $password){
        $docente=$consulta->nombre." ".$consulta->primerApellido." ".$consulta->segundoApellido;
        $this->login($usuario,$password,$docente,$consulta->idDocente);
        header ('Location: index.php?c=Inicio');
      }else{
        $error="Acceso incorrecto";
        require_once 'view/login.php';
      }
    }else{
     $error="Acceso incorrecto";
     require_once 'view/login.php';
   } 
 }
}

public function login($usuario,$password,$docente,$idDocente)
{
  $_SESSION['idDocente']=$idDocente; 
  $_SESSION['usuario']=$usuario;
  $_SESSION['docente']=$docente;
  $_SESSION['seguridad']='ok';
  if ($usuario=="admin") {
    $_SESSION['tipo']='admin';
  }
}

public function redirect($url)
{
 header("Location: $url");
}

public function logout()
{
  session_destroy();
  unset($_SESSION['usuario']);
  unset($_SESSION['password']);
  unset($_SESSION['seguridad']);
  header ('Location: index.php');
}
public function LoginAlumno(){
  header('Content-Type: application/json');
  $noCtrl=$_REQUEST['noCtrl'];
  $password=$_REQUEST['password'];
  $consulta=$this->model->VerificaAlumno($noCtrl,$password);
  $json=array();
  if (!$consulta==null) {
    $json['success']=true;
    $json['noCtrl']=$consulta->noCtrl;
    $json['nombre']=$consulta->nombre;
    $json['primerApellido']=$consulta->primerApellido;
    $json['segundoApellido']=$consulta->segundoApellido;
    $json['grupo']=$consulta->grupo;
  }else{
    $json['mensaje']='fail';
  }
  echo json_encode($json);
}
}
