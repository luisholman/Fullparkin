<?php include_once "./vistas/encabezado.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12" >
            <h1 class="text-center" >Registrar Clientes</h1>
            <form action="registrarclientes.php" method="POST">
                <div class="mb-3">
                <label for="nombre" class="form-label">nombre del cliente</label>
                <input type="text" class="typeahead_nombre_registro_clientes form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del cliente">
                </div>
                <div class="mb-3">
                <label for="identificacion" class="form-label">Identificacion del cliente</label>
                <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Ingrese identificacion del cliente">
                </div>
                <div class="mb-3">
                <label for="telefono" class="form-label">Telefono del cliente</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el telefono del cliente">
                </div>
                <div class="mb-3">
                <label for="direccion" class="form-label">Direccion del cliente</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese direccion del cliente">
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email del cliente</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese el email del cliente">
                </div>
                <div class="mb-3">
                <label for="placavehiculo" class="form-label">Placa vehiculo</label>
                <input type="text" class="form-control" name="placavehiculo" id="placavehiculo" placeholder="Ingrese la placa del vehiculo del cliente">
                </div>
                <div class="mb-3" >
                <button class="btn btn-primary account-btn">Guardar</button>
                <a class="btn btn-secondary my-2" href="listarclientes.php">Ir a Listado de Clientes</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once "./vistas/pie.php" ?>