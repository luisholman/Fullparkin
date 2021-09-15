<?php
$mysqli= include_once "../Database/conexion.php";
if (!isset($_GET["id"])) {
    exit ("no se tiene un id");
}else {
$idFactura= $_GET["id"];
$queryEliminacion=$mysqli->prepare("DELETE FROM factura
WHERE idFactura=?");
$queryEliminacion->bind_param("i",$idFactura);
$queryEliminacion->execute();
header("location: listar.php");
}
?>