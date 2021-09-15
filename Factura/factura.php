<?php include_once "encabezado.php" ?>

<div class="container">
<div class="row">
    <div class="col-md-4">
        <h1>Registro Factura</h1>
        <form action="registrar.php" method="POST">
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" name="placa" id="placa" placeholder="ingrese placa">
            </div>
            <div class="mb-3">
            <label for="fechaingreso" class="form-label">Fecha Ingreso</label>
            <input type="date" class="form-control" name="fechaingreso" id="fechaingreso" placeholder="--/--/--">
            </div>
            <div class="mb-3">
            <label for="horaingreso" class="form-label">Hora ingreso</label>
            <input type="time" class="form-control" name="horaingreso" id="horaingreso" placeholder="Ingrese hora de ingreso">
            </div>
            <div class="mb-3">
            <label for="fechasalida" class="form-label">Fecha salida</label>
            <input type="date" class="form-control" name="fechasalida" id="fechasalida" placeholder="Ingrese fecha salida">
            </div>
            <div class="mb-3">
            <label for="horasalida" class="form-label">Hora salida</label>
            <input type="time" class="form-control" name="horasalida" id="horasalida" placeholder="ingrese hora salida">
            </div>
            <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal</label>
            <input type="text" class="form-control" name="subtotal" id="subtotal" placeholder="ingrese subtotal">
            </div>
            <div class="mb-3">
            <label for="impuestos" class="form-label">Impuestos</label>
            <input type="text" class="form-control" name="impuestos" id="impuestos" placeholder="ingrese impuestos">
            </div>
            <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" name="total" id="total" placeholder="ingrese el total">
            </div>
            <div class="mb-3">
            <button class="btn btn-warning">Guardar</button>
            </div>
        </form>
    </div>
</div>
</div>

<?php include_once "pie.php" ?>