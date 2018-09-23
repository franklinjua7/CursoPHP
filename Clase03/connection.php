<?php 

$db_host = "localhost";
$db_name = "scp"; 
$db_username = "root"; 
$db_password = "";


//Conexión Base de Datos - Simple
$mdb = new PDO('msql:host='$db_host'; dbname='$db_name, $db_username, $db_password);

//Conexión Base de Datos - A prueba de errores.
try {
    $mbd = new PDO('mysql:host='$db_host';dbname='$db_name, $db_username, $db_password);
    foreach($mbd->query('SELECT * from FOO') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

 ?>