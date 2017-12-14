-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2017 a las 05:34:18
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `home_market`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_usu` (IN `documento` INT(11))  BEGIN
SELECT * FROM usuario where doc_usu=documento;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_super` (IN `nit_sup` VARCHAR(30), IN `nom_sup` VARCHAR(50), IN `dir_sup` VARCHAR(50), IN `tel_sup` INT(11), IN `cod_ciu` INT(11), IN `logo_sup` VARCHAR(255), IN `lon_sup` VARCHAR(100), IN `lat_sup` VARCHAR(100))  BEGIN
INSERT INTO supermercado VALUES (nit_sup,nom_sup,dir_sup,tel_sup,cod_ciu,logo_sup,lon_sup,lat_sup);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_un_producto` (IN `cod_pro` VARCHAR(50), IN `nom_pro` VARCHAR(50), IN `des_pro` VARCHAR(300), IN `mar_pro` VARCHAR(30), IN `id_tip_pro` INT(11), IN `nom_tip_pro` VARCHAR(50))  BEGIN
INSERT INTO tipo_producto VALUES (id_tip_pro,nom_tip_pro);
INSERT INTO productos VALUES (cod_pro,nom_pro,des_pro,mar_pro,id_tip_pro);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_usu` (IN `doc_usu` INT(11), IN `nom_usu` VARCHAR(50), IN `ape_usu` VARCHAR(50), IN `fech_nac_usu` DATETIME, IN `gen_usu` VARCHAR(30), IN `cel_usu` BIGINT(11), IN `tel_usu` INT(11), IN `email_usu` VARCHAR(50), IN `cod_ciu` INT(11), IN `id_rol` INT(11), IN `img` VARCHAR(255), IN `contra` VARCHAR(255), IN `token` VARCHAR(255))  BEGIN
 INSERT INTO usuario VALUES(doc_usu,nom_usu,ape_usu,fech_nac_usu,gen_usu,cel_usu,tel_usu,email_usu,cod_ciu,id_rol,img);
 INSERT INTO acceso VALUES(contra,token,doc_usu);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `email` VARCHAR(50))  BEGIN
SELECT * FROM usuario INNER JOIN acceso ON(usuario.doc_usu=acceso.doc_usu) WHERE usuario.email_usu = email;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `contra` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `doc_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`contra`, `token`, `doc_usu`) VALUES
('$2y$10$eCCNOj9Trrfic/.MpI/lIeEkepQ6Q.AQ1tM6FRInlKShlOGCdDPZi', '18370284b07d017653200b4b74022459', 1026162652),
('$2y$10$85NjncUC5.JPn5rBZDevveyY0BUXBVGn.aWww7OJavObauH4kI.aG', '26a5046b582d353bdb86e7d3bfac60dc', 1026132690),
('$2y$10$UN0dZE27.3XStQc4CEzQXuOSflKXreApGZkhvlrt.BHOFZF2CN6bq', '4d0f349527138fbaf6e7a32d4aa762a4', 48759512),
('$2y$10$4vUcva8Hrx0N5THzf9IYHOhy9L5Tb3/edi178oGzl1gPnYF1b1g5y', 'fabe7fc6db20089505de1492a131e2b0', 15403631),
('$2y$10$Fhuf94q1MkirELIFrH0shOBfU.OkUUF8MHFDWixUFVK42.AWMF3Ou', 'ffc7675cab52690468f4fd056456ab9b', 1000084530);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_cal` int(11) NOT NULL,
  `pun_cal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id_cal`, `pun_cal`) VALUES
