-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2023 a las 06:06:26
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdvsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pozo`
--

CREATE TABLE `pozo` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `zona` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pozo`
--

INSERT INTO `pozo` (`ID`, `nombre`, `zona`) VALUES
(1, 'CAZON', 'YARITAGUA'),
(2, 'VIEJO', 'MCBO'),
(3, 'CAYO', 'BARQUISIMETO'),
(4, 'CALMADO', 'CIUDAD BOLIVAR'),
(5, 'ROSA', 'CARACAS'),
(6, 'ROSA', 'CARACAS'),
(7, 'ROJO', 'PARAGUAIPOA'),
(8, 'AZUL', 'LOS CAYOS'),
(11, 'RED', 'LAS LOMAS'),
(12, 'FRIO', 'ZONA RURAL'),
(13, 'UNDER', 'AMAZONAS'),
(14, 'SEPTICO', 'ZONA MURALLA'),
(15, 'ROJIZO', 'ZONA CIUDAD'),
(16, 'MCBO', 'MARACAIBO'),
(17, 'AGUA', 'AMAZONAS'),
(18, 'SUAVE', 'MATURIN'),
(19, 'SAL', 'PARAGUANA'),
(20, 'CALM', 'MERIDA'),
(21, 'POZITO', 'VALENCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `psi` float(7,4) NOT NULL,
  `ID_pozo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `fecha`, `psi`, `ID_pozo`) VALUES
(2, '2023-03-12 22:26:08', 14.6000, 1),
(3, '2023-03-14 22:30:12', 20.0000, 2),
(4, '2023-03-12 22:58:11', 20.0000, 3),
(5, '2023-03-14 22:58:27', 28.0000, 4),
(6, '2023-03-02 23:01:34', 15.0000, 5),
(7, '2023-03-14 23:02:36', 14.0000, 6),
(8, '2023-03-13 23:02:59', 36.0000, 7),
(9, '2023-03-14 23:06:51', 20.0000, 8),
(10, '2023-03-12 23:12:12', 16.0000, 11),
(11, '2023-03-14 23:17:00', 89.0000, 12),
(12, '2023-03-09 23:21:57', 56.0000, 13),
(13, '2023-03-14 23:27:04', 17.0000, 14),
(14, '2023-03-09 23:44:47', 36.0000, 15),
(15, '2023-03-14 23:45:40', 78.0000, 16),
(16, '2023-03-12 23:46:34', 56.0000, 17),
(17, '2023-03-14 23:50:10', 39.0000, 18),
(18, '2023-03-15 21:48:50', 2.0000, 19),
(19, '2023-03-16 00:13:51', 23.5000, 20),
(20, '2023-03-16 00:58:32', 36.6000, 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pozo`
--
ALTER TABLE `pozo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pozo`
--
ALTER TABLE `pozo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
