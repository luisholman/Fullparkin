<?php include_once "encabezado.php" ?>

<div class="container">
<div class="row">
    <div class="col-md-4">
        <h1>Registro vehiculos</h1>
        <form action="registrar.php" method="POST">

        <div class="mb-3">
            <label for="horaingreso" class="form-label">Hora Ingreso</label>
            <input type="time" class="form-control" name="horaingreso" id="horaingreso" placeholder="">
            </div>
            <div class="mb-3">
                 <label for="tipovehiculo" class="form-label">Tipo de vehiculo</label>
                 <select id="tipovehiculo" class="form-control" name="tipovehiculo" name="Tipo de vehiculo">
                 <option value="carro">Carro</option>
                <option value="buseta">Buseta</option>
                <option value="motocicleta">Motocicleta</option>
                <option value="bicicleta">Bicicleta</option>
                </select> 
            </div>
            <div class="mb-3">
            <label for="placavehiculo" class="form-label">Placa vehiculo</label>
            <input type="text" class="form-control" name="placavehiculo" id="placavehiculo" placeholder="Ingrese numero de placa del vehiculo">
            </div>
            <div class="mb-3">
            <label for="nombrecliente" class="form-label">Nombre cliente</label>
            <input type="txt" class="form-control" name="nombrecliente" id="nombrecliente" placeholder="Ingrese nombre del cliente">
            </div>
            <div class="mb-3">
            <label for="identificacion" class="form-label">Identificacion</label>
            <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="ingrese Identificacion cliente">
            </div>
            <div class="mb-3">
            <label for="horasalida" class="form-label">Hora salida</label>
            <input type="time" class="form-control" name="horasalida" id="horasalida" placeholder="">
            </div>
            <div class="mb-3">
            <button class="btn btn-warning">Guardar</button>
            </div>
        </form>
    </div>
</div>
</div>
<?php include_once "pie.php" ?>