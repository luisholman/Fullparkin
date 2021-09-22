<?php
$mysqli= include_once "./database/conexion.php";
if (!isset($_GET["id"])) {
    exit ("no se tiene un id");
}else {
$Idregistro_vehiculos= $_GET["id"];
$queryEliminacion=$mysqli->prepare("DELETE FROM registro_vehiculos
WHERE Idregistro_vehiculos=?");
$queryEliminacion->bind_param("i",$Idregistro_vehiculos);
$queryEliminacion->execute();
header("location: home.php");
}

?>