<?php
include_once "encabezado.php";
$mysqli= include_once "../Database/conexion.php";
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
<div class="container">
<div class="row">
<div class="col-12">
    <h1>Tarifas</h1>
</div>
<div class="col-12">
   
    <table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Tarifa minuto</th>
        <th scope="col">Tarifa hora</th>
        <th scope="col">Tarifa dia</th>
        <th scope="col">Tarifa noche</th>
        <th scope="col">Tarifa semana</th>
        <th scope="col">Tarifa mes</th>
 
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>

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
               <a href="editar.php?id=<?php echo $listadoIndividual["idTarifas"] ?>">Editar</a>
           </td>
           <td>
               <a href="eliminar.php?id=<?php echo $listadoIndividual["idTarifas"] ?>">Eliminar</a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<a class="btn btn-warning my-2" href="tarifas.php">Agregar tarifa</a>
<a class="btn btn-secondary my-2" href="tarifas.php">Regresar</a>

</div>
</div>
</div>
<?php
include_once "pie.php";
?>
