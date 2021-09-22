<?php

include("Conexion.php");
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
</head>
<body>
    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="id_mensualidades"placeholder="id_mensualidades">
            <input type ="text" class="form-control mb-3" name="placa"placeholder="placa">
            <input type ="text" class="form-control mb-3" name="vehiculo"placeholder="vehiculo">
            <input type ="text" class="form-control mb-3" name="fecha_ingreso"placeholder="fecha_ingreso">
            <input type ="text" class="form-control mb-3" name="fecha_salida"placeholder="fecha_salida">
            <input type ="text" class="form-control mb-3" name="valor"placeholder="valor">
            <input type ="text" class="form-control mb-3" name="estado"placeholder="estado">
            


            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>MENSUALIDADES FULLPARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">placa</th>
                <th scope="col">Vehiculo</th>
                <th scope="col">Fecha ingreso</th>
                <th scope="col">Fecha salida</th>
                <th scope="col">Valor</th>
                <th scope="col">Estado</th>
               
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["id_mensualidades"]?></td>
              <td><?php echo $row["placa"]?></td>
              <td><?php echo $row["vehiculo"]?></td>
              <td><?php echo $row["fecha_ingreso"]?></td>
              <td><?php echo $row["fecha_salida"]?></td>
              <td><?php echo $row["valor"]?></td>
              <td><?php echo $row["estado"]?></td>
             

              <td><a href="Actualizar.php?id=<?php echo $row["id_mensualidades"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["id_mensualidades"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>