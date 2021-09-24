<?php

include("conexion.php");
$con = conectar();


$id_adicionales= $_POST["id_adicionales"];
$servicio= $_POST["servicio"];
$horario = $_POST["horario"];
$observaciones = $_POST["observaciones"];




$sql = "INSERT INTO lista_adicionales VALUES('$id_adicionales','$servicio','$horario','$observaciones')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: index.php");


}


?>