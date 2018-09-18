<?php 
	//include 'index.php';
	function suma(int $a, int $b){
		return $a + $b;
	}

	function suma2(int $a, int $b) : int
	{
		global $numero;
		return ($a + $b + $numero);
	}
	
	function variante_suma(int $a, int $b) : int
	{
		return $a + $b;
	}

?>