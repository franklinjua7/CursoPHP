<?php 
	declare(strict_types=1);

	function ejemplo_get_arrays_php5(){
		$nombres = func_get_args();

		echo "<ul>";
		foreach ($nombres as $nombre) {
			echo "<li>".$nombre."</li>";
		}
		echo "</ul>";
	}

	function ejemplo_get_arrays_php7(String ...$nombres){
		echo "<ul>";
		foreach ($nombres as $nombre) {
			echo "<li>".$nombre."</li>";
		}
		echo "</ul>";
	}

	function devuelve_suma_numeros(int ...$numeros){
		return array_sum($numeros);
	}

	echo ejemplo_get_arrays_php5('Franklin','Marco','Diana','Jimena');
	echo ejemplo_get_arrays_php7('Franklin','Marco','Diana','Jimena');
	echo devuelve_suma_numeros(10,79);

 ?>