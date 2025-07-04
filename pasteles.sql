-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2025 a las 19:49:46
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pasteleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasteles`
--

CREATE TABLE IF NOT EXISTS `pasteles` (
  `Num_Pastel` int(4) NOT NULL,
  `NombreC` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `NomPastel` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Precio` int(6) NOT NULL,
  `CantidadP` int(100) NOT NULL,
  PRIMARY KEY (`Num_Pastel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pasteles`
--

INSERT INTO `pasteles` (`Num_Pastel`, `NombreC`, `NomPastel`, `Precio`, `CantidadP`) VALUES
(2, 'Lucia Martin', 'Pastel de Chocolate', 250, 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
