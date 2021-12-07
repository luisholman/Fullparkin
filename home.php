

          
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
        
        <div class="form-container mt-2">
            <h3 class="text-center text-dark" >REGISTRO VEHICULOS</h3>
            <form class="w-50 mx-auto" action="registrar_Vehiculos.php" method="POST" >            
                <div class="form-group">
                    <label for="nombrecliente" class="form-label">Nombre del Cliente</label>
                    <input type="text" class="typeahead_nombre_registro_vehiculos form-control rounded-0 shadow-sm" name="nombrecliente" id="nombrecliente" placeholder="Ingrese nombre del cliente">
                </div>
                <div class="form-group">
                    <label for="identificacion" class="form-label">Identificacion</label>
                    <input type="text" class="form-control rounded-0 shadow-sm" name="identificacion" id="identificacion" placeholder="ingrese Identificacion cliente" required>
                </div>
                <div class="form-group">
                    <label for="tipovehiculo" class="form-label">Tipo de vehiculo</label>
                    <select id="tipovehiculo" class="form-control rounded-0 shadow-sm" name="tipovehiculo" name="Tipo de vehiculo" required>
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
                        <input type="text" class="typeahead_placa_registro_vehiculos form-control rounded-0 shadow-sm" name="placavehiculo" id="placavehiculo" placeholder="Ingrese placa del vehiculo" required>
                    </div>

                   <div class="row">
                   <div class="col-6">
                    <label for="horaingreso" class="form-label">Hora de Ingreso Vehiculo </label>
                    <input type="time" class="form-control rounded-0 shadow-sm " name="horaingreso" id="horaingreso" required >
                </div>

                <div class="col-6">
                    <label for="fechaingreso" class="form-label"> Fecha de Ingreso Vehiculo </label>
                    <input type="date" class="form-control rounded-0 shadow-sm " name="fechaingreso" id="fechaingreso" required>
                </div>

                <div class="col-6">
                    <label for="horasalida" class="form-label">Hora de Salida Vehiculo</label>
                    <input type="time" class="form-control rounded-0 shadow-sm " name="horasalida" id="horasalida" required>
                </div>
               
                <div class="col-6">
                    <label for="fechasalida" class="form-label">Fecha de Salida Vehiculo</label>
                    <input type="date"class="form-control rounded-0 mb-4 shadow-sm "  name="fechasalida" id="fechasalida" required>
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
            <h3 class="text-center text-dark" >LISTADO DE VEHICULOS INGRESADOS</h3>
            </div>
        <div class="col-12">
                <table class="table table-responsive" class="table table-bordered table-sm">
                <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-info">Nombre Cliente</th>
                    <th scope="col" class="text-info">Identificacion</th>
                    <th scope="col" class="text-info">Tipo de Vehiculo</th>
                    <th scope="col" class="text-info">Placa Vehiculo</th>
                    <th scope="col" class="text-info">Hora de Ingreso</th>
                    <th scope="col" class="text-info">Fecha de Ingreso</th>
                    <th scope="col"class="text-info">Hora de Salida</th>
                    <th scope="col"class="text-info">Fecha de Salida</th>
                    <th scope="col"class="text-info">Editar</th>
                    <th scope="col"class="text-info">Eliminar</th>
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
                        <a class="btn btn-outline-primary btn-sm" href="editar_Vehiculos.php?id=<?php echo $listadoIndividual["Idregistro_vehiculos"] ?>"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-sm"  href="eliminar_Vehiculos.php?id=<?php echo $listadoIndividual["Idregistro_vehiculos"] ?>"><i class="bi bi-trash"></i></a>
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




