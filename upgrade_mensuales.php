<?php
include_once "./vistas/encabezado.php";
include("connect.php");
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
<div class="container">
<div class="row">
<div class="col-5">


<center><h3>EDITE AQUI MENSUALIDADES</h3></center>
<form action="update_mensuales.php"method="POST">
           <input type="hidden" name="id_mensualidades" value= "<?php echo $row['id_mensualidades']?>">

           <div class="mb-3">
            <label for="placa" class="form-label">placa</label></label>
            <input type ="text" class="form-control mb-3" name="placa" placeholder="edite placa" value="<?php echo $row['placa']?>">
           </div>
           
           <div class="mb-3">
            <label for="vehiculo" class="form-label">vehiculo</label>
            <input type ="text" class="form-control mb-3" name="vehiculo" placeholder="edite vehiculo" value="<?php echo $row['vehiculo']?>">
           </div>

           
           <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">fecha_ingreso</label>
            <input type ="text" class="form-control mb-3" name="fecha_ingreso" placeholder="edite fecha ingreso"value="<?php echo $row['fecha_ingreso']?>">
           </div>

           
           <div class="mb-3">
            <label for="fecha_salida" class="form-label">fecha_salida</label>
            <input type ="text" class="form-control mb-3" name="fecha_salida" placeholder="edite fecha salida"value="<?php echo $row['fecha_salida']?>">
           </div>


           
           <div class="mb-3">
            <label for="valor" class="form-label">valor</label>
            <input type ="text" class="form-control mb-3" name="valor" placeholder="edite valor"value="<?php echo $row['valor']?>">
           </div>


           
           <div class="mb-3">
            <label for="estado" class="form-label">estado</label>
            <input type ="text" class="form-control mb-3" name="estado" placeholder="edite estado"value="<?php echo $row['estado']?>">
           </div>

            

            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="index_mensuales.php">Regresar</a>


        </form>

</div>

    
</body>
</html>
<?php include_once "./vistas/pie.php" ?>