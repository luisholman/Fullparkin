<?php
    $mysqli= include_once "../Database/conexion.php";

    $Hora_ingreso=$_POST["horaingreso"];
    $Fecha_ingreso=$_POST["fechaingreso"];
    $Tipo_vehiculo=$_POST["tipovehiculo"];
    $Placa_vehiculo=$_POST["placavehiculo"];
    $Nombre_cliente=$_POST["nombrecliente"];
    $Identificacion=$_POST["identificacion"];
    $Hora_salida=$_POST["horasalida"];
    $Fecha_salida=$_POST["fechasalida"];
    $Idregistro_vehiculos=$_POST["id"];
    $queryActualizacion=$mysqli->prepare("UPDATE registro_vehiculos
    SET
    Hora_ingreso=?,
    Fecha_ingreso=?,
    Tipo_vehiculo=?,
    Placa_vehiculo=?,
    Nombre_cliente=?,
    Identificacion=?,
    Hora_salida=?,
    Fecha_salida=?
    WHERE Idregistro_vehiculos = ?");
    $queryActualizacion->bind_param("ddsssiddi",$Hora_ingreso,$Fecha_ingreso,$Tipo_vehiculo,$Placa_vehiculo,$Nombre_cliente,$Identificacion,$Hora_salida,$Fecha_salida,$Idregistro_vehiculos);
    $queryActualizacion->execute();
    header("location: listar.php");
?>