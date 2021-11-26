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

<div class="container mt-2">
    <div class="row">
        
    <div class="col-md-1"></div>

    <div class="col-md-10">
    <h3 class="text-center" >LISTADO ACCESO ADMINISTRACION</h3>
        <table  class="table table-responsive table table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col"class="text-info">ID</th>
            <th scope="col"class="text-info">Administrador</th>
            <th scope="col"class="text-info">Empleado</th>
            <th scope="col"class="text-info">Contraseña</th>
            <th scope="col"class="text-info">Email</th>

            <th scope="col"class="text-info">Editar</th>
            <th scope="col"class="text-info">Eliminar</th>

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
                <a class="btn btn-outline-primary" href="editar_Admin.php?id=<?php echo $listadoIndividual["idAdmin"] ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
                <a class="btn btn-outline-danger" href="eliminar_Admin.php?id=<?php echo $listadoIndividual["idAdmin"] ?>"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <center>
    <a class="btn btn-primary account-btn" href="admin.php">Registrar</a>
    <a class="btn btn-secondary my-2" href="home.php">Ir a Pagina Principal</a>

    </center>

    </div>
    <div class="col-md-1"></div>
    </div>
</div>
<?php
include_once "./vistas/pie.php";
?>
