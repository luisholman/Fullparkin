<?php
include_once "./vistas/encabezado.php";
$mysqli= include_once "./database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT Id_cliente,
Nombre,
Identificacion,
Telefono,
Direccion,
Email,
Placa_vehiculo
FROM clientes");
$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>
<div class="container mt-2">
<div class="row">
<div class="col-12">
    <h3 class="text-center" >LISTADO DE CLIENTES</h3>
</div>
<div class="col-12">
    <table class="table table-responsive" class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <th scope="col" class="text-info">ID</th>
        <th scope="col"class="text-info">Nombre</th>
        <th scope="col"class="text-info">Identificacion</th>
        <th scope="col"class="text-info">Telefono</th>
        <th scope="col"class="text-info">Direccion</th>
        <th scope="col"class="text-info">Email</th>
        <th scope="col"class="text-info">Placa Vehiculo</th>
        <th scope="col"class="text-info">Editar</th>
        <th scope="col"class="text-info">Eliminar</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listadoClientes as $listadoIndividual) {?>
       
       <tr>
           <td> <?php echo $listadoIndividual["Id_cliente"] ?></td>
           <td> <?php echo $listadoIndividual["Nombre"] ?></td>
           <td> <?php echo $listadoIndividual["Identificacion"] ?></td>
           <td> <?php echo $listadoIndividual["Telefono"] ?></td>
           <td> <?php echo $listadoIndividual["Direccion"] ?></td>
           <td> <?php echo $listadoIndividual["Email"] ?></td>
           <td> <?php echo $listadoIndividual["Placa_vehiculo"] ?></td>


           <td>
               <a class="btn btn-outline-primary" href="editarclientes.php?id=<?php echo $listadoIndividual["Id_cliente"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-outline-danger" href="eliminarclientes.php?id=<?php echo $listadoIndividual["Id_cliente"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<center>
<a class="btn btn-primary account-btn" href="clientes.php">Registrar cliente</a>
<a class="btn btn-secondary my-2" href="home.php">Ir a Pagina Principal</a>
</center>
</div>

</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
