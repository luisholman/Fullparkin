<?php
    $mysqli= include_once "../Database/conexion.php";

    $Administrador= $_POST["administrador"];
    $Empleado= $_POST["empleado"];
    $Contraseña= $_POST["contraseña"];
    $Email= $_POST["email"];
    $idAdmin= $_POST["id"];
    $queryActualizacion=$mysqli->prepare("UPDATE admin
    SET
    Administrador=?,
    Empleado=?,
    Contraseña=?,
    Email=?                          
    WHERE idAdmin= ?");

    $queryActualizacion->bind_param("sssi",$Administrador,$Empleado,$Contraseña,$Email,$idAdmin);
    $queryActualizacion->execute();
    header("location: listar.php");
?>



