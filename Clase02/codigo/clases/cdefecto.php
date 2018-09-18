<?php 

class Producto{
	//Propiedades de la clase
	var $codigo;
	var $descripcion;
	var $unidadmedidad;
	var $talla='XXS';
}

$producto = new Producto();

//Sateamos valores de la Clase Producto
	$producto->codigo ='P003';
	$producto->descripcion='Polo Quicksilver';
	$producto->unidadmedidad='Camisetas';
	
	//Imprimimos los valores
	echo "Codigo: ".$producto->codigo."<br>";
	echo "Descripción: ".$producto->descripcion."<br>";
	echo "Unidad de Medida: ".$producto->unidadmedidad."<br>";
	echo "Talla: ".$producto->talla."<br>";

//SEgunda Instancia
echo "<h1>Segunda Instancia</h1>";
$producto2 = new Producto();

	//Sateamos valores de la Clase Producto
	$producto2->codigo ='P004';
	$producto2->descripcion='Camiseta Billabong';
	$producto2->unidadmedidad='Camisetas';
	$producto2->talla='ML';
	//Imprimimos los valores
	echo "Codigo: ".$producto2->codigo."<br>";
	echo "Descripción: ".$producto2->descripcion."<br>";
	echo "Unidad de Medida: ".$producto2->unidadmedidad."<br>";
	echo "Talla: ".$producto2->talla."<br>";


?>
