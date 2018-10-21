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
echo "Número mayor: ".max($num_array);
echo "<br>";
echo "Número menor: ".$menor;
echo "<br>";
echo "Número menor: ".min($num_array);

//Multiplos de 7
$id=0;
for ($i=0; $i <=20 ; $i++) {
	if ($num_array[$i]%7==0) {
		$multiplo7[$id]	= $num_array[$id];
		$id++;
	}
}
echo "<br>Total de Numeros multiplos de 7: ".count($multiplo7);
echo "<br>Los Numeros Multiplos de 7 son: <br>";
for ($i=0; $i < count($multiplo7); $i++) { 
	echo $multiplo7[$i].", ";
}

//Ordenar de menor a mayor
echo "<br>Numero ordenados de menor a mayor: <br>";
sort($num_array,1);
for ($i=0; $i <= 20 ; $i++) { 
	echo $num_array[$i].", ";
	}

 ?>