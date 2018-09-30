<?php 

$db_host = "localhost";
$db_name = "bd_cecomp_ejemplo"; 
$db_username = "root"; 
$db_password = "";

//Conexion a la base de datos
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

//Prueba de la base de datos
if ($mysqli->connection_error) {
	echo "Error de Conexion: ". $mysqli->connection_error();
}

//Preparar la consulta
$sql = "INSERT INTO estados (nombre_estado) VALUES (?)";
$sentencia = $mysqli->prepare($sql);
if (!$sentencia) {
	echo "Fallo la preparacion: ({$mysqli->error()}) {$mysqli->error}.\n";
}

//Vincular los parametros
$nombre_estado;

 ?>