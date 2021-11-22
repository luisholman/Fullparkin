<?php
include_once "./vistas/encabezado.php";
$mysqli= include_once "./database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT idAdmin,
Administrador,
Empleado,
Password,
Email
FROM admin");
$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>
<div class="container">
<div class="row">
<div class="col-12">
    <h1 class="text-center" >Listado Acceso Administracion</h1>
</div>
<div class="col-12">
  
    <table class="table table-responsive" class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Administrador</th>
        <th scope="col">Empleado</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Email</th>

        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listadoClientes as $listadoIndividual) {?>
       
       <tr>
           <td> <?php echo $listadoIndividual["idAdmin"] ?></td>
           <td> <?php echo $listadoIndividual["Administrador"] ?></td>
           <td> <?php echo $listadoIndividual["Empleado"] ?></td>
           <td> <?php echo $listadoIndividual["Password"] ?></td>
           <td> <?php echo $listadoIndividual["Email"] ?></td>


           <td>
               <a class="btn btn-primary" href="editar_Admin.php?id=<?php echo $listadoIndividual["idAdmin"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-secondary" href="eliminar_Admin.php?id=<?php echo $listadoIndividual["idAdmin"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<a class="btn btn-primary account-btn" href="admin.php">Registrar</a>
<a class="btn btn-secondary my-2" href="home.php">Ir a Pagina Principal</a>
</div>
</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
