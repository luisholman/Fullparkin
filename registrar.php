<?php
$mysqli= include_once "./database/conexion.php";
$Nombre= $_POST["nombre"];
$Identificacion= $_POST["identificacion"];
$Telefono= $_POST["telefono"];
$Direccion= $_POST["direccion"];
$Email= $_POST["email"];
$Placa_vehiculo= $_POST["placavehiculo"];

$queryInsercion=$mysqli->prepare("INSERT INTO clientes
(Nombre,
Identificacion,
Telefono,
Direccion,
Email,
Placa_vehiculo)
VALUES
(?,?,?,?,?,?)");
$queryInsercion->bind_param("siisss",$Nombre,$Identificacion,$Telefono,$Direccion,$Email,$Placa_vehiculo);
$queryInsercion->execute();
header("location: listar.php");
?>
