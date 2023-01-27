<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consulta de alumnos</title>
</head>
<body>

    <?php include 'navbar.php' ?>
    
    <div class="container">
    <?php "<h1>Consulta de Productos</h1>"; ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Modificar</th>               
            </tr>
        </thead>
        <tbody>
        <?php
        include("conexion.php");
        $query = "SELECT * FROM producto";
        $resultado = $conexion->query($query); 
        while ($row = $resultado->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                    <?php if ($row['imagen'] == "") {
                    echo "<td></td>";}else{
                        ?>
                        <td><img height="80" src="data:image/jpg;base64, <?php echo base64_encode(($row['imagen'])); ?>"/></td>
                        <?php
                    } ?>
                <!-- <td><img height="80" src="data:image/jpg;base64, <?php echo base64_encode(($row['imagen'])); ?>"/></td> -->
                <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                
            </tr>

        <?php
        }    
        
        ?>
        </tbody>
              
    </table>
   

        
   
    </div>
</body>
</html>