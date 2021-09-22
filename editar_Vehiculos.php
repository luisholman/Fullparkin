<?php
include_once "./vistas/encabezado.php";
$mysqli=include_once "./database/conexion.php";
$Idregistro_vehiculos=$_GET["id"];
$resultadoQuery=$mysqli->prepare("SELECT Idregistro_vehiculos,
Hora_ingreso,
Tipo_vehiculo,
Placa_vehiculo,
Nombre_cliente,
Identificacion,
Hora_salida
FROM registro_vehiculos WHERE Idregistro_vehiculos=?");



$resultadoQuery->bind_param("i",$Idregistro_vehiculos);
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
        <form action="actualizar_Vehiculos.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $Idregistro_vehiculos ?>">
            <div class="mb-3">
            <label for="horaingreso" class="form-label">Hora de Ingreso</label>
            <input type="text" class="form-control" value="<?php echo $infoCliente["Hora_ingreso"] ?>" name="horaingreso" id="horaingreso" placeholder="hora de ingreso vehiculo ">
            </div>
            <div class="mb-3">
            <label for="tipovehiculo" class="form-label">Tipo de vehiculo</label>
            <select id="tipovehiculo" class="form-control" name="tipovehiculo" value="<?php echo $infoCliente["Tipo_vehiculo"] ?>" name="Tipo de vehiculo">
                <option value="carro">Carro</option>
                <option value="buseta">Buseta</option>
                <option value="motocicleta">Motocicleta</option>
                <option value="bicicleta">Bicicleta</option>
             </select> 
            </div>
            <div class="mb-3">
            <label for="placavehiculo" class="form-label">Placa del vehiculo de cliente</label>
            <input type="text" class="form-control" name="placavehiculo" id="placavehiculo" value="<?php echo $infoCliente["Placa_vehiculo"] ?>"  placeholder="Ingrese placa vehiculo">
            </div>
            <div class="mb-3">
            <label for="nombrecliente" class="form-label">Nombre cliente</label>
            <input type="text" class="form-control" name="nombrecliente" id="nombrecliente" value="<?php echo $infoCliente["Nombre_cliente"] ?>"  placeholder="Ingrese el nombre del cliente">
            </div>
            <div class="mb-3">
            <label for="identificacion" class="form-label">Identificacion</label>
            <input type="text" class="form-control" name="identificacion" id="identificacion" value="<?php echo $infoCliente["Identificacion"] ?>"  placeholder="Ingrese identificacion del cliente">
            </div>   
            <div class="mb-3">
            <label for="horasalida" class="form-label">Hora de salida</label>
            <input type="text" class="form-control" name="horasalida" id="horasalida" value="<?php echo $infoCliente["Hora_salida"] ?>"  placeholder="Ingrese hora de salida vehiculo">
            </div>          
            <div class="mb-3">
            <button class="btn btn-primary account-btn">Actualizar</button>
            <a class="btn btn-secondary" href="home.php">Regresar</a>
            </div>
        </form>
    </div>
</div>
</div>
<?php include_once "./vistas/pie.php" ?>