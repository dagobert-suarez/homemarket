-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2017 a las 23:53:34
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
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `contra` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `doc_cli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`contra`, `token`, `doc_cli`) VALUES
('$2y$10$eC1vPMbnDR3X9ulOIuxWqeZCrNBJbSmQISOkN07FQR49zUfjxX5wG', '24fa6c27bde3a2f7912ef6ea55170e1c', 2147483647),
('$2y$10$4zmAbzADmnHZ9RskZnmmp.shtwhEOv4q4LWrM9C5QWo1Hgy5e0qP6', 'd41d8cd98f00b204e9800998ecf8427e', 0);

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
(1, '5'),
(2, '3'),
(3, '4'),
(4, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_cli`
--

CREATE TABLE `calificacion_cli` (
  `doc_cli` int(11) DEFAULT NULL,
  `id_cal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion_cli`
--

INSERT INTO `calificacion_cli` (`doc_cli`, `id_cal`) VALUES
(1017587425, 1),
(12358476, 2),
(1017587425, 1),
(1245874857, 3),
(1017587425, 1);

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
('500.258.257-2', 1),
('456.587.1254', 4),
('305.325.4458', 2),
('600.458.1234', 1),
('456.587.1254', 2);

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
(5003, 'itagui', 5),
(5330, 'poblado', 5),
(50003, 'medellin', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `doc_cli` int(11) NOT NULL,
  `pNom_cli` varchar(30) NOT NULL,
  `sNom_cli` varchar(30) DEFAULT NULL,
  `pApe_cli` varchar(30) NOT NULL,
  `sApe_cli` varchar(30) NOT NULL,
  `gen_cli` varchar(20) NOT NULL,
  `fech_nac` date NOT NULL,
  `cel_cli` int(11) NOT NULL,
  `tel_cli` int(11) NOT NULL,
  `email_cli` varchar(50) NOT NULL,
  `cod_ciu` int(11) DEFAULT NULL,
  `est_cli` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`doc_cli`, `pNom_cli`, `sNom_cli`, `pApe_cli`, `sApe_cli`, `gen_cli`, `fech_nac`, `cel_cli`, `tel_cli`, `email_cli`, `cod_ciu`, `est_cli`) VALUES
(0, '', '', '', '', '', '0000-00-00', 0, 0, '', 0, '1'),
(2147483647, 'David', '', 'Herrera', 'Zapata', '', '1999-11-29', 323, 0, 'guffy@gm', 5005, '1');

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
(1, '20', 486, 48647, 4, 20185),
(2, '30', 534865, 5348, 2, 4887),
(3, '50', 652349, 5678, 3, 548),
(4, '258', 215, 41548, 1, 201);

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
(5, 'antioquia', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `cod_pais` int(11) NOT NULL,
  `nombre_pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_ped` int(30) NOT NULL,
  `emp_ped` int(11) DEFAULT NULL,
  `fech_ped` datetime DEFAULT NULL,
  `doc_usu` int(11) DEFAULT NULL,
  `dir_ped` varchar(30) DEFAULT NULL,
  `doc_cli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`cod_ped`, `emp_ped`, `fech_ped`, `doc_usu`, `dir_ped`, `doc_cli`) VALUES
(1, 0, '2017-11-01 00:00:00', 165478964, 'calle 98 # 35-45', 1017587425),
(2, 645, '2017-08-16 00:00:00', 165478964, 'calle 70 # 50-38 ', 1245874857),
(3, 315, '2017-11-02 00:00:00', 3251478, 'calle94a # 44-18', 12358476),
(4, 21854, '2017-10-16 00:00:00', 14578969, 'cale 48 # 48-25', 1017587425);

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
(1, 1, 0, 1, 0, 1),
(2, 2, 0, 1, 0, 0),
(3, 3, 1, 0, 0, 1),
(4, 4, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_pro` varchar(50) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` varchar(1000) DEFAULT NULL,
  `mar_pro` varchar(30) NOT NULL,
  `id_tip_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_pro`, `nom_pro`, `des_pro`, `mar_pro`, `id_tip_pro`) VALUES
('20', 'queso', 'rico queso echo de leche de vaca ', 'colanta', 259),
('258', 'arroz', 'libra de arroz diana con un contenido de 500 gramos', 'diana', 125),
('30', 'huevos', 'son huevos blanco ricos para comer ', 'kikes', 359),
('50', 'leche', 'leche  rica y nutritiva', 'colanta', 125);

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
(4887, '258'),
(20185, '20'),
(548, '30'),
(201, '50');

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
(1, 'samuel', 'calle 45 # 10-50', 255486),
(2, 'estefa', 'calle 80 # 30-50', 4554878),
(3, 'camilo', 'calle30#60-70', 1248579),
(4, 'el braya', 'carrera 50#50-50', 5248747);

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
('20', 3),
('20', 3),
('30', 4),
('50', 2);

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
(1, '20'),
(2, '30'),
(3, '50'),
(4, '258');

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
(1, 'usurio'),
(2, 'administrador'),
(3, 'supervisor'),
(4, 'super admin');

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
(201, 5, '2017-11-06 00:00:00', 'peso', 200, 504, 359),
(548, 21, '2017-10-17 00:00:00', 'libras', 2119, 15, 1258),
(4887, 5, '2017-11-06 00:00:00', 'kilo', 500, 1000, 125),
(20185, 312, '2017-11-06 00:00:00', 'gramos', 2315, 1254, 125);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `nit_sup` varchar(30) NOT NULL,
  `nom_sup` varchar(50) DEFAULT NULL,
  `dir_sup` varchar(50) DEFAULT NULL,
  `tel_sup` int(11) DEFAULT NULL,
  `loc_sup` varchar(50) DEFAULT NULL,
  `cod_ciu` int(11) DEFAULT NULL,
  `logo_sup` varchar(255) DEFAULT NULL,
  `lon_sup` varchar(100) DEFAULT NULL,
  `lat_sup` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supermercado`
--

INSERT INTO `supermercado` (`nit_sup`, `nom_sup`, `dir_sup`, `tel_sup`, `loc_sup`, `cod_ciu`, `logo_sup`, `lon_sup`, `lat_sup`) VALUES
('305.325.4458', 'exgordo ', 'calle 98 # 50-10', 325487, 'sdfg', 50003, 'qwew', 'ergerg', 'fdsgdsf'),
('456.587.1254', 'las granjas', 'calle 95#40-50', 2136454, '4523456', 5330, 'sedgsdd', '1236', '2345274'),
('500.258.257-2', 'supermecado nose', 'calle 98 # 45-10', 5874530, '168453', 50003, 'sdsf', '5012', '7857'),
('600.458.1234', 'compre aqui', 'calle 98#50-12', 32158, 'wsadsaf', 5003, 'sdfs', 'dsafa', 'asdf');

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
('305.325.4458', 5003),
('456.587.1254', 50003),
('500.258.257-2', 5330),
('600.458.1234', 5003);

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
(125, 'leche'),
(259, 'queso'),
(359, 'huevos'),
(1258, 'arroz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `doc_usu` int(11) NOT NULL,
  `pNom_usu` varchar(30) NOT NULL,
  `sNom_usu` varchar(30) DEFAULT NULL,
  `pApe_usu` varchar(30) NOT NULL,
  `sApe_usu` varchar(30) NOT NULL,
  `fech_nac_usu` datetime NOT NULL,
  `gen_usu` varchar(20) NOT NULL,
  `cel_usu` int(11) NOT NULL,
  `tel_usu` int(11) NOT NULL,
  `email_usu` varchar(50) NOT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`doc_usu`, `pNom_usu`, `sNom_usu`, `pApe_usu`, `sApe_usu`, `fech_nac_usu`, `gen_usu`, `cel_usu`, `tel_usu`, `email_usu`, `id_rol`) VALUES
(3251478, 'carlos', NULL, 'perez', 'ortiz', '1995-03-25 00:00:00', 'hombre', 1547854, 25487, 'carlos@hotmail.com', 2),
(14578969, 'cristina', NULL, 'bedoya ', 'urrego', '1997-06-20 00:00:00', 'mujer', 321659785, 2365984, 'cristina@hotmail.com', 4),
(165478964, 'juan', 'carlos', 'osorio', 'cardona', '1997-10-21 00:00:00', 'hombre', 2147483647, 5219584, 'nose@hotmail.com', 2),
(1025487965, 'maria', 'jose', 'lombana', 'higuita', '1996-03-20 00:00:00', 'mujer', 32659841, 3256988, 'jose@hotmail.com', 1);

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
(3251478, '305.325.4458'),
(14578969, '456.587.1254'),
(165478964, '500.258.257-2'),
(1025487965, '600.458.1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`token`),
  ADD KEY `doc_cli` (`doc_cli`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_cal`);

--
-- Indices de la tabla `calificacion_cli`
--
ALTER TABLE `calificacion_cli`
  ADD KEY `doc_cli` (`doc_cli`),
  ADD KEY `id_cal` (`id_cal`);

--
-- Indices de la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD KEY `nit_sup` (`nit_sup`),
  ADD KEY `id_cal` (`id_cal`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`cod_ciu`),
  ADD KEY `cod_dpto` (`cod_dpto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`doc_cli`),
  ADD KEY `cod_ciu` (`cod_ciu`);

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
  ADD KEY `doc_usu` (`doc_usu`),
  ADD KEY `doc_cli` (`doc_cli`);

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
  ADD KEY `id_rol` (`id_rol`);

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
  MODIFY `id_cal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20186;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`doc_cli`) REFERENCES `cliente` (`doc_cli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificacion_cli`
--
ALTER TABLE `calificacion_cli`
  ADD CONSTRAINT `calificacion_cli_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`);

--
-- Filtros para la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD CONSTRAINT `calificacion_supermercado_ibfk_1` FOREIGN KEY (`nit_sup`) REFERENCES `supermercado` (`nit_sup`),
  ADD CONSTRAINT `calificacion_supermercado_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`);

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`cod_pro`) REFERENCES `productos` (`cod_pro`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`cod_ped`) REFERENCES `pedido` (`cod_ped`),
  ADD CONSTRAINT `detalle_pedido_ibfk_3` FOREIGN KEY (`id_stock`) REFERENCES `stock` (`id_stock`);

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `pais_ibfk_1` FOREIGN KEY (`cod_pais`) REFERENCES `dpto` (`cod_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`doc_usu`) REFERENCES `usuario` (`doc_usu`);

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
  ADD CONSTRAINT `supermercado_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`);

--
-- Filtros para la tabla `supermercado_ciudad`
--
ALTER TABLE `supermercado_ciudad`
  ADD CONSTRAINT `supermercado_ciudad_ibfk_1` FOREIGN KEY (`nit_sup`) REFERENCES `supermercado` (`nit_sup`),
  ADD CONSTRAINT `supermercado_ciudad_ibfk_2` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `usuario_supermercado`
--
ALTER TABLE `usuario_supermercado`
  ADD CONSTRAINT `usuario_supermercado_ibfk_1` FOREIGN KEY (`doc_usu`) REFERENCES `usuario` (`doc_usu`),
  ADD CONSTRAINT `usuario_supermercado_ibfk_2` FOREIGN KEY (`nit_sup`) REFERENCES `supermercado` (`nit_sup`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
