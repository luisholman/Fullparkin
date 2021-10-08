<?php
$mysqli= include_once "./database/conexion.php";
$Placa= $_POST["placa"];
$Fecha_de_Ingreso= $_POST["fechaingreso"];
$Hora_Ingreso= $_POST["horaingreso"];
$Fecha_de_salida= $_POST["fechasalida"];
$Hora_de_salida= $_POST["horasalida"];
$Subtotal= $_POST["subtotal"];
$Impuestos= $_POST["impuestos"];
$Total= $_POST["total"];
$queryInsercion=$mysqli->prepare("INSERT INTO factura
(Placa,
Fecha_de_Ingreso,
Hora_Ingreso,
Fecha_de_salida,
Hora_de_salida,
Subtotal,
Impuestos,
Total)
VALUES
(?,?,?,?,?,?,?,?)");
$queryInsercion->bind_param("sssssiii",$Placa,$Fecha_de_Ingreso,$Hora_Ingreso,$Fecha_de_salida,$Hora_de_salida,$Subtotal,$Impuestos,$Total);
$queryInsercion->execute();
header("location: listar_Factura.php");
?>
