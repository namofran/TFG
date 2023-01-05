-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 18:32:31
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
(2, 'els poblets', 'alicante', 1831954, 0),
(3, 'denia', 'alicante', 1831954, 0),
(4, 'javea', 'alicante', 1831954, 0),
(5, 'benitachell', 'alicante', 1831954, 0),
(6, 'teulada', 'alicante', 1831954, 0),
(7, 'benisa', 'alicante', 1831954, 0),
(8, 'calpe', 'alicante', 1831954, 0),
(9, 'altea', 'alicante', 1831954, 0),
(10, 'alfaz del pi', 'alicante', 1831954, 0),
(11, 'benidorm', 'alicante', 1831954, 0),
(12, 'finestrat', 'alicante', 1831954, 0),
(13, 'villajoyosa', 'alicante', 1831954, 0),
(14, 'campello', 'alicante', 1831954, 0),
(15, 'alicante', 'alicante', 1831954, 0),
(16, 'isla de tabarca', 'alicante', 1831954, 0),
(17, 'elche norte', 'alicante', 1831954, 0),
(18, 'santa pola', 'alicante', 1831954, 0),
(19, 'elche sur', 'alicante', 1831954, 0),
(20, 'guardamar del segura', 'alicante', 1831954, 0),
(21, 'torrevieja', 'alicante', 1831954, 0),
(22, 'orihuela', 'alicante', 1831954, 0),
(23, 'pilar de la horadada', 'alicante', 1831954, 0),
(24, 'vinaroz', 'castellon', 1831954, 0),
(25, 'benicarlo', 'castellon', 1831954, 0),
(26, 'peñiscola', 'castellon', 1831954, 0),
(27, 'alcala de chibert - alcoceber', 'castellon', 1831954, 0),
(28, 'torreblanca', 'castellon', 1831954, 0),
(29, 'cabanes', 'castellon', 1831954, 0),
(30, 'oropesa del mar', 'castellon', 1831954, 0),
(31, 'benicasim', 'castellon', 1831954, 0),
(32, 'castellon de la plana', 'castellon', 1831954, 0),
(33, 'almazora', 'castellon', 1831954, 0),
(34, 'burriana', 'castellon', 1831954, 0),
(35, 'nules', 'castellon', 1831954, 0),
(36, 'moncofar', 'castellon', 1831954, 0),
(37, 'chilches', 'castellon', 1831954, 0),
(38, 'la llosa', 'castellon', 1831954, 0),
(39, 'almenara', 'castellon', 1831954, 0),
(40, 'canet de berenguer', 'valencia', 1831954, 0),
(41, 'sagunto', 'valencia', 1831954, 0),
(42, 'puerto de sagunto', 'valencia', 1831954, 0),
(43, 'puzol', 'valencia', 1831954, 0),
(44, 'masalfasar', 'valencia', 1831954, 0),
(45, 'alboraya', 'valencia', 1831954, 0),
(46, 'ciudad de valencia', 'valencia', 1831954, 0),
(47, 'cullera', 'valencia', 1831954, 0),
(48, 'tabernes de valldigna', 'valencia', 1831954, 0),
(49, 'oliva', 'valencia', 1831954, 0),
(50, 'gandia', 'valencia', 1831954, 0),
(51, 'daimuz', 'valencia', 1831954, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `playas`
--
ALTER TABLE `playas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `playas`
--
ALTER TABLE `playas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
