-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2021 a las 18:33:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `empleado` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `proveedor` text NOT NULL,
  `producto` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`empleado`, `fecha`, `proveedor`, `producto`, `cantidad`, `codigo`, `id`) VALUES
('Ariel Abarno', '2021-02-14 03:00:00', 'Lucas Rosenthal', 'ALGABO COLONIA LAVANDA X 500ML ', 180, 27002755, 3),
('Ariel Abarno', '2021-02-14 03:00:00', 'Leandro Rousenthal', 'ALGABO ROUTE 66 COLONIA TRAVELER X 100 ML', 205, 27032100, 5),
('Ariel Abarno', '2021-02-14 03:00:00', 'Leandro Rousenthal', 'ALGABO ROUTE 66 COLONIA RIDER X 100 ML', 105, 27032101, 6),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Leandro Rousenthal', 'ALGABO BABY COLONIA DULCES MIMOS X 200 ML', 250, 27003613, 7),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Carlitos Tevez', 'ALGABO AVENGERS COLONIA HULK X 125 ML', 125, 31232001, 10),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Carlitos Tevez', 'ALGABO AVENGERS COLONIA CAPITAN AMERICA X 125 ML', 125, 31232003, 11),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Carlitos Tevez', 'ALGABO AVENGERS COLONIA SPIDERMAN X 125 ML', 155, 31232004, 13),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Alf ', 'ALGABO H. KITTY BODY SPLASH DULZURA X 125 ML', 211, 27032121, 14),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Alf ', 'ALGABO H. KITTY EDT SWEET GIRL X 100 ML', 100, 27002108, 16),
('Winston Franklin Abascal', '2021-02-14 03:00:00', 'Alf ', 'ALGABO H. KITTY EDT LOVELY TEEN X 100 ML', 211, 27032110, 17),
('Dorita Abuchalja', '2021-02-14 03:00:00', 'Alf ', 'ALGABO H. KITTY SET (SH & B. SPLASH) ', 204, 27000204, 18),
('Dorita Abuchalja', '2021-02-14 03:00:00', 'Luke Skywalker', 'ALGABO SALLY UNICORNIO COLONIA X 50 ML', 357, 27028357, 19),
('Dorita Abuchalja', '2021-02-14 03:00:00', 'Luke Skywalker', 'ALGABO SALLY UNICORNIO SET (SH & B. SPLASH) ', 2147483647, 27032061, 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
