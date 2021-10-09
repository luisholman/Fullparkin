<?php
include_once "./vistas/encabezado.php";
include("connect.php");
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
<div class="container">
<div class="row">
<div class="col-5">


<center><h3>EDITE AQUI ESPACIOS</h3></center>
<form action="update_espacios.php"method="POST">
           <input type="hidden" name="id_espacios" value= "<?php echo $row['id_espacios']?>">

           <div class="mb-3">
            <label for="numero" class="form-label">numero</label></label>
            <input type ="text" class="form-control mb-3" name="numero" placeholder="edite numero" value="<?php echo $row['numero']?>">
           </div>
           
           <div class="mb-3">
            <label for="estado" class="form-label">estado</label>
            <input type ="text" class="form-control mb-3" name="estado" placeholder="edite estado" value="<?php echo $row['estado']?>">
           </div>

           
           <div class="mb-3">
            <label for="codigo_entrada" class="form-label">codigo_entrada</label>
            <input type ="text" class="form-control mb-3" name="codigo_entrada" placeholder="edite codigo_entrada"value="<?php echo $row['codigo_entrada']?>">
           </div>

           
           <div class="mb-3">
            <label for="placa" class="form-label">placa</label>
            <input type ="text" class="form-control mb-3" name="placa" placeholder="edite placa"value="<?php echo $row['placa']?>">
           </div>

           
           
           <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">fecha_ingreso</label>
            <input type ="text" class="form-control mb-3" name="fecha_ingreso" placeholder="edite fecha_ingreso"value="<?php echo $row['fecha_ingreso']?>">
           </div>

           
           
           <div class="mb-3">
            <label for="hora_ingreso" class="form-label">hora_ingreso</label>
            <input type ="text" class="form-control mb-3" name="hora_ingreso" placeholder="edite hora_ingreso"value="<?php echo $row['hora_ingreso']?>">
           </div>

           
           
           <div class="mb-3">
            <label for="salida" class="form-label">salida</label>
            <input type ="text" class="form-control mb-3" name="salida" placeholder="edite salida"value="<?php echo $row['salida']?>">
           </div>

            

            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="index_espacios.php">Regresar</a>


        </form>

</div>

    
</body>
</html>
<?php include_once "./vistas/pie.php" ?>