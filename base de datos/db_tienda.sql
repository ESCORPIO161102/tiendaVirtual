-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 21:53:15
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
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` bigint(20) NOT NULL,
  `nombrearea` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombrearea`, `descripcion`, `status`) VALUES
(26, 'Emergencias (Urgencias)', 'Atiende pacientes que necesitan atención médica inmediata por lesiones, accidentes o enfermedades críticas. Incluye triage, salas de observación y reanimación.', 1),
(27, 'Consulta Externa', 'Ofrece atención médica programada para diagnósticos, revisiones y tratamientos de pacientes no hospitalizados en diversas especialidades como pediatría, cardiología o dermatología.', 1),
(28, 'Quirófano (Sala de Cirugía)', 'Espacios esterilizados donde se realizan procedimientos quirúrgicos. Incluyen zonas de preparación, anestesia y recuperación postoperatoria.', 1),
(29, 'Pediatría', 'Especializada en la atención médica de niños y adolescentes, desde recién nacidos hasta los 18 años. Incluye áreas para hospitalización pediátrica y neonatología.', 1),
(30, 'Unidad de Cuidados Intensivos (UCI)', 'Brinda atención crítica a pacientes en estado grave que necesitan monitoreo y soporte vital constante. Hay UCI específicas como neonatales o coronarias.', 1),
(31, 'Laboratorio Clínico', 'Realiza análisis de sangre, orina, tejidos y otros fluidos corporales para ayudar al diagnóstico y seguimiento de enfermedades.', 1),
(32, 'Radiología', 'Área para realizar estudios de diagnóstico por imágenes, como rayos X, tomografías, resonancias magnéticas y ultrasonidos.', 1),
(33, 'Farmacia Hospitalaria', 'Proporciona medicamentos a los pacientes hospitalizados y consulta externa, asegurándose de su correcta dosificación y administración.', 1),
(34, 'Gineco-Obstetricia', 'Atiende la salud de la mujer en aspectos ginecológicos y el seguimiento del embarazo, parto y posparto. Incluye salas de parto y quirófanos obstétricos.', 1),
(35, 'Psiquiatría y Psicología', 'Brinda atención a pacientes con trastornos mentales y emocionales. Puede incluir consulta externa, hospitalización y terapias individuales o grupales.', 1),
(36, 'almacen del hospital', 'es el almacen del hospital', 0),
(37, 'Almacen', 'es el almacen del hospital', 1),
(38, 'Wsaerg', 'Aegre', 0),
(39, 'Aresdgaed', 'Earrhyers', 0),
(40, 'Zsd', 'Aew', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idmedico` bigint(20) NOT NULL,
  `identificacion` varchar(30) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `especialidad` varchar(80) NOT NULL,
  `areaid` bigint(20) NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `token` varchar(80) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idmedico`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `especialidad`, `areaid`, `sueldo`, `genero`, `token`, `rolid`, `datecreated`, `status`) VALUES
