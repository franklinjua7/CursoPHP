<?php 

//Declaramos las variable
$mayor=0;
$menor=99999;

//Generamos los numero aleatorios.
for ($i=0; $i <= 20; $i++) { 
	$num_array[$i]= rand(1,10000);
}
//Imprimimos los numeros
echo "Los Numeros Aleatorios son: <br>";
for ($i=0; $i <=20 ; $i++) { 
	echo $num_array[$i].", ";
}
echo "<br>";

//Verificamos al numero mayor y menor
for ($i=0; $i <=20 ; $i++) { 
	if ($mayor<$num_array[$i]) {
		$mayor= $num_array[$i];
	}
	if ($menor>$num_array[$i]) {
		$menor=$num_array[$i];
	}
}
echo "Número mayor: ".$mayor;
echo "<br>";
echo "Número menor: ".$menor;
 ?>