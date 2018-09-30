<?php 

require 'conexcion.php';

//Preparar la consulta
$sql = "INSERT INTO estados (nombre_estado) VALUES (?)";
$sentencia = $mysqli->prepare($sql);
if (!$sentencia) {
	echo "Fallo la preparacion: ({$mysqli->error()}) {$mysqli->error}.\n";
}

//Vincular los parametros
$nombre_estado

 ?>