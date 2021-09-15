<?php
    $mysqli= include_once "../Database/conexion.php";

    $Tarifa_minuto= $_POST["minuto"];
    $Tarifa_hora= $_POST["hora"];
    $Tarifa_dia= $_POST["dia"];
    $Tarifa_noche= $_POST["noche"];
    $Tarifa_semana= $_POST["semana"];
    $Tarifa_mes= $_POST["mes"];
    $idTarifas= $_POST["id"];
    $queryActualizacion=$mysqli->prepare("UPDATE tarifas
    SET
    Tarifa_minuto=?,
    Tarifa_hora=?,
    Tarifa_dia=?,
    Tarifa_noche=?,
    Tarifa_semana=?,
    Tarifa_mes=?               
    WHERE idTarifas = ?");

    $queryActualizacion->bind_param("iiiiiii",$Tarifa_minuto,$Tarifa_hora,$Tarifa_dia,$Tarifa_noche,$Tarifa_semana,$Tarifa_mes,$idTarifas);
    $queryActualizacion->execute();
    header("location: listar.php");
?>



