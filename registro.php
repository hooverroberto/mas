<?php
include("conexion.php");

if (isset($_SESSION['email'])) {
    header('Location:profile.php');
}


error_reporting(E_ALL);
ini_set('display_errors', '1'); 

if(isset($_POST["registrar"])){
    $name = mysqli_real_escape_string($conexion, $_POST["name"]);
    $bio =  mysqli_real_escape_string($conexion, $_POST["bio"]);
    $phone = mysqli_real_escape_string($conexion,$_POST["phone"]);
    $email = mysqli_real_escape_string($conexion, $_POST["email"]);
    $password = mysqli_real_escape_string($conexion,$_POST["password"]);
    // $pass_encryp = sha1($password);

    $sql = "SELECT id FROM user WHERE email='$email'";
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
        $resultado = $conexion->query($queryuser);
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Registro</title>
</head>

<body>

	<div class="container">
		<div class="row vh-100 justify-content-center align-items-center mt-5">

			<div class="card p-5" style="width: 28rem;">
				<h1>Register</h1>
				<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">

					<div class="form-group mb-3">
						<label></label>
						<input type="text" required class="form-control" name="name" placeholder="Nombre">
					</div>
					<div class="form-group mb-3">
						<label></label>
						<input type="text" required class="form-control" name="bio" placeholder="Bio">
					</div>
					<div class="form-group mb-3">
						<label></label>
						<input type="number" required class="form-control" name="phone" placeholder="Teléfono">
					</div>
					<div class="form-group mb-3">
						<label></label>
						<input type="email" required class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group mb-3">
						<label></label>
						<input type="password" required class="form-control" name="password" placeholder="Password">
					</div>
					<!-- <div class="form-group mb-3">
						<label></label>
						<input type="password" required class="form-control" name="passwordr" placeholder="Repetir Password">
					</div> -->

					<p class="mt-3 text-center">Adready a member? <span class="text-primary"> <a class="text-decoration-none" href="index.php">Login</a>  </span></p>
					<!-- <div class="form-group">
						<label></label>
						<input type="file" required class="form-control" name="imagen">
					</div> -->

					<button class="btn btn-primary" type="submit" name="registrar"> Registrar</button>				
				</form>
				
			</div>
		</div>
	</div>
</body>

</html>