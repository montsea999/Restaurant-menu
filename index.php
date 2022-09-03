<?php
// **** Archivo de arranque de la aplicación, index.php *************
//llamamos al archivo Conexion.php y a la función conectar() para conectar con la base de datos pizza_ilerna.sql
include ("Conexion.php");
$conexion = conectar();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-image: url('restaurant.jpg');
  background-repeat: no-repeat;">
        <div class="container mt-5">
                <div class="row">                     
                    <div class="col-md-8">
                        <!-- Formulario de búsqueda de platos según la opción del menú-->
                    <h1 style="color:blue;">Selecciona una opción del menú</h1>
                    <!---enviará por get la elección del usuario, a este mismo archivo -->
                            <form action="index.php" method="get">
                            <select name="opcion" class="form-control mb-3" id="opcion">
                            <option selected>selecciona una opción del menú</option>
                                 <option value="Especialidades de la casa">Especialidades de la casa</option>
                                 <option value="Las clásicas">Las clásicas</option>
                                 <option value="Las más picantes">Las más picantes</option>
                                 <option value="Para los más gourmets">Para los más gourmets</option>
                                 <option value="Familiares">Familiares</option>
                                 <option value="Aperitivos">Aperitivos</option>
                            </select>                                                           
                           <input type="submit" name="enviando" class="btn btn-primary">                           
                        </form><br> <br>             
                    </div>

                    <?php
                    // si se recibió por get la opción, entonces muestra la tabla (si no, no la muestra)
                        if(isset($_GET['opcion'])){
                    ?>
                    <div class="col-md-8">
                        <table class="table table-hover" >
                            <thead class="table-success table-striped" >
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>opcion</th>
                                    <th>precio</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                 <?php 
                                 // almaceno en una variable la opción seleccionada por el usuario
                                    $opcion= $_GET['opcion'];

                                // si hay conexión, y se clicó el botón submit, realiza la consulta SELECT para que muestre
                                // los registros que tienen como atributo esa opción seleccionada por el usuario
                                    if($conexion){                                    
                                    if(null !=='enviando'){   

                                    $consulta="SELECT * FROM menu WHERE opcion='$opcion'";
                                    if($consulta){                        
                                       $result=mysqli_query($conexion, $consulta);  

                                    echo '<h1 style="color:blue;">' . $opcion . '</h1>';

                                    // mientras recupere una fila el array asociativo, la mostrará en la tabla
                                        while($row = mysqli_fetch_assoc($result)){      
                                                                          
                                    ?>                                        
                                        <tr>
                                            <td><?php  echo $row['id']?></th>
                                            <td style="color:white;"><?php  echo $row['nombre']?></th>
                                            <td style="color:white;"><?php  echo $row['opcion']?></th>
                                            <td style="color:white; font-weight:bold"><?php  echo $row['precio']?></th>   
                                            
                                            <!--botón editar, que pasa al archivo update.php por url, el id del registro a editar -->
                                            <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>

                                            <!--botón eliminar, que pasa al archivo delete.php por url, el id del registro a eliminar -->
                                            <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                        </tr>
                                    <?php 
                                } }}}}
                                       
                                    ?>
                            </tbody>
                        </table>
                    </div>
                
                    <!-- botón para insertar nuevo plato, que redirecciona al archivo insert.php-->
                        <a href='insert.php'><input class="btn btn-primary" value="Insertar plato"></a>
                </div>  
        </div>        
</body>
</html>
