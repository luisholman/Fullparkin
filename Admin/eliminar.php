<?php
$mysqli= include_once "../Database/conexion.php";
if (!isset($_GET["id"])) {
    exit ("no se tiene un id");
}else {
    $idAdmin= $_GET["id"];
$queryEliminacion=$mysqli->prepare("DELETE FROM admin
WHERE 
idAdmin=?");
$queryEliminacion->bind_param("i",$idAdmin);
$queryEliminacion->execute();
header("location: listar.php");
}

?>