-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2022 a las 14:49:31
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizza ilerna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `opcion` varchar(30) NOT NULL,
  `precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre`, `opcion`, `precio`) VALUES
(1, 'patatas bravas', 'Aperitivos', '7.00'),
(2, 'chips de boniato', 'Aperitivos', '10.50'),
(3, 'chips sabor jamón', 'Aperitivos', '8.00'),
(4, 'chips sabor queso', 'Aperitivos', '8.00'),
(5, 'chips sabor gamba', 'Aperitivos', '9.50'),
(6, 'aceitunas rellenas', 'Aperitivos', '4.00'),
(7, 'aceitunas rajadas', 'Aperitivos', '4.00'),
(8, 'gambas saladas', 'Aperitivos', '12.00'),
(9, 'tapa de jamón de cebo', 'Aperitivos', '12.00'),
(10, 'tapa de quesos', 'Aperitivos', '15.00'),
(11, 'menú familiar para 3', 'Familiares', '35.00'),
(12, 'menú familiar para 4', 'Familiares', '47.00'),
(13, 'menú familiar para 5', 'Familiares', '59.00'),
(14, 'menú familiar para 6', 'Familiares', '70.00'),
(15, 'arroz con bogabante', 'Para los más gourmets', '28.00'),
(16, 'mariscada fría', 'Para los más gourmets ', '38.00'),
(17, 'mariscada mixta', 'Para los más gourmets ', '47.00'),
(18, 'mariscada caliente', 'Para los más gourmets ', '38.00'),
(19, 'paella de marisco', 'Especialidades de la casa', '24.00'),
(20, 'caracoles a la llauna', 'Especialidades de la casa', '11.00'),
(21, 'caracoles con garbanzos', 'Especialidades de la casa', '12.00'),
(22, 'espetos', 'Especialidades de la casa', '9.00'),
(23, 'sardinas a la brasa', 'Especialidades de la casa', '13.00'),
(24, 'gazpacho andaluz', 'Las clásicas', '9.00'),
(25, 'parrillada de carne', 'Las clásicas', '21.00'),
(26, 'parrillada de pescado', 'Las clásicas', '23.00'),
(27, 'ensalada de la casa', 'Las clásicas', '10.00'),
(28, 'enchilada', 'Las más picantes\r\n', '11.00'),
(29, 'burrito mexicano', 'Las más picantes\r\n', '9.50'),
(30, 'pimientos de padrón', 'Las más picantes\r\n', '8.50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
