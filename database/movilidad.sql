-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2019 a las 04:51:31
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movilidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov`
--

CREATE TABLE `mov` (
  `id_mov` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `apellido` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mov`
--

INSERT INTO `mov` (`id_mov`, `nombre`, `apellido`, `tipo`) VALUES
(1, 11, 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisactions`
--

CREATE TABLE `sisactions` (
  `actId` int(11) NOT NULL,
  `actDescription` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `actDescriptionSpanish` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sisactions`
--

INSERT INTO `sisactions` (`actId`, `actDescription`, `actDescriptionSpanish`) VALUES
(1, 'Add', 'Agregar'),
(2, 'Edit', 'Editar'),
(3, 'Del', 'Eliminar'),
(4, 'View', 'Consultar'),
(5, 'Imprimir', 'Imprimir');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisgroups`
--

CREATE TABLE `sisgroups` (
  `grpId` int(11) NOT NULL,
  `grpName` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grpDash` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sisgroups`
--

INSERT INTO `sisgroups` (`grpId`, `grpName`, `grpDash`) VALUES
(1, 'Administrador', 'Empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisgroupsactions`
--

CREATE TABLE `sisgroupsactions` (
  `grpactId` int(11) NOT NULL,
  `grpId` int(11) NOT NULL,
  `menuAccId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sisgroupsactions`
--

INSERT INTO `sisgroupsactions` (`grpactId`, `grpId`, `menuAccId`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(11, 1, 8),
(12, 1, 9),
(13, 1, 10),
(14, 1, 11),
(15, 1, 12),
(16, 1, 22),
(17, 1, 23),
(18, 1, 24),
(19, 1, 25),
(20, 1, 26),
(21, 1, 27),
(22, 1, 28),
(23, 1, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sismenu`
--

CREATE TABLE `sismenu` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sismenu`
--

INSERT INTO `sismenu` (`id`, `parent`, `name`, `icon`, `slug`, `number`) VALUES
(1, NULL, '', '', '', 0),
(2, NULL, 'Seguridad', 'fa fa-lock', '', 2),
(3, 2, 'Usuarios', 'fa fa-fw fa-user', 'user', 2),
(4, 2, 'Grupos', 'fa fa-fw fa-users', 'group', 1),
(5, 2, 'Menu', 'fa fa-fw fa-bars', 'menu', 3),
(6, 2, 'Database', 'fa fa-fw fa-database', 'backup', 4),
(7, NULL, 'Movilidad', 'fa fa-fw fa-bus ', 'Movilidad', 5),
(8, NULL, 'Persona', '	 fa fa-fw fa-user', 'Expediente', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sismenuactions`
--

CREATE TABLE `sismenuactions` (
  `menuAccId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `actId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sismenuactions`
--

INSERT INTO `sismenuactions` (`menuAccId`, `menuId`, `actId`) VALUES
(5, 2, 1),
(6, 3, 1),
(7, 3, 2),
(8, 3, 3),
(9, 3, 4),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 4, 4),
(14, 5, 1),
(15, 5, 2),
(16, 5, 3),
(17, 5, 4),
(18, 6, 1),
(19, 6, 2),
(20, 6, 3),
(21, 6, 4),
(22, 7, 1),
(23, 7, 2),
(24, 7, 3),
(25, 7, 4),
(26, 8, 1),
(27, 8, 2),
(28, 8, 3),
(29, 8, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sisusers`
--

CREATE TABLE `sisusers` (
  `usrId` int(11) NOT NULL,
  `usrNick` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usrName` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usrLastName` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usrComision` int(11) NOT NULL,
  `usrPassword` varchar(5000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grpId` int(11) NOT NULL,
  `usrimag` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sisusers`
--

INSERT INTO `sisusers` (`usrId`, `usrNick`, `usrName`, `usrLastName`, `usrComision`, `usrPassword`, `grpId`, `usrimag`) VALUES
(0, 'superadmin', 'Super', 'Admin', 0, '21232f297a57a5a743894a0e4a801fc3', 0, ''),
(1, 'admin', 'Control', 'Operario', 0, '21232f297a57a5a743894a0e4a801fc3', 1, ''),
(3, 'soporte', 'Soporte', 'Trazalog', 0, '855fa866d6d3f72f6a50bc213244e36d', 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mov`
--
ALTER TABLE `mov`
  ADD PRIMARY KEY (`id_mov`);

--
-- Indices de la tabla `sisactions`
--
ALTER TABLE `sisactions`
  ADD PRIMARY KEY (`actId`);

--
-- Indices de la tabla `sisgroups`
--
ALTER TABLE `sisgroups`
  ADD PRIMARY KEY (`grpId`);

--
-- Indices de la tabla `sisgroupsactions`
--
ALTER TABLE `sisgroupsactions`
  ADD PRIMARY KEY (`grpactId`),
  ADD KEY `grpId` (`grpId`) USING BTREE,
  ADD KEY `menuAccId` (`menuAccId`) USING BTREE;

--
-- Indices de la tabla `sismenu`
--
ALTER TABLE `sismenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indices de la tabla `sismenuactions`
--
ALTER TABLE `sismenuactions`
  ADD PRIMARY KEY (`menuAccId`);

--
-- Indices de la tabla `sisusers`
--
ALTER TABLE `sisusers`
  ADD PRIMARY KEY (`usrId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mov`
--
ALTER TABLE `mov`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sisactions`
--
ALTER TABLE `sisactions`
  MODIFY `actId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sisgroups`
--
ALTER TABLE `sisgroups`
  MODIFY `grpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sisgroupsactions`
--
ALTER TABLE `sisgroupsactions`
  MODIFY `grpactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `sismenu`
--
ALTER TABLE `sismenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sismenuactions`
--
ALTER TABLE `sismenuactions`
  MODIFY `menuAccId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `sisusers`
--
ALTER TABLE `sisusers`
  MODIFY `usrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
