<?php
$mysqli= include_once "./database/conexion.php";
echo"se concecoootooo";
$Hora_ingreso= $_POST["horaingreso"];
$Fecha_ingreso= $_POST["fechaingreso"];
$Tipo_vehiculo= $_POST["tipovehiculo"];
$Placa_vehiculo= $_POST["placavehiculo"];
$Nombre_cliente= $_POST["nombrecliente"];
$Identificacion= $_POST["identificacion"];
$Hora_salida= $_POST["horasalida"];
$Fecha_salida= $_POST["fechasalida"];
$queryInsercion=$mysqli->prepare("INSERT INTO registro_vehiculos
(Hora_ingreso,
Fecha_ingreso,
Tipo_vehiculo,
Placa_vehiculo,
Nombre_cliente,
Identificacion,
Hora_salida,
Fecha_salida)
VALUES
(?,?,?,?,?,?,?,?)");
$queryInsercion->bind_param("ddsssidd",$Hora_ingreso,$Fecha_ingreso,$Tipo_vehiculo,$Placa_vehiculo,$Nombre_cliente,$Identificacion,$Hora_salida,$Fecha_salida);
$queryInsercion->execute();
header("location: home.php");
?>
