<?php
$mysqli=include_once"conexion.php";
$query=$_GET['query'];
$resultado=mysqli_query($mysqli, "SELECT Nombre FROM clientes WHERE Nombre LIKE '%".$query."%' ");
$json=array();
while ($rows = mysqli_fetch_assoc($resultado)){
    $json[]=$rows["Nombre"];
}
echo json_encode($json);
?>