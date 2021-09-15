<?php
include_once "./vistas/encabezado.php";
$mysqli=include_once "./database/conexion.php";
$Id_cliente =$_GET["id"];
$resultadoQuery=$mysqli->prepare("SELECT Id_cliente,
Nombre,
Identificacion,
Telefono,
Direccion,
Email,
Placa_vehiculo
FROM clientes WHERE Id_cliente=? ");
$resultadoQuery->bind_param("i",$Id_cliente);
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
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $Id_cliente ?>">


            <div class="mb-3">
            <label for="nombre" class="form-label">Nombres del cliente</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Nombre"] ?>" name="nombre" id="nombre" placeholder="Ingrese los nombres del cliente">
            </div>
            <div class="mb-3">

            <div class="mb-3">
            <label for="identificacion" class="form-label">Identificacion del cliente</label>
            <input type="text" class="form-control" name="identificacion" id="identificacion" value="<?php echo $infoCliente["Identificacion"] ?>"  placeholder="Ingrese numero de identificacion del cliente">
            </div>
            <div class="mb-3">
            <label for="telefono" class="form-label">Telefono del cliente</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $infoCliente["Telefono"] ?>"  placeholder="Ingrese el numero de telefono del cliente">
            </div>
            <div class="mb-3">
            <label for="direccion" class="form-label">Direccion del cliente</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $infoCliente["Direccion"] ?>"  placeholder="Ingrese direccion del cliente">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email del cliente</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $infoCliente["Email"] ?>"  placeholder="Ingrese el email del cliente">
            </div>           

            <label for="placavehiculo" class="form-label">Placa del vehiculo de cliente</label>
            <input type="text" class="form-control" name="placavehiculo" id="placavehiculo" value="<?php echo $infoCliente["Placa_vehiculo"] ?>"  placeholder="Ingrese los apellidos del cliente">
            </div>
            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="listar.php">Regresar</a>
       
            </div>
        </form>
    </div>
</div>
</div>
<?php include_once "./vistas/pie.php" ?>