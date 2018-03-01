-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2018 a las 19:51:45
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPro` (IN `nom_pro` VARCHAR(30))  BEGIN 
SELECT nom_pro, des_pro, img_pro,mar_pro, valVen_pro, nom_tip_pro FROM productos INNER JOIN tipo_producto WHERE productos.id_tip_pro = tipo_producto.id_tip_pro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearAcceso` (IN `token` VARCHAR(255), IN `contra` VARCHAR(255), IN `usu` INT)  NO SQL
BEGIN 
INSERT INTO acceso VALUES(token,contra,usu);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_categoria` (IN `id_tip_pro` INT, IN `nom_tip_pro` VARCHAR(30))  BEGIN
INSERT INTO tipo_producto VALUES (id_tip_pro,nom_tip_pro);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_pro` (IN `nom_pro` VARCHAR(30), IN `des_pro` VARCHAR(300), IN `img_pro` VARCHAR(255), IN `mar_pro` VARCHAR(30), IN `id_tip_pro` INT, IN `can_pro` INT, IN `fec_ing_pro` DATE, IN `uniMed_pro` VARCHAR(30), IN `valCom_pro` FLOAT, IN `valVen_pro` FLOAT)  BEGIN
 
 INSERT INTO productos VALUES (nom_pro,des_pro,img_pro,mar_pro,id_tip_pro,can_pro,fec_ing_pro,uniMed_pro,valCom_pro,valVen_pro);
 
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_prov` (IN `id_prov` INT, IN `nom_prov` VARCHAR(50), IN `dir_prov` VARCHAR(30), IN `tel_prov` VARCHAR(11))  BEGIN

INSERT INTO proveedores VALUES (id_prov,nom_prov,dir_prov,tel_prov);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_sup` (IN `id_sup` INT, IN `nom_sup` VARCHAR(50), IN `dir_sup` VARCHAR(50), IN `tel_sup` VARCHAR(11), IN `cod_ciu` INT, IN `logo_sup` VARCHAR(255), IN `lon_sup` VARCHAR(100), IN `lat_sup` VARCHAR(100))  BEGIN
  
  INSERT INTO supermercado VALUES(id_sup,nom_sup,dir_sup,tel_sup,cod_ciu,logo_sup,lon_sup,lat_sup);
  
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_usu` (IN `nom_usu` VARCHAR(50), IN `ape_usu` VARCHAR(50), IN `fec_nac_usu` DATE, IN `gen_usu` VARCHAR(20), IN `tel_usu` VARCHAR(11), IN `email_usu` VARCHAR(50), IN `cod_ciu` INT, IN `id_rol` INT)  BEGIN
insert into usuario (nom_usu,ape_usu,fec_nac_usu,gen_usu,tel_usu,email_usu,cod_ciu,id_rol) values(nom_usu,ape_usu,fec_nac_usu,gen_usu,tel_usu,email_usu,cod_ciu,id_rol);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarPro` (`id_pro` INT)  BEGIN 
DELETE FROM productos WHERE id_pro=productos.id_pro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarProv` (`id_prov` INT)  BEGIN
DELETE FROM proveedores WHERE id_prov=proveedores.id_prov;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarSup` (`id_sup` INT)  BEGIN 
DELETE FROM supermercado WHERE id_sup=supermercado.id_sup;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarTipo` (IN `id_tip_pro` INT)  BEGIN 

DELETE FROM tipo_producto WHERE id_tip_pro=tipo_producto.id_tip_pro;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarUsu` (IN `id_usu` INT)  BEGIN

