<?php

// ********* Archivo insert.php ******************************
//llamamos al archivo Conexion.php y a la función conectar() para conectar con la base de datos pizza_ilerna.sql
include("Conexion.php");
$conexion = conectar();

$id=null;
$nombre=null;
$opcion=null;
$precio=null;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body style="background-image: url('restaurant.jpg'); background-repeat: no-repeat;">
<br><br>
<div class="container mt-5">
<!-- **** Formulario para insertar un nuevo plato ******** -->
<h1 style="color:blue;">Formulario de inserción </h1>
<!-- **** el formulario enviará por POST a este mismo archivo el resultado de la inserción -->
    <form action="insert.php" method="POST">        
        <input type="hidden" class="form-control mb-3" name="id" placeholder="id">
        <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
        <select name="opcion" class="form-control mb-3"id="opcion">
            <option value="Especialidades de la casa">Especialidades de la casa</option>
            <option value="Las clásicas">Las clásicas</option>
            <option value="Las más picantes">Las más picantes</option>
            <option value="Para los más gourmets">Para los más gourmets</option>
            <option value="Familiares">Familiares</option>
            <option value="Aperitivos">Aperitivos</option>
        </select>
        <input type="text" class="form-control mb-3" name="precio" placeholder="precio">                                
        <input type="submit" class="btn btn-primary">
    </form>

    </div>
    
    <?php
//si se ha pasado por POST el contenido del input con el id del plato (clave principal), guardaremos en variables los
// contenidos de los cuatro campos
If(isset($_POST['id'])){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $opcion=$_POST['opcion'];
    $precio=$_POST['precio'];
    }
    // consulta de inserción e inserción del nuevo registro en la tabla menu de la base de datos pizza_ilerna.sql
    $sql="INSERT INTO pizza_ilerna.menu (nombre, opcion, precio) VALUES('$nombre', '$opcion', $precio)";
    $query= mysqli_query($conexion,$sql);
?>
    </body>
</html>