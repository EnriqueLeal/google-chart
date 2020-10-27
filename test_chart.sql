-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2016 a las 21:26:14
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_chart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE IF NOT EXISTS `egresos` (
  `id` int(11) NOT NULL,
  `monto` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id`, `monto`, `fecha`) VALUES
(1, 10, '2015-01-02'),
(2, 97, '2015-02-02'),
(3, 43, '2015-03-02'),
(4, 37, '2015-04-02'),
(5, 17, '2015-05-02'),
(6, 29, '2015-06-02'),
(7, 50, '2015-07-02'),
(8, 96, '2015-08-02'),
(9, 60, '2015-09-02'),
(10, 73, '2015-10-02'),
(11, 23, '2015-11-02'),
(12, 43, '2015-12-02'),
(13, 34, '2016-01-02'),
(14, 42, '2016-02-02'),
(15, 17, '2016-03-02'),
(16, 34, '2016-04-02'),
(17, 61, '2016-05-02'),
(18, 71, '2016-06-02'),
(19, 39, '2016-07-02'),
(20, 89, '2016-08-02'),
(21, 36, '2016-09-02'),
(22, 66, '2016-10-02'),
(23, 54, '2016-11-02'),
(24, 91, '2016-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `id` int(11) NOT NULL,
  `monto` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `monto`, `fecha`) VALUES
(1, 29, '2016-01-02'),
(2, 36, '2016-02-02'),
(3, 53, '2016-03-02'),
(4, 30, '2016-04-02'),
(5, 24, '2016-05-02'),
(6, 74, '2016-06-02'),
(7, 30, '2016-07-02'),
(8, 92, '2016-08-02'),
(9, 99, '2016-09-02'),
(10, 50, '2016-10-02'),
(11, 84, '2016-11-02'),
(12, 27, '2016-12-02'),
(13, 82, '2015-01-02'),
(14, 69, '2015-02-02'),
(15, 70, '2015-03-02'),
(16, 60, '2015-04-02'),
(17, 92, '2015-05-02'),
(18, 78, '2015-06-02'),
(19, 48, '2015-07-02'),
(20, 62, '2015-08-02'),
(21, 98, '2015-09-02'),
(22, 43, '2015-10-02'),
(23, 90, '2015-11-02'),
(24, 25, '2015-12-02'),
(25, 29, '2016-01-02'),
(26, 25, '2016-02-02'),
(27, 27, '2016-03-02'),
(28, 20, '2016-04-02'),
(29, 29, '2016-05-02'),
(30, 26, '2016-06-02'),
(31, 28, '2016-07-02'),
(32, 25, '2016-08-02'),
(33, 29, '2016-09-02'),
(34, 26, '2016-10-02'),
(35, 29, '2016-11-02'),
(36, 21, '2016-12-02'),
(37, 22, '2015-01-02'),
(38, 20, '2015-02-02'),
(39, 20, '2015-03-02'),
(40, 22, '2015-04-02'),
(41, 28, '2015-05-02'),
(42, 29, '2015-06-02'),
(43, 29, '2015-07-02'),
(44, 24, '2015-08-02'),
(45, 28, '2015-09-02'),
(46, 25, '2015-10-02'),
(47, 25, '2015-11-02'),
(48, 20, '2015-12-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
