<?php
include "conexion.php";

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
            $_SESSION["password"] =$datos->password;         
            header("Location: profile.php");
            // var_dump($_SESSION);
        }else{
           header("refresh:1;url=index.php");
           echo "<script>
                alert('Acceso Denegado');
            </script>";          
        }
    }else{
        header("refresh:1;url=index.php");
        echo "<script>
                alert('Campos Vacios.');                
            </script>";
            
        
    }
	

	
	
}

?>