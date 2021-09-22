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
$idFactura=$_POST["id"];
$queryActualizacion=$mysqli->prepare("UPDATE factura
SET
Placa =?,
Fecha_de_Ingreso =?,
Hora_Ingreso =?,
Fecha_de_salida =?,
Hora_de_salida =?,
Subtotal =?,
Impuestos =?,
Total =?
WHERE idFactura = ?");
$queryActualizacion->bind_param("sddddiiii",$Placa,$Fecha_de_Ingreso,$Hora_Ingreso,$Fecha_de_salida,$Hora_de_salida,$Subtotal,$Impuestos,$Total,$idFactura);
$queryActualizacion->execute();
header("location: listar_Factura.php");
?>