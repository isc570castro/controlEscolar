<?php
//error_reporting(ERROR_REPORTING_LEVEL);
require_once 'model/conexion.php';
$controller = 'login';
// Todo esta lógica hara el papel de un FrontController

if(!isset($_REQUEST['c'])) //Isset es una forma de saber si la variable esta cargada
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller'; //La primera letra de $controller la convierte a mayuscula y la variable queda LoginController
    $controller = new $controller;
    $controller->Index();   
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']); //convierte a todas las letras en minusculas lo asigna al controlador
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index'; //

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ));
}
?>