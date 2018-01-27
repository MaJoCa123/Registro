-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2018 a las 05:28:54
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
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE `indicadores` (
  `Id` int(11) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `SICE` varchar(255) NOT NULL,
  `DGCC` int(11) NOT NULL,
  `DUURR` varchar(32) NOT NULL,
  `ZONA` varchar(32) NOT NULL,
  `SECTOR` varchar(32) NOT NULL,
  `DEPENDENCIA` varchar(60) NOT NULL,
  `ACCIONAR` varchar(32) NOT NULL,
  `FECHA` date NOT NULL,
  `DETALLE` varchar(120) NOT NULL,
  `CANT_BENEF` varchar(32) NOT NULL,
  `DEPEND_INTERV` varchar(60) NOT NULL,
  `FECHA_CARGA` date NOT NULL,
  `PERSONAL` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`Id`, `NUMERO`, `SICE`, `DGCC`, `DUURR`, `ZONA`, `SECTOR`, `DEPENDENCIA`, `ACCIONAR`, `FECHA`, `DETALLE`, `CANT_BENEF`, `DEPEND_INTERV`, `FECHA_CARGA`, `PERSONAL`) VALUES
(1, 2, '44-5574/2017-0', 345, 'INVESTIGACIONES', 'sur', 'SECTOR-7B', 'COMISARIA NÂ° 24 BÂ° DOCENTE-UR2-', 'ACCIONAR COMUNITARIO', '2018-01-10', 'uchscgscgscscbsbsccs', '-', 'COMISARIA 8VA', '2018-01-26', 'cabo castiella maria'),
(2, 22332, '3445646665', 345, 'TECNOLOGIA', 'sur', 'SECTOR-6', '3', 'ACCIONAR EDUCATIVO', '2018-01-17', 'vkfdvnfklvnkdnvklnvklnk', '2', 'comisaria lola mora', '2018-01-26', 'sgto ayte ana'),
(3, 3, '44-5574/2017-0', 345, 'INVESTIGACIONES', 'norte', 'SECTOR-80', 'DIVISION PROTECCION AL MENOR Y LA FAMILIA-UR1', 'ACCIONAR COMUNITARIO', '2018-01-17', 'dhefuhuifhjdjvbjkbdjvk', '12', '', '0000-00-00', '');

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
