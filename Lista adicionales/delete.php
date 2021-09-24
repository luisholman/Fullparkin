<?php
include("conexion.php");
$con = conectar();

$id_adicionales= $_GET['id'];

$sql = "DELETE FROM lista_adicionales WHERE id_adicionales = '$id_adicionales'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
    
    
    }

?>