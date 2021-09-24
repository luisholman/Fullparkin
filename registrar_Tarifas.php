<?php
$mysqli= include_once "./Database/conexion.php";
$Tarifa_minuto= $_POST["minuto"];
$Tarifa_hora= $_POST["hora"];
$Tarifa_dia= $_POST["dia"];
$Tarifa_noche= $_POST["noche"];
$Tarifa_semana= $_POST["semana"];
$Tarifa_mes= $_POST["mes"];

$queryInsercion=$mysqli->prepare("INSERT INTO tarifas
(Tarifa_minuto,
Tarifa_hora,
Tarifa_dia,
Tarifa_noche,
Tarifa_semana,
Tarifa_mes)
VALUES
(?,?,?,?,?,?)");
$queryInsercion->bind_param("iiiiii",$Tarifa_minuto,$Tarifa_hora,$Tarifa_dia,$Tarifa_noche,$Tarifa_semana,$Tarifa_mes);
$queryInsercion->execute();
header("location: listar_Tarifas.php");
?>
