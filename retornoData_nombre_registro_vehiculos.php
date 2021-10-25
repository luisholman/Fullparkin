<?php
$mysqli=include_once"./database/conexion.php";
$query=$_GET['query'];
$resultado=mysqli_query($mysqli, "SELECT Nombre_cliente FROM registro_vehiculos WHERE Nombre_cliente LIKE '%".$query."%' ");
$json=array();
while ($rows = mysqli_fetch_assoc($resultado)){
    $json[]=$rows["Nombre_cliente"];
}
echo json_encode($json);
?>