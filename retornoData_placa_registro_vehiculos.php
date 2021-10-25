<?php
$mysqli=include_once"./database/conexion.php";
$query=$_GET['query'];
$resultado=mysqli_query($mysqli, "SELECT Placa_vehiculo FROM registro_vehiculos WHERE Placa_vehiculo LIKE '%".$query."%' ");
$json=array();
while ($rows = mysqli_fetch_assoc($resultado)){
    $json[]=$rows["Placa_vehiculo"];
}
echo json_encode($json);

?>


