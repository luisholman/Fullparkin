<?php
include("conexion.php");
$con = conectar();

$id_convenio= $_GET['id'];

$sql = "DELETE FROM convenios WHERE id_convenio = '$id_convenio'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }

?>