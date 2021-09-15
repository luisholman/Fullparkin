<?php
$mysqli= include_once "../Database/conexion.php";
$Administrador= $_POST["administrador"];
$Empleado= $_POST["empleado"];
$Contraseña= $_POST["contraseña"];
$Email= $_POST["email"];
$queryInsercion=$mysqli->prepare("INSERT INTO admin
(Administrador,
Empleado,
Contraseña,
Email)
VALUES
(?,?,?,?)");
$queryInsercion->bind_param("ssss",$Administrador,$Empleado,$Contraseña,$Email);
$queryInsercion->execute();
header("location: listar.php");
?>
