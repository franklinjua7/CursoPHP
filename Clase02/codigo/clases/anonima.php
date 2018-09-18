<?php 

class FabricaMadreMadera{

	$añoCreacion = 1993;
	$lugar = 'Chimbote';
	$jefe = 'Yo';

	public function FabricarMadreMesa ($p_Color, $p_numero)
	{
		return new class ($p_Color, $p_numero){
			private $color;
			private $patas;

			public function __construct($p_Color, $p_numero)
			{
				$this->color = $p_Color;
				$this->patas = $p_numero;
			}

			public function getcolor(){
				return $this->color;
			}

			public function getpatas(){
				return $this->patas;
			}
		};
	}

	public function FabricarMadrePuertas ($p_color, $p_tamaño){

	}

	public function FabricarMadreVentanas ($p_color, $p_tamaño){
		
	}

	public function FabricarMadreSillass ($p_color, $p_tamaño){
		
	}
}

$fabricaHija = new FabricaMadre();

$mesa = $fabricaHija->FabricarMadreMesa('Negro',4);
$mesa2 = $fabricaHija->FabricarMadreMesa('Verde',4);

echo "<h3>Primera Mesa</h3>";
echo "Color: ".$mesa->getcolor()."<br>";
echo "Patas: ".$mesa->getpatas()."<br>";

echo "<h3>Primera Mesa</h3>";
echo "Color: ".$mesa2->getcolor()."<br>";
echo "Patas: ".$mesa2->getpatas()."<br>";


 ?>