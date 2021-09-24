<?php

include("conexion.php");
$con = conectar();

$id_convenio = $_POST['id_convenio'];
$empresa = $_POST['empresa'];
$negocio = $_POST['negocio'];
$otros = $_POST['otros'];
$observaciones = $_POST['observaciones'];


$sql = "UPDATE convenios SET empresa = '$empresa',negocio = '$negocio',otros = '$otros',observaciones = '$observaciones' WHERE id_convenio = '$id_convenio'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }


?>