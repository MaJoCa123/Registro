-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2018 a las 03:22:52
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accionar`
--

CREATE TABLE `accionar` (
  `id_accionar` int(11) NOT NULL,
  `accionar` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accionar`
--

INSERT INTO `accionar` (`id_accionar`, `accionar`) VALUES
(1, 'ACCIONAR DE MEJORA'),
(2, 'ACERCAMIENTO COMUNITARIO'),
(3, 'ACCIONAR EDUCATIVO'),
(4, 'ACCIONAR POLICIAL'),
(5, 'AGRADECIMIENTO ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agradecimiento`
--

CREATE TABLE `agradecimiento` (
  `Id_agradecimiento` int(11) NOT NULL,
  `agradecimiento` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agradecimiento`
--

INSERT INTO `agradecimiento` (`Id_agradecimiento`, `agradecimiento`) VALUES
(1, 'EFICACIA'),
(2, 'EFICIENCIA'),
(3, 'RAPIDEZ'),
(4, 'PROFESIONALISMO'),
(5, 'BUENA ATENCION'),
(6, 'COLABORACION Y APOYO A LA COMUNIDAD'),
(7, 'PATRULLAJE'),
(8, 'RESTITUCION DE ELEMENTOS SUSTRAIDOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunitario`
--

CREATE TABLE `comunitario` (
  `id_comunitario` int(11) NOT NULL,
  `comunitario` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comunitario`
--

INSERT INTO `comunitario` (`id_comunitario`, `comunitario`) VALUES
(1, 'DONACIONES'),
(2, 'TALLERES, CHARLAS Y JORNADAS'),
(3, 'EXHIBICIONES'),
(4, 'POLICIA INTINERANTE'),
(5, 'VISITAS VECINALES'),
(6, 'CALENDARIO CIP'),
(7, 'REUNIONES VECINALES'),
(8, 'VISITAS A LA INSTITUCION POLICIAL'),
(9, 'STAND PREVENTIVO'),
(10, 'DIFUSION DE LOS SERVICIOS'),
(11, 'ATENCION AL CIUDADANO '),
(12, 'PARTICIPACION EN DESFILE'),
(13, 'ACTIVIDADES INTEGRATIVAS CON PUEBLOS ORIGINARIOS ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE `dependencia` (
  `id_dependencia` int(11) NOT NULL,
  `dependencia` varchar(128) NOT NULL,
  `id_duur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`id_dependencia`, `dependencia`, `id_duur`) VALUES
(1, 'DIVISION PROTECCION AL MENOR Y LA FAMILIA-UR1', 1),
(2, 'DIVISION PERSONAL', 2),
(3, 'SECTOR-82', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `duur`
--

CREATE TABLE `duur` (
  `id_duur` int(11) NOT NULL,
  `duur` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `duur`
--

INSERT INTO `duur` (`id_duur`, `duur`) VALUES
(1, 'DUUR-1'),
(2, 'DUUR-2'),
(3, 'DUUR-3'),
(4, 'DUUR-4'),
(5, 'DUUR-5'),
(6, 'DUUR-6'),
(7, 'SUB-JEFATURA'),
(8, 'SECRETARIA'),
(9, 'INSTITUCIONALES '),
(10, 'SEGURIDAD'),
(11, 'INVESTIGACIONES'),
(12, 'DROGAS'),
(13, 'EDUCACION'),
(14, 'ESTRATEGIA'),
(15, 'RRHH'),
(16, 'ADMINISTRACION'),
(17, 'TECNOLOGIA'),
(18, 'JURIDICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educativo`
--

CREATE TABLE `educativo` (
  `id_educativo` int(11) NOT NULL,
  `educativo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `educativo`
--

INSERT INTO `educativo` (`id_educativo`, `educativo`) VALUES
(1, 'VIOLENCIA EN LA ESCUELA-BULLING'),
(2, 'VIOLENCIA FAMILIAR '),
(3, 'VIOLENCIA DE GENERO'),
(4, 'ROL PATERNO'),
(5, 'AUTOESTIMA'),
(6, 'EDUCACION VIAL'),
(7, 'ALIMENTACION SALUDABLE'),
(8, 'GROOMING-CIBER DELITO'),
(9, 'EDUCACION CICLOVIAL'),
(10, 'TRATA DE PERSONAS'),
(11, 'PREVENCION DE ADICCIONES'),
(12, 'MEDIO AMBIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE `indicadores` (
  `id_indicador` int(11) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `SICE` varchar(255) NOT NULL,
  `DGCC` int(11) NOT NULL,
  `id_duur` varchar(255) NOT NULL,
  `ZONA` varchar(64) NOT NULL,
  `id_sector` int(11) NOT NULL,
  `DEPENDENCIA` varchar(64) NOT NULL,
  `id_accionar` int(11) NOT NULL,
  `id_mejora` int(11) NOT NULL,
  `id_comunitario` int(11) NOT NULL,
  `id_educativo` int(11) NOT NULL,
  `id_policial` int(11) NOT NULL,
  `id_agradecimiento` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `DETALLE` varchar(255) NOT NULL,
  `CANT_BENEF` int(11) NOT NULL,
  `DEPEND_INTERV` varchar(64) NOT NULL,
  `FECHA_CARGA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `PERSONAL` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mejora`
--

CREATE TABLE `mejora` (
  `id_mejora` int(11) NOT NULL,
  `mejora` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mejora`
--

INSERT INTO `mejora` (`id_mejora`, `mejora`) VALUES
(1, 'ALBAÑILERIA'),
(2, 'PINTURERIA'),
(3, 'PLOMERIA'),
(4, 'JARDINERIA'),
(5, 'ELECTRICIDAD'),
(6, 'CAPACITACION POLICIAL'),
(7, 'FISCALIZACION Y CONTROL'),
(8, 'ADQUISICION DE ELEMENTOS'),
(9, 'PROVISION DE ELEMENTOS'),
(10, 'FUMIGACION//LIMPIEZA//HIGIENE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(60) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Revista` text NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`Id`, `Usuario`, `Password`, `Email`, `Revista`, `rol`) VALUES
(1, 'majo', '$2y$10$Os4666bdEdawZ.fMvjoi3OR1jwQU15g54eBHAG/3rgXOs1ZkFrK3O', 'castiellamaria@gmail.com', 'Sector N°1A', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policial`
--

CREATE TABLE `policial` (
  `id_policial` int(11) NOT NULL,
  `policial` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `policial`
--

INSERT INTO `policial` (`id_policial`, `policial`) VALUES
(1, 'OPERATIVOS DE PREVENCION'),
(2, 'DISPOSITIVO DE SEGURIDAD'),
(3, 'DEMORADOS EN CAUSA'),
(4, 'POLICIAS PARTEROS'),
(5, 'ELEMENTOS RECUPERADOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id_sector` int(11) NOT NULL,
  `sector` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id_sector`, `sector`) VALUES
(1, 'SECTOR-1A'),
(2, 'SECTOR-1B'),
(3, 'SECTOR-2'),
(4, 'SECTOR-3A'),
(5, 'SECTOR-3B'),
(6, 'SECTOR-4'),
(7, 'SECTOR-5'),
(8, 'SECTOR-6'),
(9, 'SECTOR-7A'),
(10, 'SECTOR-7B'),
(11, 'SECTOR-8\r\n'),
(12, 'SECTOR-71'),
(13, 'SECTOR-72'),
(14, 'SECTOR-81A'),
(15, 'SECTOR-81B'),
(16, 'SECTOR-82A'),
(17, 'SECTOR-82B'),
(18, 'SECTOR-83A\r\n'),
(19, 'SECTOR-84B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accionar`
--
ALTER TABLE `accionar`
  ADD PRIMARY KEY (`id_accionar`);

--
-- Indices de la tabla `agradecimiento`
--
ALTER TABLE `agradecimiento`
  ADD PRIMARY KEY (`Id_agradecimiento`);

--
-- Indices de la tabla `comunitario`
--
ALTER TABLE `comunitario`
  ADD PRIMARY KEY (`id_comunitario`);

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD PRIMARY KEY (`id_dependencia`),
  ADD KEY `id_duur` (`id_duur`);

--
-- Indices de la tabla `duur`
--
ALTER TABLE `duur`
  ADD PRIMARY KEY (`id_duur`);

--
-- Indices de la tabla `educativo`
--
ALTER TABLE `educativo`
  ADD PRIMARY KEY (`id_educativo`);

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id_indicador`),
  ADD KEY `id_duur` (`id_duur`),
  ADD KEY `id_sector` (`id_sector`),
  ADD KEY `id_accionar` (`id_accionar`),
  ADD KEY `id_mejora` (`id_mejora`),
  ADD KEY `id_comunitario` (`id_comunitario`),
  ADD KEY `id_educativo` (`id_educativo`),
  ADD KEY `id_policial` (`id_policial`),
  ADD KEY `id_agradecimiento` (`id_agradecimiento`);

--
-- Indices de la tabla `mejora`
--
ALTER TABLE `mejora`
  ADD PRIMARY KEY (`id_mejora`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `policial`
--
ALTER TABLE `policial`
  ADD PRIMARY KEY (`id_policial`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id_sector`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accionar`
--
ALTER TABLE `accionar`
  MODIFY `id_accionar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `agradecimiento`
--
ALTER TABLE `agradecimiento`
  MODIFY `Id_agradecimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `comunitario`
--
ALTER TABLE `comunitario`
  MODIFY `id_comunitario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  MODIFY `id_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `duur`
--
ALTER TABLE `duur`
  MODIFY `id_duur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `educativo`
--
ALTER TABLE `educativo`
  MODIFY `id_educativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id_indicador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mejora`
--
ALTER TABLE `mejora`
  MODIFY `id_mejora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `policial`
--
ALTER TABLE `policial`
  MODIFY `id_policial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
