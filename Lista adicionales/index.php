<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM lista_adicionales";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud lista adicionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="id_adicionales"placeholder="id_adicionales">
            <input type ="text" class="form-control mb-3" name="servicio"placeholder="servicio">
            <input type ="text" class="form-control mb-3" name="horario"placeholder="horario">
            <input type ="text" class="form-control mb-3" name="observaciones"placeholder="observaciones">
        
           

            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>LISTA ADICIONALES FULLPARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Servicio</th>
                <th scope="col">Horario</th>
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
              <td><?php echo $row["id_adicionales"]?></td>
              <td><?php echo $row["servicio"]?></td>
              <td><?php echo $row["horario"]?></td>
              <td><?php echo $row["observaciones"]?></td>
            

              <td><a href="Actualizar.php?id=<?php echo $row["id_adicionales"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["id_adicionales"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>