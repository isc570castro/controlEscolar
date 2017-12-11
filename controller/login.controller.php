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
   //$password=md5($password);
   //$password=crc32($password);
   //$password=crypt($password,"xtem");
  // $password=sha1($password);
   //echo $password;
   $consulta=$this->model->verificar($log);
   if($consulta!=null){
    if($consulta->password == $password){
      $this->login($usuario,$password,$consulta->tipoUsuario,$consulta->direccion);
      header ('Location: index.php?c=Inicio');
    }else{
      $error="  La contraseña es incorrrecta";
      require_once 'view/login.php';
    }
  }else{
   $error="  El usuario es incorrecto";
   require_once 'view/login.php';
 }
}

public function login($usuario,$password,$tipo,$direccion)
{
 $_SESSION['usuario'] = $usuario;
 $_SESSION['password'] = $password;
 $_SESSION['tipoUsuario'] = $tipo;
 $_SESSION['direccion']=$direccion;
 $_SESSION['seguridad'] = "ok";
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
    $noCtrl=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $consulta=$this->model->VerificaAlumno($noCtrl,$password);
    $json=array();
    if (!$consulta==null) {
      $row_array['mensaje']='success';
      $row_array['noCtrl']=$consulta->noCtrl;
      $row_array['nombre']=$consulta->nombre;
      $row_array['primerApellido']=$consulta->primerApellido;
      $row_array['segundoApellido']=$consulta->segundoApellido;
      $row_array['grupo']=$consulta->grupo;


      array_push($json, $row_array);
    }else{
      $row_array['mensaje']='fail';
      array_push($json, $row_array);
    }
    echo json_encode($json, JSON_FORCE_OBJECT);
  }
}
