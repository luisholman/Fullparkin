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


$sql = "UPDATE lista_tarifas SET vehiculo = '$vehiculo',minuto = '$minuto',hora = '$hora',dia = '$dia',noche = '$noche', semana = '$semana', quincenal = '$quincenal', mensual = '$mensual', observaciones = '$observaciones' WHERE id_lista = '$id_lista'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }


?>