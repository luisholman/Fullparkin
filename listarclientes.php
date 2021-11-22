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
<div class="container mt-5">
<div class="row">
<div class="col-12">
    <h1 class="text-center" >Listado de clientes</h1>
</div>
<div class="col-12">
    <table class="table table-responsive" class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Identificacion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Email</th>
        <th scope="col">Placa Vehiculo</th>


        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>

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
               <a class="btn btn-primary" href="editarclientes.php?id=<?php echo $listadoIndividual["Id_cliente"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-secondary" href="eliminarclientes.php?id=<?php echo $listadoIndividual["Id_cliente"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<a class="btn btn-primary account-btn" href="clientes.php">Registrar cliente</a>
<a class="btn btn-secondary my-2" href="home.php">Ir a Pagina Principal</a>
</div>

</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
