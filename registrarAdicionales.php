<?php
$mysqli= include_once "./Database/conexion.php";
$Servicio= $_POST["servicio"];
$Placa= $_POST["placa"];
$Codigo= $_POST["codigo"];
$Descripcion= $_POST["descripcion"];
$Valor= $_POST["valor"];

$queryInsercion=$mysqli->prepare("INSERT INTO adicionales
(Servicio,
Placa,
Codigo,
Descripcion,
Valor)
VALUES
(?,?,?,?,?)");
$queryInsercion->bind_param("ssssi",$Servicio,$Placa,$Codigo,$Descripcion,$Valor);
$queryInsercion->execute();
header("location: listarAdicionales.php");
?>
