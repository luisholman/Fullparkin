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


<div class="container mt-2">
    <div class="row">

    <div class="col-md-2"></div>

<div class="col-8">
    <h3 class="text-center" >LISTADO ADICIONALES </h3>

    <table class="table table-responsive" class="table table-bordered ">
    <thead class="table-dark">
    <tr>
        <th scope="col" class="text-info">Id</th>
        <th scope="col"class="text-info">Servicio</th>
        <th scope="col"class="text-info">Placa</th>
        <th scope="col"class="text-info">Codigo</th>
        <th scope="col"class="text-info">Descripcion</th>
        <th scope="col"class="text-info">Valor</th>

        <th scope="col"class="text-info">Editar</th>
        <th scope="col"class="text-info">Eliminar</th>

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
               <a class="btn btn-outline-primary" href="editarAdicionales.php?id=<?php echo $listadoIndividual["idAdicionales"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-outline-danger" href="eliminarAdicionales.php?id=<?php echo $listadoIndividual["idAdicionales"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<center>
<div class="col-12">
    <a class="btn btn-primary account-btn" href="adicionales.php">Agregar nuevo cliente</a>
    <a class="btn btn-secondary my-2" href="home.php">Ir a Pagina Principal</a>
</div>
</center>
<div class="col-md-2"></div>
</div>

</div>

</div>
<?php
include_once "./vistas/pie.php";
?>
