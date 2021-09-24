<?php
include("conexion.php");
$con = conectar();

$id_lista= $_GET['id'];

$sql = "DELETE FROM lista_tarifas WHERE id_lista = '$id_lista'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }

?>