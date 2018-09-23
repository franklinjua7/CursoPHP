<?php 

include 'clase.php';

//echo "Estas en el index";
//echo "<br>";

//Ejercicio 01
echo "<h1>Ejercicio 01</h1>";
$empleado1 = new Empleado;
$empleado1->nombre = 'Franklin Juarez';
$empleado1->sueldo = 2500;
$empleado1->datos($empleado1->nombre,$empleado1->sueldo);
echo "<br>";
$empleado1->imprimirsi($empleado1->sueldo); 

//Ejercicio 02
echo "<h1>Ejercicio 02</h1>";
$menu1 = new Menu;

$menu1->opciones("Opcion1");
$menu1->opciones("Opcion2");
$menu1->opciones("Opcion3");
$menu1->opciones("Opcion4");

//echo $menu1->imprimir();
echo "<h3>Vertical</h3>";
echo $menu1->vertical();
echo "<h3>Horizontal</h3>";
echo $menu1->horizontal();

//Ejercicio 03
echo "<h1>Ejercicio 03</h1>";
 ?>