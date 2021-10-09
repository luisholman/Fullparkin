<?php
include_once "./vistas/encabezado.php";
include("connect.php");
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
<div class="container">
<div class="row">
<div class="col-5">


<center><h3>EDITE AQUI TARIFAS</h3></center>
<form action="update_dtarifas.php"method="POST">
           <input type="hidden" name="id_lista" value= "<?php echo $row['id_lista']?>">

           <div class="mb-3">
            <label for="vehiculo" class="form-label">vehiculo</label></label>
            <input type ="text" class="form-control mb-3" name="vehiculo" placeholder="edite vehoculo" value="<?php echo $row['vehiculo']?>">
           </div>
           
           <div class="mb-3">
            <label for="minuto" class="form-label">minuto</label>
            <input type ="text" class="form-control mb-3" name="minuto" placeholder="minuto" value="<?php echo $row['minuto']?>">
           </div>

           
           <div class="mb-3">
            <label for="hora" class="form-label">hora</label>
            <input type ="text" class="form-control mb-3" name="hora" placeholder="edite hora"value="<?php echo $row['hora']?>">
           </div>

           
           <div class="mb-3">
            <label for="dia" class="form-label">dia</label>
            <input type ="text" class="form-control mb-3" name="dia" placeholder="edite hora"value="<?php echo $row['dia']?>">
           </div>

           <div class="mb-3">
            <label for="noche" class="form-label">noche</label>
            <input type ="text" class="form-control mb-3" name="noche" placeholder="edite noche"value="<?php echo $row['noche']?>">
            </div>

            <div class="mb-3">
            <label for="semana" class="form-label">semana</label>
            <input type ="text" class="form-control mb-3" name="semana" placeholder="edite semana"value="<?php echo $row['semana']?>">
            </div>

            <div class="mb-3">
            <label for="quincenal" class="form-label">quincenal</label>
            <input type ="text" class="form-control mb-3" name="quincenal" placeholder="edite quincenal"value="<?php echo $row['quincenal']?>">
            </div>

            <div class="mb-3">
            <label for="mensual" class="form-label">mensual</label>
            <input type ="text" class="form-control mb-3" name="mensual" placeholder="edite mensual"value="<?php echo $row['mensual']?>">
            </div>

            <div class="mb-3">
            <label for="observaciones" class="form-label">observaciones</label>
            <input type ="text" class="form-control mb-3" name="observaciones" placeholder="edite observaciones"value="<?php echo $row['observaciones']?>">
            </div>


            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="index_dtarifas.php">Regresar</a>


        </form>

</div>

    
</body>
</html>
<?php include_once "./vistas/pie.php" ?>
