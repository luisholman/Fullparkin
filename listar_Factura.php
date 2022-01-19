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
<div class="container mt-2">
<div class="row">
<div class="col-12">
<h3 class="text-center" >LISTADO FACTURA</h3>
    <table class="table table-responsive" class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-info">idFactura</th>
                <th scope="col" class="text-info">Placa</th>
                <th scope="col" class="text-info">fecha de ingreso</th>
                <th scope="col" class="text-info">Hora de ingreso</th>
                <th scope="col" class="text-info">Fecha de salida</th>
                <th scope="col" class="text-info">Hora de salida</th>
                <th scope="col" class="text-info">Subtotal</th>
                <th scope="col" class="text-info">Impuestos</th>
                <th scope="col" class="text-info">Total</th>
                <th scope="col" class="text-info">Editar</th>
                <th scope="col" class="text-info">Eliminar</th>
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
               <a class="btn btn-outline-primary" href="editar_Factura.php?id=<?php echo $listadoIndividual["idFactura"] ?>"><i class="bi bi-pencil-square"></i></a>
           </td>
           <td>
               <a class="btn btn-outline-danger" href="eliminar_Factura.php?id=<?php echo $listadoIndividual["idFactura"] ?>"><i class="bi bi-trash"></i></a>
           </td>
       </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<center>
<a class="btn btn-primary account-btn" href="factura.php">Registrar factura</a>
<a class="btn btn-secondary" href="home.php">Ir a Pagina Principal</a>
</center>
</div>
</div>
</div>
<?php
include_once "./vistas/pie.php";
?>
