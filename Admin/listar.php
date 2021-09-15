<?php
include_once "encabezado.php";
$mysqli= include_once "../Database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT idAdmin,
Administrador,
Empleado,
Contraseña,
Email
FROM admin");
$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>
<div class="container">
<div class="row">
<div class="col-12">
    <h1>Administracion</h1>
</div>
<div class="col-12">
    <a class="btn btn-warning my-2" href="admin.php">registrar</a>
    <table class="table table-bordered">
    <thead>
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
           <td> <?php echo $listadoIndividual["Contraseña"] ?></td>
           <td> <?php echo $listadoIndividual["Email"] ?></td>


           <td>
               <a href="editar.php?id=<?php echo $listadoIndividual["idAdmin"] ?>">Editar</a>
           </td>
           <td>
               <a href="eliminar.php?id=<?php echo $listadoIndividual["idAdmin"] ?>">Eliminar</a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</div>
</div>
</div>
<?php
include_once "pie.php";
?>
