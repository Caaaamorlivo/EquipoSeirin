-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2021 a las 18:32:28
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
-- Estructura de tabla para la tabla `egreso`
--

CREATE TABLE `egreso` (
  `id_expedicion` int(255) NOT NULL,
  `empleado` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_producto` int(255) NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `lote` int(255) NOT NULL,
  `vto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `egreso`
--

INSERT INTO `egreso` (`id_expedicion`, `empleado`, `fecha`, `id_producto`, `fabricante`, `producto`, `lote`, `vto`) VALUES
(1, 'Ariel Abarno', '2021-02-14 03:00:00', 27002751, 'Lucas Rosenthal', 'ALGABO COLONIA INGLESA X 500ML ', 100, '11/2/2021'),
(2, 'Ariel Abarno', '2021-02-14 03:00:00', 33332100, 'Leandro Rousenthal', 'ALGABO MEN COLONIA X 100 ML', 125, '11/8/2021'),
(3, 'Winston Franklin Abascal', '2021-02-14 03:00:00', 27032004, 'Leandro Rousenthal', 'ALGABO BABY COLONIA DULCES MIMOS X 100 ML', 250, '20/4/2022'),
(4, 'Winston Franklin Abascal', '2021-02-14 03:00:00', 27321221, 'Alf ', 'ALGABO H. KITTY BODY SPLASH ALEGRIA X 125 ML', 211, '8/12/2023'),
(5, 'Winston Franklin Abascal', '2021-02-14 03:00:00', 27232002, 'Carlitos Tevez', 'ALGABO AVENGERS COLONIA IRON MAN X 125 ML', 135, '8/8/2028'),
(6, 'Winston Franklin Abascal', '2021-02-14 03:00:00', 27003615, 'Leandro Rousenthal', 'ALGABO BABY COLONIA SUAVE BRISA X 200 ML', 185, '20/5/2025'),
(7, 'Dorita Abuchalja', '2021-02-14 03:00:00', 27028355, 'Luke Skywalker', 'ALGABO SALLY UNICORNIO COLONIA X 100 ML', 355, '30/8/2028'),
(8, 'Ariel Abarno', '2021-02-14 03:00:00', 27100388, 'Lucas Rosenthal', 'ALGABO COLONIA AMBRE X 500ML ', 150, '15/9/2030'),
(9, 'Ariel Abarno', '2021-02-15 03:00:00', 45678, 'Leandro Rousenthal', 'awa de uwu', 12, '29/8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `egreso`
--
ALTER TABLE `egreso`
  ADD PRIMARY KEY (`id_expedicion`),
  ADD UNIQUE KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `egreso`
--
ALTER TABLE `egreso`
  MODIFY `id_expedicion` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
