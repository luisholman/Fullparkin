<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$sql = "SELECT * FROM espacios";
$query = mysqli_query($con, $sql);


?>


    <div class="container mt-2">
<div class="row">
    <div class="col-md-3">
        <form action="insert_espacios.php"method="POST">

            <center> <h5>INGRESE AQUI DATOS </h5></center>
            <input type ="text" class="form-control mb-2" name="id_espacios"placeholder="id_espacios">
            <input type ="text" class="form-control mb-2" name="numero"placeholder="numero">
            <input type ="text" class="form-control mb-2" name="estado"placeholder="estado">
            <input type ="text" class="form-control mb-2" name="codigo_entrada"placeholder="codigo_entrada">
            <input type ="text" class="form-control mb-2" name="placa"placeholder="placa">
            <input type ="text" class="form-control mb-2" name="fecha_ingreso"placeholder="fecha_ingreso">
            <input type ="text" class="form-control mb-2" name="hora_ingreso"placeholder="hora_ingreso">
            <input type ="text" class="form-control mb-2" name="salida"placeholder="salida">


            <center> <input type="submit" class="btn btn-primary"></center>


        </form>
    </div>
<div class="col-md-9">
            <table class="table table-bordered  border-primary">
            <caption> FULLPARKING "lo cuidamos como en casa"</caption>
            <thead class="table-dark">
                <tr>

                <center> <h5>ESPACIOS</h5></center>
                <th scope="col"><center>Id</center></th>
                <th scope="col"><center>Numero</center></th>
                <th scope="col"><center>Estado</center></th>
                <th scope="col"><center>Codigo entrada</center></th>
                <th scope="col"><center>Placa</center></th>
                <th scope="col"><center>Fecha ingreso</center></th>
                <th scope="col"><center>Hora ingreso</center></th>
                <th scope="col"><center>Salida</center></th>
                <th scope="col"><center>Editar</center></th>
                <th scope="col"><center>Eliminar</center></th>
              

                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><center><?php echo $row["id_espacios"]?></center></td>
              <td><center><?php echo $row["numero"]?></center></td>
              <td><center><?php echo $row["estado"]?></center></td>
              <td><center><?php echo $row["codigo_entrada"]?></center></td>
              <td><center><?php echo $row["placa"]?></center></td>
              <td><center><?php echo $row["fecha_ingreso"]?></center></td>
              <td><center><?php echo $row["hora_ingreso"]?></center></td>
              <td><center><?php echo $row["salida"]?></center></td>

              <td><center><a href="upgrade_espacios.php?id=<?php echo $row["id_espacios"]?>"class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_espacios.php?id=<?php echo $row["id_espacios"]?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a></center></td>
              

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