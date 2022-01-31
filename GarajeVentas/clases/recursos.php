<?php

include('basededatos.php');
include('productos.php');

define('HOST', 'localhost');
define('USUARIO', 'root');
define('CLAVE', '');
define('BASE', 'garajeventas');

$base = new Basededatos(HOST, USUARIO, CLAVE, BASE);
$producto = new Productos($base);

?>