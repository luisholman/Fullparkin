<?php include_once "./vistas/encabezado.php" ?>

<div class="container mt-2">
<div class="row">

            <div class="col-md-3">
            </div>

    <div class="col-md-6">
        <h3 class="text-center text-dark" >REGISTRAR FACTURA</h3>
        <form action="registrar_Factura.php" method="POST">
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
                <center>
            <button class="btn btn-primary account-btn">Guardar</button>
            <a class="btn btn-secondary" href="listar_Factura.php">Ir a Listado de Facturas</a>
            </center>
            </div>
        </form>
        </div>

        <div class="col-md-3">
        </div>
    </div>
</div>
</div>

<?php include_once "./vistas/pie.php" ?>