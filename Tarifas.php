<?php include_once "./vistas/encabezado.php" ?>

<div class="container mt-2">
<div class="row">

        <div class="col-md-3">
        </div>

    <div class="col-6">
        <h3 class="text-center text-dark">TARIFAS </h3>
        <form action="registrar_Tarifas.php" method="POST">
            <div class="mb-3">
            <label for="minuto" class="form-label">Tarifa Minuto</label>
            <input type="text" class="form-control" name="minuto" id="minuto" placeholder="Ingrese tarifa por minuto">
            </div>
            <div class="mb-3">
            <label for="hora" class="form-label">Tarifa Hora</label>
            <input type="text" class="form-control" name="hora" id="hora" placeholder="Ingrese tarifa por hora">
            </div>
            <div class="mb-3">
            <label for="dia" class="form-label">Tarifa Dia</label>
            <input type="text" class="form-control" name="dia" id="dia" placeholder="Ingrese tarifa por dia">
            </div>
            <div class="mb-3">
            <label for="noche" class="form-label">Tarifa Noche</label>
            <input type="text" class="form-control" name="noche" id="noche" placeholder="Ingrese tarifa por noche">
            </div>
            <div class="mb-3">
            <label for="semana" class="form-label">Tarifa Semana</label>
            <input type="text" class="form-control" name="semana" id="semana" placeholder="Ingrese tarifa por semana">
            </div>
            <div class="mb-3">
            <label for="mes" class="form-label">Tarifa Mes</label>
            <input type="text" class="form-control" name="mes" id="mes" placeholder="Ingrese tarifa por mes">
            </div>
            <div class="mb-3">
                <center>
            <button class="btn btn-primary account-btn">Guardar</button>
            <a class="btn btn-secondary my-2" href="listar_Tarifas.php">Ir a listado de Tarifas</a>
            </center>
            </div>
        </form>
    </div>

        <div class="col-md-3">
        </div>

    </div>
</div>
<?php include_once "./vistas/pie.php" ?>