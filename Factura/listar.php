<?php
include_once "encabezado.php";
$mysqli= include_once "../Database/conexion.php";
$resultadoQuery = $mysqli->query("SELECT idFactura,
    Placa,
    Fecha_de_Ingreso,
    Hora_Ingreso,
    Fecha_de_salida,
    Hora_de_salida,
    Subtotal,
    Impuestos,
    Total
FROM factura");
$listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
?>
<div class="container">
<div class="row">
<div class="col-12">
    <h1>Registro factura</h1>
</div>
<div class="col-12">
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">idFactura</th>
                <th scope="col">Placa</th>
                <th scope="col">fecha de ingreso</th>
                <th scope="col">Hora de ingreso</th>
                <th scope="col">Fecha de salida</th>
                <th scope="col">Hora de salida</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Impuestos</th>
                <th scope="col">Total</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
    <tbody>
    <?php
    foreach ($listadoClientes as $listadoIndividual) {?>
       
       <tr>
           <td> <?php echo $listadoIndividual["idFactura"] ?></td>
           <td> <?php echo $listadoIndividual["Placa"] ?></td>
           <td> <?php echo $listadoIndividual["Fecha_de_Ingreso"] ?></td>
           <td> <?php echo $listadoIndividual["Hora_Ingreso"] ?></td>
           <td> <?php echo $listadoIndividual["Fecha_de_salida"] ?></td>
           <td> <?php echo $listadoIndividual["Hora_de_salida"] ?></td>
           <td> <?php echo $listadoIndividual["Subtotal"] ?></td>
           <td> <?php echo $listadoIndividual["Impuestos"] ?></td>
           <td> <?php echo $listadoIndividual["Total"] ?></td>
           <td>
               <a href="editar.php?id=<?php echo $listadoIndividual["idFactura"] ?>">Editar</a>
           </td>
           <td>
               <a href="eliminar.php?id=<?php echo $listadoIndividual["idFactura"] ?>">Eliminar</a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<a class="btn btn-warning my-2" href="factura.php">Registro factura</a>
<a class="btn btn-secondary" href="factura.php">Regresar</a>

</div>
</div>
</div>
<?php
include_once "pie.php";
?>
