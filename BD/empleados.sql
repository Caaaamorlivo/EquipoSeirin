-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2021 a las 18:32:51
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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `dni` int(8) NOT NULL,
  `puesto` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`nombres`, `apellidos`, `dni`, `puesto`, `usuario`, `password`, `id`) VALUES
('Ariel', 'Abarno', 33268490, 'OPERARIO PRODUCCIÓN', 'ArielAbarno', '$2y$10$ud7LI8nxcCo.KGooYGjZbOT6y2G3OdwqWUEz.JNKAcgmZ.P4DY7lO', '1fba30a'),
('Winston Franklin', 'Abascal', 35884970, 'OPERARIO DEPOSITO', 'FranklinWinston', '$2y$10$hEeeRjCgNw.ZXYxMKA8E9e/v9X66B29R.LVKP8A2UP7ET6ikyxaOa', '2238faa'),
('Pablo Daniel', 'Abdala', 19873040, 'OPERARIO EXPEDICIÓN', 'PabloDaniel', '$2y$10$9XpASggoL0TUU5hcDVDUlur8zxTguMxfByAHXThjZAHgs8S3JlMIK', '12f3d10'),
('Mercedes Maria', 'Abdala', 14553220, 'ADMINISTRATIVO', 'MercedesMaria', '$2y$10$yOjMhXom5ELB42IOTh1pyOXkOVKVdaMBuk4YE1rjB.V11w7KqoA8C', 'de1084'),
('Jorge Maria', 'Abin', 12473690, 'OFICIAL MANTENIMIENTO', 'JorgeMaria', '$2y$10$g7h4pwvCsvhO5gR1/NJEe.L2ynhp1E0Mcq8e9ObPMVW7AzhKEGnuu', 'be555a'),
('Alcides', 'Abreu', 35939560, 'CLARKISTA', 'AlcidesAbreu', '$2y$10$r58cEsPE14whI1vgq1HmQulWFWmyXkEItyA4RObUJAxylpmefXw52', '22464e8'),
('Mirta Graciela', 'Abreu', 34496480, 'GERENTE GENERAL', 'MirtaGraciela', '$2y$10$A6x7RPvjIDgXvqf5dgGhIuh3uPl84nIIRoTF7QimDEAMobYQx0iea', '20e5fe0'),
('Sergio', 'Abreu', 10333680, 'OPERARIO LIMPIEZA', 'SergioAbreu', '$2y$10$s5szq0h5dPioci/8diC8w.F88bypnCkc9G8tPpImlblrmEVvtaqUC', '9dadf0'),
('Dorita', 'Abuchalja', 11788330, 'TECNICO LABORATORIO', 'DoritaAbuchalja', '$2y$10$7ufGejd4bcSh/UJ/aSXjDeBXH.g0Qknm/tbO.z6EBWo.ttslDCmK.', 'b3e02a'),
('Marcelo Hebert', 'Carrasco', 16691920, 'INGENIERO LABORATORIO', 'Marcelo Hebert', '$2y$10$HFKNIeIjEymQ.VKAtwgw0uhNgFgyPlXig1HYKRDLngWm2G6igp70m', 'feb2d0'),
('Juan Jose', 'Carrasco', 14911290, 'RECEPCIONISTA', 'JuanJose', '$2y$10$Q6xFQEYNh6wbPZmpHlMHSuNWCx1eJ388B/LwoeuzfhIvpBAMd9pgu', 'e3873a'),
('Sulangel', 'Carrasco', 18004650, 'SEGURIDAD', 'SulangelCarrasco', '$2y$10$O8CBU1nGmr7Dn3jSFiKngezPo8yTx7rBCOFsUtqf2jwGu.qP0S0xO', '112baaa'),
('Javier ', 'Carrau', 11686480, 'CONDUCTOR', 'JavierCarrau', '$2y$10$2DSoP6LNVRoU7WlMlkqq7OnAE6kDI6DxBg.m08orB6MWEQG5Ibdaq', 'b25250'),
('Fernando', 'Carrau', 16936880, 'TECNICO DESARROLLO', 'FerCarrau', '$2y$10$/1d/ty3w2e8WIl9oNaFWm.LUI3VLcY7BWtSTolO.rBCz8It7g.Yi.', '1026fb0'),
('Charles Daniel', 'Carrera', 42645350, 'INGENIERO DESARROLLO', 'CharlesDaniel', '$2y$10$uIXzGtKEm5YJGXi8MDvsl.AxNfjxhC5NsF0KU9iMMBFFs5IuZCGZa', '28ab766'),
('Julio', 'Carrera', 14602720, 'OPERARIO PRODUCCIÓN', 'JulioCarrera', '$2y$10$qGevtM3U6ATahxw8fhL0j.Wr/wAJWZhSxsgfakjzS9T136wixWgsG', 'ded1e0'),
('Ernesto', 'Carreras', 13145350, 'OPERARIO DEPOSITO', 'ErnestoCarreras', '$2y$10$YQHJ0o7dnAKtFPljpSDRu.pQiZjeieBcY311AsDUaZcpGOatIU5Cu', 'c89506'),
('Luis Maria', 'Carresse', 30183550, 'OPERARIO EXPEDICIÓN', 'LuisMaria', '$2y$10$tL7hiU8jt6Af6/JVXNy2Qey/C4qcUkNf/qrb1QGixwSpRQwMPQAvi', '1cc907e'),
('Sergio Ney', 'D\'Oliveira', 13752222, 'OFICIAL MANTENIMIENTO', 'SergioNey', '$2y$10$fzVdY1fkf/yNXIIxrdiuouDP6S9IdayEixEokac03Rcjto5FNi9Pi', 'd1d79e'),
('Homera Hector', 'Da Costa Porto', 27157570, 'CLARKISTA', 'DaCostaPorto', '$2y$10$WKJLNCep3llyEiPII2pRg.ZO.PAB7WmBlJbETeIwpmZNYtuG0Uvt6', '19e6442');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
