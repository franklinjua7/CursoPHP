<?php 

class Producto{
	//Propiedades de la clase
	var $codigo;
	var $descripcion;
	var $unidadmedida;
	var $talla;

	//Se ejecuta la siguiente función cuando la clase ha sido instanciada.
	function __construct()
	{
		echo "He sido instanciado. <br>";
	}

	function imprimir()
	{
		echo "Código: ".$this->codigo."<br>";
		echo "Descripción: ".$this->descripcion."<br>";
		echo "Unidad de Medida: ".$this->unidadmedida."<br>";
		echo "Talla: ".$this->talla."<br>";
	}
}



?>
