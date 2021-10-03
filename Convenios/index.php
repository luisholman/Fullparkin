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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>
<body>
    <div class="container mt-2">
<div class="row">
    <div class="col-md-3">
        
        <form action="Insert.php"method="POST">
            
            <center> <h6>INGRESE AQUI DATOS </h6></center>
            <input type ="text" class="form-control mb-2" name="id_convenio"placeholder="id_convenio">
            <input type ="text" class="form-control mb-2" name="empresa"placeholder="empresa">
            <input type ="text" class="form-control mb-2" name="negocio"placeholder="negocio">
            <input type ="text" class="form-control mb-2" name="otros"placeholder="otros">
            <input type ="text" class="form-control mb-2" name="observaciones"placeholder="observaciones">
           
           <center> <input type="submit" class="btn btn-success"></center>
            <!--<input type="submit" class="btn btn-primary btn-block">-->
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table table-bordered  border-primary">
            <caption> FULLPARKING "lo cuidamos como en casa"</caption>
            <thead class="table-dark">
                <tr>
                    
                <center> <h5>CONVENIOS</h5></center>
                <th scope="col"><center>Id</center></th>
                <th scope="col"><center>Empresa</center></th>
                <th scope="col"><center>Negocio</center></th>
                <th scope="col"><center>Otros</center></th>
                <th scope="col"><center>Observaciones</center></th>
                <th scope="col"><center>Editar</center></th>
                <th scope="col"><center>Eliminar</center></th>
            
                
                
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><center><?php echo $row["id_convenio"]?></center></td>
              <td><center><?php echo $row["empresa"]?></center></td>
              <td><center><?php echo $row["negocio"]?></center></td>
              <td><center><?php echo $row["otros"]?></center></td>
              <td><center><?php echo $row["observaciones"]?></center></td>
            

              <td><center><a href="Actualizar.php?id=<?php echo $row["id_convenio"]?>"class="btn btn-info"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="Delete.php?id=<?php echo $row["id_convenio"]?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></center></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>