<?php
$host="localhost";
$usuario="root";
$contra="";
$base_de_datos="Parkingfull";

$mysqli= new mysqli($host,$usuario,$contra,$base_de_datos);
if($mysqli->connect_errno){
    echo"ha ocurrido un error al conectarse a la bd".$mysqli->connect_error;
}else{
   // echo "se ha conectado satisfactoriamente";
}
return $mysqli;

?>