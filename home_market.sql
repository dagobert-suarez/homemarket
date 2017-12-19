-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2017 a las 23:28:21
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `home_market`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `doc_usu` int(15) NOT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `ape_usu` varchar(50) NOT NULL,
  `fech_nac_usu` datetime NOT NULL,
  `gen_usu` varchar(20) NOT NULL,
  `cel_usu` bigint(11) NOT NULL,
  `tel_usu` int(11) NOT NULL,
  `email_usu` varchar(50) NOT NULL,
  `cod_ciu` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`doc_usu`, `nom_usu`, `ape_usu`, `fech_nac_usu`, `gen_usu`, `cel_usu`, `tel_usu`, `email_usu`, `cod_ciu`, `id_rol`, `img`) VALUES
(10000, 'Guffy', 'Herrera', '1999-11-29 00:00:00', 'm', 3233423539, 34, 'guffyk2@gmail.com', 50003, 1, 'no'),
(1026162, 'Alexis', 'Garcia', '1999-09-29 00:00:00', 'm', 314, 34, 'alexis@gmail.com', 50003, 1, 'no'),
(1026172, 'Dago', 'Suarez', '1999-09-27 00:00:00', 'm', 300, 34, 'dagobert@gmail.com', 50003, 1, 'no'),
(15403631, 'samuel', 'sepulvedad', '1995-03-11 00:00:00', 'm', 3145698745, 3215694, 'samuel@hotmail.com', 50003, 1, 'no'),
(48759512, 'carlos', 'perez', '1995-04-11 00:00:00', 'm', 3218695472, 5215698, 'carlos@gmail.com', 50003, 2, 'no'),
(1000084530, 'David', 'Herrera', '1999-11-29 00:00:00', 'm', 323, 35, 'guffyherrera150@gmail.com', 50003, 2, 'no'),
(1017257020, 'david', 'urrego', '1998-03-11 00:00:00', 'hombre', 3146974040, 2590722, 'davidurrego2010@hotmail.com', 5003, 1, 'fdsfweew'),
(1026132690, 'Dagobert', 'Suarez', '1999-09-27 00:00:00', 'm', 300, 34, 'dagobertsuarez@gmail.com', 50003, 2, 'no'),
(1026162652, 'Alexis', 'MuÃ±os', '1999-09-29 00:00:00', 'm', 3147145066, 34, 'amunoz185@misena.edu.co', 50003, 2, 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`doc_usu`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `cod_ciu` (`cod_ciu`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
