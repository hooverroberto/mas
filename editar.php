<?php
session_start();
include "conexion.php";
error_reporting(E_ALL);
ini_set('display_errors', '1');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles.css">
    <title>Editar</title>
</head>

<body>

    <?php include 'navbar.php' ?>

    <?php

    $query = "SELECT * FROM user WHERE id = '" . $_SESSION['id'] . "' ";
    $resultado = $conexion->query($query);
    $datos = $resultado->fetch_assoc();

    ?>

    <div class="h-100 d-flex align-items-center justify-content-center mt-5">
        <div class="container d-flex flex-column align-items-center gap-3">
            <div class="d-flex flex-column align-items-center gap-2">
                <h1>Personal info</h1>
                <!-- <h3>Basic info, like your name and photo</h3> -->
            </div>
            <div class="info__container border border-2 rounded-3 ">
                <div class="row p-2">
                    <div class="title__user col ps-4">
                        <h2>Change</h2>
                        <p>Some info may be visible to other people</p>
                    </div>
                    <div class="button__container col d-flex justify-content-around align-content-center flex-wrap">
                        <button class="btn border border-2 px-4">Edit</button>
                    </div>
                </div>
                <hr />
                <form action="guardar.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>" />
                    <div class="row p-2">
                        <div class="col-3 ps-4 d-flex align-items-center">
                            <span class="text-uppercase">photo</span>
                            <img style="height: 80px" src="<?php if ($datos['imagen'] == "") {
                                                                    echo '';
                                                                } else { ?>
                                    data:image/jpg;base64, <?php echo base64_encode(($datos['imagen'])) ?>"
                                <?php
                                    } ?>
                            <div class="col-7 offset-1 text-end text-sm-start">                                
                                <div class="mx-2">
                                <input type="file" name="imagen" />
                                </div>
                            </div>
                        </div>
                   
                    <hr />
                    <div class="row p-2">
                        <div class="col-3 ps-4 d-flex align-items-center">
                            <span class="text-uppercase" >name</span>
                            </div>
                            <div class="col-7 offset-1 text-end text-sm-start">
                                <input type="text" name="name" value="<?php echo $datos["name"]; ?>"></input>
                            </div>
                        
                    </div>
                    <hr />
                    <div class="row p-2">
                        <div class="col-3 ps-4 d-flex align-items-center">
                            <span class="text-uppercase">bio</span>
                            </div>
                            <div class="col-7 offset-1 text-end text-sm-start">
                                <input type="text" name="bio" value="<?php echo $datos["bio"]; ?>"></input>
                            </div>                        
                    </div>
                    <hr />
                    <div class="row p-2">
                        <div class="col-3 ps-4 d-flex align-items-center">
                            <span class="text-uppercase">phone</span>
                        </div>
                        <div class="col-7 offset-1 text-end text-sm-start">
                            <input type="text" name="phone" value="<?php echo $datos["phone"]; ?>"></input>
                        </div>
                    </div>
                    <hr />
                    <div class="row p-2">
                        <div class="col-3 ps-4 d-flex align-items-center">
                            <span class="text-uppercase">email</span>
                        </div>
                        <div class="col-7 offset-1 text-end text-sm-start">
                            <input type="text" name="email" value="<?php echo $datos["email"]; ?>"></input>

                        </div>
                    </div>
                    <hr />
                    <div class="row p-2">
                        <div class="col-3 ps-4 d-flex align-items-center">
                            <span class="text-uppercase">password</span>
                        </div>
                        <div class="col-7 offset-1 text-end text-sm-start">
                            <input type="password" name="password" value="<?php echo $datos["password"]; ?>"></input>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3">                
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>