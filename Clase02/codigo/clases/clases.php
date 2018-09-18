<?php 
//Llamada a la Clase Producto
require_once 'producto.php';

//---------------------------------------
//Instancia de la Clase
echo "<h1>Primera Instancia</h1>";
$producto = new Producto();

	//Sateamos valores de la Clase Producto
	$producto->codigo ='P001';
	$producto->descripcion='Camiseta Billabong';
	$producto->unidadmedidad='Camisetas';
	$producto->talla='XS';
	//Imprimimos los valores
	echo "Codigo: ".$producto->codigo."<br>";
	echo "Descripción: ".$producto->descripcion."<br>";
	echo "Unidad de Medida: ".$producto->unidadmedidad."<br>";
	echo "Talla: ".$producto->talla."<br>";


//--------------------------------------
//SEgunda Instancia
echo "<h1>Segunda Instancia</h1>";
$producto2 = new Producto();

	//Sateamos valores de la Clase Producto
	$producto2->codigo ='P002';
	$producto2->descripcion='Camiseta Quicksilver';
	$producto2->unidadmedidad='Camisetas';
	$producto2->talla='M';
	//Imprimimos los valores
	echo "Codigo: ".$producto2->codigo."<br>";
	echo "Descripción: ".$producto2->descripcion."<br>";
	echo "Unidad de Medida: ".$producto2->unidadmedidad."<br>";
	echo "Talla: ".$producto2->talla."<br>";


?>