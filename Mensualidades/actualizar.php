<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM mensualidades WHERE id_mensualidades ='$id'";
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
           <input type="hidden" name="id_mensualidades" value= "<?php echo $row['id_mensualidades']?>">
            <input type ="text" class="form-control mb-3" name="placa"value="<?php echo $row['placa']?>">
            <input type ="text" class="form-control mb-3" name="vehiculo"value="<?php echo $row['vehiculo']?>">
            <input type ="text" class="form-control mb-3" name="fecha_ingreso"value="<?php echo $row['fecha_ingreso']?>">
            <input type ="text" class="form-control mb-3" name="fecha_salida"value="<?php echo $row['fecha_salida']?>">
            <input type ="text" class="form-control mb-3" name="valor"value="<?php echo $row['valor']?>">
            <input type ="text" class="form-control mb-3" name="estado"value="<?php echo $row['estado']?>">
            

            <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        </form>

</div>

    
</body>
</html>