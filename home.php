

          
<?php
require_once"./vistas/encabezado.php"
?>

<div class="content container-fluid">
    
    
        <div >
            <form class="w-50 mx-auto" id="entryForm">            
                <div class="form-group">
                    <img src="./imagen/fn1.png" alt="" width="100%" height="100%" > 
                </div>
            </form>
        </div>
        
        <div class="form-container mt-5">
            <h1 class="text-center" >Registro vehiculos</h1>
            <form class="w-50 mx-auto" action="registrar_Vehiculos.php" method="POST" >            
                <div class="form-group">
                    <label for="nombrecliente" class="form-label">Nombre del Cliente</label>
                    <input type="text" class="typeahead_nombre_registro_vehiculos form-control rounded-0 shadow-sm" name="nombrecliente" id="nombrecliente" placeholder="Ingrese nombre del cliente">
                </div>
                <div class="form-group">
                    <label for="identificacion" class="form-label">Identificacion</label>
                    <input type="text" class="form-control rounded-0 shadow-sm" name="identificacion" id="identificacion" placeholder="ingrese Identificacion cliente">
                </div>
                <div class="form-group">
                    <label for="tipovehiculo" class="form-label">Tipo de vehiculo</label>
                    <select id="tipovehiculo" class="form-control rounded-0 shadow-sm" name="tipovehiculo" name="Tipo de vehiculo">
                        <option value="carro">Carro</option>
                        <option value="buseta">Taxi</option>
                        <option value="buseta">Buseta</option>
                        <option value="buseta">Camion</option>
                        <option value="motocicleta">Motocicleta</option>
                        <option value="buseta">Mototaxi</option>
                        <option value="bicicleta">Bicicleta</option>
                        <option value="buseta">Monopatin</option>
                    </select> 
                </div>
                    <div class="form-group">
                        <label for="placavehiculo" class="form-label"> Placa </label>
                        <input type="text" class="typeahead_placa_registro_vehiculos form-control rounded-0 shadow-sm" name="placavehiculo" id="placavehiculo" placeholder="Ingrese placa del vehiculo">
                    </div>

                   <div class="row">
                   <div class="col-6">
                    <label for="horaingreso" class="form-label">Hora de Ingreso Vehiculo </label>
                    <input type="time" class="form-control rounded-0 shadow-sm " name="horaingreso" id="horaingreso"  >
                </div>

                <div class="col-6">
                    <label for="fechaingreso" class="form-label"> Fecha de Ingreso Vehiculo </label>
                    <input type="date" class="form-control rounded-0 shadow-sm " name="fechaingreso" id="fechaingreso">
                </div>

                <div class="col-6">
                    <label for="horasalida" class="form-label">Hora de Salida Vehiculo</label>
                    <input type="time" class="form-control rounded-0 shadow-sm " name="horasalida" id="horasalida">
                </div>
               
                <div class="col-6">
                    <label for="fechasalida" class="form-label">Fecha de Salida Vehiculo</label>
                    <input type="date"class="form-control rounded-0 mb-4 shadow-sm "  name="fechasalida" id="fechasalida" >
                </div>
                </div>
                <!--class="shadow-lg p-2 mb-4 bg-white rounded"-->
                </div>
            
                <button class="btn mx-auto d-block btn-primary ">Agregar Vehiculo</button>
            </form>
        </div>

    <?php
    $mysqli= include_once "./database/conexion.php";
    $resultadoQuery = $mysqli->query("SELECT Idregistro_vehiculos,
    Hora_ingreso,
    Fecha_ingreso,
    Tipo_vehiculo,
    Placa_vehiculo,
    Nombre_cliente,
    Identificacion,
    Hora_salida,
    Fecha_salida
    FROM registro_vehiculos");
    $listadoClientes= $resultadoQuery->fetch_all(MYSQLI_ASSOC);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <h1 class="text-center" >Listado de Vehiculos Ingresados</h1>
            </div>
        <div class="col-12">
                <table class="table table-responsive" class="table table-bordered table-sm">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Tipo de Vehiculo</th>
                    <th scope="col">Placa Vehiculo</th>
                    <th scope="col">Hora de Ingreso</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Hora de Salida</th>
                    <th scope="col">Fecha de Salida</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listadoClientes as $listadoIndividual) {?>
                <tr>
                    <td> <?php echo $listadoIndividual["Nombre_cliente"] ?></td>
                    <td> <?php echo $listadoIndividual["Identificacion"] ?></td>
                    <td> <?php echo $listadoIndividual["Tipo_vehiculo"] ?></td>
                    <td> <?php echo $listadoIndividual["Placa_vehiculo"] ?></td>
                    <td> <?php echo $listadoIndividual["Hora_ingreso"] ?></td>
                    <td> <?php echo $listadoIndividual["Fecha_ingreso"] ?></td>
                    <td> <?php echo $listadoIndividual["Hora_salida"] ?></td>
                    <td> <?php echo $listadoIndividual["Fecha_salida"] ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="editar_Vehiculos.php?id=<?php echo $listadoIndividual["Idregistro_vehiculos"] ?>">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-secondary btn-sm"  href="eliminar_Vehiculos.php?id=<?php echo $listadoIndividual["Idregistro_vehiculos"] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once"./vistas/pie.php"
?> 




