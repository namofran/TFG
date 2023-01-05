-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2022 a las 12:22:15
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
(1, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', 'javea', 'Esto es un comentario de prueba, todo esta OK.', '2022-12-09'),
(2, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', 'benidorm', 'Esto es un comentario de prueba, todo esta OK.', '2022-12-09'),
(3, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', 'benisa', 'Segundo comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(4, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', 'almazora', 'Segundo comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(5, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', 'calpe', 'TERCERO comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(6, 'Francisco Navarro Molina ', 'francisconavmol@gmail.com', 'cabanes', 'TERCERO comentario de prueba, todo esta OK.\r\n', '2022-12-09'),
(17, 'Francisco ', 'frannamol@gmail.com', 'alboraya', 'esto es una prueba', '2022-12-14'),
(20, 'Francisco Prueba', 'prueba@gmail.com', 'altea', 'Esto es altea prueba 1', '2022-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playas`
--

CREATE TABLE `playas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `playas`
--

INSERT INTO `playas` (`id`, `name`, `location`, `channel_id`, `value`) VALUES
(1, 'sueca', 'valencia', 1831954, 0),
(2, 'poblets', 'alicante', 1831954, 0),
(3, 'denia', 'alicante', 1831954, 0),
(4, 'javea', 'alicante', 1831954, 1),
(5, 'benitachell', 'alicante', 1831954, 1),
(6, 'teulada', 'alicante', 1831954, 2),
(7, 'benisa', 'alicante', 1831954, 0),
(8, 'calpe', 'alicante', 1831954, 1),
(9, 'altea', 'alicante', 1831954, 5),
(11, 'benidorm', 'alicante', 1831954, 1),
(12, 'finestrat', 'alicante', 1831954, 0),
(13, 'villajoyosa', 'alicante', 1831954, 1),
(14, 'campello', 'alicante', 1831954, 3),
(15, 'alicante', 'alicante', 1831954, 4),
(16, 'tabarca', 'alicante', 1831954, 0),
(17, 'elche', 'alicante', 1831954, 0),
(21, 'torrevieja', 'alicante', 1831954, 1),
(22, 'orihuela', 'alicante', 1831954, 1),
(24, 'vinaroz', 'castellon', 1831954, 0),
(25, 'benicarlo', 'castellon', 1831954, 0),
(26, 'peñiscola', 'castellon', 1831954, 0),
(28, 'torreblanca', 'castellon', 1831954, 0),
(29, 'cabanes', 'castellon', 1831954, 0),
(30, 'oropesa', 'castellon', 1831954, 0),
(31, 'benicasim', 'castellon', 1831954, 0),
(32, 'castellon', 'castellon', 1831954, 0),
(33, 'almazora', 'castellon', 1831954, 0),
(34, 'burriana', 'castellon', 1831954, 0),
(35, 'nules', 'castellon', 1831954, 0),
(36, 'moncofar', 'castellon', 1831954, 0),
(37, 'chilches', 'castellon', 1831954, 0),
(38, 'llosa', 'castellon', 1831954, 0),
(39, 'almenara', 'castellon', 1831954, 0),
(40, 'canet', 'valencia', 1831954, 0),
(41, 'sagunto', 'valencia', 1831954, 0),
(43, 'puzol', 'valencia', 1831954, 0),
(44, 'masalfasar', 'valencia', 1831954, 0),
(45, 'alboraya', 'valencia', 1831954, 0),
(46, 'malbarrosa', 'valencia', 1831954, 0),
(47, 'cullera', 'valencia', 1831954, 0),
(48, 'tabernes', 'valencia', 1831954, 0),
(49, 'oliva', 'valencia', 1831954, 0),
(50, 'gandia', 'valencia', 1831954, 0),
(51, 'daimuz', 'valencia', 1831954, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `playas`
--
ALTER TABLE `playas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(112) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `playas`
--
ALTER TABLE `playas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
