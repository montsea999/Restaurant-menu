<?php
// ******** Archivo de conexión a la bbdd, Conexion.php *********
// función que establece la conexión a la base de datos pizza_ilerna.sql y establece el juego de caracteres utf8
function conectar(){

$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion,"pizza_ilerna");

if(!$conexion){
	die("no se ha podido establecer la conexión");
}

mysqli_set_charset($conexion, "utf8");
return $conexion;

}
?>
