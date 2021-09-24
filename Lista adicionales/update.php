<?php

include("conexion.php");
$con = conectar();

$id_adicionales = $_POST['id_adicionales'];
$servicio = $_POST['servicio'];
$horario = $_POST['horario'];
$observaciones = $_POST['observaciones'];


$sql = "UPDATE lista_adicionales SET servicio = '$servicio',horario = '$horario',observaciones = '$observaciones' WHERE id_adicionales = '$id_adicionales'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }


?>