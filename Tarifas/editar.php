<?php
include_once "encabezado.php";
$mysqli=include_once "../Database/conexion.php";
$idTarifas =$_GET["id"];
$resultadoQuery=$mysqli->prepare("SELECT idTarifas,
Tarifa_minuto,
Tarifa_hora,
Tarifa_dia,
Tarifa_noche,
Tarifa_semana,
Tarifa_mes
FROM tarifas WHERE idTarifas=? ");
$resultadoQuery->bind_param("i",$idTarifas);
$resultadoQuery-> execute();
$resultadoData=$resultadoQuery->get_result();
$infoCliente=$resultadoData->fetch_assoc();
if(!$infoCliente){
    exit ("No existe informacion para el id que se envio");
}

?>
<div class="container">
<div class="row">
    <div class="col-12">
        <h1>Editar Tarifas</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $idTarifas ?>">
            <div class="mb-3">
            <label for="minuto" class="form-label">Tarifa Minuto</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Tarifa_minuto"] ?>" name="minuto" id="minuto" placeholder="Ingrese tarifa por minuto">
            </div>
            <div class="mb-3">
            <label for="hora" class="form-label">Tarifa Hora</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Tarifa_hora"] ?>" name="hora" id="hora" placeholder="Ingrese tarifa por hora">
            </div>
            <div class="mb-3">
            <label for="dia" class="form-label">Tarifa Dia</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Tarifa_dia"] ?>" name="dia" id="dia" placeholder="Ingrese tarifa por dia">
            </div>
            <div class="mb-3">
            <label for="noche" class="form-label">Tarifa Noche</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Tarifa_noche"] ?>" name="noche" id="noche" placeholder="Ingrese tarifa por noche">
            </div>
            <div class="mb-3">
            <label for="semana" class="form-label">Tarifa Semana</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Tarifa_semana"] ?>" name="semana" id="semana" placeholder="Ingrese tarifa por semana">
            </div>
            <div class="mb-3">
            <label for="mes" class="form-label">Tarifa Mes</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Tarifa_mes"] ?>" name="mes" id="mes" placeholder="Ingrese tarifa por mes">
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