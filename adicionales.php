<?php include_once "./vistas/encabezado.php" ?>

<div class="container mt-2">
    <div class="row">

        <div class="col-md-3">
        </div>

        <div class="col-md-6">
            <h3 class="text-center text-dark" >SERVICIO ADICIONAL</h3>
            <form action="registrarAdicionales.php" method="POST">
                <div class="mb-3">
                <label for="servicio" class="form-label">Servicio</label>
                <input type="text" class="form-control" name="servicio" id="servicio" placeholder="Ingrese servicio">
                </div>
                <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa" id="placa" placeholder="Ingrese placa vehiculo">
                </div>
                <div class="mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Ingrese codigo de servicio">
                </div>
                <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese descripcion del servicio">
                </div>
                <div class="mb-3">
                <label for="valor" class="form-label">Valor servicio</label>
                <input type="text" class="form-control" name="valor" id="valor" placeholder="Ingrese valor del servicio">
                </div>
                <div class="mb-3">
                    <center>
                <button class="btn btn-primary account-btn">Guardar</button>
                <a class="btn btn-secondary" href="listarAdicionales.php">Ir a Listado de Adicionales</a>
                </center>
                </div>
            </form>
        </div>

            <div class="col-md-3">
            </div>

    </div>
</div>
<?php include_once "./vistas/pie.php" ?>