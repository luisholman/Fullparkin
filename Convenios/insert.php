<?php

include("conexion.php");
$con = conectar();


$id_convenio = $_POST['id_convenio'];
$empresa = $_POST['empresa'];
$negocio = $_POST['negocio'];
$otros = $_POST['otros'];
$observaciones = $_POST['observaciones'];



$sql = "INSERT INTO convenios VALUES('$id_convenio','$empresa','$negocio','$otros','$observaciones')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: index.php");


}


?>