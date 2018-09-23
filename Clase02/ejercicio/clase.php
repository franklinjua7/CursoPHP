<?php 

class Empleado{
	var $nombre;
	var $sueldo;

	function datos($dnombre, $dsueldo){
		//$this->nombre = $dnombre;
		//$this->sueldo = $dsueldo;
		echo "Nombre: ".$dnombre;
		echo "<br>";
		echo "Sueldo: ".$dsueldo;
		echo "<br>";
	}

	function imprimirsi($dsueldo){
		echo "Observaciones: <br>";
		if ($dsueldo>3000) {
			echo "Paga impuestos";
		} else {
			echo "No paga impuestos";
		}
		echo "<br> Sueldo :".$this->sueldo;
	}
}

class Menu{
	var $titulos = array();

	function opciones($nombre){
		$this->titulos[] = $nombre;
	}

	function imprimir(){
		var_dump($this->titulos);
	}

	function vertical(){
		for ($i=0; $i < count($this->titulos) ; $i++) { 
			echo $this->titulos[$i];
			echo "<br>";
		}
	}
	function horizontal(){
		for ($i=0; $i < count($this->titulos) ; $i++) { 
			echo $this->titulos[$i];
			echo " - ";
		}
	}
}

class Factura{
	static $impuesto = 18;
	var $importebase;
	var $fecha;
	var $impuestos;
	var $importebruto;
	var $estado;

	function imprime(){
		echo "Imprimir Factura";
	}
}


?>