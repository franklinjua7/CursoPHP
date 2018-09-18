<?php 

class Papa{
	const genero = "Masculino";
	var $nombre = 'Franklin';
	var $apellido = 'Juarez Roman';
	public $edad;

	public function set_edad($value){
		$this->edad = $value;
	}
	public function get_edad(){
		return $this->edad;
	}

}

class Hijo extends Papa{

	function __construct($p_nombre)
	{
		$this->nombre = $p_nombre;
	}
}

class Familia{

	public function miembro(Hijo $hijo){
		echo $hijo->nombre;
		echo $hijo->get_edad();
	}
}


$hija = new Hijo('Jimena');
$hija->set_edad(20);

//Metodo Convencional
//echo "Nombre Completo: ".$hija->nombre." ".$hija->apellido."<br>";
//echo "Edad: ".$hija->get_edad();

//Metodo Clases de clase
$familia = new Familia();
$familia->miembro($hija);

$papa = new Papa();
echo "<br>Genero del padre: ".$papa::genero;

interface AutomovilInterface{
	public function getTipo();
	public function getColor();
	public function getMarca();
}

class Mercedes implements AutomovilInterface{

	public function getTipo(){
		echo "<br>Sedan";
	}
	public function getColor(){
		echo "<br>Rojo";
	}
	public function getMarca(){
		echo "<br>Benz 2015";
	}
}

$carro = new Mercedes();
$carro->getColor();

?>