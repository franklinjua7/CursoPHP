<?php 

	require_once 'exception.php';
	require_once 'funciones.php';

	try {
		echo "<h1>EJEMPLO EXCEPTION</h1>";
		//echo comer('Ella');
		//echo comer('pollo');
		echo edad(30);
		echo edad(-10);

	} catch (comidaException $e){
		echo "<br>";
		echo $e->getMessage();
		echo "<br>";
		echo $e->getLine();

	} catch (personaException $e){
		echo "<br>";
		echo $e->getMessage();
	} finally {
		print "<br>";
		print "Ella se fue";
	}

	
	

?>