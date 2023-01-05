-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 18:32:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smartbeach_cv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feedback`
--

CREATE TABLE `feedback` (
  `id` int(112) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `beach` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `beach`, `body`, `date`) VALUES
(1, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', '', 'Esto es un comentario de prueba, todo esta OK.', '2022-12-09'),
(2, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', '', 'Esto es un comentario de prueba, todo esta OK.', '2022-12-09'),
(3, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', '', 'Segundo comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(4, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', '', 'Segundo comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(5, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', '', 'TERCERO comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(6, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', '', 'TERCERO comentario de prueba, todo esta OK.\r\n', '2022-12-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(112) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
