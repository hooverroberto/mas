<?php

session_start();


error_reporting(E_ALL);
ini_set('display_errors', '1'); 


// if(!empty($_POST)){
if(!empty($_POST["ingresar"])){
    if(!empty($_POST["email"]) AND !empty($_POST["password"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $consulta = $conexion -> query("SELECT * FROM user WHERE email ='$email' AND password ='$password'");
        if($datos=$consulta -> fetch_object()){
            $_SESSION["id"] = $datos->id;
            $_SESSION["name"] = $datos->name;
            $_SESSION["email"] = $datos->email;          
            header("Location: profile.php");
        }else{
            echo '<div class="alert alert-danger">Acceso Denegado</div>';
        }
    }else{
        echo '<div class="alert alert-danger">Campos Vacios.</div>';
    }
	

	
	
}

?>