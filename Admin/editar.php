<?php
include_once "encabezado.php";
$mysqli=include_once "../Database/conexion.php";
$idAdmin =$_GET["id"];
$resultadoQuery=$mysqli->prepare("SELECT idAdmin,
Administrador,
Empleado,
Contraseña,
Email
FROM admin WHERE idAdmin=? ");
$resultadoQuery->bind_param("i",$idAdmin);
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
        <h1>Editar Administracion</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $idAdmin ?>">
            <div class="mb-3">
            <label for="administrador" class="form-label">Administrador</label>
            <input type="text" class="form-control" name="administrador" id="administrador" value="<?php echo $infoCliente["Administrador"] ?>"  placeholder="Ingrese administrador">
            </div>
            <div class="mb-3">
            <label for="empleado" class="form-label">Empleado</label>
            <input type="text" class="form-control" name="empleado" id="empleado" value="<?php echo $infoCliente["Empleado"] ?>"  placeholder="Ingrese empleado">
            </div>
            <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Contraseña"] ?>" name="contraseña" id="contraseña" placeholder="Ingrese contraseña">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" value="<?php echo $infoCliente["Email"] ?>" name="email" id="email" placeholder="Ingrese email">
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