DELETE FROM usuario WHERE id_usu=usuario.id_usu;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (`email_usu` VARCHAR(50))  BEGIN
SELECT * FROM usuario INNER JOIN acceso ON(usuario.id_usu_usu=acceso.id_usu_usu) WHERE usuario.email_usu = email;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarPro` (IN `id_pro` INT, IN `nom_pro` VARCHAR(30), IN `des_pro` VARCHAR(300), IN `img_pro` VARCHAR(30), IN `mar_pro` VARCHAR(30), IN `id_tip_pro` INT, IN `can_pro` INT, IN `fec_ing_pro` DATE, IN `uniMed_pro` VARCHAR(30), IN `valCom_pro` FLOAT, IN `valVen_pro` FLOAT)  BEGIN 

UPDATE productos SET nom_pro=nom_pro,des_pro=des_pro,img_pro=img_pro,mar_pro=mar_pro,id_tip_pro=id_tip_pro,can_pro=can_pro,fec_ing_pro=fec_ing_pro, uniMed_pro=uniMed_pro,valCom_pro=valCom_pro,valVen_pro=valVen_pro WHERE id_pro=id_pro;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarProv` (`id_prov` INT, `nom_prov` VARCHAR(50), `dir_prov` VARCHAR(30), `tel_prov` VARCHAR(11))  BEGIN
UPDATE proveedores SET nom_prov=nom_prov,dir_prov=dir_prov,tel_prov=tel_prov WHERE id_prov=id_prov;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarSup` (`id_sup` INT, `nom_sup` VARCHAR(50), `dir_sup` VARCHAR(50), `tel_sup` VARCHAR(11), `logo_sup` VARCHAR(255), `lon_sup` VARCHAR(100), `lat_sup` VARCHAR(100))  BEGIN 
UPDATE supermercado SET nom_sup=nom_sup,dir_sup=dir_sup,tel_sup=tel_sup,logo_sup=logo_sup,lon_sup=lon_sup,lat_sup=lat_sup WHERE id_sup=id_sup;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarTipo` (IN `id_tip_pro` INT, IN `nom_tip_pro` VARCHAR(30))  BEGIN 
UPDATE tipo_producto SET nom_tip_pro=nom_tip_pro WHERE id_tip_pro=id_tip_pro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarUsu` (IN `id_usu` INT, IN `nom_usu` VARCHAR(50), IN `ape_usu` VARCHAR(50), IN `gen_usu` VARCHAR(20), IN `tel_usu` VARCHAR(11), IN `img_usu` VARCHAR(255))  BEGIN 
 
 UPDATE usuario SET nom_usu=nom_usu,ape_usu=ape_usu,gen_usu=gen_usu,tel_usu=tel_usu,img_usu=img_usu WHERE id_usu=id_usu;
 
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarFecha` (IN `id_usu` INT)  BEGIN 

SELECT DATE_FORMAT(curdate(),'%Y')-DATE_FORMAT(fec_nac_usu,'%Y') AS edad FROM usuario WHERE id_usu=id_usu;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `token` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `id_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`token`, `contra`, `id_usu`) VALUES
('51f057ff4f452f2b5607538418068066', '$2y$10$7YRpbIrj.YIp2kaKxtx4xOXJEksPvPCjfzQhIELSQQEn.KbHMMLmq', 20),
('5f2f9c1fa9357c5a5707c976d142550b', '$2y$10$2Foo5gXvdlCqn08lBwsLxe.Dvz3VH983VNlrLfFAPh7z7z2GWura.', 14),
('66abee6b95901f3bddf45796b2d15b5a', '$2y$10$RNi5ooY/foDjZpdqfOawLeYkvvLwNA1QnayUg5Xu6TJN5O9gKXUDC', 13),
('7a807b4f1e222ce31ce33cdbdcd0ed82', '$2y$10$fbyBCZ7K4hFwWA6DARGJx.MWrFKLLc6Aweky11N2w0qs4Ru7JKlbO', 16),
('99c6c3e33d8d604704f351677e121e59', '$2y$10$3uoYf7bw9Jfpq68610zFfuSf6l/MGyjIgdIbfaP8.V1Axo0kH0PV6', 15),
('b49f88b31a28d80eaa6b37f438bf391e', '$2y$10$itcBRG9KCTC9YjSsGDeo1..4NrwpcIvdy5oaBoVYy1M1gYPb5kSsi', 18),
('b5b998acfab60179866c09379f183779', '$2y$10$GfAP2tRhcxEYogtfXVIbw.Xjsu2.5i1Ze1KOoSl0xoDjerg0kVeU2', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_cal` int(11) NOT NULL,
  `pun_cal` varchar(20) NOT NULL
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
  `id_sup` int(11) DEFAULT NULL,
  `id_cal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_usu`
