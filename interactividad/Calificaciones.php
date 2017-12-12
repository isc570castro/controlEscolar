<?php
$noCtrl=$_REQUEST["noCtrl"];
$con=mysql_connect('localhost','root','') or die ("Problemas con a conexion a la base de datos");
$baseDatos=mysql_select_db('controlescolar') or die ("Problemas al seleccionar la base de datos");

$query=mysql_query("SELECT cursos.periodo,materias.materia,docentes.nombre, cursos_alumnos.calificacion from docentes, materias, cursos, cursos_alumnos, alumnos WHERE alumnos.noCtrl=$noCtrl AND alumnos.noCtrl=cursos_alumnos.noCtrl AND materias.claveMateria=cursos.claveMateria AND cursos.idCurso=cursos_alumnos.idCurso AND cursos.idDocente=docentes.idDocente",$con);
$response=array();
while($fila = mysql_fetch_array($query)){
	$response["succes"]=true;
	$response["periodo"]=$fila['periodo'];
	$response["materia"]=$fila['materia'];
	$response["nombre"]=$fila['nombre'];
	$response["calificacion"]=$fila['calificacion'];
}

echo json_encode($response);
mysql_close();
/*
$con= mysqli_connect("localhost", "root", "", "controlescolar")or die("Imposible conectar ");
//mysql_select_db("users")or die("cannot select DB");

$noCtrl=$_REQUEST["noCtrl"];

//$sql="SELCT * FROM usuarios WHERE username=? AND password=?";
//$result=mysql_query($sql, $con) or die ('Unable to run query:'.mysql_error());

/*$statement=mysqli_prepare($con, "SELECT alumnos.noCtrl, alumnos.nombre, alumnos.primerApellido,alumnos.segundoApellido, alumnos.grupo FROM usuariosalumnos,alumnos WHERE usuariosalumnos.noCtrl=? AND usuariosalumnos.password=? AND usuariosalumnos.noCtrl=alumnos.noCtrl");*/
/*
$statement=mysqli_prepare($con,"SELECT cursos.periodo,materias.materia,docentes.nombre, cursos_alumnos.calificacion from docentes, materias, cursos, cursos_alumnos, alumnos WHERE alumnos.noCtrl='?' AND alumnos.noCtrl=cursos_alumnos.noCtrl AND materias.claveMateria=cursos.claveMateria AND cursos.idCurso=cursos_alumnos.idCurso AND cursos.idDocente=docentes.idDocente");

//mysqli_stmt_bind_param($statement, "s", $noCtrl);
$execute=mysqli_stmt_execute($statement);
echo $execute;
/*mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $periodo, $materia, $nombre, $calificacion);*/
/*
$response=array();
$response["succes"]=false;

while($fila = mysqli_fetch_row($execute)){
	$response["succes"]=true;
	$response["periodo"]=$fila['periodo'];
	$response["materia"]=$fila['materia'];
	$response["nombre"]=$fila['nombre'];
	$response["calificacion"]=$fila['calificacion'];
}

echo json_encode($response);*/

?>