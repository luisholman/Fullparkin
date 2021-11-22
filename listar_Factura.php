<?php
include_once "./vistas/encabezado.php";
$mysqli= include_once "./database/conexion.php";
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
    <h1 class="text-center" >Listado de Facturas</h1>
</div>
<div class="col-12">
   
    <table class="table table-responsive" class="table table-bordered">
        <thead class="table-dark">
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
               <a class="btn btn-primary" href="editar_Factura.php?id=<?php echo $listadoIndividual["idFactura"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-secondary" href="eliminar_Factura.php?id=<?php echo $listadoIndividual["idFactura"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<a class="btn btn-primary account-btn" href="factura.php">Registrar factura</a>
<a class="btn btn-secondary" href="home.php">Ir a Pagina Principal</a>

</div>
</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
