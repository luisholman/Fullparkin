<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM espacios WHERE id_espacios ='$id'";
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
           <input type="hidden" name="id_espacios" value= "<?php echo $row['id_espacios']?>">
            <input type ="text" class="form-control mb-3" name="numero"value="<?php echo $row['numero']?>">
            <input type ="text" class="form-control mb-3" name="estado"value="<?php echo $row['estado']?>">
            <input type ="text" class="form-control mb-3" name="codigo_entrada"value="<?php echo $row['codigo_entrada']?>">
            <input type ="text" class="form-control mb-3" name="placa"value="<?php echo $row['placa']?>">
            <input type ="text" class="form-control mb-3" name="fecha_ingreso"value="<?php echo $row['fecha_ingreso']?>">
            <input type ="text" class="form-control mb-3" name="hora_ingreso"value="<?php echo $row['hora_ingreso']?>">
            <input type ="text" class="form-control mb-3" name="salida"value="<?php echo $row['salida']?>">

            <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        </form>

</div>

    
</body>
</html>