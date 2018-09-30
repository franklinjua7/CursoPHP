<?php 
	
	require_once 'Animal.php';
	require_once 'TocableTrait.php';

	class Gatooo extends Animal {
		use TocableTrait;
		use tocable2Trait;
	}
 ?>