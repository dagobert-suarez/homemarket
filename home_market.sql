-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2018 a las 23:48:13
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_categoria` (IN `nom_tip_pro` VARCHAR(30))  BEGIN
INSERT INTO tipo_producto
(nom_tip_pro)
values(nom_tip_pro);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_pro` (IN `nom_pro` VARCHAR(30), IN `des_pro` VARCHAR(300), IN `img_pro` VARCHAR(255), IN `mar_pro` VARCHAR(30), IN `id_tip_pro` INT, IN `can_pro` INT, IN `uniMed_pro` VARCHAR(30), IN `valCom_pro` FLOAT, IN `valVen_pro` FLOAT)  BEGIN
 
 INSERT INTO productos VALUES (nom_pro,des_pro,mar_pro,id_tip_pro,can_pro,img_pro,uniMed_pro,valCom_pro,valVen_pro);
 
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
('09d1d2636296f0c6bc8965851e1bb480', '$2y$10$CTYHbrIC6npAquYz9Dj8dO6qjlhbs0DcksdfbfebpjoQ3NtCZxume', 29),
('0ae1e6ddf3d2ce0f0032bec13d1fe101', '$2y$10$yRR52V16dXgqpgcO5aKhd.bokqm.3AHAPyJPQ6NwOfI9KbpeMtfeC', 114),
('29563b8eb9dd6ff692a304a526ba3cd6', '$2y$10$JDYvC1zC17xL0de0UbOv9eectFWJIj/YUtERfrmAdzWZKEBa5RsYy', 233),
('3a344bf88dae7cad35f8f5eeef14260d', '$2y$10$V04blI/9cNGS2GqScEdMIOZrpnJKNTAZQ7zfI8PPjei7TNbI4wSzu', 234),
('5f2f9c1fa9357c5a5707c976d142550b', '$2y$10$2Foo5gXvdlCqn08lBwsLxe.Dvz3VH983VNlrLfFAPh7z7z2GWura.', 14),
('66abee6b95901f3bddf45796b2d15b5a', '$2y$10$RNi5ooY/foDjZpdqfOawLeYkvvLwNA1QnayUg5Xu6TJN5O9gKXUDC', 13),
('a8803de898afa25d6187da0ef1fca749', '$2y$10$Yhi12CDWbh5sbPX983Ulp.1CF83f4XVBThH9lAmPH8BzGFk.Ocfhi', 28),
('b4b871c87f927762c3671e9b582a459d', '$2y$10$oqb09eEtnSUg61yrFw/r4.jbQwqENupyWHnhByPSv2p1U0XF9l0QW', 24),
('bfed46efc9182d0bf84c7fabe25dee79', '$2y$10$/nAy4ctydxOL3hSLOWyG0OK899JTQxkSTDCIZCQdouwTTX8BaKi2W', 37),
('e54ac43814edc3eadb46f3789a2a44a2', '$2y$10$lNY8GOmtbp8ytkWYr8s64eUqbSfv2QbQauapgigggc.IXZW1bfaji', 38);

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
(1, 'arroz', 'arroz', '', 'roa', 1, 4, '0000-00-00', 'kl', 1000, 2000),
(2, 'Huevos', 'nas', NULL, 'los huwboa', NULL, 22, '2018-03-06', 'canasta', 3000, 4000);

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

--
-- Volcado de datos para la tabla `supermercado`
--

INSERT INTO `supermercado` (`id_sup`, `nom_sup`, `dir_sup`, `tel_sup`, `cod_ciu`, `logo_sup`, `lon_sup`, `lat_sup`) VALUES
(1, 'los buenos', '2537', '32323', 1, NULL, NULL, NULL),
(2, 'las malas', 'safewr324', '234', 1, NULL, NULL, NULL);

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
(1, 'carnes'),
(2, 'pastas'),
(3, 'granos'),
(5, 'Lacteos'),
(6, 'Carnes Frias'),
(11, 'Cuidado Personal'),
(12, 'Aseo'),
(14, 'Bebidas'),
(17, 'Drogueria'),
(18, 'Frutas y verduras'),
(19, 'Licores');

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
(25, 'dagobert', 'suarez', '1999-09-27', 'm', '4356523', 'cliente@gmail.com', 1, 1, NULL),
(26, 'dagobert', 'suarez', '1999-12-12', 'm', '2121212', 'dasuarez@gmail.com', 1, 1, NULL),
(28, 'daniel', 'acevedo', '1998-12-12', 'm', '23232', 'daniel@gmail.com', 1, 1, NULL),
(29, 'empleado', 'delsuper', '1995-02-12', 'm', '1212321', 'empleado@gmail.com', 1, 3, NULL),
(30, 'dagobert', 'suarez', '1978-12-12', 'm', '656576', 'dagobertagudelo@hotmail.com', 1, 1, NULL),
(35, 'dagobert', 'suarez', '1978-12-12', 'm', '656576', 'supersuper@hotmail.com', 1, 1, NULL),
(37, 'sajdnjn', 'kjand', '1998-05-05', 'm', '65789', 'prueba@gmail.com', 1, 1, NULL),
(38, 'daneilo', 'torogil', '1999-08-31', 'm', '4563456', 'daneilo@hotmail.com', 1, 1, NULL),
(114, 'david', 'herrera', '1999-11-29', 'm', '323', 'clienteC@gmail.com', 1, 1, NULL),
(233, 'juan', 'Slas', '1999-11-29', 'm', '277', 'juanEmple@gmail.com', 1, 3, NULL),
(234, 'david', 'guffy', '1999-11-29', 'm', '3233', 'supermer@gmail.com', 1, 2, NULL);

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
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  MODIFY `id_sup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tip_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion_supermercado`
--
ALTER TABLE `calificacion_supermercado`
  ADD CONSTRAINT `calificacion_supermercado_ibfk_1` FOREIGN KEY (`id_sup`) REFERENCES `supermercado` (`id_sup`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificacion_supermercado_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calificacion` (`id_cal`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
