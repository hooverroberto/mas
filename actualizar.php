<?php
include("conexion.php");

error_reporting(E_ALL);
ini_set('display_errors', '1'); 



if(isset($_POST["registro.php"])){
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pass_encryp = sha1($password);

    $sql ="SELECT id FROM user WHERE email='$email'";
    $result = $conexion -> query($sql);
    $filas= $result-> num_rows;
    if($filas>0){
        echo "<script>
                alert('El email ya existe');
                windows.location = 'registro.php';
            </script>";
    }else{
        $queryuser = "INSERT INTO user(`name`, `bio`, `phone`, `email`, `password` ) 
        VALUES('$name', '$bio', '$phone', '$email', '$password')";
        $resultado = mysqli_query($conexion, $query);
        if($resultado > 0){
            echo "<script>
                alert('Los datos fueron ingresados correctamente');
                windows.location = 'registro.php';
            </script>"; 
        }else{
            echo "<script>
                alert('Error al registro');
                windows.location = 'registro.php';
                </script>";
        }
    }

}
// $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));





// $resultado = mysqli_query($conexion, $query);
// // var_dump($resultado);
//     if($resultado){ 
      
//         header("Location:registro.php");
//         echo "Tus datos ingresaron correctamente";
//     }
?>