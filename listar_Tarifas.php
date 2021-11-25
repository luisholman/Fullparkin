<?php
include_once "./vistas/encabezado.php";
$mysqli= include_once "./database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT idTarifas,
Tarifa_minuto,
Tarifa_hora,
Tarifa_dia,
Tarifa_noche,
Tarifa_semana,
Tarifa_mes
FROM tarifas");
$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>
<div class="container mt-2">
<div class="row">
<div class="col-12">
    <h3 class="text-center">LISTADO DE TARIFAS</h3>
</div>

 <div class="col-md-1"></div>

<div class="col-10">
   
    <table class="table table-responsive" class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <th scope="col" class="text-info">ID</th>
        <th scope="col"class="text-info">Tarifa Minuto</th>
        <th scope="col"class="text-info">Tarifa Hora</th>
        <th scope="col"class="text-info">Tarifa Dia</th>
        <th scope="col"class="text-info">Tarifa Noche</th>
        <th scope="col"class="text-info">Tarifa Semana</th>
        <th scope="col"class="text-info">Tarifa Mes</th>
        <th scope="col"class="text-info">Editar</th>
        <th scope="col"class="text-info">Eliminar</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listadoClientes as $listadoIndividual) {?>
       
       <tr>
           <td> <?php echo $listadoIndividual["idTarifas"] ?></td>
           <td> <?php echo $listadoIndividual["Tarifa_minuto"] ?></td>
           <td> <?php echo $listadoIndividual["Tarifa_hora"] ?></td>
           <td> <?php echo $listadoIndividual["Tarifa_dia"] ?></td>
           <td> <?php echo $listadoIndividual["Tarifa_noche"] ?></td>
           <td> <?php echo $listadoIndividual["Tarifa_semana"] ?></td>
           <td> <?php echo $listadoIndividual["Tarifa_mes"] ?></td>

           <td>
               <a class="btn btn-outline-primary" href="editar_Tarifas.php?id=<?php echo $listadoIndividual["idTarifas"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-outline-danger" href="eliminar_Tarifas.php?id=<?php echo $listadoIndividual["idTarifas"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
    <center>
        <a class="btn btn-primary account-btn" href="Tarifas.php">Agregar tarifa</a>
        <a class="btn btn-secondary my-2" href="Tarifas.php">Ir a Pagina Principal</a>
    </center>


</div>

<div class="col-md-1"></div>
</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
