<?php
$mysqli= include_once "./database/conexion.php";
$Administrador= $_POST["administrador"];
$Empleado= $_POST["empleado"];
$Password= $_POST["password"];
$Email= $_POST["email"];
$queryInsercion=$mysqli->prepare("INSERT INTO admin
(Administrador,
Empleado,
Password,
Email)
VALUES
(?,?,?,?)");
$queryInsercion->bind_param("ssss",$Administrador,$Empleado,$Password,$Email);
$queryInsercion->execute();
header("location: listar_Admin.php");
?>
