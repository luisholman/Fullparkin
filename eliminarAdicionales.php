<?php
$mysqli= include_once "./database/conexion.php";
if (!isset($_GET["id"])) {
    exit ("no se tiene un id");
}else {
    $idAdicionales= $_GET["id"];
$queryEliminacion=$mysqli->prepare("DELETE FROM adicionales
WHERE 
idAdicionales=?");
$queryEliminacion->bind_param("i",$idAdicionales);
$queryEliminacion->execute();
header("location: listarAdicionales.php");
}

?>




