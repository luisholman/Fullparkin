<?php
    $mysqli= include_once "./database/conexion.php";

    $Administrador= $_POST["administrador"];
    $Empleado= $_POST["empleado"];
    $Password= $_POST["password"];
    $Email= $_POST["email"];
    $idAdmin= $_POST["id"];
    $queryActualizacion=$mysqli->prepare("UPDATE admin
    SET
    Administrador=?,
    Empleado=?,
    Password=?,
    Email=?                          
    WHERE idAdmin= ?");
    $queryActualizacion->bind_param("ssssi",$Administrador,$Empleado,$Password,$Email,$idAdmin);
    $queryActualizacion->execute();
    header("location: listar_Admin.php");
?>



