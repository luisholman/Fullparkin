<?php

include("conexion.php");
$con = conectar();


$id_espacios= $_POST["id_espacios"];
$numero= $_POST["numero"];
$estado = $_POST["estado"];
$codigo_entrada = $_POST["codigo_entrada"];
$placa = $_POST["placa"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$hora_ingreso = $_POST["hora_ingreso"];
$salida = $_POST["salida"];


$sql = "INSERT INTO espacios VALUES('$id_espacios','$numero','$estado','$codigo_entrada','$placa','$fecha_ingreso','$hora_ingreso','$salida')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: index.php");


}


?>