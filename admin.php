<?php include_once "./vistas/encabezado.php" ?>

<div class="container">
<div class="row">
    <div class="col-12">
        <h1 class="text-center" >Administracion</h1>
        <form action="registrar_Admin.php" method="POST">
            <div class="mb-3">
            <label for="administrador" class="form-label">Administrador</label>
            <input type="text" class="form-control" name="administrador" id="administrador" placeholder="administrador">
            </div>
            <div class="mb-3">
            <label for="empleado" class="form-label">Empleado</label>
            <input type="text" class="form-control" name="empleado" id="empleado" placeholder="Empleado">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="contraseña">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>

            <div class="mb-3">
            <button class="btn btn-primary account-btn">Guardar</button>
            <a class="btn btn-secondary" href="listar_Admin.php">Ir a Listado Acceso </a>
            </div>
        </form>
    </div>
    </div>
</div>
<?php include_once "./vistas/pie.php" ?>