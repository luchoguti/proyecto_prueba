<?php

//Maquina Local
$nombre_servidor = "localhost";
$nombre_usuario = "root";
$contrasena = "";
$nombre_bd = "bodegayc_sistema";


//Server produccion
//$nombre_servidor = "localhost";
//$nombre_usuario = "";
//$contrasena = "";
//$nombre_bd = "";

//Server PruebaVentas
//$nombre_servidor = "localhost";
//$nombre_usuario = "";
//$contrasena = "";
//$nombre_bd = "";

$conexion = mysql_connect($nombre_servidor,$nombre_usuario,$contrasena) or die ('Error en la conexion: ' . mysql_error());
mysql_select_db($nombre_bd) or die ('Error en la conexion: ' . mysql_error());




?>
