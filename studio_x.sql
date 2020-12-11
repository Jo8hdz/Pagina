-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2020 a las 01:35:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `studio_x`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `idPhoto` int(11) NOT NULL,
  `ruta` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`idPhoto`, `ruta`, `nombre`, `deleted_at`) VALUES
(1, 'aqui va la ruta', 'meeting', NULL),
(2, 'aqui va la ruta', 'desk', NULL),
(3, 'aqui va la ruta', 'minibus', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `email` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`email`, `nombre`, `telefono`, `deleted_at`) VALUES
('gustavo@gmail.com', 'Gustavo', '1234567890', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `idCotizacion` int(11) NOT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `evento` varchar(30) DEFAULT NULL,
  `horario` enum('Mañana','Tarde','Noche') DEFAULT NULL,
  `fechaE` date DEFAULT NULL,
  `fechaA` date DEFAULT NULL,
  `detalles` varchar(250) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idCotizacion`, `ubicacion`, `evento`, `horario`, `fechaE`, `fechaA`, `detalles`, `email`, `deleted_at`) VALUES
(1, 'pachuca hidalgo', 'boda', 'Noche', '2021-01-29', '2021-01-29', 'fdfsdfsdfsdfsdfsdfsdfsdfdsfsdfsdfsdfdsfsdfdsfdsfdfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsf', 'gustavo@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idPhoto` int(11) NOT NULL,
  `ruta` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idPhoto`, `ruta`, `nombre`, `deleted_at`) VALUES
(1, 'aqui va la ruta', 'meeting', NULL),
(2, 'aqui va la ruta', 'desk', NULL),
(3, 'aqui va la ruta', 'loft', NULL),
(4, 'aqui va la ruta', 'meeting', NULL),
(5, 'aqui va la ruta', 'desk', NULL),
(6, 'aqui va la ruta', 'loft', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `idInformacion` int(11) NOT NULL,
  `emailStudio` varchar(45) DEFAULT NULL,
  `telefonoStudio` varchar(25) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `editor` varchar(45) DEFAULT NULL,
  `fotografo` varchar(45) DEFAULT NULL,
  `diseniador` varchar(45) DEFAULT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`idInformacion`, `emailStudio`, `telefonoStudio`, `whatsapp`, `direccion`, `editor`, `fotografo`, `diseniador`, `deleted_at`) VALUES
(1, 'studiox@gmail.com', '(55) 5019 – 3723', '(55) 1212-5431 ', 'Carretera, Carretera Ciudad Sahagún-Pachuca Km. 20, Ex-Hacienda de Santa Bárbara, 43830 Hgo.', 'Jorge Hernandez', 'Alexa Leon', 'Valeria Volcano', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(45) NOT NULL,
  `nombreU` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreU`, `password`, `admin`, `deleted_at`) VALUES
('', 'Usuario 2', '12345678', NULL, NULL),
('admin', 'admin', 'admin', 1, NULL),
('admin2', 'admin2', '12345678', 0, NULL),
('admin3', 'admin3', '12345678', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioA`
--

CREATE TABLE `usuarioA` (
  `idUsuarioA` int(11) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`idPhoto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`idCotizacion`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idPhoto`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`idInformacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuarioA`
--
ALTER TABLE `usuarioA`
  ADD PRIMARY KEY (`idUsuarioA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `idPhoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `idCotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idPhoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `idInformacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cliente` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
