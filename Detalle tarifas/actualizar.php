<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM lista_tarifas WHERE id_lista ='$id'";
$query = mysqli_query($con,$sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


</head>
<body>
<div class="container mt-5">
<form action="Update.php"method="POST">
           <input type="hidden" name="id_lista" value= "<?php echo $row['id_lista']?>">
            <input type ="text" class="form-control mb-3" name="vehiculo"value="<?php echo $row['vehiculo']?>">
            <input type ="text" class="form-control mb-3" name="minuto"value="<?php echo $row['minuto']?>">
            <input type ="text" class="form-control mb-3" name="hora"value="<?php echo $row['hora']?>">
            <input type ="text" class="form-control mb-3" name="dia"value="<?php echo $row['dia']?>">
            <input type ="text" class="form-control mb-3" name="noche"value="<?php echo $row['noche']?>">
            <input type ="text" class="form-control mb-3" name="semana"value="<?php echo $row['semana']?>">
            <input type ="text" class="form-control mb-3" name="quincenal"value="<?php echo $row['quincenal']?>">
            <input type ="text" class="form-control mb-3" name="mensual"value="<?php echo $row['mensual']?>">
            <input type ="text" class="form-control mb-3" name="observaciones"value="<?php echo $row['observaciones']?>">
            

            <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        </form>

</div>

    
</body>
</html>