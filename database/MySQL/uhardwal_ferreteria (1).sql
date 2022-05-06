-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-05-2022 a las 01:24:36
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uhardwal_ferreteria`
--
CREATE DATABASE IF NOT EXISTS `uhardwal_ferreteria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `uhardwal_ferreteria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacorauser`
--

DROP TABLE IF EXISTS `bitacorauser`;
CREATE TABLE IF NOT EXISTS `bitacorauser` (
  `iduser` int(11) NOT NULL,
  `typeid_id` int(11) NOT NULL,
  `numid` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nomuser` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apeuser` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `emailuser` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nick` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `daterecover` datetime NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  KEY `state_id` (`rol_id`),
  KEY `rol_id` (`rol_id`),
  KEY `typeid_id` (`typeid_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bitacorauser`
--

INSERT INTO `bitacorauser` (`iduser`, `typeid_id`, `numid`, `nomuser`, `apeuser`, `emailuser`, `nick`, `pass`, `rol_id`, `daterecover`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, '1006051844', 'Andres', 'Acosta', 'acostabuitrago0123@gmail.com', 'Acostica', '123456', 1, '2021-09-11 19:15:41', 1, NULL, NULL),
(2, 1, '1006099645', 'Stiven', 'Ortega', 'nelkon2214@gmail.com', 'StivenO', '123456', 1, '2021-09-11 19:16:17', 1, NULL, NULL),
(3, 1, '1143874826', 'Marlon', 'Mayorga', 'marlonmayorga@gmail.com', 'MarlonM', '123456', 1, '2021-09-11 19:16:17', 1, NULL, NULL),
(4, 1, '1005979098', 'Andres', 'Arroyave', 'arroyavezapata@hotmail.com', 'Arroyave', '123456', 1, '2021-09-11 20:34:43', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `idcategory` int(11) NOT NULL,
  `nomcategory` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`idcategory`, `nomcategory`, `state`, `updated_at`, `created_at`) VALUES
(1, 'Herramientas', 1, '2021-10-10 17:47:49', NULL),
(2, 'Materiales', 1, NULL, NULL),
(3, 'N/N', 1, NULL, NULL),
(6, 'Otro', 0, '2021-10-11 18:00:23', '2021-10-10 17:42:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operationtype`
--

DROP TABLE IF EXISTS `operationtype`;
CREATE TABLE IF NOT EXISTS `operationtype` (
  `idopetype` int(11) NOT NULL,
  `nomopetype` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idopetype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `operationtype`
--

INSERT INTO `operationtype` (`idopetype`, `nomopetype`, `state`, `updated_at`, `created_at`) VALUES
(1, 'Venta', 1, '2021-10-12 04:57:54', NULL),
(2, 'Compra', 1, '2021-10-12 04:58:11', NULL),
(3, 'N/N', 1, NULL, NULL),
(4, 'Otros', 0, '2021-10-12 00:56:35', '2021-10-12 00:34:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `idperson` int(11) NOT NULL,
  `typeid_id` int(11) NOT NULL,
  `numid` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nomperson` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apeperson` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ptype_id` int(11) NOT NULL,
  `emailperson` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idperson`),
  KEY `typeid_id` (`typeid_id`),
  KEY `ptype_id` (`ptype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`idperson`, `typeid_id`, `numid`, `nomperson`, `apeperson`, `address`, `phone`, `ptype_id`, `emailperson`, `state`, `created_at`, `updated_at`) VALUES
(1, 7, 'N/N', 'N/N', 'N/N', 'N/N', 'N/N\r\n', 3, 'N/N', 1, NULL, NULL),
(3, 1, '100611869', 'Jose', 'DelaCruz', 'WiCALLE 68 No 28B-16 ', '301 202 9700', 1, 'omairadiaz@gmail.com', 1, NULL, NULL),
(4, 1, '1106108696', 'Raul', 'Melo', 'CRA 29 No 69-21', '316 741 2394', 1, 'raulmelo@gmail.com', 1, NULL, NULL),
(6, 1, '1006138696', 'Luis', 'Henao', 'CRA 24 No 73-42', '317 376 6110', 2, 'luishenao@gmail.com', 1, NULL, NULL),
(8, 1, '10537216', 'Jorge', 'Ortega', 'CRA 20 No 14-39 ', '310 512 7476', 1, 'jorgeortega@gmail.com', 1, NULL, NULL),
(10, 2, '123456789', 'Alonso', 'Moreno Castaño', 'Diag 66 No 31-339', '310 415 6549', 1, 'jaczamorano@gmail.com', 1, NULL, NULL),
(11, 1, '9001274376', 'Edi', 'Rodriguez', 'CRA. 32 No.60-05', '310 731 0566\r\n', 1, 'edirodriguez@gmail.com', 1, NULL, NULL),
(12, 1, ' 34542680', 'Elizabeth', 'Cobo', 'CALLE 71 No.22A-101', '300 299 9905', 1, 'elizabethcobo@gmail.com', 1, NULL, NULL),
(13, 1, '91154963', 'Alberto', 'Lozado', 'CRA 35 No 73-40', '315 370 6052', 1, 'albertolozada@gmail.com', 1, NULL, NULL),
(14, 1, '76318697', 'Cesar', 'Muriel', 'CRA 20 No 50-35 ', '313 445 5632', 1, 'cesarmuriel@gmail.com', 1, NULL, NULL),
(15, 1, '34570846', 'Liliana', 'Colina', 'CRA 28 No 20-39 ', '315 452 7147', 1, 'lilianacolina@gmail.com', 1, NULL, NULL),
(16, 1, '76327624', 'Javier', 'Collazos Jacinto', 'CALLE 62 No 20C-17 ', '312 202 4758', 1, 'javierjacinto@gmail.com', 1, NULL, NULL),
(18, 1, ' 34545367 ', 'Amparo', 'Lopez', 'Diag 57 No 37-445', '314 874 5236', 1, 'amparolopez@gmail.com', 1, NULL, NULL),
(19, 1, '34571854', 'Angelica', 'Conde', 'CRA 42 No 32-40', '315 456 1478', 1, 'angelicaconde@gmail.com', 1, NULL, NULL),
(20, 1, '10529443', 'Jaime', 'Mora', 'CRA 41 No 52-38 ', '313 965 4896', 1, 'jiamemora@gmail.com', 1, NULL, NULL),
(21, 1, '19427110', 'Hugo', 'Conchuelo', 'CRA 32 No 14-20 ', '320 254 4785', 1, 'hugoconchuelo@gmail.com', 1, NULL, NULL),
(22, 1, ' 31868353', 'Olga', 'Cordoba', 'CALLE 24 No 27C-15 ', '312 204 7359', 1, 'olgacordoba@gmail.com', 1, NULL, NULL),
(23, 1, '19371844', 'Joge', 'Garcia', 'CRA 22 No 41-26', '315 761 4157', 1, 'jorgegarcia@gmail.com', 1, NULL, NULL),
(24, 1, '16776407', 'Hernando', 'Cortes', 'Diag 31 No 30-745', '313 874 5462', 1, 'hernandocortes@gmail.com', 1, NULL, NULL),
(25, 1, '1006051844', 'Khate', 'Gómez', 'Cra. 62 1#9A2', '3176584261', 1, NULL, 1, NULL, NULL),
(26, 1, '1006051855', 'Khate', 'Gómez', 'Cra. 62 1#9A2', '3176584261', 1, NULL, 1, NULL, NULL),
(28, 1, '1006978555', 'Industris', 'Gómez', 'Cra. 62 1#9A2', '3176584261', 2, 'industris@gmail.com', 1, NULL, NULL),
(29, 4, '9', '0', '0', '0', '9', 1, '0@0.com', 1, '2021-10-30 00:40:38', '2021-10-30 00:40:38'),
(30, 2, '9', 'Nelson', 'Ortega', 'Calle 62 #1b-90', '978789789789', 1, 'nelkon2214@gmail.com', 1, '2021-10-30 00:41:13', '2021-10-30 00:41:13'),
(31, 7, '0', '0', '0', '0', '0', 1, '9999@9.9', 1, '2021-10-30 00:49:55', '2021-10-30 00:49:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(11) NOT NULL,
  `nomproduct` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `stockmin` int(3) NOT NULL,
  `pricein` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `priceout` int(10) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `state` tinyint(1) DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idproduct`),
  KEY `unit_id` (`unit_id`,`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`idproduct`, `nomproduct`, `image`, `description`, `stockmin`, `pricein`, `quantity`, `priceout`, `unit_id`, `category_id`, `state`, `updated_at`, `created_at`) VALUES
(2, 'Cinta Led', '', 'dispositivo semiconductor sólido que convierte una corriente eléctrica entrante de intensidad leve en una luz', 10, 4000, 6, 5000, 4, 2, 0, '2021-10-25 17:22:15', NULL),
(3, 'Bombilla Incandescente', '', 'lámpara incandescente(foco),es un dispositivo que emite luz debido al paso de corriente eléctrica a través de un filamento.', 10, 1900, 11, 3000, 3, 3, 1, NULL, NULL),
(4, 'Alicate', '', 'tenaza metálica provista de dos brazos suele ser utilizada para múltiples funciones como sujetar elementos pequeños o cortar y modelar conductores, etc.', 5, 8700, 10, 10000, 1, 1, 0, '2021-10-09 23:22:58', NULL),
(5, 'Metro Pegable', '', 'instrumento de medida de uno o dos metros de largo con segmentos plegables.', 10, 3800, 12, 5200, 3, 1, 1, NULL, NULL),
(6, 'Cinta Aislante ', '', 'herramienta que se utiliza para apretar y aflojar tornillos y otros elementos.', 10, 2000, 20, 2500, 3, 1, 1, NULL, NULL),
(7, 'Espátula', '', 'herramienta que consiste en una lámina plana de metal con agarradera o mango, 2 pulgadas', 6, 5900, 12, 7000, 3, 1, 1, NULL, NULL),
(8, 'Espátula ', '', 'herramienta que consiste en una lámina plana de metal con agarradera o mango, 3 pulgadas', 12, 6800, 15, 8000, 3, 1, 1, NULL, NULL),
(9, 'cable de fibra', '', 'herramienta que consiste en una lámina plana de metal con agarradera o mango, 4 pulgadas', 12, 9500, 12, 11000, 3, 1, 1, '2021-10-10 00:40:17', NULL),
(10, 'Taladro', '', 'herramienta con la que se mecanizan la mayoría de los agujeros que se hacen a las piezas en los talleres mecánicos.', 3, 55000, 7, 70000, 3, 1, 1, NULL, NULL),
(11, 'Martillo', '', 'herramienta de percusión utilizada para golpear directamente o indirectamente​ una pieza, causando su desplazamiento.', 6, 9800, 10, 11200, 3, 1, 1, NULL, NULL),
(12, 'Destornillador Pala', '', 'Herramienta que se utiliza para apretar y aflojar tornillos.', 5, 8500, 12, 10100, 3, 1, 1, NULL, NULL),
(13, 'Destornillador Estrella', '', 'Herramienta que se utiliza para apretar y aflojar tornillos.', 5, 8500, 10, 10500, 3, 1, 1, NULL, NULL),
(14, 'Puntilla Acero', '', 'objeto delgado y alargado con punta filosa hecho de un metal duro (por lo general acero). 2 pulgadas, 500g.', 10, 2000, 20, 2500, 4, 2, 1, NULL, NULL),
(15, 'Alambre de Hierro', '', 'hilo delgado que se obtiene por estiramiento de los diferentes metales. Calibre 14', 5, 6300, 7, 7600, 5, 2, 1, NULL, NULL),
(16, 'Pinza', '', 'Pinza de corte diagonal.', 8, 15500, 11, 18000, 3, 1, 1, NULL, NULL),
(17, 'Ponchadora ', '', 'Herramienta de punción con carga de resorte utilizado para empujar los hilos entre los pins de metal, permitiendo pelar al mismo tiempo el revestimiento del cable.', 2, 23000, 5, 27000, 3, 1, 1, NULL, NULL),
(18, 'Tornillo Aglomerado', '', 'tornillo diseñado para la madera aglomerada. Es muy eficiente por su forma de la rosca. 7x3, 100 un.', 5, 55000, 13, 10500, 4, 1, 1, NULL, NULL),
(19, 'Abrazadera', '', 'pieza de metal u otro material que sirve para asegurar tuberías o conductos de cualquier tipo. 3/8\" A 5/8\"', 15, 2300, 25, 3000, 3, 1, 1, NULL, NULL),
(20, 'Amarres Plasticos', '', '100 unidades blancas de 40cm.', 5, 9000, 12, 10500, 4, 1, 1, NULL, NULL),
(21, 'Rodillo ', '', 'instrumento que se utiliza para pintar paredes y otras superficies.\r\nFelpa acrílica de 9 pulgadas.', 8, 6200, -54, 7800, 2, 1, 1, NULL, NULL),
(22, 'Brocha', '', 'Instrumento consistente en un conjunto de cerdas unidas a un mango que se utiliza para pintar o para otros fines.\r\n2 Pulgadas', 10, 6500, 16, 7500, 3, 1, 1, NULL, NULL),
(23, 'Brocha', '', 'Instrumento consistente en un conjunto de cerdas unidas a un mango que se utiliza para pintar o para otros fines.\r\n3 Pulgadas', 10, 8200, 15, 10000, 3, 1, 1, NULL, NULL),
(24, 'Brocha', '', 'Instrumento consistente en un conjunto de cerdas unidas a un mango que se utiliza para pintar o para otros fines.\r\n4 Pulgadas', 10, 9100, 13, 11000, 3, 1, 1, NULL, NULL),
(25, 'Palustre', '', 'utensilio que se usa para manipular y extender el mortero o la argamasa.\r\n6,5 Pulgadas', 10, 9900, 12, 11800, 3, 1, 1, NULL, NULL),
(29, 'Bombilla Led', '', 'dispositivo semiconductor sólido que convierte una corriente eléctrica entrante de intensidad leve en una luz', 10, 4000, 15, 5000, 3, 3, 0, '2021-10-10 00:20:55', '2021-10-10 00:20:19'),
(31, 'Otro de prueba', '', 'una prueba bien pruebona', 9, 900, 76, 3000, 2, 3, 1, '2021-10-10 20:02:20', '2021-10-10 20:00:58'),
(32, '1', '', '1', 1, 1, 1, 1, 1, 1, 0, '2021-10-11 01:15:47', '2021-10-11 01:15:40'),
(34, 'Pruebacon', '4', 'Descripción product 123456789', 5, 5, 4, 200, 6, 3, 1, '2021-10-25 16:52:20', '2021-10-25 16:52:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ptype`
--

DROP TABLE IF EXISTS `ptype`;
CREATE TABLE IF NOT EXISTS `ptype` (
  `idptype` int(11) NOT NULL,
  `nomptype` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ptype`
--

INSERT INTO `ptype` (`idptype`, `nomptype`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Cliente', 1, NULL, NULL),
(2, 'Proveedor', 1, NULL, NULL),
(3, 'N/N', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(11) NOT NULL,
  `nomrol` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nomrol`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 1, NULL, NULL),
(2, 'Usuario', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sell`
--

DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `idsell` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `opetype_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cantproduct` int(11) NOT NULL,
  `cash` int(20) NOT NULL,
  `disc` int(20) NOT NULL,
  `date` datetime NOT NULL,
  `total` int(20) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sell`
--

INSERT INTO `sell` (`idsell`, `person_id`, `user_id`, `opetype_id`, `product_id`, `cantproduct`, `cash`, `disc`, `date`, `total`, `state`, `updated_at`, `created_at`) VALUES
(1, 11, 4, 1, 2, 3, 5000, 0, '2021-05-08 18:32:35', 5000, 1, '2021-10-12 04:23:53', NULL),
(2, 3, 2, 2, 2, 3, 8700, 600, '2021-05-08 18:32:35', 8100, 1, NULL, NULL),
(3, 1, 2, 1, 2, 3, 5200, 700, '2021-05-08 18:32:35', 4500, 0, '2021-10-12 04:57:42', NULL),
(4, 3, 3, 2, 2, 3, 5900, 800, '2021-05-08 18:32:35', 5100, 1, NULL, NULL),
(5, 1, 2, 1, 2, 3, 11000, 900, '2021-05-08 18:32:35', 10100, 1, NULL, NULL),
(6, 3, 3, 1, 2, 3, 8000, 800, '2021-05-08 18:32:35', 7200, 1, NULL, NULL),
(7, 11, 4, 1, 2, 3, 70000, 700, '2021-05-08 18:32:35', 69300, 1, NULL, NULL),
(8, 3, 2, 1, 2, 3, 11200, 600, '2021-05-08 18:32:35', 10600, 1, NULL, NULL),
(9, 1, 2, 1, 2, 3, 10100, 500, '2021-05-08 18:32:35', 9600, 1, NULL, NULL),
(10, 3, 3, 1, 2, 3, 10500, 400, '2021-05-08 18:32:35', 10100, 1, NULL, NULL),
(11, 1, 2, 1, 2, 3, 2500, 300, '2021-05-08 18:32:35', 2200, 1, NULL, NULL),
(12, 3, 3, 1, 2, 3, 7600, 200, '2021-05-08 18:32:35', 7400, 1, NULL, NULL),
(13, 14, 4, 1, 2, 3, 18000, 100, '2021-05-08 18:32:35', 17900, 1, NULL, NULL),
(14, 15, 2, 1, 2, 3, 27000, 200, '2021-05-08 18:32:35', 26800, 1, NULL, NULL),
(15, 23, 2, 2, 2, 3, 10500, 300, '2021-05-08 18:32:35', 10200, 1, NULL, NULL),
(16, 24, 3, 1, 2, 3, 3000, 400, '2021-05-08 18:32:35', 2600, 1, NULL, NULL),
(17, 10, 2, 1, 2, 3, 10500, 500, '2021-05-08 18:32:35', 10000, 1, NULL, NULL),
(18, 11, 3, 2, 2, 3, 6200, 600, '2021-05-08 18:32:35', 5600, 1, NULL, NULL),
(19, 11, 4, 1, 2, 3, 7500, 500, '2021-05-08 18:32:35', 7000, 1, NULL, NULL),
(20, 6, 2, 1, 2, 3, 10000, 700, '2021-05-08 18:32:35', 9300, 1, NULL, NULL),
(21, 19, 2, 1, 2, 3, 11000, 800, '2021-05-08 18:32:35', 10200, 1, NULL, NULL),
(22, 13, 3, 1, 2, 3, 11800, 900, '2021-05-08 18:32:35', 10900, 1, NULL, NULL),
(23, 18, 2, 2, 2, 3, 2000, 700, '2021-05-08 18:32:35', 1300, 0, NULL, NULL),
(24, 8, 3, 2, 2, 3, 6500, 600, '2021-05-08 18:32:35', 5900, 1, NULL, NULL),
(27, 1, 1, 2, 31, 1, 1, 1, '2021-10-24 09:44:00', 1, 1, '2021-10-24 14:44:35', '2021-10-24 14:44:35'),
(28, 1, 1, 1, 31, 1, 1, 1, '2021-10-24 09:46:00', 1, 1, '2021-10-24 14:46:35', '2021-10-24 14:46:35'),
(29, 1, 1, 2, 31, 1, 1, 1, '0001-01-01 01:01:00', 1, 1, '2021-10-24 14:47:44', '2021-10-24 14:47:44'),
(31, 1, 1, 3, 31, 1, 1, 0, '2021-10-24 09:54:00', 1, 1, '2021-10-24 14:55:04', '2021-10-24 14:55:04'),
(32, 1, 1, 3, 31, 1, 1, 0, '2021-10-24 09:56:00', 1, 1, '2021-10-24 14:56:34', '2021-10-24 14:56:34'),
(33, 1, 1, 3, 31, 1, 1, 2, '2021-10-24 09:58:00', 0, 1, '2021-10-24 14:58:10', '2021-10-24 14:58:10'),
(34, 1, 1, 1, 3, 1, 1, 1, '2021-10-24 10:15:00', 1, 1, '2021-10-24 15:15:55', '2021-10-24 15:15:55'),
(35, 1, 1, 3, 31, 1, 1, 0, '2021-10-24 10:17:00', 9, 1, '2021-10-24 15:17:08', '2021-10-24 15:17:08'),
(36, 1, 1, 3, 31, 1, 1, 0, '2021-10-24 10:18:00', 8, 1, '2021-10-24 15:18:46', '2021-10-24 15:18:46'),
(37, 1, 1, 3, 31, 1, 1, 0, '2021-10-24 10:19:00', 7, 1, '2021-10-24 15:19:31', '2021-10-24 15:19:31'),
(38, 1, 1, 1, 31, 1, 1, 0, '2021-10-25 07:58:00', 6, 1, '2021-10-25 12:58:32', '2021-10-25 12:58:32'),
(39, 3, 3, 1, 31, 1, 1, 0, '2021-10-25 08:00:00', 5, 1, '2021-10-25 13:00:46', '2021-10-25 13:00:46'),
(40, 3, 3, 1, 31, 3, 3, 0, '2021-10-25 10:47:00', 5, 1, '2021-10-25 15:47:11', '2021-10-25 15:47:11'),
(41, 3, 6, 1, 22, 2, 5000, 2000, '2021-10-31 12:50:00', 8000, 1, '2021-10-31 17:50:55', '2021-10-31 17:50:55'),
(42, 26, 6, 1, 21, 62, 18000, 30000, '2021-10-31 13:48:00', 1086000, 1, '2021-10-31 18:48:46', '2021-10-31 18:48:46');

--
-- Disparadores `sell`
--
DROP TRIGGER IF EXISTS `actualizarStock`;
DELIMITER $$
CREATE TRIGGER `actualizarStock` AFTER INSERT ON `sell` FOR EACH ROW UPDATE product set quantity= quantity - NEW.`cantproduct` where idproduct = NEW.`product_id`
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `actualizarStockCuandoSeElimine`;
DELIMITER $$
CREATE TRIGGER `actualizarStockCuandoSeElimine` AFTER DELETE ON `sell` FOR EACH ROW UPDATE product set quantity = quantity + OLD.`cantproduct` where idproduct = OLD.`product_id`
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeid`
--

DROP TABLE IF EXISTS `typeid`;
CREATE TABLE IF NOT EXISTS `typeid` (
  `idtypeid` int(11) NOT NULL,
  `nomtypeid` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `typeid`
--

INSERT INTO `typeid` (`idtypeid`, `nomtypeid`, `state`, `created_at`, `updated_at`) VALUES
(1, 'C.C.', 1, NULL, NULL),
(2, 'NIT', 1, NULL, NULL),
(3, 'T.I.', 1, NULL, NULL),
(4, 'P.A.', 1, NULL, NULL),
(5, 'C.E.', 1, NULL, NULL),
(6, 'R.C.', 1, NULL, NULL),
(7, 'N/N', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `idunit` int(11) NOT NULL,
  `nomunit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `unit`
--

INSERT INTO `unit` (`idunit`, `nomunit`, `state`, `updated_at`, `created_at`) VALUES
(1, 'metro(s)', 1, NULL, NULL),
(2, 'galon(es)', 1, NULL, NULL),
(3, 'unidad(es)', 1, NULL, NULL),
(4, 'paquete(s)', 1, NULL, NULL),
(5, 'Kg(s)', 1, NULL, NULL),
(6, 'N/N', 1, NULL, NULL),
(8, 'Pruebita', 0, '2021-10-11 01:02:25', '2021-10-11 01:02:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL,
  `typeid_id` int(11) NOT NULL DEFAULT '1',
  `numid` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nomuser` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apeuser` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nick` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(10) NOT NULL DEFAULT '2',
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `typeid_id`, `numid`, `image`, `nomuser`, `apeuser`, `email`, `nick`, `password`, `rol_id`, `state`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 5, '1006051844', 'fsfs', 'Andres', 'Acosta', 'acostabuitrago0123@gmail.com', 'Acostica', '123456', 1, 1, NULL, NULL, '2021-10-29 17:56:06'),
(2, 1, '1006099646', NULL, 'Stiven', 'Ortega', 'nelkon2214@gmail.com', 'StivenO', '$2y$10$QDYnXrlySr4oPoeUmyTJLOv6cWFOSWfkRDzfljDI67LYy7BCr1ByC', 1, 1, NULL, NULL, '2022-01-29 02:35:29'),
(3, 1, '1143874826', '', 'Marlon', 'Mayorga', 'marlonmayorga@gmail.com', 'MarlonM', '123456', 1, 1, NULL, NULL, NULL),
(4, 1, '1005979098', '', 'Andres', 'Arroyave', 'arroyavezapata@hotmail.com', 'Arroyave', '123456', 1, 1, NULL, NULL, NULL),
(6, 1, '1111111111', 'dfsd', 'Pruebin', 'fdsfd', 'prueba@prueba.com', 'Admin', '$2y$10$zXy0PW4VyJ1D7Ca0OaoNhuMnzyc2Hz4Swrqi1LxPh1YV1xcz5ls3W', 1, 1, NULL, '2021-10-27 22:05:06', '2021-12-02 14:42:58'),
(8, 1, NULL, NULL, NULL, NULL, 'stiven@s.com', 'Stiven', '$2y$10$xkHKp3KQeEwakU5vIB5n3.BqaIMWHn4OAayWrGRCLVq6139NcgEBa', 1, 1, NULL, '2021-10-28 21:12:02', '2021-10-28 21:12:02'),
(9, 1, NULL, NULL, NULL, NULL, 'prueba@prueba.com', NULL, '$2y$10$A936iPGjfTTYCXxE/J5AjuWCbEKdm1IZ/kSu2Fco2u8Qr1s5GosqW', 1, 1, NULL, '2021-10-28 21:13:14', '2021-11-01 00:36:19'),
(10, 1, NULL, NULL, NULL, NULL, 'fsafdsf@gfsdg', 'niidea', '$2y$10$gZIGlYeoR2H74ZD6/vx1pe4Qk00i3hEyIkmaF/pZkOes2YT6u4AMK', 1, 1, NULL, '2021-10-28 21:13:38', '2021-10-28 21:13:38'),
(11, 3, '00000000000', 'sdf', 'dfsdf', 'dsf', 'nfdasfsd@gmail.com', 'qwrwe', 'sxs', 1, 1, NULL, '2021-10-29 18:22:06', '2021-10-29 18:22:06'),
(12, 6, '10000000000', NULL, 'funciona', 'dsgg', 'fddfdf@hola.com', 'User2', '$2y$10$kHBpPtccvKbuurlvCQgip.8m9O.IypZt/b9XtmIAkAxgPOep6p/2u', 2, 1, NULL, '2021-10-29 21:54:23', '2021-12-02 14:44:17'),
(13, 6, '00000000000', 'sdf', 'aaaaaaaaaaa', 'wwwwwww', 'aawww@gmail.com', 'aaaaaaa', '$2y$10$E7TxwQ9UobnUFAzjUhCCG.aVTO7YVesIIw23x/KAza8g8Pae4no3i', 2, 1, NULL, '2021-10-29 21:58:54', '2021-10-29 21:58:54'),
(14, 1, NULL, NULL, NULL, NULL, 'holasdafsd@sfd', NULL, '$2y$10$GFcuLQ.84LpAtuEQwu0RNOfm7fMqebwZqlS1OrmtDOek7y3RF50cG', 2, 1, NULL, '2021-10-31 04:00:07', '2021-10-31 04:00:07'),
(15, 1, NULL, NULL, NULL, NULL, 'holadsgsdg@dgfsd', NULL, '$2y$10$Z9ZzXp.A3z12VmuRRtsFyuN3zOotLwo4NFLIMtEOkGSYQPwCr4ZC6', 2, 1, NULL, '2021-10-31 04:00:44', '2021-10-31 04:00:44'),
(16, 1, NULL, NULL, NULL, NULL, 'sdfsd@asf', NULL, '$2y$10$VtG5XmMmwD6Wqn8iwHnVkOLexRbXkE2BLxV7Nwoaz5qFLPfzO6dXG', 2, 0, NULL, '2021-10-31 04:01:42', '2021-11-01 00:35:37'),
(17, 1, NULL, NULL, NULL, NULL, 'holadsag@a', NULL, '$2y$10$LA3OoZQfSGFuX7BGaFxnT.bq2bMPa9As8yl2fM7jACQGFuYrSLU5q', 2, 0, NULL, '2021-10-31 04:02:11', '2021-11-01 00:35:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
