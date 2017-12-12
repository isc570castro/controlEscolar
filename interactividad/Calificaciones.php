<?php
$noCtrl=$_REQUEST["noCtrl"];
$con=mysql_connect('localhost','root','') or die ("Problemas con a conexion a la base de datos");
$baseDatos=mysql_select_db('controlescolar') or die ("Problemas al seleccionar la base de datos");

$query=mysql_query("SELECT cursos.periodo,materias.materia,docentes.nombre, cursos_alumnos.calificacion from docentes, materias, cursos, cursos_alumnos, alumnos WHERE alumnos.noCtrl=$noCtrl AND alumnos.noCtrl=cursos_alumnos.noCtrl AND materias.claveMateria=cursos.claveMateria AND cursos.idCurso=cursos_alumnos.idCurso AND cursos.idDocente=docentes.idDocente",$con);
$response=array();
$num=mysql_num_rows($query);
while($fila = mysql_fetch_array($query)){
	$row_array["succes"]=true;
	$row_array["periodo"]=$fila['periodo'];
	$row_array["materia"]=$fila['materia'];
	$row_array["nombre"]=$fila['nombre'];
	$row_array["calificacion"]=$fila['calificacion'];
	array_push ($response, $row_array);
}
echo json_encode($response);
mysql_close();

?>