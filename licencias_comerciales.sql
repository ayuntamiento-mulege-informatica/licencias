-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-02-2022 a las 19:54:39
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `licencias_comerciales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administraciones`
--

CREATE TABLE `administraciones` (
  `id` int(11) NOT NULL,
  `admin` tinytext NOT NULL,
  `presidente_municipal` tinytext NOT NULL,
  `sindico_municipal` tinytext NOT NULL,
  `secretario_general` tinytext NOT NULL,
  `director_catastro` tinytext NOT NULL,
  `tesorero_municipal` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administraciones`
--

INSERT INTO `administraciones` (`id`, `admin`, `presidente_municipal`, `sindico_municipal`, `secretario_general`, `director_catastro`, `tesorero_municipal`) VALUES
(1, 'XIV', 'PRESIDENTE MUNICIPAL', 'SÍNDICO MUNICIPAL', 'SECRETARIO GENERAL', 'DIRECTOR DE CATASTRO', 'TESORERO MUNICIPAL'),
(2, 'XV', 'PRESIDENTE MUNICIPAL', 'SÍNDICO MUNICIPAL', 'SECRETARIO GENERAL', 'DIRECTOR DE CATASTRO', 'TESORERO MUNICIPAL'),
(3, 'XVI', 'C. JOSÉ FELIPE PRADO BAUTISTA', 'LIC. ITALIA VALENZUELA GÓMEZ', 'C.P. RAMIRO GONZÁLEZ NAVARRO', 'ING. MIGUEL ÁNGEL ESCOBEDO COTA', 'C.P. ONÉSIMO MENDOZA RAMÍREZ'),
(4, 'XVII', 'LIC. EDITH AGUILAR VILLAVICENCIO', 'PROFR. JOSÉ LINO FONTES MURILLO', 'C. FRANCISCO JAVIER ARCE ARCE', 'LIC. MARCOS ENRIQUE ESPINOZA RAMÍREZ', 'DRA. ILIANA ENRIQUETA MONTAÑO MÉNDEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE `licencias` (
  `folio` int(11) NOT NULL,
  `admin` varchar(20) NOT NULL,
  `tipo_movimiento` varchar(20) NOT NULL,
  `tipo_giro` varchar(20) NOT NULL,
  `orden` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `clasificacion` varchar(20) NOT NULL,
  `estatus_general` varchar(20) NOT NULL,
  `estatus_vigencia` varchar(20) NOT NULL,
  `estatus_solicitudes` varchar(20) NOT NULL,
  `estatus_registro` varchar(20) NOT NULL,
  `propietario` varchar(20) NOT NULL,
  `impresa` varchar(40) NOT NULL,
  `domicilio` varchar(80) NOT NULL,
  `colonia` varchar(80) NOT NULL,
  `anuncios` varchar(4) NOT NULL,
  `empleados` varchar(4) NOT NULL,
  `giro_principal` varchar(20) NOT NULL,
  `registrado_por` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias_alcoholes`
--

CREATE TABLE `licencias_alcoholes` (
  `folio` int(11) NOT NULL,
  `admin` varchar(10) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `anyo` int(11) NOT NULL,
  `caracteristicas` varchar(20) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `propietario` varchar(60) NOT NULL,
  `nombre_comercial` varchar(128) NOT NULL,
  `actividad` varchar(128) NOT NULL,
  `domicilio` varchar(128) NOT NULL,
  `fecha_expedicion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `licencias_alcoholes`
--

INSERT INTO `licencias_alcoholes` (`folio`, `admin`, `tipo`, `anyo`, `caracteristicas`, `rfc`, `propietario`, `nombre_comercial`, `actividad`, `domicilio`, `fecha_expedicion`) VALUES
(1, 'XVII', 'A', 2022, 'NUEVA', 'SAVM850326CC5', 'MANUEL ANTONIO SANDOVAL VALENZUELA', 'LA PISTEADERA', 'VENTA DE CERVEZA, VINOS Y LICORES EN ENVASE CERRADO', 'MUNICIPIO LIBRE NO. 48, C. CUAUHTÉMOC, SANTA ROSALÍA, B.C.S., C.P. 23920', '2022-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` tinytext NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` tinytext NOT NULL,
  `area` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `area`) VALUES
(1, 'Informática 1', '$2y$15$WBaEZFcLeDjiLWOWf4Td3OY3vBAbmbHEpE.Cbgeyk/B59nGeNHn.2', 'Manuel Antonio Sandoval Valenzuela', 'Informática'),
(2, 'Recaudación 1', '$2y$15$fQa4js5VbJUR/3l3XeGM4eyBlFv2b1mvvZztdX1J3RP8gVlnTczk2', 'Un Usuario de Recaudación', 'Recaudación');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administraciones`
--
ALTER TABLE `administraciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin` (`admin`) USING HASH;

--
-- Indices de la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `licencias_alcoholes`
--
ALTER TABLE `licencias_alcoholes`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administraciones`
--
ALTER TABLE `administraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `licencias`
--
ALTER TABLE `licencias`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `licencias_alcoholes`
--
ALTER TABLE `licencias_alcoholes`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
