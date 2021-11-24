<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$sql = "SELECT * FROM lista_adicionales";
$query = mysqli_query($con, $sql);


?>


    <div class="container mt-3">
<div class="row">
    <div class="col-md-3">


        <form action="insert_dtadicionales.php"method="POST">

             <center> <h5>INGRESE AQUI DATOS</h5></center>
            <input type ="text" class="form-control mb-2" name="id_adicionales"placeholder="id_adicionales">
            <input type ="text" class="form-control mb-2" name="servicio"placeholder="servicio">
            <input type ="text" class="form-control mb-2" name="horario"placeholder="horario">
            <input type ="text" class="form-control mb-2" name="observaciones"placeholder="observaciones">

            
            <center><input type="submit" class="btn btn-primary"></center>

        </form>
    </div>
<div class="col-md-9">
            <table class="table table-bordered  border-primary">
            <caption> FULLPARKING "lo cuidamos como en casa" </caption>
            <thead class="table-dark">


                <tr>
                <center><h5>ADICIONALES</h5></center>
                <th scope="col"><center>Id</center></th>
                <th scope="col"><center>Servicio</center></th>
                <th scope="col"><center>Horario</center></th>
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
              <td><center><?php echo $row["id_adicionales"]?></center></td>
              <td><center><?php echo $row["servicio"]?></center></td>
              <td><center><?php echo $row["horario"]?></center></td>
              <td><center><?php echo $row["observaciones"]?></center></td>
            

              <td><center><a href="upgrade_dtadicionales.php?id=<?php echo $row["id_adicionales"]?>"class="btn btn-info"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_dtadicionales.php?id=<?php echo $row["id_adicionales"]?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></center></td>
              

          </tr> 
          <?php
        }
        include_once "./vistas/pie.php";
        ?>    

            </tbody>
            </table>
    </div>
    </div>
</body>
</html>