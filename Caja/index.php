<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM caja";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud caja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="id_caja"placeholder="id_caja">
            <input type ="text" class="form-control mb-3" name="fecha_apertura"placeholder="fecha_apertura">
            <input type ="text" class="form-control mb-3" name="fecha_cierre"placeholder="fecha_cierre">
            <input type ="text" class="form-control mb-3" name="estado"placeholder="estado">
            <input type ="text" class="form-control mb-3" name="monto"placeholder="monto">
           

            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>CAJA FULLPARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha apertura</th>
                <th scope="col">Fecha cierre</th>
                <th scope="col">Estado</th>
                <th scope="col">Monto</th>
            
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["id_caja"]?></td>
              <td><?php echo $row["fecha_apertura"]?></td>
              <td><?php echo $row["fecha_cierre"]?></td>
              <td><?php echo $row["estado"]?></td>
              <td><?php echo $row["monto"]?></td>
            

              <td><a href="Actualizar.php?id=<?php echo $row["id_caja"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["id_caja"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>