--

CREATE TABLE `calificacion_usu` (
  `id_cal` int(11) DEFAULT NULL,
  `id_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `cod_ciu` int(11) NOT NULL,
  `nom_ciu` varchar(30) NOT NULL,
  `cod_dpto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`cod_ciu`, `nom_ciu`, `cod_dpto`) VALUES
(1, 'Medellin', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_ped` int(11) NOT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `can_pro` int(11) DEFAULT NULL,
  `val_tot` float DEFAULT NULL,
  `cod_ped` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0, 'VALLE', 654);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `cod_pais` int(11) NOT NULL,
  `nom_pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`cod_pais`, `nom_pais`) VALUES
(0, 'china'),
(654, 'COLOMBIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_ped` int(30) NOT NULL,
  `emp_ped` int(11) DEFAULT NULL,
  `fec_ped` date DEFAULT NULL,
  `id_usu` int(11) DEFAULT NULL,
  `dir_ped` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`cod_ped`, `emp_ped`, `fec_ped`, `id_usu`, `dir_ped`) VALUES
(1, 1, '2018-02-06', 1, 'calle 56 # 34-77');

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
(1, 4, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int(11) NOT NULL,
  `nom_pro` varchar(30) NOT NULL,
  `des_pro` varchar(300) NOT NULL,
  `img_pro` varchar(255) DEFAULT NULL,
  `mar_pro` varchar(30) NOT NULL,
  `id_tip_pro` int(11) DEFAULT NULL,
  `can_pro` int(11) DEFAULT NULL,
  `fec_ing_pro` date DEFAULT NULL,
  `uniMed_pro` varchar(30) DEFAULT NULL,
  `valCom_pro` float DEFAULT NULL,
  `valVen_pro` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `nom_pro`, `des_pro`, `img_pro`, `mar_pro`, `id_tip_pro`, `can_pro`, `fec_ing_pro`, `uniMed_pro`, `valCom_pro`, `valVen_pro`) VALUES
(1, 'arroz', 'arroz', '', 'roa', 1, 4, '0000-00-00', 'kl', 1000, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_prov` int(11) NOT NULL,
  `nom_prov` varchar(50) NOT NULL,
  `dir_prov` varchar(30) NOT NULL,
  `tel_prov` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_prov`, `nom_prov`, `dir_prov`, `tel_prov`) VALUES
