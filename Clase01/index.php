<!DOCTYPE HTML>
<html>
	<head>
		<title>Ejemplo - Numero01</title>
	</head>
	<body>
	<h1>PROGRAMACIÓN EN PHP</h1>>
		<?php 
			echo "¡Hola, soy un scrip en PHP!";
			print "<br/>";
			print "Hola a mi primer clase de PHP";
			print("<p>Este es un parrafo en PHP</p>");
			print "<p>Este es un segundo parrafo en PHP</p>";
			print("<ul>
					<li>PHP desde php</li>
					<li>Lavarel desde php</li>
					<li>Cake PHP desde php</li>
				</ul>");
			$mi_variable = "Hola variable";
			echo $mi_variable."<br/>";
			$dinero=100;
			echo $dinero."<br/>";
			$dinero = $dinero + 50;
			echo $dinero."<br/>";

			echo "<h3>MENSAJE EN ESPAÑOL</h3>";
			$mensaje_es="Hola";
			$mensaje_en="Hello";
			$idioma="es";
			$mensaje = "mensaje_".$idioma;
			print $$mensaje;

			echo "<h3>MENSAJE EN ESPAÑOL</h3>";
			$idioma="en";
			$mensaje="mensaje_".$idioma;
			print $$mensaje;

			echo "<h3>USO DE LAS CONSTANTES</h3>";
			define ("CONSTANTE", "Ella");
			print CONSTANTE."<br/>";
			define ("PI", 3.141516);
			print PI;

			define("APP_DOMINIO", "ejemplo.com");
			define("DB_HOST", "192.168.2.14");
			define("DB_HOSTNAME", "CECOMPPHP");
			define("DB_USU", "frankjua");
			define("DB_PASS", "1234567890");

			echo "<h3>ESTRUCTURA DE CONTROL</h3>";
			$sexo = "M";
			$nombre= "Franklin Juárez Roman";
			if ($sexo =="F") {
				$saludo = "Bienvenida, ";
			} else{
				$saludo = "Bienvenido, ";
			}
			$saludo = $saludo.$nombre;
			echo $saludo;

			echo "<h3>ESTRUCTURA TIPO SWITCH</h3>";
			$extension="PDF";

			switch ($extension) {
				case 'PDF':
					$tipo = "Documento de Adobe Reader";
					break;
				
				default:
					$tipo = "No es un documento conocido";
					break;
			}

			$dato=90;
			switch ($dato) {
				case '0':
					echo "numero";
					break;
				case '90':
					echo "numero grande";
					break;
				default:
					echo "string";
					break;
			}
			//-------------------------------------------
			echo "<h3>ESTRUCTURA REPETITIVA WHILE</h3>";
			echo "<ul>";
			$i = 1;

			while ($i <= 5) {
				print( "<li> Lista $i </li>");
				$i++;
			}
			echo "</ul>";

			//-------------------------------------------
			echo "<h3>ESTRUCTURA REPETITIVA DOWHILE</h3>";
			echo "<ul>";
			$i = 1;

			do {
				print( "<li> Lista $i </li>");
				$i++;
			} while ($i <= 5);
			echo "</ul>";

			//-------------------------------------------
			echo "<h3>ESTRUCTURA REPETITIVA FOR</h3>";
			echo "<ul>";
			$num = 5;

			for ($i=1; $i < 13 ; $i++) { 
				echo "$i x $num = ".$num*$i."<br/>";
			}
			echo "</ul>";
			//---------------------------------------
			echo "<h3>ESTRUCTURA DE FUNCIONES</h3>";
			function mifuncion($dato)
			{
				return $dato + 5;
			}

			echo mifuncion(60);
		?>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima facilis sunt repellat magni eius necessitatibus. Itaque officiis illum, a neque fugiat totam suscipit recusandae provident ullam ipsum dignissimos, harum nulla.
		</p>
		<ul>
			<li>PHP</li>
			<li>LAvarel</li>
			<li>Cake PHP</li>
		</ul><!--ul>li*3-->


	</body>
</html>