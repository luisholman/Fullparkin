<?php
include("connect.php");
$con = conectar();

$id_espacios= $_GET['id'];

$sql = "DELETE FROM espacios WHERE id_espacios = '$id_espacios'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index_espacios.php");
    
    
    }

?>