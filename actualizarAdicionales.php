<?php
    $mysqli= include_once "./database/conexion.php";
    $Servicio= $_POST["servicio"];
    $Placa= $_POST["placa"];
    $Codigo= $_POST["codigo"];
    $Descripcion= $_POST["descripcion"];
    $Valor= $_POST["valor"];
    $idAdicionales= $_POST["id"];
    $queryActualizacion=$mysqli->prepare("UPDATE adicionales
SET
Servicio=?,
Placa=?,
Codigo=?,
Descripcion=?,
Valor=?
WHERE idAdicionales = ?");

    $queryActualizacion->bind_param("ssssii",$Servicio,$Placa,$Codigo,$Descripcion,$Valor,$idAdicionales);
    $queryActualizacion->execute();
    header("location: listarAdicionales.php");
?>