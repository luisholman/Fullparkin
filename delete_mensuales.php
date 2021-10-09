<?php
include("connect.php");
$con = conectar();

$id_mensualidades= $_GET['id'];

$sql = "DELETE FROM mensualidades WHERE id_mensualidades = '$id_mensualidades'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index_mensuales.php");
    
    
    }

?>