<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$sql = "SELECT * FROM mensualidades";
$query = mysqli_query($con, $sql);


?>


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
            


            <center> <input type="submit" class="btn btn-primary"></center>

        </form>
    </div>
<div class="col-md-9">
            <table class="table table-responsive table table-bordered  border-dark" >
            <caption> FULLPARKING "lo cuidamos como en casa"</caption>
            <thead class="table-dark">
                <tr>

                <center> <h5>LISTADO DE MENSUALIDADES</h5></center>
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
             

              <td><center><a href="upgrade_mensuales.php?id=<?php echo $row["id_mensualidades"]?>"class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_mensuales.php?id=<?php echo $row["id_mensualidades"]?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a></center></td>
              

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