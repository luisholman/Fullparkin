<?php

include("conexion.php");
$con = conectar();

$id_caja = $_POST['id_caja'];
$fecha_apertura = $_POST['fecha_apertura'];
$fecha_cierre = $_POST['fecha_cierre'];
$estado = $_POST['estado'];
$monto= $_POST['monto'];


$sql = "UPDATE caja SET fecha_apertura = '$fecha_apertura',fecha_cierre = '$fecha_cierre',estado = '$estado',monto = '$monto' WHERE id_caja = '$id_caja'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }


?>