(19, '123654', 'JOSE JHON', 'RODRIGUEZ FERNANDE', 900244000, 'jhonafsffd.16.rf@gmail.com', '816e2845d395e7703abac2dcb', 'Cirujano', 28, 5674.00, 'Masculino', '', 18, '2024-11-21 23:22:31', 1),
(20, '00001', 'Rosario', 'Hugo Peralta', 987456321, 'jhon.1636.rf@gmail.com', 'ae9928f5e4777d67663433b40', 'Farmaceutico', 33, 8974.50, 'Masculino', '', 18, '2024-11-21 23:23:44', 2),
(21, '0000002', 'Hugo', 'Miyasato Hokimoro', 963258741, 'miyasato@gmail.com', '94edf28c6d6da38fd35d7ad53', 'Radiologo', 32, 6250.00, 'Masculino', '', 18, '2024-11-21 23:29:19', 0),
(22, '0000006', 'JOSE', 'RODRIGUEZ', 963258741, 'jhon16@gmail.com', '9b00f53a3b9c5847827bb6f8a', 'Genicologo', 34, 5600.50, 'Masculino', '', 18, '2024-11-22 12:12:41', 0),
(23, '0000036', 'Levi', 'Fuentes Gonzales', 963258741, 'levi@gmail.com', '1f84b138c7f5f16bc2d389e10', 'Doctor Cirujano', 28, 4500.50, 'Masculino', '', 18, '2024-11-22 14:03:41', 2);

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
(12, '7896544', 'JOSE JHON', 'RODRIGUEZ FERNANDEZ', 987456000, 'jhon.1655.rf@gmail.com', 'f658d34bbd6a1c3e27771898e', '', '', '', '', 20, '2024-11-21 18:33:00', 1),
(13, '00000123', 'Rosa Belinda J', 'Rojas Peralta Mori', 987456326, 'jhoroorrn@gmail.com', '6460662e217c7a9f899208dd7', '', '', '', '', 20, '2024-11-21 19:27:40', 0),
(14, '000003', 'Yukiyyyyyyyyy', 'Rojas Gallardo', 936852147, 'yuki@gmail.com', 'e3b68a1c3618aaf3ea2a648ae', '', '', '', '', 20, '2024-11-22 11:14:06', 2),
(15, '0000005', 'Jhon', 'Rodriguez Fernandez', 963258741, 'jhy@gmail.com', '68c9de238e652d4dbc529a56d', '', '', '', '', 20, '2024-11-22 13:54:39', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` bigint(20) NOT NULL,
  `codigo` int(30) NOT NULL,
  `nombre_producto` varchar(60) NOT NULL,
  `especificaciones` text NOT NULL,
  `color` varchar(20) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `fecha_registro` date NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `codigo`, `nombre_producto`, `especificaciones`, `color`, `precio`, `fecha_registro`, `categoria`, `status`) VALUES
(1, 90000, 'Khijbi', 'Dsasddsa', 'Negro', 234, '0000-00-00', '2024-12-28', 1),
(2, 94004, 'JOSE JHON', 'Rewrtre', 'TxdaSDDS', 234, '2024-12-28', 'Masculino', 2),
(3, 384949, 'Wkkwkwkw', 'Hdhdhdhdd', 'Negro', 23, '2024-12-20', 'Masculino', 1),
(4, 384949, 'Wkkwkwkw', 'Hdhdhdhdd', 'Negro', 23, '2024-12-20', 'Masculino', 1),
(5, 384949, 'Wkkwkwkw', 'Hdhdhdhdd', 'Negro', 23, '2024-12-20', 'Masculino', 1),
(6, 384949, 'Wkkwkwkw', 'Hdhdhdhdd', 'Negro', 23, '2024-12-20', 'Masculino', 1),
(7, 384949, 'Wkkwkwkw', 'Hdhdhdhdd', 'Negro', 23, '2024-12-20', 'Masculino', 1),
(8, 384949, 'Wkkwkwkw', 'Hdhdhdhdd', 'Negro', 23, '2024-12-20', 'Masculino', 1),
(9, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(10, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(11, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(12, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(13, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(14, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(15, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(16, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(17, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(18, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(19, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(20, 83883, 'Jsjjsjsjss', 'Djjdjdjdj', 'Negro', 253, '2024-12-20', 'Masculino', 1),
(21, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(22, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(23, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(24, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(25, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(26, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(27, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(28, 2538, 'JOSE JHONee', 'Hdhdhdhd', 'Negro', 334, '2024-12-20', 'Masculino', 1),
(29, 12552, 'JOSE JHONfff', 'Sggss', 'Negro', 234, '2024-12-20', 'Masculino', 1),
(30, 900003, 'JOSE JHONdfsag', 'QaXDSA', 'JjjjjjjWWW', 123, '2024-12-13', 'Masculino', 1),
(31, 39404, 'Khijbi', 'KWSKKS', 'KEWKSKEWD', 234, '2024-12-20', 'Masculino', 1),
(32, 2, 'JOSE JHONdfsag', 'SAMSSAM', 'SKQKAXK', 3333, '2024-12-27', 'Masculino', 0),
(33, 1223, 'MMSMMS', 'KKSKKSKS', 'JSJJS', 234, '2024-12-26', 'Masculino', 0),
(34, 181881, 'Szdsfsf', 'SasA', 'Sadaasd', 223, '2024-12-26', 'Masculino', 0),
(35, 22222, 'Sdddsdds', 'Ssd<', 'Sddssds', 234, '2024-12-26', 'Masculino', 0),
(36, 900005, 'D', 'Sd<g<sfd', 'Sdgzsd', 222, '2024-12-26', 'Masculino', 1),
(37, 1234423423, 'Gsdgsdfga', 'Sdggsfd', 'Gfdgfdgf', 43542, '0000-00-00', '2024-12-26', 1),
(38, 234, 'Sadsa', 'Sadgds', 'Egrf', 233, '0000-00-00', '2024-12-27', 1),
(39, 22233, 'Ggggg', 'Ttttttt', 'Azul', 445, '2024-12-25', 'Masculino', 0);

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
(18, 'Medico', 'El medico es un trabajador del hospital que atiende a los pacientes', 1),
(19, 'Paciente', 'el paciente recibe atencion medica del hospital', 1),
(20, 'Administrador doctor', 'es el administrador del sistema', 1),
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
(12, 'Escorpio', '087c861ebd4b429a423d8e0b966863c0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idmedico`),
  ADD KEY `rolid` (`rolid`),
  ADD KEY `areaid` (`areaid`);

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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

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
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idmedico` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `idpersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
