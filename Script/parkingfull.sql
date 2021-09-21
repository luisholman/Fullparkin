-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 22:53:00
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

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
(1, '00:00:00', '0000-00-00', 'carro', 'gret454', 'lui', 544564565, '00:00:00', '0000-00-00'),
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
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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



