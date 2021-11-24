<?php
include_once "./vistas/encabezado.php";
include("connect.php");
$con = conectar();

$sql = "SELECT * FROM Convenios";
$query = mysqli_query($con, $sql);


?>




    <div class="container mt-2">
<div class="row">
    <div class="col-md-3">
        
        <form action="Insert_convenios.php"method="POST">
            <center> <h5>INGRESE AQUI DATOS </h5></center>
            <input type ="text" class="form-control mb-2" name="id_convenio"placeholder="id_convenio">
            <input type ="text" class="form-control mb-2" name="empresa"placeholder="empresa">
            <input type ="text" class="form-control mb-2" name="negocio"placeholder="negocio">
            <input type ="text" class="form-control mb-2" name="otros"placeholder="otros">
            <input type ="text" class="form-control mb-2" name="observaciones"placeholder="observaciones">
           
           <center> <input type="submit" class="btn btn-primary"></center>
         <br>
        </form>
    </div>
<div class="col-md-9" >
            <table  class="table table-bordered  border-primary">
            <caption> FULLPARKING "lo cuidamos como en casa"</caption>
            <thead class="table-dark">
                <tr>
                    
               <h5 class="text-center">LISTADO DE CONVENIOS</h5>
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
            

              <td><center><a href="upgrade_convenios.php?id=<?php echo $row["id_convenio"]?>"class="btn btn-info"><i class="bi bi-pencil-square"></i></a></center></td>
              <td><center><a href="delete_convenios.php?id=<?php echo $row["id_convenio"]?>" class="btn btn-primary"><i class="bi bi-trash"></i></a></center></td>
              

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