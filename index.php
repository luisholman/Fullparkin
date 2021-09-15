<?php 
    session_start();
    if(isset($_SESSION['nombreUsuario'])){
            header('location:home.php');
    }
    if(isset($_POST['btningresar'])){
        $mysqli= include_once "./database/conexion.php";
        $Email=$_POST['email'];
        $Password=$_POST['password'];
        $resultadoQuery = $mysqli->prepare("SELECT * FROM admin WHERE Email= ? AND Password=? ");
        $resultadoQuery->bind_param("ss",$Email,$Password);
        $resultadoQuery->execute();
        $resultadoData=$resultadoQuery->get_result();
        $infoUsuario=$resultadoData->fetch_assoc();
        if(!isset($_SESSION['nombreUsuario'])){
            if(!$infoUsuario){
                echo "<script>alert('El Usuario no existe en la bd');window.location='index.php'</script>";
            }else{
                $_SESSION['nombreUsuario']=$Email;
                header('location:home.php');
            }
        }
       
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css login/css/main.css">
</head>
<body class="cover" style="background-image: url(./imagen/Smp.jpg);">
	<form  method="POST" autocomplete="off" class="full-box logInForm">
		<p class="text-center text-muted"><img src="./imagen/user avatar.png" width="70" height="70" alt=""></p>
		<p class="text-center text-muted ">Inicio Sesión</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="staticEmail">Email</label>
		  <input class="form-control" id="email" type="email" name="email">
		  <p class="help-block">Ingresa tu Email</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="inputPassword">Contraseña</label>
		  <input class="form-control" id="password" type="password" name="password">
		  <p class="help-block">Ingresa tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Ingresar" name="btningresar" class="btn btn-raised btn-danger">
		</div>
	</form>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>