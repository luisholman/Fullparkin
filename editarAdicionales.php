<?php
include_once "./vistas/encabezado.php";
$mysqli=include_once "./database/conexion.php";
$idAdicionales=$_GET["id"];
$resultadoQuery = $mysqli->prepare("SELECT idAdicionales,
  Servicio,
  Placa,
  Codigo,
  Descripcion,
  Valor
FROM adicionales WHERE idAdicionales=?");

$resultadoQuery->bind_param("i",$idAdicionales);
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
        <h1>Editar Clientes</h1>
        <form action="actualizarAdicionales.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $idAdicionales ?>">


            <div class="mb-3">
            <label for="servicio" class="form-label">Servicio</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Servicio"] ?>" name="servicio" id="servicio" placeholder="Ingrese servicio prestado">
            </div>
            <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" name="placa" id="placa" value="<?php echo $infoCliente["Placa"] ?>"  placeholder="Ingrese placa de vehiculo">
            </div>

            <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" id="codigo" value="<?php echo $infoCliente["Codigo"] ?>"  placeholder="Ingrese codigo servicio">
            </div>
            <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $infoCliente["Descripcion"] ?>"  placeholder="Ingrese descripcion del servicio">
            </div>
            <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" name="valor" id="valor" value="<?php echo $infoCliente["Valor"] ?>"  placeholder="Ingrese valor del servicio">
            </div>


            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="listarAdicionales.php">Regresar</a>
            </div>
        </form>
    </div>
</div>
</div>
<?php include_once "./vistas/pie.php" ?>