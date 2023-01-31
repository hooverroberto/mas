<?php
include "conexion.php";

error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST["name"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($_FILES['imagen']['size'] > 0) {

        $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

        $query = "UPDATE user SET imagen='$imagen' WHERE id='$id'";

        $resultado = $conexion->query($query);
    }

    $queryuser = "UPDATE user SET name='$name', bio='$bio', phone='$phone', email='$email', password='$password'
WHERE id = '$id'";
    // $resultado = mysqli_query($conexion, $query);
    $resultado = $conexion->query($queryuser);
    if ($resultado > 0) {
        header("refresh:1;url=profile.php");
        echo "<script>
                alert('Los datos fueron ingresados correctamente');

            </script>";
    } else {
        header("refresh:1;url=profile.php");
        echo "<script>
                alert('Error al registro');

                </script>";
    }

}
