<?php

include("Conexion.php");
$conexion=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$opcion=$_POST['opcion'];
$precio=$_POST['precio'];

$sql="UPDATE menu SET  id='$id',nombre='$nombre', opcion='$opcion' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: index.php");
    }
?>