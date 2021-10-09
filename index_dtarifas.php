<?php
include_once "./vistas/encabezado.php";
include("connect.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>
<body>
    <div class="container mt-2">
<div class="row">
    <div class="col-md-3">
        <form action="insert_dtarifas.php"method="POST">

             <center> <h6>INGRESE AQUI DATOS</h6></center>
            <input type ="text" class="form-control mb-1" name="id_lista"placeholder="id_lista">
            <input type ="text" class="form-control mb-1" name="vehiculo"placeholder="vehiculo">
            <input type ="text" class="form-control mb-1" name="minuto"placeholder="minuto">
            <input type ="text" class="form-control mb-1" name="hora"placeholder="hora">
            <input type ="text" class="form-control mb-1" name="dia"placeholder="dia">
            <input type ="text" class="form-control mb-1" name="noche"placeholder="noche">
            <input type ="text" class="form-control mb-1" name="semana"placeholder="semana">
            <input type ="text" class="form-control mb-1" name="quincenal"placeholder="quincenal">
            <input type ="text" class="form-control mb-1" name="mensual"placeholder="mensual">
            <input type ="text" class="form-control mb-1" name="observaciones"placeholder="observaciones">


            <center><input type="submit" class="btn btn-success"></center>
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table table-bordered  border-primary">
            <caption>FULLPARKING "lo cuidamos como en casa"</caption>
            <thead class="table-dark">
                <tr>

                <center><h5>TARIFAS</h5></center>   
                <th scope="col"><center>Id </center></th>
                <th scope="col"><center>vehiculo </center></th>
                <th scope="col"><center>Minuto </center></th>
                <th scope="col"><center>Hora </center></th>
                <th scope="col"><center>Dia </center></th>
                <th scope="col"><center>Noche </center></th>
                <th scope="col"><center>Semana </center></th>
                <th scope="col"><center>Quincenal </center></th>
                <th scope="col"><center>Mensual </center></th>
                <th scope="col"><center>Observaciones </center></th>
                <th scope="col"><center>Editar </center></th>
                <th scope="col"><center>Eliminar </center></th>
               
                
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><center><?php echo $row["id_lista"]?></center></td>
              <td><center><?php echo $row["vehiculo"]?></center></td>
              <td><center><?php echo $row["minuto"]?></center></td>
              <td><center><?php echo $row["hora"]?></center></td>
              <td><center><?php echo $row["dia"]?></center></td>
              <td><center><?php echo $row["noche"]?></center></td>
              <td><center><?php echo $row["semana"]?></center></td>
              <td><center><?php echo $row["quincenal"]?></center></td>
              <td><center><?php echo $row["mensual"]?></center></td>
              <td><center><?php echo $row["observaciones"]?></center></td>

              <td><center><a href="upgrade_dtarifas.php?id=<?php echo $row["id_lista"]?>"class="btn btn-info"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_dtarifas.php?id=<?php echo $row["id_lista"]?>" class="btn btn-danger"> <i class="bi bi-trash"></i></a></center></td>
              

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