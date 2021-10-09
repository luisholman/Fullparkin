<?php

include("connect.php");
$con = conectar();

$id_mensualidades = $_POST['id_mensualidades'];
$placa = $_POST['placa'];
$vehiculo = $_POST['vehiculo'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$fecha_salida = $_POST['fecha_salida'];
$valor = $_POST['valor'];
$estado = $_POST['estado'];


$sql = "UPDATE mensualidades SET placa = '$placa',vehiculo = '$vehiculo',fecha_ingreso = '$fecha_ingreso',fecha_salida = '$fecha_salida',valor = '$valor', estado = '$estado' WHERE id_mensualidades = '$id_mensualidades'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index_mensuales.php");
    
    
    }


?>