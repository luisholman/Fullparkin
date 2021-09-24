<?php include_once "./vistas/encabezado.php" ?>

<div class="container">
<div class="row">
    <div class="col-12">
        <h1>Tarifas </h1>
        <form action="registrar.php" method="POST">
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
            <button class="btn btn-primary account-btn">Guardar</button>
            <a class="btn btn-secondary my-2" href="listar_Tarifas.php">Ir a listado de Tarifas</a>
            </div>
        </form>
    </div>
    </div>
</div>
<?php include_once "./vistas/pie.php" ?>