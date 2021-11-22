<?php
include_once "./vistas/encabezado.php";
include("connect.php");

$con = conectar();

$sql = "SELECT * FROM caja";
$query = mysqli_query($con, $sql);


?>



    <div class="container mt-2">
<div class="row">
    <div class="col-md-12">
        <form action="insert_caja.php"method="POST">
            <h2 class="text-center">Caja</h2>
            <center> <h5>INGRESE AQUI DATOS </h5></center>
            <input type ="text" class="form-control mb-2" name="id_caja"placeholder="id_caja">
            <input type ="text" class="form-control mb-2" name="fecha_apertura"placeholder="fecha_apertura">
            <input type ="text" class="form-control mb-2" name="fecha_cierre"placeholder="fecha_cierre">
            <input type ="text" class="form-control mb-2" name="estado"placeholder="estado">
            <input type ="text" class="form-control mb-2" name="monto"placeholder="monto">
           

            <center> <input type="submit" class="btn btn-danger"></center>
            <br>

        </form>
    </div>

<div class="col-md-12" class="container fluid">
            <table class="table table-bordered  border-primary">
            <caption> FULLPARKING "lo cuidamos como en casa" </caption>
            <thead class="table-dark">

                <tr>
                    <br>
               
                <th scope="col"><center>Id</center></th>
                <th scope="col"><center>Fecha apertura</center></th>
                <th scope="col"><center>Fecha cierre</center></th>
                <th scope="col"><center>Estado</center></th>
                <th scope="col"><center>Monto</center></th>
                <th scope="col"><center>Editar</center></th>
                <th scope="col"><center>Eliminar</center></th>
            
              
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><center><?php echo $row["id_caja"]?></center></td>
              <td><center><?php echo $row["fecha_apertura"]?></center></td>
              <td><center><?php echo $row["fecha_cierre"]?></center></td>
              <td><center><?php echo $row["estado"]?></center></td>
              <td><center><?php echo $row["monto"]?></center></td>
            

              <td><center><a href="upgrade_caja.php?id=<?php echo $row["id_caja"]?>"class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_caja.php?id=<?php echo $row["id_caja"]?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></center></td>
              

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