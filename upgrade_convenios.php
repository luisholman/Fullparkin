<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM convenios WHERE id_convenio ='$id'";
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


<center><h3>EDITE AQUI CONVENIOS</h3></center>
<form action="update_convenios.php"method="POST">
           <input type="hidden" name="id_convenio" value= "<?php echo $row['id_convenio']?>">

           <div class="mb-3">
            <label for="empresa" class="form-label">empresa</label></label>
            <input type ="text" class="form-control mb-3" name="empresa" placeholder="edite empresa" value="<?php echo $row['empresa']?>">
           </div>
           
           <div class="mb-3">
            <label for="negocio" class="form-label">negocio</label>
            <input type ="text" class="form-control mb-3" name="negocio" placeholder="edite negocio" value="<?php echo $row['negocio']?>">
           </div>

           
           <div class="mb-3">
            <label for="otros" class="form-label">otos</label>
            <input type ="text" class="form-control mb-3" name="otros" placeholder="edite otros"value="<?php echo $row['otros']?>">
           </div>

           
           <div class="mb-3">
            <label for="observaciones" class="form-label">observaciones</label>
            <input type ="text" class="form-control mb-3" name="observaciones" placeholder="edite observaciones"value="<?php echo $row['observaciones']?>">
           </div>

            

            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="index_convenios.php">Regresar</a>

        </form>

</div>

    
</body>
</html>