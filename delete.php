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
if($query){
    Header("Location: index.php");
}
    if(!$query){
        echo "no se ha podido eliminar el registro indicado";       
    }     
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body style="background-image: url('restaurant.jpg'); background-repeat: no-repeat;">
        <div class="container mt-5">
           <h3 style="color:blue;" class="mt-5">se ha podido eliminar correctamente el registro indicado</h3>     
        </div>

    </body>
</html>

