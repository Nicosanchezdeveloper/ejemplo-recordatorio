-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 22:21:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recordatorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recordatorios`
--

CREATE TABLE `recordatorios` (
  `id_recordatorio` int(11) NOT NULL,
  `titulo_recordatorio` varchar(45) NOT NULL,
  `descripcion_recordatorio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recordatorios`
--

INSERT INTO `recordatorios` (`id_recordatorio`, `titulo_recordatorio`, `descripcion_recordatorio`) VALUES
(1, 'xD', 'xD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recordatorios`
--
ALTER TABLE `recordatorios`
  ADD PRIMARY KEY (`id_recordatorio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recordatorios`
--
ALTER TABLE `recordatorios`
  MODIFY `id_recordatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
