<?php
$mysqli= include_once "./database/conexion.php";
if (!isset($_GET["id"])) {
    exit ("no se tiene un id");
}else {
    $Id_cliente= $_GET["id"];
$queryEliminacion=$mysqli->prepare("DELETE FROM clientes
WHERE 
Id_cliente=?");
$queryEliminacion->bind_param("i",$Id_cliente);
$queryEliminacion->execute();
header("location: listar.php");
}

?>