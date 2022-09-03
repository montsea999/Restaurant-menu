<?php
// *********** Archivo delete.php ***************
//llamamos al archivo Conexion.php y a la función conectar() para conectar con la base de datos pizza_ilerna.sql

include("Conexion.php");
$conexion=conectar();

 // almacenamos en una variable el valor recibido por url del atributo id
$id=$_GET['id'];

// realizamos la sentencia DELETE que eliminará el registro del que hemos pasado su id por GET
$sql="DELETE FROM menu WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if(!$query){
        echo "no se ha podido eliminar el registro indicado";       
    }
    
?>

