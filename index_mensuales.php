<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$sql = "SELECT * FROM mensualidades";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud mensualidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>
<body>
    <div class="container mt-2">
<div class="row">
    <div class="col-md-3">
        <form action="insert_mensuales.php"method="POST">

            <center> <h5>INGRESE AQUI DATOS </h5></center>
            <input type ="text" class="form-control mb-2" name="id_mensualidades"placeholder="id_mensualidades">
            <input type ="text" class="form-control mb-2" name="placa"placeholder="placa">
            <input type ="text" class="form-control mb-2" name="vehiculo"placeholder="vehiculo">
            <input type ="text" class="form-control mb-2" name="fecha_ingreso"placeholder="fecha_ingreso">
            <input type ="text" class="form-control mb-2" name="fecha_salida"placeholder="fecha_salida">
            <input type ="text" class="form-control mb-2" name="valor"placeholder="valor">
            <input type ="text" class="form-control mb-2" name="estado"placeholder="estado">
            


            <center> <input type="submit" class="btn btn-success"></center>

        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table table-bordered  border-primary">
            <caption> FULLPARKING "lo cuidamos como en casa"</caption>
            <thead class="table-dark">
                <tr>

                <center> <h5>MENSUALIDADES</h5></center>
                <th scope="col"><center>Id</center></th>
                <th scope="col"><center>placa</center></th>
                <th scope="col"><center>Vehiculo</center></th>
                <th scope="col"><center>Fecha ingreso</center></th>
                <th scope="col"><center>Fecha salida</center></th>
                <th scope="col"><center>Valor</center></th>
                <th scope="col"><center>Estado</center></th>
                <th scope="col"><center>Editar</center></th>
                <th scope="col"><center>Eliminar</center></th>
               
               
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><center><?php echo $row["id_mensualidades"]?></center></td>
              <td><center><?php echo $row["placa"]?></center></td>
              <td><center><?php echo $row["vehiculo"]?></center></td>
              <td><center><?php echo $row["fecha_ingreso"]?></center></td>
              <td><center><?php echo $row["fecha_salida"]?></center></td>
              <td><center><?php echo $row["valor"]?></center></td>
              <td><center><?php echo $row["estado"]?></center></td>
             

              <td><center><a href="upgrade_mensuales.php?id=<?php echo $row["id_mensualidades"]?>"class="btn btn-info"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_mensuales.php?id=<?php echo $row["id_mensualidades"]?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></center></td>
              

          </tr> 
          <?php
        }
        include_once "./vistas/pie.php";
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>