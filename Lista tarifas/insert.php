<?php

include("conexion.php");
$con = conectar();


$id_lista= $_POST["id_lista"];
$vehiculo= $_POST["vehiculo"];
$minuto = $_POST["minuto"];
$hora = $_POST["hora"];
$dia = $_POST["dia"];
$noche = $_POST["noche"];
$semana = $_POST["semana"];
$quincenal = $_POST["quincenal"];
$mensual = $_POST["mensual"];
$observaciones = $_POST["observaciones"];


$sql = "INSERT INTO lista_tarifas VALUES('$id_lista','$vehiculo','$minuto','$hora','$dia','$noche','$semana','$quincenal','$mensual','$observaciones')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: index.php");


}


?>