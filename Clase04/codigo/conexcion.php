<?php 

//Procedimental

$db_host = "localhost";
$db_name = "bd_cecomp_ejemplo"; 
$db_username = "root"; 
$db_password = "";

// 1. Conectarnos
$mysqli = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// 2. Verificamos la Conexion
if (mysqli_connect_error($mysqli)) {
	echo "Error al Conectar con Mysql: ". mysqli_connect_errorror();
} else {
	echo "Nos conectamos a nuestra base de datos.";
}
echo "<br>";

// 3. Ejecutar la sentencia SQL
$resultado = mysqli_query($mysqli, "SELECT id, nombre_estado FROM estados");

// 4. Imprimir Filas o Tuplas
// Opcion A
/*while ($fila = mysqli_fetch_assoc($resultado)) {
	echo $fila['id'].' '.$fila['nombre_estado'];
	print "</br>";
}*/

// Opcion B
echo "<SELECT>";
while ($fila = mysqli_fetch_assoc($resultado)) {
	//echo $fila['id'].' '.$fila['nombre_estado'];
	//print "</br>";
	echo "<option value = '".$fila['id']."'>".$fila['nombre_estado']."</option>";
}
echo "</SELECT>";

// Opcion C
echo "<table>";
while ($fila = mysqli_fetch_assoc($resultado)) {
	echo "<tr>";
		echo "<td>".$fila['id']."</td>";
		echo "<td>".$fila['nombre_estado']."</td>";
	echo "</tr>";
}
echo "</table>";

// 5. Liberar Memoria de Resultados
//mysqli_free_result($resultado);
$resultado->free();

// 6. Cerrar la Conexion
mysqli_close($mysqli);

echo "</br>Termino";


 ?>