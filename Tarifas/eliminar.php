<?php
$mysqli= include_once "../Database/conexion.php";
if (!isset($_GET["id"])) {
    exit ("no se tiene un id");
}else {
    $idTarifas= $_GET["id"];
$queryEliminacion=$mysqli->prepare("DELETE FROM tarifas
WHERE 
idTarifas=?");
$queryEliminacion->bind_param("i",$idTarifas);
$queryEliminacion->execute();
header("location: listar.php");
}

?>