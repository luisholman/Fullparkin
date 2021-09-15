<?php
include_once "encabezado.php";
$mysqli=include_once "../Database/conexion.php";
$idFactura=$_GET["id"];
$resultadoQuery=$mysqli->prepare("SELECT idFactura,
Placa,
Fecha_de_Ingreso,
Hora_Ingreso,
Fecha_de_salida,
Hora_de_salida,
Subtotal,
Impuestos,
Total
FROM factura WHERE idFactura=?");

$resultadoQuery->bind_param("i",$idFactura);
$resultadoQuery-> execute();
$resultadoData=$resultadoQuery->get_result();
$infoCliente=$resultadoData->fetch_assoc();
if(!$infoCliente){
    exit ("No existe informacion para el id que se envio");
}
?>
<div class="container">
    <div class="row">
         <div class="col-md-4">
                <h1>Editar Factura</h1>
                <form action="actualizar.php" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo $idFactura ?>">
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control" value="<?php echo $infoCliente["Placa"] ?>" name="placa" id="placa" placeholder="ingrese placa ">
                </div>
                <div class="mb-3">
                    <label for="fechaingreso" class="form-label">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="fechaingreso" id="fechaingreso" value="<?php echo $infoCliente["Fecha_de_Ingreso"] ?>"  placeholder="ingrese la fecha de ingreso">
                </div>
                <div class="mb-3">
                     <label for="horaingreso" class="form-label">Hora ingreso</label>
                    <input type="time" class="form-control" name="horaingreso" id="horaingreso" value="<?php echo $infocliente["Hora_Ingreso"] ?>" placeholder="Ingrese hora de ingreso">
                </div>
                <div class="mb-3">
                    <label for="fechasalida" class="form-label">Fecha salida</label>
                    <input type="date" class="form-control" name="fechasalida" id="fechasalida" value="<?php echo $infoCliente["Fecha_de_salida"] ?>" placeholder="Ingrese fecha salida">
                </div>
                <div class="mb-3">
                    <label for="horasalida" class="form-label">Hora salida</label>
                    <input type="time" class="form-control" name="horasalida" id="horasalida" value="<?php echo $infoCliente ["Hora_de_salida"] ?>" placeholder="ingrese hora salida">
                </div>
                <div class="mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="text" class="form-control" name="subtotal" id="subtotal" value="<?php echo $infoCliente ["Subtotal"] ?>" placeholder="ingrese subtotal">
                </div>
                <div class="mb-3">
                    <label for="impuestos" class="form-label">Impuestos</label>
                <input type="text" class="form-control" name="impuestos" id="impuestos" value="<?php echo $infoCliente ["Impuestos"] ?>" placeholder="ingrese impuestos">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" class="form-control" name="total" id="total" value="<?php echo $infoCliente ["Total"] ?>" placeholder="ingrese el total">
                </div>
                <div class="mb-3">
                    <button class="btn btn-warning">Actualizar</button>
                    <a class="btn btn-secondary" href="listar.php">Regresar</a>
                </div>
                </form>
         </div>
    </div>
</div>
<?php include_once "pie.php" ?>