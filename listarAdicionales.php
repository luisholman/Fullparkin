<?php
include_once "./vistas/encabezado.php";
$mysqli= include_once "./database/conexion.php";

$resultadoQuery = $mysqli->query("SELECT idAdicionales,
  Servicio,
  Placa,
  Codigo,
  Descripcion,
  Valor
FROM adicionales");

$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>


<div class="container">
<div class="row">
<div class="col-12">
    <h1 class="text-center" >Listado de servicios Adicionales</h1>
</div>

    <table class="table table-bordered border-gray ">
    <thead>
    <tr>
        <th scope="col">Id Adicional</th>
        <th scope="col">Servicio</th>
        <th scope="col">Placa</th>
        <th scope="col">Codigo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Valor</th>

        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listadoClientes as $listadoIndividual) {?>
       
       <tr>
           <td> <?php echo $listadoIndividual["idAdicionales"] ?></td>
           <td> <?php echo $listadoIndividual["Servicio"] ?></td>
           <td> <?php echo $listadoIndividual["Placa"] ?></td>
           <td> <?php echo $listadoIndividual["Codigo"] ?></td>
           <td> <?php echo $listadoIndividual["Descripcion"] ?></td>
           <td> <?php echo $listadoIndividual["Valor"] ?></td>

           <td>
               <a class="btn btn-primary" href="editarAdicionales.php?id=<?php echo $listadoIndividual["idAdicionales"] ?>">Editar</a>
           </td>
           <td>
               <a class="btn btn-secondary" href="eliminarAdicionales.php?id=<?php echo $listadoIndividual["idAdicionales"] ?>">Eliminar</a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<div class="col-12">
    <a class="btn btn-primary account-btn" href="adicionales.php">Agregar nuevo cliente</a>
    <a class="btn btn-secondary my-2" href="home.php">Salir</a>
</div>
</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
