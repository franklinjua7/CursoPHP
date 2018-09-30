<?php 
	namespace cecomp;
	class Estudiante{
		private $nombre;

		public function __construct($value){
			$this->nombre = $value;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function saludar(){
			return "Mi nombre es: ".$this->nombre. " y soy del namespace CECOMP.";
		}
	}

 ?>