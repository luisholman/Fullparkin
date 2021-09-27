-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 21:54:03
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parkingfull`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adicionales`
--

CREATE TABLE `adicionales` (
  `idAdicionales` int(11) NOT NULL,
  `Servicio` varchar(45) NOT NULL,
  `Placa` varchar(45) NOT NULL,
  `Codigo` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Valor` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `adicionales`
--

INSERT INTO `adicionales` (`idAdicionales`, `Servicio`, `Placa`, `Codigo`, `Descripcion`, `Valor`) VALUES
(7, '', '', '', '', 0),
(9, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(2) NOT NULL,
  `Administrador` varchar(45) NOT NULL,
  `Empleado` varchar(45) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `Administrador`, `Empleado`, `Password`, `Email`) VALUES
(1, 'Luis Holman Oicata Jaime', '', '12345', 'luis@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(200) NOT NULL,
  `fecha_apertura` datetime(6) NOT NULL,
  `fecha_cierre` datetime(6) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `monto` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id_caja`, `fecha_apertura`, `fecha_cierre`, `estado`, `monto`) VALUES
(1, '2021-05-30 00:00:00.000000', '2021-06-02 00:00:00.000000', 'activo', 50000),
(2, '2021-02-20 00:00:00.000000', '2021-03-05 00:00:00.000000', 'cierre', 25000),
(3, '2021-01-02 00:00:00.000000', '2021-01-05 00:00:00.000000', 'apertura', 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_cliente` int(20) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Identificacion` int(20) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Placa_vehiculo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_cliente`, `Nombre`, `Identificacion`, `Telefono`, `Direccion`, `Email`, `Placa_vehiculo`) VALUES
(23, 'juan jose obregon', 809954654, 66754544, 'av 39#89-80', 'jjo@hotmail.com', 'bgtr345'),
(25, 'fabian torrez', 1204947575, 75586934, 'calle 3#56-4', 'fav@hotmail.com', 'fgt657'),
(91, 'juancamilo', 0, 0, '', '', ''),
(118, '', 0, 0, '', '', ''),
(121, '', 0, 0, '', '', ''),
(122, '', 0, 0, '', '', ''),
(123, '', 0, 0, '', '', ''),
(124, '', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE `convenios` (
  `id_convenio` int(200) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `negocio` varchar(200) NOT NULL,
  `otros` varchar(200) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convenios`
--

INSERT INTO `convenios` (`id_convenio`, `empresa`, `negocio`, `otros`, `observaciones`) VALUES
(1, 'Coltanques', 'N/A', 'N/A', 'pago mensualidad'),
(2, 'Servientrega', 'N/A', 'N/A', 'pago mensualidad'),
(3, 'N/A', 'Restaurante la gallina dorada', 'N/A', 'después de la segunda hora. Se genera cobro según tarifa estipulada'),
(4, 'N/A', 'N/A', 'Colegio filadeldia', 'después de la segunda hora se genera costo del 80%. Solo para funcionarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios`
--

CREATE TABLE `espacios` (
  `id_espacios` int(200) NOT NULL,
  `numero` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `codigo_entrada` varchar(200) NOT NULL,
  `placa` varchar(200) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `hora_ingreso` varchar(200) NOT NULL,
  `salida` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `espacios`
--

INSERT INTO `espacios` (`id_espacios`, `numero`, `estado`, `codigo_entrada`, `placa`, `fecha_ingreso`, `hora_ingreso`, `salida`) VALUES
(1, '1', 'vacio', '1243', 'kpn-50d', '0000-00-00', '06:00', 'pendiente'),
(2, '2', 'vacio', '1237', 'agt-502', '0000-00-00', '10:00', 'pendiente'),
(3, '3', 'si', '1258', 'sho-523', '0000-00-00', '07:00', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `Placa` varchar(45) NOT NULL,
  `Fecha_de_Ingreso` date NOT NULL,
  `Hora_Ingreso` time NOT NULL,
  `Fecha_de_salida` date NOT NULL,
  `Hora_de_salida` time NOT NULL,
  `Subtotal` int(6) NOT NULL,
  `Impuestos` int(6) NOT NULL,
  `Total` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`idFactura`, `Placa`, `Fecha_de_Ingreso`, `Hora_Ingreso`, `Fecha_de_salida`, `Hora_de_salida`, `Subtotal`, `Impuestos`, `Total`) VALUES
(3, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0, 0),
(4, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_adicionales`
--

CREATE TABLE `lista_adicionales` (
  `id_adicionales` int(200) NOT NULL,
  `servicio` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lista_adicionales`
--

INSERT INTO `lista_adicionales` (`id_adicionales`, `servicio`, `horario`, `observaciones`) VALUES
(1, 'Serviteca', '09:00/17:00', 'sabados de 09:00 a 13:00, domingos y festivos no se atiende al publico'),
(2, 'Taller', '07:00/17:00', 'Sabados de 07:00 a 14:00, domingos y festivos no se atiende al publico'),
(4, 'Montallantas', '24 horas', 'Atención al publico todos los días, sin restricción horaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_tarifas`
--

CREATE TABLE `lista_tarifas` (
  `id_lista` int(200) NOT NULL,
  `vehiculo` varchar(200) NOT NULL,
  `minuto` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `noche` varchar(200) NOT NULL,
  `semana` varchar(200) NOT NULL,
  `quincenal` varchar(200) NOT NULL,
  `mensual` varchar(200) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lista_tarifas`
--

INSERT INTO `lista_tarifas` (`id_lista`, `vehiculo`, `minuto`, `hora`, `dia`, `noche`, `semana`, `quincenal`, `mensual`, `observaciones`) VALUES
(1, 'Bicicleta', '$20', '$1000', '$5000', '$5000', '$12000', '$15000', '$30000', 'toda bicicleta entra su candado para asegurarla'),
(2, 'moto', '$45', '$1500', '$6000', '$8000', '$20000', '$30000', '$60000', 'toda moto ingresa y sale mostrando tarjeta de propiedad del vehiculo'),
(3, 'carro', '$65', '$2000', '$15000', '$180000', '$100000', '$130000', '$200000', 'Solo ingresa el conductor del vehiculo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidades`
--

CREATE TABLE `mensualidades` (
  `id_mensualidades` int(200) NOT NULL,
  `placa` varchar(200) NOT NULL,
  `vehiculo` varchar(200) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `valor` int(200) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensualidades`
--

INSERT INTO `mensualidades` (`id_mensualidades`, `placa`, `vehiculo`, `fecha_ingreso`, `fecha_salida`, `valor`, `estado`) VALUES
(1, 'kpn-50d', 'moto', '2021-05-01', '2021-05-30', 50000, 'pago'),
(3, 'slm-433', 'camion', '2021-02-01', '2021-02-28', 180000, 'sin pago'),
(4, 'snm-333', 'tractomula', '2021-03-15', '2021-04-15', 280000, 'por vencer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_vehiculos`
--

CREATE TABLE `registro_vehiculos` (
  `Idregistro_vehiculos` int(11) NOT NULL,
  `Hora_ingreso` time NOT NULL,
  `Fecha_ingreso` date NOT NULL,
  `Tipo_vehiculo` varchar(45) NOT NULL,
  `Placa_vehiculo` varchar(15) NOT NULL,
  `Nombre_cliente` varchar(45) NOT NULL,
  `Identificacion` int(20) NOT NULL,
  `Hora_salida` time NOT NULL,
  `Fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_vehiculos`
--

INSERT INTO `registro_vehiculos` (`Idregistro_vehiculos`, `Hora_ingreso`, `Fecha_ingreso`, `Tipo_vehiculo`, `Placa_vehiculo`, `Nombre_cliente`, `Identificacion`, `Hora_salida`, `Fecha_salida`) VALUES
(3, '00:00:13', '0000-00-00', 'motocicleta', 'DFG456', 'ERW', 2345456, '00:00:16', '0000-00-00'),
(21, '00:00:00', '0000-00-00', 'buseta', '', '', 0, '00:00:00', '0000-00-00'),
(31, '00:00:00', '0000-00-00', 'carro', '', '', 0, '00:00:00', '0000-00-00'),
(32, '00:00:00', '0000-00-00', 'carro', '', '', 0, '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `idTarifas` int(8) NOT NULL,
  `Tarifa_minuto` int(8) NOT NULL,
  `Tarifa_hora` int(8) NOT NULL,
  `Tarifa_dia` int(8) NOT NULL,
  `Tarifa_noche` int(8) NOT NULL,
  `Tarifa_semana` int(8) NOT NULL,
  `Tarifa_mes` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`idTarifas`, `Tarifa_minuto`, `Tarifa_hora`, `Tarifa_dia`, `Tarifa_noche`, `Tarifa_semana`, `Tarifa_mes`) VALUES
(1, 100, 6000, 12000, 8000, 30000, 120000),
(8, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD PRIMARY KEY (`idAdicionales`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id_convenio`);

--
-- Indices de la tabla `espacios`
--
ALTER TABLE `espacios`
  ADD PRIMARY KEY (`id_espacios`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `lista_adicionales`
--
ALTER TABLE `lista_adicionales`
  ADD PRIMARY KEY (`id_adicionales`);

--
-- Indices de la tabla `lista_tarifas`
--
ALTER TABLE `lista_tarifas`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `mensualidades`
--
ALTER TABLE `mensualidades`
  ADD PRIMARY KEY (`id_mensualidades`);

--
-- Indices de la tabla `registro_vehiculos`
--
ALTER TABLE `registro_vehiculos`
  ADD PRIMARY KEY (`Idregistro_vehiculos`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`idTarifas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  MODIFY `idAdicionales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `convenios`
--
ALTER TABLE `convenios`
  MODIFY `id_convenio` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `espacios`
--
ALTER TABLE `espacios`
  MODIFY `id_espacios` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lista_adicionales`
--
ALTER TABLE `lista_adicionales`
  MODIFY `id_adicionales` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lista_tarifas`
--
ALTER TABLE `lista_tarifas`
  MODIFY `id_lista` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensualidades`
--
ALTER TABLE `mensualidades`
  MODIFY `id_mensualidades` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registro_vehiculos`
--
ALTER TABLE `registro_vehiculos`
  MODIFY `Idregistro_vehiculos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `idTarifas` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
