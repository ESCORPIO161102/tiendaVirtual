-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2024 a las 09:55:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idmodulo` bigint(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
(1, 'ver', 'ds', 1),
(2, 'Editar o eliminar Usuario', 'gff', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermisos` bigint(20) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int(11) NOT NULL DEFAULT 0,
  `w` int(11) NOT NULL DEFAULT 0,
  `u` int(11) NOT NULL DEFAULT 0,
  `d` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermisos`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
(2, 7, 1, 1, 1, 1, 0),
(8, 20, 1, 0, 1, 0, 0),
(9, 20, 2, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` bigint(20) NOT NULL,
  `identificacion` varchar(30) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `nombrefiscal` varchar(80) NOT NULL,
  `direccionfiscal` varchar(100) NOT NULL,
  `token` varchar(80) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `nit`, `nombrefiscal`, `direccionfiscal`, `token`, `rolid`, `datecreated`, `status`) VALUES
(1, '54785652', 'Jhon', 'Altamirano', 956332546, 'jhon@gmail.com', '12345678', '', '', '', '', 12, '2024-10-02 17:15:25', 1),
(2, '55555555', 'Isei', 'Etsam', 999999999, 'isei@gmail.com', '5994471abb01112afcc18159f', '', '', '', '', 13, '2024-10-02 17:27:59', 0),
(3, 'ggd', 'Gdgf', 'Ffd', 6565656556, 'ffd@gmail.com', '5994471abb01112afcc18159f', '', '', '', '', 7, '2024-10-02 18:08:29', 2),
(4, 'fgd', 'Fg', 'D', 55353, 'gf@gmail.com', '46437ab18a6657040b4535297', '', '', '', '', 12, '2024-10-02 18:19:25', 0),
(5, '444444', 'JHONRRR', 'RODRIGUEZTTTTT', 900244954, 'josefff.38.rf@gmail.com', 'ef797c8118f02dfb649607dd5', '', '', '', '', 13, '2024-10-16 17:06:04', 1),
(6, '000001', 'GREISI', 'TARRILLO', 900003000, 'greisi@gmail.com', 'ef797c8118f02dfb649607dd5', '', '', '', '', 16, '2024-10-16 17:10:38', 1),
(7, '4444423', 'ENAR', 'VARGAS', 987654321, 'enar@gmail.com', 'ef797c8118f02dfb649607dd5', '', '', '', '', 14, '2024-10-16 17:11:27', 1),
(8, '010101', 'ERICK', 'AGUILAR', 901010101, 'erick@gmail.com', '966d54732fbe5b4c6e4cb7a4c', '', '', '', '', 15, '2024-10-16 17:12:16', 1),
(9, '66666666', 'JOSE JHON', 'RODRIGUEZ FERNANDEZ', 987456666, 'jhonn@gmail.com', 'cc399d73903f06ee694032ab0', '', '', '', '', 20, '2024-11-20 17:05:43', 0),
(10, '000326533', 'Jhon', 'Rodrigue', 900244908, 'jose.38.rf@gmail.com', 'd17f25ecfbcc7857f7bebea46', '', '', '', '', 19, '2024-11-20 17:15:49', 0),
(11, '7890544', 'JOSE JHON', 'RODRIGUEZ FERNANDEZ', 987456000, 'jhorrrn@gmail.com', 'cc399d73903f06ee694032ab0', '', '', '', '', 20, '2024-11-21 18:32:31', 0),
(12, '7896544', 'JOSE JHON', 'RODRIGUEZ FERNANDEZ', 987456000, 'jhon.1655.rf@gmail.com', 'f658d34bbd6a1c3e27771898e', '', '', '', '', 20, '2024-11-21 18:33:00', 0),
(13, '00000123', 'Rosa Belinda J', 'Rojas Peralta Mori', 987456326, 'jhoroorrn@gmail.com', '6460662e217c7a9f899208dd7', '', '', '', '', 20, '2024-11-21 19:27:40', 0),
(14, '000003', 'Yukiyyyyyyyyy', 'Rojas Gallardo', 936852147, 'yuki@gmail.com', 'e3b68a1c3618aaf3ea2a648ae', '', '', '', '', 20, '2024-11-22 11:14:06', 0),
(15, '0000005', 'Jhon', 'Rodriguez Fernandez', 963258741, 'jhy@gmail.com', '68c9de238e652d4dbc529a56d', '', '', '', '', 20, '2024-11-22 13:54:39', 0),
(16, '0001', 'Nilver', 'Navarro', 987654321, 'nilver@gmail.com', 'cc399d73903f06ee694032ab0', '', '', '', '', 18, '2024-12-06 17:01:54', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_accesorios`
--

CREATE TABLE `productos_accesorios` (
  `idproductoacc` bigint(20) NOT NULL,
  `codigo` int(30) NOT NULL,
  `nombre_producto` varchar(60) NOT NULL,
  `especificaciones` text NOT NULL,
  `color` varchar(20) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `fecha_registro` date NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_accesorios`
--

INSERT INTO `productos_accesorios` (`idproductoacc`, `codigo`, `nombre_producto`, `especificaciones`, `color`, `imagen`, `precio`, `fecha_registro`, `categoria`, `status`) VALUES
(43, 1, 'Mause Gamer Rayzer', 'Mause Gamer Rayzer Con Luces Rgb Con Alta Pracision Para Sacar Lo Mejor De Ti En Tus Juegos', 'RGB', '7.jpg', 356, '2024-12-13', 'Mause', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_laptops`
--

CREATE TABLE `productos_laptops` (
  `idproductolap` bigint(20) NOT NULL,
  `codigo` int(30) NOT NULL,
  `nombre_producto` varchar(60) NOT NULL,
  `especificaciones` text NOT NULL,
  `color` varchar(20) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `fecha_registro` date NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_laptops`
--

INSERT INTO `productos_laptops` (`idproductolap`, `codigo`, `nombre_producto`, `especificaciones`, `color`, `imagen`, `precio`, `fecha_registro`, `categoria`, `status`) VALUES
(44, 1, 'Laptop Gamer', '-laptop Gamer De 32gb De Ram. -SSD De 2T -con Targeta Grafica De 4gb', 'Plomo', '3.jpg', 5623, '2024-12-17', 'Laptops', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL,
  `nombrerol` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(18, 'Usuario Del Sistema', 'Usuario Del Sistema', 1),
(19, 'Cliente', 'Persona Que Realiza Sus Compras De Forma Frecuente', 1),
(20, 'Administrador Del Sistema', 'Es El Administrador Del Sistema', 1),
(22, 'Khijbi', 'kghyfcjytgxcdd', 0),
(23, 'JOSE JHONdfsag', 'ugyfiuytf', 0),
(24, 'sertherdf', 'dsfhsdz', 0),
(25, 'sderhfd', 'zdfgdzafg', 0),
(26, '2qt43wa4', 'aew4rgytytarewssf', 0),
(27, 'dzfhgstrf', 'dfhsdzrfh', 0),
(28, 'gvcyugciy', 'ughgvcfuyck', 0),
(29, 'iugouigfvop', 'opkiphpoih', 0),
(30, 'uyfditdt', 'jygciytxcd', 0),
(31, 'ughfcikuy', 'kuhcghiuyc', 0),
(32, 'gfvx j', 'lhigvkuc', 0),
(33, 'JOSE JHON', 'aerdhtrfedshg', 0),
(34, 'Reposteria', 'Eragserfd', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`) VALUES
(5, 'pooo', 'f3ede926587776a8cd79fb2afe4e07b4'),
(6, 'yuuuu', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(7, 'roo', '6606afc4c696fa1b4f0f68408726649d'),
(9, 'who', '53d670af9bb16ea82e7ef41ee23ec6df'),
(10, 'ryu', 'd4cfab1b518d245bc1fc8db52b6d8ddc'),
(11, 'wqq', 'b2ca678b4c936f905fb82f2733f5297f'),
(12, 'Escorpio', 'dd77279f7d325eec933f05b1672f6a1f'),
(13, 'isei', '365b532c2c1721f4202f8b483ab9f27e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermisos`),
  ADD KEY `rolid` (`rolid`),
  ADD KEY `moduloid` (`moduloid`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `rolid` (`rolid`);

--
-- Indices de la tabla `productos_accesorios`
--
ALTER TABLE `productos_accesorios`
  ADD PRIMARY KEY (`idproductoacc`);

--
-- Indices de la tabla `productos_laptops`
--
ALTER TABLE `productos_laptops`
  ADD PRIMARY KEY (`idproductolap`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermisos` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `productos_accesorios`
--
ALTER TABLE `productos_accesorios`
  MODIFY `idproductoacc` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `productos_laptops`
--
ALTER TABLE `productos_laptops`
  MODIFY `idproductolap` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