(1, 'coca-cola', 'calle 09-089', '213456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_productos`
--

CREATE TABLE `proveedores_productos` (
  `id_prov` int(11) DEFAULT NULL,
  `id_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'supermercado'),
(3, 'empleado'),
(4, 'administrador ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `id_sup` int(11) NOT NULL,
  `nom_sup` varchar(50) NOT NULL,
  `dir_sup` varchar(50) NOT NULL,
  `tel_sup` varchar(11) NOT NULL,
  `cod_ciu` int(11) DEFAULT NULL,
  `logo_sup` varchar(255) DEFAULT NULL,
  `lon_sup` varchar(100) DEFAULT NULL,
  `lat_sup` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tip_pro` int(11) NOT NULL,
  `nom_tip_pro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tip_pro`, `nom_tip_pro`) VALUES
(1, 'guffy'),
(213123, 'cereales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `ape_usu` varchar(50) NOT NULL,
  `fec_nac_usu` date NOT NULL,
  `gen_usu` varchar(20) NOT NULL,
  `tel_usu` varchar(11) NOT NULL,
  `email_usu` varchar(50) NOT NULL,
  `cod_ciu` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `img_usu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nom_usu`, `ape_usu`, `fec_nac_usu`, `gen_usu`, `tel_usu`, `email_usu`, `cod_ciu`, `id_rol`, `img_usu`) VALUES
(13, 'hjkhjk', 'gjhghjg', '1999-12-31', 'm', '98789', '7@11.c', 1, 1, NULL),
(14, 'dagobert', 'suarez', '1999-12-12', 'm', '67877878', 'dagobert@gmail.com', 1, 1, NULL),
(15, 'alex', 'myuÃ±o<', '1988-02-13', 'm', '1234567', 'alex@gmail.com', 1, 3, NULL),
(16, '98797', '123', '1999-12-29', 'm', '6757', 'hgjhg@hoadsa.c', 1, 3, NULL),
(18, 'jhkhkj', 'hjkh', '1999-12-30', 'f', '8976', '786@aa.c', 1, 2, NULL),
(19, 'alexis', 'muÃ±ox', '1999-04-23', 'm', '1234567', 'alexis@gmail.com', 1, 1, NULL),
(20, 'sena', 'calatrava', '2000-01-01', 'm', '213123', 'adssadsafdsa@hotmail.com', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_supermercado`
--

CREATE TABLE `usuario_supermercado` (
  `id_usu` int(11) DEFAULT NULL,
  `id_sup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`token`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_cal`);

--
-- Indices de la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD KEY `id_sup` (`id_sup`),
  ADD KEY `id_cal` (`id_cal`);

--
-- Indices de la tabla `calificacion_usu`
--
ALTER TABLE `calificacion_usu`
  ADD KEY `id_cal` (`id_cal`),
  ADD KEY `id_usu` (`id_usu`);

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
  ADD KEY `cod_ped` (`cod_ped`),
  ADD KEY `cod_pro` (`id_pro`);

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
  ADD KEY `id_usu` (`id_usu`);

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
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_tip_pro` (`id_tip_pro`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  ADD KEY `id_prov` (`id_prov`),
  ADD KEY `cod_pro` (`id_pro`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD PRIMARY KEY (`id_sup`),
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
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `email_usu` (`email_usu`),
  ADD KEY `cod_ciu` (`cod_ciu`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `usuario_supermercado`
--
ALTER TABLE `usuario_supermercado`
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `id_sup` (`id_sup`);

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
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod_ped` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  MODIFY `id_sup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tip_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213124;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD CONSTRAINT `calificacion_supermercado_ibfk_1` FOREIGN KEY (`id_sup`) REFERENCES `supermercado` (`id_sup`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificacion_supermercado_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificacion_usu`
--
ALTER TABLE `calificacion_usu`
  ADD CONSTRAINT `calificacion_usu_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificacion_usu_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`cod_dpto`) REFERENCES `dpto` (`cod_dpto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `productos` (`id_pro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`cod_ped`) REFERENCES `pedido` (`cod_ped`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `dpto`
--
ALTER TABLE `dpto`
  ADD CONSTRAINT `dpto_ibfk_1` FOREIGN KEY (`cod_pais`) REFERENCES `pais` (`cod_pais`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_tip_pro`) REFERENCES `tipo_producto` (`id_tip_pro`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  ADD CONSTRAINT `proveedores_productos_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `proveedores` (`id_prov`) ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedores_productos_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `productos` (`id_pro`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD CONSTRAINT `supermercado_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_ciu`) REFERENCES `ciudad` (`cod_ciu`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_supermercado`
--
ALTER TABLE `usuario_supermercado`
  ADD CONSTRAINT `usuario_supermercado_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_supermercado_ibfk_2` FOREIGN KEY (`id_sup`) REFERENCES `supermercado` (`id_sup`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
