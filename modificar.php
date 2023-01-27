<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <title>Editar producto</title>
</head>
<body>
    
<?php include 'navbar.php' ?>

<div class="container">
    <?php
    echo '<h1>Profile</h1>';
    '<h2>Peoductos</h2>'
    ?>
    <?php
    include("conexion.php");
    $id = $_REQUEST['id'];  //  WHERE id = 'id'
    $query = "SELECT * FROM producto WHERE id = '$id'";
    $resultado = $conexion->query($query); 
    $row = $resultado->fetch_assoc();
    ?>
    
    <form action="procesomodificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
       
        <div class="form-group mx-sm3 mb-3">
            <label></label>
            <input type="text" REQUIRED class="form-control" name="name" placeholder="Nombre" value="<?php echo $row['name']; ?>" />
        </div>
        <?php if ($row['imagen'] == "") {
                    echo "";}else{
                        ?>
                        <img height="80" src="data:image/jpg;base64, <?php echo base64_encode(($row['imagen'])); ?>"/>
                        <?php
                    } ?>
        <div class="form-group mx-sm3 mb-2">
            <label></label>
            <input type="file" REQUIRED class="form-control" name="imagen"/>
        </div>
        <input class="btn btn-primary mb-2" value="Aceptar" type="submit" />
    </form>
</div>
</body>
</html>