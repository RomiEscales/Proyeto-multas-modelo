-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2019 a las 17:12:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

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
-- Estructura de tabla para la tabla `actaconvenio`
--

CREATE TABLE `actaconvenio` (
  `id_acta` int(11) NOT NULL,
  `tipoacta` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechafirma` date NOT NULL,
  `lugarfirma` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `archivoacta` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tituloacta` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areainteres`
--

CREATE TABLE `areainteres` (
  `id_area` int(11) NOT NULL,
  `nomarea` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `tituloarticulo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cantpag` int(11) NOT NULL,
  `doi` int(11) NOT NULL,
  `prodmovilidad` tinyint(1) NOT NULL,
  `id_articulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridadfirmante`
--

CREATE TABLE `autoridadfirmante` (
  `id_autoridad` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cargoauto` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombrecarrera` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `codigo`, `nombrecarrera`) VALUES
(1, 1456, 'Lic. en Sistemas de Información'),
(2, 1457, 'Lic. en Ciencias de la Computación'),
(3, 1563, 'Abogacía'),
(4, 1236, 'Lic. en Administración'),
(5, 5631, 'Ingeniero en Minas'),
(6, 5634, 'Ingenierio Electronico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE `convenio` (
  `id_convenio` int(11) NOT NULL,
  `nomconvenio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipoconvenio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipocooperacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `duracion` int(11) NOT NULL,
  `vencimiento` date NOT NULL,
  `fechafirma` date NOT NULL,
  `lugarfirma` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `archivoconvenio` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoriainternacional`
--

CREATE TABLE `convocatoriainternacional` (
  `id_convocatoria` int(11) NOT NULL,
  `nomconvocatoria` int(11) NOT NULL,
  `fechaconvocatoria` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL,
  `lugarconvocatoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventocientifico`
--

CREATE TABLE `eventocientifico` (
  `id_evento` int(11) NOT NULL,
  `nomevento` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipoevento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechaevento` date NOT NULL,
  `lugarevento` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `nombrefacu` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `codigopostal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infomovilidad`
--

CREATE TABLE `infomovilidad` (
  `id_movilidad` int(11) NOT NULL,
  `objeto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fechadesde` date NOT NULL,
  `fechahasta` date NOT NULL,
  `resultado` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL,
  `nomins` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ciudadins` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacionpersonal`
--

CREATE TABLE `invitacionpersonal` (
  `id_invitacion` int(11) NOT NULL,
  `nominvitacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `personainvitacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cargopersona` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechainvitacion` date NOT NULL,
  `motivo` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Estructura de tabla para la tabla `otrapublicacion`
--

CREATE TABLE `otrapublicacion` (
  `id_otrapublicacion` int(11) NOT NULL,
  `nomotrapub` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipootrapub` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `editorial` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantpag` int(11) NOT NULL,
  `url` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fechapublicacion` date NOT NULL,
  `prodmovilidad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nompais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `continente` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrocinador`
--

CREATE TABLE `patrocinador` (
  `id_patrocinador` int(11) NOT NULL,
  `cuil` int(11) NOT NULL,
  `nompatro` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domiciliopatro` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaextranjero`
--

CREATE TABLE `personaextranjero` (
  `id_pextranjero` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ciudadorigen` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaunsj`
--

CREATE TABLE `personaunsj` (
  `id_punsj` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personaunsj`
--

INSERT INTO `personaunsj` (`id_punsj`, `dni`, `nombre`, `apellido`, `domicilio`, `email`, `tipo`) VALUES
(1, 12365987, 'victoria', 'sanchez', 'benavidez 123 oeste', 'vico147@gmail.com', 'docente'),
(2, 45698741, 'Maria', 'Castro', 'laprida 23 sur', 'maria@gmail.com', 'Investigador'),
(3, 45698741, 'Maria', 'Castro', 'laprida 23 sur', 'maria@gmail.com', 'Investigador'),
(4, 32654789, 'ana', 'marquez', 'laprida 12 sur', 'ana12@gmail.com', 'Investigador'),
(5, 5698741, 'Juana', 'Irazoque', 'Libeertador 12 sur', 'juana@gmail.com', 'Alumnos'),
(6, 23654789, 'Karina', 'Gomez', 'Calle 10', 'ka123@gmail.com', 'Investigador'),
(7, 5369874, 'Graciela ', 'Vaca', 'ullllaaa123', 'gra23@gmail.com', 'Docente'),
(8, 5369874, 'Antonia', 'Vaca', 'ullllaaa123', 'gra23@gmail.com', 'Docente'),
(9, 23654789, 'noelia', 'vicuña', 'juarez12 este', 'noelia@gmail.com', 'NoDocente'),
(10, 23654789, 'pablo', 'vicuña', 'juarez12 este', 'noelia@gmail.com', 'NoDocente'),
(11, 0, 'yesica', 'dsfdf', 'fdsfds', 'ffdsfdsf', 'Investigador'),
(12, 56478912, 'Carla ', 'Suarez', 'Juarez 56 oeste', 'carla14@gmail.com', 'Investigador'),
(13, 2654789, 'Nardo', 'Pelatay', '25 de mayo 23 oeste', 'nardo23@gmail.com', 'Alumnos'),
(14, 456, 'ny', 'jnj', 'nh', 'nh', 'NoDocente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programamovilidad`
--

CREATE TABLE `programamovilidad` (
  `id_programa` int(11) NOT NULL,
  `nomprograma` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `archivoprograma` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectomovilidad`
--

CREATE TABLE `proyectomovilidad` (
  `id_proyecto` int(11) NOT NULL,
  `nomproyecto` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tipofinanciamiento` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `modalidad` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `archivoproyecto` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `nombpub` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipopub` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechapub` date NOT NULL,
  `volumenpub` int(11) NOT NULL,
  `añopub` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `issn` int(11) NOT NULL,
  `urlpub` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `editorial` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientopatro`
--

CREATE TABLE `requerimientopatro` (
  `id_requisitos` int(11) NOT NULL,
  `detalle` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(23, 1, 29),
(24, 1, 30),
(25, 1, 31),
(26, 1, 32),
(27, 1, 33);

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
(8, NULL, 'Persona', '	 fa fa-fw fa-user', 'Persona', 6),
(9, NULL, 'expediente', '', 'Expediente', 7);

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
(29, 8, 4),
(30, 9, 1),
(31, 9, 2),
(32, 9, 3),
(33, 9, 4);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id_telefono` int(11) NOT NULL,
  `codigopais` int(11) NOT NULL,
  `codigoarea` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tituloacademico`
--

CREATE TABLE `tituloacademico` (
  `id_tituloacademico` int(11) NOT NULL,
  `nombretitulo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipotitulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `institutcionotorgante` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tituloacademico`
--

INSERT INTO `tituloacademico` (`id_tituloacademico`, `nombretitulo`, `tipotitulo`, `institutcionotorgante`) VALUES
(1, 'Lic. en Administración de Empresas', 'Grado', 'UNSJ'),
(2, 'Lic. en Sistemas de Información', 'Grado', 'UNSJ'),
(3, 'Abogacía', 'Grado', 'UNSJ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actaconvenio`
--
ALTER TABLE `actaconvenio`
  ADD PRIMARY KEY (`id_acta`);

--
-- Indices de la tabla `areainteres`
--
ALTER TABLE `areainteres`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`) USING BTREE;

--
-- Indices de la tabla `autoridadfirmante`
--
ALTER TABLE `autoridadfirmante`
  ADD PRIMARY KEY (`id_autoridad`) USING BTREE;

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`) USING BTREE;

--
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`id_convenio`) USING BTREE;

--
-- Indices de la tabla `convocatoriainternacional`
--
ALTER TABLE `convocatoriainternacional`
  ADD PRIMARY KEY (`id_convocatoria`);

--
-- Indices de la tabla `eventocientifico`
--
ALTER TABLE `eventocientifico`
  ADD PRIMARY KEY (`id_evento`) USING BTREE;

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`) USING BTREE;

--
-- Indices de la tabla `infomovilidad`
--
ALTER TABLE `infomovilidad`
  ADD PRIMARY KEY (`id_movilidad`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_institucion`) USING BTREE;

--
-- Indices de la tabla `invitacionpersonal`
--
ALTER TABLE `invitacionpersonal`
  ADD PRIMARY KEY (`id_invitacion`) USING BTREE;

--
-- Indices de la tabla `mov`
--
ALTER TABLE `mov`
  ADD PRIMARY KEY (`id_mov`);

--
-- Indices de la tabla `otrapublicacion`
--
ALTER TABLE `otrapublicacion`
  ADD PRIMARY KEY (`id_otrapublicacion`) USING BTREE;

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`) USING BTREE;

--
-- Indices de la tabla `patrocinador`
--
ALTER TABLE `patrocinador`
  ADD PRIMARY KEY (`id_patrocinador`) USING BTREE;

--
-- Indices de la tabla `personaextranjero`
--
ALTER TABLE `personaextranjero`
  ADD PRIMARY KEY (`id_pextranjero`) USING BTREE;

--
-- Indices de la tabla `personaunsj`
--
ALTER TABLE `personaunsj`
  ADD PRIMARY KEY (`id_punsj`) USING BTREE;

--
-- Indices de la tabla `programamovilidad`
--
ALTER TABLE `programamovilidad`
  ADD PRIMARY KEY (`id_programa`) USING BTREE;

--
-- Indices de la tabla `proyectomovilidad`
--
ALTER TABLE `proyectomovilidad`
  ADD PRIMARY KEY (`id_proyecto`) USING BTREE;

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`) USING BTREE;

--
-- Indices de la tabla `requerimientopatro`
--
ALTER TABLE `requerimientopatro`
  ADD PRIMARY KEY (`id_requisitos`);

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
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id_telefono`) USING BTREE;

--
-- Indices de la tabla `tituloacademico`
--
ALTER TABLE `tituloacademico`
  ADD PRIMARY KEY (`id_tituloacademico`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actaconvenio`
--
ALTER TABLE `actaconvenio`
  MODIFY `id_acta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `areainteres`
--
ALTER TABLE `areainteres`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `autoridadfirmante`
--
ALTER TABLE `autoridadfirmante`
  MODIFY `id_autoridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `convenio`
--
ALTER TABLE `convenio`
  MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `convocatoriainternacional`
--
ALTER TABLE `convocatoriainternacional`
  MODIFY `id_convocatoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventocientifico`
--
ALTER TABLE `eventocientifico`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infomovilidad`
--
ALTER TABLE `infomovilidad`
  MODIFY `id_movilidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_institucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invitacionpersonal`
--
ALTER TABLE `invitacionpersonal`
  MODIFY `id_invitacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mov`
--
ALTER TABLE `mov`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `otrapublicacion`
--
ALTER TABLE `otrapublicacion`
  MODIFY `id_otrapublicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `patrocinador`
--
ALTER TABLE `patrocinador`
  MODIFY `id_patrocinador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personaextranjero`
--
ALTER TABLE `personaextranjero`
  MODIFY `id_pextranjero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personaunsj`
--
ALTER TABLE `personaunsj`
  MODIFY `id_punsj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `programamovilidad`
--
ALTER TABLE `programamovilidad`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyectomovilidad`
--
ALTER TABLE `proyectomovilidad`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `requerimientopatro`
--
ALTER TABLE `requerimientopatro`
  MODIFY `id_requisitos` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `grpactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `sismenu`
--
ALTER TABLE `sismenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sismenuactions`
--
ALTER TABLE `sismenuactions`
  MODIFY `menuAccId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `sisusers`
--
ALTER TABLE `sisusers`
  MODIFY `usrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tituloacademico`
--
ALTER TABLE `tituloacademico`
  MODIFY `id_tituloacademico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
