<?php 
	function comer($comida){
		/*if ($comida == 'pollo') {
				throw new Exception('Error al comer pollo');
				
			}	

		return "Comiendo: ".$comida;*/

		if ($comida == 'pollo') {
			throw new comidaException;
			
		}
		return "Comiendo: ".$comida;
	}

	function edad($edad){
		if ($edad < 0) {
			throw new personaException;
		}
		return "Mi edad es: ".$edad;
	}
 ?>