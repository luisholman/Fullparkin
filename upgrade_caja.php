<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM caja WHERE id_caja ='$id'";
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


<center><h3>EDITE AQUI CAJA</h3></center>
<form action="Update_caja.php"method="POST">
           <input type="hidden" name="id_caja" value= "<?php echo $row['id_caja']?>">

           <div class="mb-3">
            <label for="fecha_apertura" class="form-label">fecha apertura</label></label>
            <input type ="text" class="form-control mb-3" name="fecha_apertura" placeholder="edite apertura" value="<?php echo $row['fecha_apertura']?>">
           </div>
           
           <div class="mb-3">
            <label for="fecha_cierre" class="form-label">fecha cierre</label>
            <input type ="text" class="form-control mb-3" name="fecha_cierre" placeholder="edite cierre" value="<?php echo $row['fecha_cierre']?>">
           </div>

           
           <div class="mb-3">
            <label for="estado" class="form-label">estado</label>
            <input type ="text" class="form-control mb-3" name="estado" placeholder="edite estado"value="<?php echo $row['estado']?>">
           </div>

           
           <div class="mb-3">
            <label for="monto" class="form-label">monto</label>
            <input type ="text" class="form-control mb-3" name="monto" placeholder="edite monto"value="<?php echo $row['monto']?>">
           </div>

            <!--<input type="submit" class="btn btn-primary btn-block"value="Actualizar">-->

            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="index_caja.php">Regresar</a>


        </form>

</div>

    
</body>
</html>
<?php include_once "./vistas/pie.php" ?>