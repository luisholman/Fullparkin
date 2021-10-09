<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM lista_adicionales WHERE id_adicionales ='$id'";
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


<center><h3>EDITE AQUI ADICIONALES</h3></center>
<form action="update_dtadicionales.php"method="POST">
           <input type="hidden" name="id_adicionales" value= "<?php echo $row['id_adicionales']?>">

           <div class="mb-3">
            <label for="servicio" class="form-label">servicio</label></label>
            <input type ="text" class="form-control mb-3" name="servicio" placeholder="edite servicio" value="<?php echo $row['servicio']?>">
           </div>
           
           <div class="mb-3">
            <label for="horario" class="form-label">horario</label>
            <input type ="text" class="form-control mb-3" name="horario" placeholder="edite horario" value="<?php echo $row['horario']?>">
           </div>

           
           <div class="mb-3">
            <label for="observaciones" class="form-label">observaciones</label>
            <input type ="text" class="form-control mb-3" name="observaciones" placeholder="edite observacioines"value="<?php echo $row['observaciones']?>">
           </div>

           
          

            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="index_dtadicionales.php">Regresar</a>

        </form>

</div>

    
</body>
</html>
<?php include_once "./vistas/pie.php" ?>