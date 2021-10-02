<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM lista_tarifas";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud lista tarifas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="id_lista"placeholder="id_lista">
            <input type ="text" class="form-control mb-3" name="vehiculo"placeholder="vehiculo">
            <input type ="text" class="form-control mb-3" name="minuto"placeholder="minuto">
            <input type ="text" class="form-control mb-3" name="hora"placeholder="hora">
            <input type ="text" class="form-control mb-3" name="dia"placeholder="dia">
            <input type ="text" class="form-control mb-3" name="noche"placeholder="noche">
            <input type ="text" class="form-control mb-3" name="semana"placeholder="semana">
            <input type ="text" class="form-control mb-3" name="quincenal"placeholder="quincenal">
            <input type ="text" class="form-control mb-3" name="mensual"placeholder="mensual">
            <input type ="text" class="form-control mb-3" name="observaciones"placeholder="observaciones">


            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>LISTA TARIFAS FULLPARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">vehiculo</th>
                <th scope="col">Minuto</th>
                <th scope="col">Hora</th>
                <th scope="col">Dia</th>
                <th scope="col">Noche</th>
                <th scope="col">Semana</th>
                <th scope="col">Quincenal</th>
                <th scope="col">Mensual</th>
                <th scope="col">Observaciones</th>
               
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["id_lista"]?></td>
              <td><?php echo $row["vehiculo"]?></td>
              <td><?php echo $row["minuto"]?></td>
              <td><?php echo $row["hora"]?></td>
              <td><?php echo $row["dia"]?></td>
              <td><?php echo $row["noche"]?></td>
              <td><?php echo $row["semana"]?></td>
              <td><?php echo $row["quincenal"]?></td>
              <td><?php echo $row["mensual"]?></td>
              <td><?php echo $row["observaciones"]?></td>

              <td><a href="Actualizar.php?id=<?php echo $row["id_lista"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["id_lista"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>