<?php
$con= mysqli_connect("localhost", "root", "", "controlescolar")or die("Imposible conectar ");
//mysql_select_db("users")or die("cannot select DB");

$noCtrl=$_REQUEST["noCtrl"];
$password=$_REQUEST["password"];

//$sql="SELCT * FROM usuarios WHERE username=? AND password=?";
//$result=mysql_query($sql, $con) or die ('Unable to run query:'.mysql_error());

$statement=mysqli_prepare($con, "SELECT alumnos.noCtrl, alumnos.nombre, alumnos.primerApellido,alumnos.segundoApellido, alumnos.grupo FROM usuariosalumnos,alumnos WHERE usuariosalumnos.noCtrl=? AND password=? AND usuariosalumnos.noCtrl=alumnos.noCtrl");
mysqli_stmt_bind_param($statement, "ss", $noCtrl, $password);
mysqli_stmt_execute($statement);
mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $noCtrl, $nombre, $primerApellido, $segundoApellido,$grupo);

$response=array();
$response["succes"]=false;

while(mysqli_stmt_fetch($statement)){
	$response["succes"]=true;
	$response["noCtrl"]=$noCtrl;
	$response["nombre"]=$nombre;
	$response["primerApellido"]=$primerApellido;
	$response["segundoApellido"]=$segundoApellido;
	$response["grupo"]=$grupo;
}

echo json_encode($response);
?>