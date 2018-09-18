<?php 

require_once 'producto2.php';

$producto = new Producto();

//Sateamos valores de la Clase Producto
	$producto->codigo ='P004';
	$producto->descripcion='Camiseta Billabong';
	$producto->unidadmedida='Camisetas';
	$producto->talla='ML';

	$producto->imprimir();


?>