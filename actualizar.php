<?php
    $mysqli= include_once "./database/conexion.php";

    $Nombre= $_POST["nombre"];
    $Identificacion= $_POST["identificacion"];
    $Telefono= $_POST["telefono"];
    $Direccion= $_POST["direccion"];
    $Email= $_POST["email"];
    $Placa_vehiculo= $_POST["placavehiculo"];
    $Id_cliente= $_POST["id"];
    $queryActualizacion=$mysqli->prepare("UPDATE clientes
    SET
    Nombre=?,
    Identificacion=?,
    Telefono=?,
    Direccion=?,
    Email=?,
    Placa_vehiculo=?
    WHERE Id_cliente = ?");
    $queryActualizacion->bind_param("siisssi",$Nombre,$Identificacion,$Telefono,$Direccion,$Email,$Placa_vehiculo,$Id_cliente);
    $queryActualizacion->execute();
    header("location: listar.php");
?>