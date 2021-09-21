<?php

include("conexion.php");
$con = conectar();

$id_espacios = $_POST['id_espacios'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$codigo_entrada = $_POST['codigo_entrada'];
$placa = $_POST['placa'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$hora_ingreso = $_POST['hora_ingreso'];
$salida = $_POST['salida'];

$sql = "UPDATE espacios SET numero = '$numero',estado = '$estado',codigo_entrada = '$codigo_entrada',placa = '$placa',fecha_ingreso = '$fecha_ingreso', hora_ingreso = '$hora_ingreso',salida = '$salida' WHERE id_espacios = '$id_espacios'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }


?>