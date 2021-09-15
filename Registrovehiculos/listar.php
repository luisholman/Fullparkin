<?php
include_once "encabezado.php";
$mysqli= include_once "../Database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT Idregistro_vehiculos,
Hora_ingreso,
Tipo_vehiculo,
Placa_vehiculo,
Nombre_cliente,
Identificacion,
Hora_salida
FROM registro_vehiculos");
$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>
<div class="container">
<div class="row">
<div class="col-12">
    <h1>Registro Ingreso</h1>
</div>
<div class="col-12">
    <a class="btn btn-warning my-2" href="formulario entrada vehiculo.php">Registro ingreso Vehiculos</a>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Hora de Ingreso</th>
        <th scope="col">Tipo de Vehiculo</th>
        <th scope="col">Placa Vehiculo</th>
        <th scope="col">Nombre Cliente</th>
        <th scope="col">Identificacion</th>
        <th scope="col">Hora de Salida</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listadoClientes as $listadoIndividual) {?>
       
       <tr>
           <td> <?php echo $listadoIndividual["Idregistro_vehiculos"] ?></td>
           <td> <?php echo $listadoIndividual["Hora_ingreso"] ?></td>
           <td> <?php echo $listadoIndividual["Tipo_vehiculo"] ?></td>
           <td> <?php echo $listadoIndividual["Placa_vehiculo"] ?></td>
           <td> <?php echo $listadoIndividual["Nombre_cliente"] ?></td>
           <td> <?php echo $listadoIndividual["Identificacion"] ?></td>
           <td> <?php echo $listadoIndividual["Hora_salida"] ?></td>
           <td>
               <a href="editar.php?id=<?php echo $listadoIndividual["Idregistro_vehiculos"] ?>">Editar</a>
           </td>
           <td>
               <a href="eliminar.php?id=<?php echo $listadoIndividual["Idregistro_vehiculos"] ?>">Eliminar</a>
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
