<?php
include("connect.php");
$con = conectar();

$id_caja= $_GET['id'];

$sql = "DELETE FROM caja WHERE id_caja = '$id_caja'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index_caja.php");
    
    
    }

?>