(1, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_supermercado`
--

CREATE TABLE `calificacion_supermercado` (
  `nit_sup` varchar(30) DEFAULT NULL,
  `id_cal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion_supermercado`
--

INSERT INTO `calificacion_supermercado` (`nit_sup`, `id_cal`) VALUES
('305.325.4458', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_usu`
--

CREATE TABLE `calificacion_usu` (
  `doc_usu` int(11) DEFAULT NULL,
  `id_cal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion_usu`
--

INSERT INTO `calificacion_usu` (`doc_usu`, `id_cal`) VALUES
(1017257020, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `cod_ciu` int(11) NOT NULL,
  `nom_ciu` varchar(30) DEFAULT NULL,
  `cod_dpto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`cod_ciu`, `nom_ciu`, `cod_dpto`) VALUES
(5003, 'itagui', 21),
(50003, 'medellin', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_ped` int(11) NOT NULL,
  `cod_pro` varchar(50) DEFAULT NULL,
  `can_pro` int(11) DEFAULT NULL,
  `val_tot` float DEFAULT NULL,
  `cod_ped` int(30) DEFAULT NULL,
  `id_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_ped`, `cod_pro`, `can_pro`, `val_tot`, `cod_ped`, `id_stock`) VALUES
(5, '54', 54, 25454, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dpto`
--

CREATE TABLE `dpto` (
  `cod_dpto` int(11) NOT NULL,
  `nom_dpto` varchar(30) DEFAULT NULL,
  `cod_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dpto`
--

INSERT INTO `dpto` (`cod_dpto`, `nom_dpto`, `cod_pais`) VALUES
(21, 'antioquia', 220);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `cod_pais` int(11) NOT NULL,
  `nombre_pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`cod_pais`, `nombre_pais`) VALUES
(220, 'colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_ped` int(30) NOT NULL,
  `emp_ped` int(11) DEFAULT NULL,
  `fech_ped` datetime DEFAULT NULL,
  `doc_usu` int(11) DEFAULT NULL,
  `dir_ped` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`cod_ped`, `emp_ped`, `fech_ped`, `doc_usu`, `dir_ped`) VALUES
(1, 215, '2017-10-03 00:00:00', 1017257020, 'calle 30 # 50-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_per` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `C` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL,
  `U` int(11) DEFAULT NULL,
  `D` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_per`, `id_rol`, `C`, `R`, `U`, `D`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_pro` varchar(50) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` varchar(300) DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `mar_pro` varchar(30) NOT NULL,
  `id_tip_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_pro`, `nom_pro`, `des_pro`, `img`, `mar_pro`, `id_tip_pro`) VALUES
('1000', 'pastas', '', '', 'doria', 15),
('1234', 'Queso', 'queso mosarrela', '', 'Colanta', 15),
('154', 'adsd', 'ADASAdqwdsdfdfdf', '', 'sdfawefaewfaf', 3),
('262626', 'panelas', '', '', 'chirarar', 7),
('54', 'arroz', 'libra de arroz de 500 g', '', 'diana', 3),
('sadf', 'sadf', 'sadf', '', 'saf', 15),
('wds', 'sadfa', 'sdf', '', 'sadf', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_stock`
--

CREATE TABLE `producto_stock` (
  `id_stock` int(11) DEFAULT NULL,
  `cod_pro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_stock`
--

INSERT INTO `producto_stock` (`id_stock`, `cod_pro`) VALUES
(5, '54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `cod_prov` int(11) NOT NULL,
  `nom_prov` varchar(50) DEFAULT NULL,
  `dir_prov` varchar(50) DEFAULT NULL,
  `tel_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`cod_prov`, `nom_prov`, `dir_prov`, `tel_pro`) VALUES
(1025, 'samuel', 'cale 39 # 50-50', 2587584);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_productos`
--

CREATE TABLE `proveedores_productos` (
  `cod_pro` varchar(50) DEFAULT NULL,
  `cod_prov` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores_productos`
--

INSERT INTO `proveedores_productos` (`cod_pro`, `cod_prov`) VALUES
('54', 1025);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_ped`
--

CREATE TABLE `pro_ped` (
  `id_ped` int(11) DEFAULT NULL,
  `cod_pro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pro_ped`
--

INSERT INTO `pro_ped` (`id_ped`, `cod_pro`) VALUES
(5, '54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nom_rol`) VALUES
(1, 'cliente'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `can_pro` int(11) DEFAULT NULL,
  `fech_ing_pro` datetime DEFAULT NULL,
  `uniMed_pro` varchar(30) DEFAULT NULL,
  `valCom_pro` float DEFAULT NULL,
  `valVen_pro` float DEFAULT NULL,
  `id_tip_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `can_pro`, `fech_ing_pro`, `uniMed_pro`, `valCom_pro`, `valVen_pro`, `id_tip_pro`) VALUES
(5, 20, '2017-07-11 00:00:00', 'libra', 1000, 1500, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `nit_sup` varchar(30) NOT NULL,
  `nom_sup` varchar(50) DEFAULT NULL,
  `dir_sup` varchar(50) DEFAULT NULL,
  `tel_sup` int(11) DEFAULT NULL,
  `cod_ciu` int(11) DEFAULT NULL,
  `logo_sup` varchar(255) DEFAULT NULL,
  `lon_sup` varchar(100) DEFAULT NULL,
  `lat_sup` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supermercado`
--

INSERT INTO `supermercado` (`nit_sup`, `nom_sup`, `dir_sup`, `tel_sup`, `cod_ciu`, `logo_sup`, `lon_sup`, `lat_sup`) VALUES
('101487547', 'exito', 'calle 30 # 50-30', 154884, 50003, 'qwdws', 'asdfsf', 'asda'),
('15974', 'exito', 'calle 30 # 50-30', 21548, 5003, 'asd', 'sdfsad', 'sdfsa'),
('15dc', 'adsd', 'calle 30 # 50-30', 14154, 50003, 'sadfcawe', 'asfsd', 'sadf'),
('21548758', 'exito', 'calle 30 # 50-30', 21548, 50003, 'dfsf', 'asdfsf', 'dfsfsdsf'),
('305.325.4458', 'exgordo', 'calle 98 # 50-10', 2587468, 5003, 'efsdcwde', 'sdcsfdef', 'dsfafsdfe'),
('fsad', 'sadf', 'saf', 158, 5003, 'asfas', 'sadf', 'sdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado_ciudad`
--

CREATE TABLE `supermercado_ciudad` (
  `nit_sup` varchar(30) DEFAULT NULL,
  `cod_ciu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supermercado_ciudad`
--

INSERT INTO `supermercado_ciudad` (`nit_sup`, `cod_ciu`) VALUES
('305.325.4458', 5003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tip_pro` int(11) NOT NULL,
  `nom_tip_pro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tip_pro`, `nom_tip_pro`) VALUES
(1, 'Aceites'),
(2, 'Licores'),
(3, 'frutas'),
(4, 'Pollo-Carne-pescado '),
(5, 'Lacteos-Huevos'),
(6, 'Pan-arepas-tortillas'),
(7, 'Galletas-dulces '),
(8, 'Aseo'),
(9, 'Aseo personal'),
(10, 'Carnes frias '),
(11, 'Manufacturado'),
(12, 'verduras'),
(13, 'bebidas '),
(15, 'granos');

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
(15403631, 'samuel', 'sepulvedad', '1995-03-11 00:00:00', 'm', 3145698745, 3215694, 'samuel@hotmail.com', 50003, 1, 'no'),
(48759512, 'carlos', 'perez', '1995-04-11 00:00:00', 'm', 3218695472, 5215698, 'carlos@gmail.com', 50003, 2, 'no'),
(1000084530, 'David', 'Herrera', '1999-11-29 00:00:00', 'm', 323, 35, 'guffyherrera150@gmail.com', 50003, 2, 'no'),
(1017257020, 'david', 'urrego', '1998-03-11 00:00:00', 'hombre', 3146974040, 2590722, 'davidurrego2010@hotmail.com', 5003, 1, 'fdsfweew'),
(1026132690, 'Dagobert', 'Suarez', '1999-09-27 00:00:00', 'm', 300, 34, 'dagobertsuarez@gmail.com', 50003, 2, 'no'),
(1026162652, 'Alexis', 'MuÃ±os', '1999-09-29 00:00:00', 'm', 3147145066, 34, 'amunoz185@misena.edu.co', 50003, 2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_supermercado`
--

CREATE TABLE `usuario_supermercado` (
  `doc_usu` int(11) DEFAULT NULL,
  `nit_sup` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_supermercado`
--

INSERT INTO `usuario_supermercado` (`doc_usu`, `nit_sup`) VALUES
(1017257020, '305.325.4458');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`token`),
  ADD KEY `doc_cli` (`doc_usu`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_cal`);

--
-- Indices de la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD KEY `nit_sup` (`nit_sup`),
  ADD KEY `id_cal` (`id_cal`);

--
-- Indices de la tabla `calificacion_usu`
--
ALTER TABLE `calificacion_usu`
  ADD KEY `doc_cli` (`doc_usu`),
  ADD KEY `id_cal` (`id_cal`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`cod_ciu`),
  ADD KEY `cod_dpto` (`cod_dpto`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_ped`),
  ADD KEY `cod_pro` (`cod_pro`),
  ADD KEY `cod_ped` (`cod_ped`),
  ADD KEY `id_stock` (`id_stock`);

--
-- Indices de la tabla `dpto`
--
ALTER TABLE `dpto`
  ADD PRIMARY KEY (`cod_dpto`),
  ADD KEY `cod_pais` (`cod_pais`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`cod_pais`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_ped`),
  ADD KEY `doc_usu` (`doc_usu`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_per`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `id_tip_pro` (`id_tip_pro`);

--
-- Indices de la tabla `producto_stock`
--
ALTER TABLE `producto_stock`
  ADD KEY `id_stock` (`id_stock`),
  ADD KEY `cod_pro` (`cod_pro`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`cod_prov`);

--
-- Indices de la tabla `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  ADD KEY `cod_pro` (`cod_pro`),
  ADD KEY `cod_prov` (`cod_prov`);

--
-- Indices de la tabla `pro_ped`
--
ALTER TABLE `pro_ped`
  ADD KEY `id_ped` (`id_ped`),
  ADD KEY `cod_pro` (`cod_pro`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `id_tip_pro` (`id_tip_pro`);

--
-- Indices de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD PRIMARY KEY (`nit_sup`),
  ADD KEY `cod_ciu` (`cod_ciu`);

--
-- Indices de la tabla `supermercado_ciudad`
--
ALTER TABLE `supermercado_ciudad`
  ADD KEY `nit_sup` (`nit_sup`),
  ADD KEY `cod_ciu` (`cod_ciu`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tip_pro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`doc_usu`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `cod_ciu` (`cod_ciu`);

--
-- Indices de la tabla `usuario_supermercado`
--
ALTER TABLE `usuario_supermercado`
  ADD KEY `doc_usu` (`doc_usu`),
  ADD KEY `nit_sup` (`nit_sup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id_cal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`doc_usu`) REFERENCES `usuario` (`doc_usu`) ON DELETE CASCADE;

--
-- Filtros para la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD CONSTRAINT `calificacion_supermercado_ibfk_1` FOREIGN KEY (`nit_sup`) REFERENCES `supermercado` (`nit_sup`),
  ADD CONSTRAINT `calificacion_supermercado_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`);

--
-- Filtros para la tabla `calificacion_usu`
--
ALTER TABLE `calificacion_usu`
  ADD CONSTRAINT `calificacion_usu_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`),
  ADD CONSTRAINT `calificacion_usu_ibfk_3` FOREIGN KEY (`doc_usu`) REFERENCES `usuario` (`doc_usu`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`cod_dpto`) REFERENCES `dpto` (`cod_dpto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`cod_pro`) REFERENCES `productos` (`cod_pro`),
  ADD CONSTRAINT `detalle_pedido_ibfk_3` FOREIGN KEY (`id_stock`) REFERENCES `stock` (`id_stock`),
  ADD CONSTRAINT `detalle_pedido_ibfk_4` FOREIGN KEY (`cod_ped`) REFERENCES `pedido` (`cod_ped`) ON DELETE CASCADE;

--
-- Filtros para la tabla `dpto`
--
ALTER TABLE `dpto`
  ADD CONSTRAINT `dpto_ibfk_2` FOREIGN KEY (`cod_pais`) REFERENCES `pais` (`cod_pais`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`doc_usu`) REFERENCES `usuario` (`doc_usu`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_tip_pro`) REFERENCES `tipo_producto` (`id_tip_pro`);

--
-- Filtros para la tabla `producto_stock`
--
ALTER TABLE `producto_stock`
  ADD CONSTRAINT `producto_stock_ibfk_1` FOREIGN KEY (`id_stock`) REFERENCES `stock` (`id_stock`),
  ADD CONSTRAINT `producto_stock_ibfk_2` FOREIGN KEY (`cod_pro`) REFERENCES `productos` (`cod_pro`);

--
-- Filtros para la tabla `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  ADD CONSTRAINT `proveedores_productos_ibfk_1` FOREIGN KEY (`cod_pro`) REFERENCES `productos` (`cod_pro`),
  ADD CONSTRAINT `proveedores_productos_ibfk_2` FOREIGN KEY (`cod_prov`) REFERENCES `proveedores` (`cod_prov`);

--
-- Filtros para la tabla `pro_ped`
--
ALTER TABLE `pro_ped`
  ADD CONSTRAINT `pro_ped_ibfk_1` FOREIGN KEY (`id_ped`) REFERENCES `detalle_pedido` (`id_ped`),
  ADD CONSTRAINT `pro_ped_ibfk_2` FOREIGN KEY (`cod_pro`) REFERENCES `productos` (`cod_pro`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`id_tip_pro`) REFERENCES `tipo_producto` (`id_tip_pro`);

--
-- Filtros para la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD CONSTRAINT `supermercado_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`) ON DELETE CASCADE;

--
-- Filtros para la tabla `supermercado_ciudad`
--
ALTER TABLE `supermercado_ciudad`
  ADD CONSTRAINT `supermercado_ciudad_ibfk_1` FOREIGN KEY (`nit_sup`) REFERENCES `supermercado` (`nit_sup`),
  ADD CONSTRAINT `supermercado_ciudad_ibfk_2` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario_supermercado`
--
ALTER TABLE `usuario_supermercado`
  ADD CONSTRAINT `usuario_supermercado_ibfk_2` FOREIGN KEY (`nit_sup`) REFERENCES `supermercado` (`nit_sup`),
  ADD CONSTRAINT `usuario_supermercado_ibfk_3` FOREIGN KEY (`doc_usu`) REFERENCES `usuario` (`doc_usu`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
