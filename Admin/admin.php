<?php include_once "encabezado.php" ?>

<div class="container">
<div class="row">
    <div class="col-md-4">
        <h1>Administracion</h1>
        <form action="registrar.php" method="POST">
            <div class="mb-3">
            <label for="administrador" class="form-label">Administrador</label>
            <input type="text" class="form-control" name="administrador" id="administrador" placeholder="administrador">
            </div>
            <div class="mb-3">
            <label for="empleado" class="form-label">Empleado</label>
            <input type="text" class="form-control" name="empleado" id="empleado" placeholder="Empleado">
            </div>
            <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" name="contraseña" id="contraseña" placeholder="contraseña">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>

            <div class="mb-3">
            <button class="btn btn-warning">Guardar</button>
            </div>
        </form>
    </div>
    </div>
</div>
<?php include_once "pie.php" ?>