-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2024 a las 22:45:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libro_visitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_visitas`
--

CREATE TABLE `t_visitas` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `tarjeta` varchar(50) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `motivo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `t_visitas`
--

INSERT INTO `t_visitas` (`id`, `nombre`, `apellidos`, `departamento`, `tarjeta`, `fecha`, `motivo`) VALUES
(1, 'Gustavo', 'Cornejo', '609', '14658789', '2024-12-19 18:45:04', 'Electricista');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_visitas`
--
ALTER TABLE `t_visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_visitas`
--
ALTER TABLE `t_visitas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
