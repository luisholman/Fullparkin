<?php

include("conexion.php");
$con = conectar();


$id_caja= $_POST["id_caja"];
$fecha_apertura= $_POST["fecha_apertura"];
$fecha_cierre = $_POST["fecha_cierre"];
$estado = $_POST["estado"];
$monto = $_POST["monto"];



$sql = "INSERT INTO caja VALUES('$id_caja','$fecha_apertura','$fecha_cierre','$estado','$monto')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: index.php");


}


?>