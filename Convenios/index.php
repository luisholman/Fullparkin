<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM Convenios";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud convenios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="id_convenio"placeholder="id_convenio">
            <input type ="text" class="form-control mb-3" name="empresa"placeholder="empresa">
            <input type ="text" class="form-control mb-3" name="negocio"placeholder="negocio">
            <input type ="text" class="form-control mb-3" name="otros"placeholder="otros">
            <input type ="text" class="form-control mb-3" name="observaciones"placeholder="observaciones">
           

            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>CONVENIOS FULLPARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Empresa</th>
                <th scope="col">Negocio</th>
                <th scope="col">Otros</th>
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
              <td><?php echo $row["id_convenio"]?></td>
              <td><?php echo $row["empresa"]?></td>
              <td><?php echo $row["negocio"]?></td>
              <td><?php echo $row["otros"]?></td>
              <td><?php echo $row["observaciones"]?></td>
            

              <td><a href="Actualizar.php?id=<?php echo $row["id_convenio"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["id_convenio"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>