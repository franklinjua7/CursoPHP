<?php 

class Auto{
	//Propiedades
	var $color;
	var $modelo;

	//Metodos:
	//Metodo Constructor
	function __construct($p_color,$p_modelo){
		$this->color = $p_color;
		$this->modelo = $p_modelo;
	}
	//Metodo Imprimir
	function imprimir (){

		echo "<h3>Impresión de auto</h3>";
		echo "Color: ".$this->color."<br>";
		echo "Modelo: ".$this->modelo."<br>";
	}
}

$auto = new Auto('Rojo','Audi');
$auto->imprimir();
$auto = new Auto('Azul','Ferrari');
$auto->imprimir();
$auto = new Auto('Negro','For');
$auto->imprimir();
$auto = new Auto('Verde','Lamborgini');
$auto->imprimir();
$auto = new Auto('Silver','Toyota');
$auto->imprimir();

 ?>