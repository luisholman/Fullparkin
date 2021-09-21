<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM espacios";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud espacios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="id_espacios"placeholder="id_espacios">
            <input type ="text" class="form-control mb-3" name="numero"placeholder="numero">
            <input type ="text" class="form-control mb-3" name="estado"placeholder="estado">
            <input type ="text" class="form-control mb-3" name="codigo_entrada"placeholder="codigo_entrada">
            <input type ="text" class="form-control mb-3" name="placa"placeholder="placa">
            <input type ="text" class="form-control mb-3" name="fecha_ingreso"placeholder="fecha_ingreso">
            <input type ="text" class="form-control mb-3" name="hora_ingreso"placeholder="hora_ingreso">
            <input type ="text" class="form-control mb-3" name="salida"placeholder="salida">


            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>ESPACIOS FULLPARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Numero</th>
                <th scope="col">Estado</th>
                <th scope="col">Codigo entrada</th>
                <th scope="col">Placa</th>
                <th scope="col">Fecha ingreso</th>
                <th scope="col">Hora ingreso</th>
                <th scope="col">Salida</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["id_espacios"]?></td>
              <td><?php echo $row["numero"]?></td>
              <td><?php echo $row["estado"]?></td>
              <td><?php echo $row["codigo_entrada"]?></td>
              <td><?php echo $row["placa"]?></td>
              <td><?php echo $row["fecha_ingreso"]?></td>
              <td><?php echo $row["hora_ingreso"]?></td>
              <td><?php echo $row["salida"]?></td>

              <td><a href="Actualizar.php?id=<?php echo $row["id_espacios"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["id_espacios"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>