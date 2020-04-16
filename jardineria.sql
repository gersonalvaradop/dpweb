-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 07:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jardineria`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 0,
  `orden` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `activo`, `orden`) VALUES
(1, 'Herramientas', 1, 1),
(2, 'Decoracion', 1, 2),
(3, 'Plantas', 1, 3),
(4, 'Otra', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE `departamentos` (
  `cod_dpto` int(2) NOT NULL,
  `nom_dpto` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departamentos`
--

INSERT INTO `departamentos` (`cod_dpto`, `nom_dpto`) VALUES
(1, 'Ahuachapan'),
(2, 'Cabañas'),
(3, 'Chalatenango'),
(4, 'Cuscatlán'),
(5, 'La Libertad'),
(6, 'La Paz'),
(7, 'La Union'),
(8, 'Morazán'),
(9, 'San Miguel'),
(10, 'San Salvador'),
(11, 'San Vicente'),
(12, 'Santa Ana'),
(13, 'Sonsonate'),
(14, 'Usulután');

-- --------------------------------------------------------

--
-- Table structure for table `municipios`
--

CREATE TABLE `municipios` (
  `cod_mun` int(2) NOT NULL,
  `cod_dpto` int(2) NOT NULL,
  `nom_mun` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `municipios`
--

INSERT INTO `municipios` (`cod_mun`, `cod_dpto`, `nom_mun`) VALUES
(1, 1, 'Apaneca'),
(2, 1, 'Ahuachapán'),
(3, 1, 'Atiquizaya'),
(4, 1, 'Concepción de Ataco'),
(5, 1, 'El Refugio'),
(6, 1, 'Guaymango'),
(7, 1, 'Jujutla'),
(8, 1, 'San Francisco Menéndez'),
(9, 1, 'San Lorenzo'),
(10, 1, 'San Pedro Puxtla'),
(11, 1, 'Tacuba'),
(12, 1, 'Turín'),
(13, 2, 'Sensuntepeque'),
(14, 2, 'Cinquera'),
(15, 2, 'Dolores'),
(16, 2, 'Guacotecti'),
(17, 2, 'Ilobasco'),
(18, 2, 'Jutiapa'),
(19, 2, 'San Isidro'),
(20, 2, 'Tejutepeque'),
(21, 2, 'Victoria'),
(22, 3, 'Chalatenango'),
(23, 3, 'Agua Caliente'),
(24, 3, 'Arcatao'),
(25, 3, 'Azacualpa'),
(26, 3, 'Cancasque'),
(27, 3, 'Citalá'),
(28, 3, 'Comalapa'),
(29, 3, 'Concepción Quezaltepeque'),
(30, 3, 'Dulce Nombre de María'),
(31, 3, 'El Carrizal'),
(32, 3, 'El Paraíso'),
(33, 3, 'La Laguna'),
(34, 3, 'La Palma'),
(35, 3, 'La Reina'),
(36, 3, 'Las Flores'),
(37, 3, 'Las Vueltas'),
(38, 3, 'Nombre de Jesús'),
(39, 3, 'Nueva Concepción'),
(40, 3, 'Nueva Trinidad'),
(41, 3, 'Ojos de Agua'),
(42, 3, 'Potonico'),
(43, 3, 'San Antonio de la Cruz'),
(44, 3, 'San Antonio Los Ranchos'),
(45, 3, 'San Fernando'),
(46, 3, 'San Francisco Lempa'),
(47, 3, 'San Francisco Morazán'),
(48, 3, 'San Ignacio'),
(49, 3, 'San Isidro Labrador'),
(50, 3, 'San Luis del Carmen'),
(51, 3, 'San Miguel de Mercedes'),
(52, 3, 'San Rafael'),
(53, 3, 'Santa Rita'),
(54, 3, 'Tejutla'),
(55, 4, 'Cojutepeque'),
(56, 4, 'Candelaria'),
(57, 4, 'El Carmen'),
(58, 4, 'El Rosario'),
(59, 4, 'Monte San Juan'),
(60, 4, 'Oratorio de Concepción'),
(61, 4, 'San Bartolomé Perulapía'),
(62, 4, 'San Cristóbal'),
(63, 4, 'San José Guayabal'),
(64, 4, 'San Pedro Perulapán'),
(65, 4, 'San Rafael Cedros'),
(66, 4, 'San Ramón'),
(67, 4, 'Santa Cruz Analquito'),
(68, 4, 'Santa Cruz Michapa'),
(69, 4, 'Suchitoto'),
(70, 4, 'Tenancingo'),
(71, 5, 'Santa Tecla'),
(72, 5, 'Antiguo Cuscatlán'),
(73, 5, 'Chiltiupán'),
(74, 5, 'Ciudad Arce'),
(75, 5, 'Colón'),
(76, 5, 'Comasagua'),
(77, 5, 'Huizúcar'),
(78, 5, 'Jayaque'),
(79, 5, 'Jicalapa'),
(80, 5, 'La Libertad'),
(81, 5, 'Nuevo Cuscatlán'),
(82, 5, 'Quezaltepeque'),
(83, 5, 'San Juan Opico'),
(84, 5, 'Sacacoyo'),
(85, 5, 'San José Villanueva'),
(86, 5, 'San Matías'),
(87, 5, 'San Pablo Tacachico'),
(88, 5, 'Talnique'),
(89, 5, 'Tamanique'),
(90, 5, 'Teotepeque'),
(91, 5, 'Tepecoyo'),
(92, 5, 'Zaragoza'),
(93, 6, 'Zacatecoluca'),
(94, 6, 'Cuyultitán'),
(95, 6, 'El Rosario'),
(96, 6, 'Jerusalén'),
(97, 6, 'Mercedes La Ceiba'),
(98, 6, 'Olocuilta'),
(99, 6, 'Paraíso de Osorio'),
(100, 6, 'San Antonio Masahuat'),
(101, 6, 'San Emigdio'),
(102, 6, 'San Francisco Chinameca'),
(103, 6, 'San Pedro Masahuat'),
(104, 6, 'San Juan Nonualco'),
(105, 6, 'San Juan Talpa'),
(106, 6, 'San Juan Tepezontes'),
(107, 6, 'San Luis La Herradura'),
(108, 6, 'San Luis Talpa'),
(109, 6, 'San Miguel Tepezontes'),
(110, 6, 'San Pedro Nonualco'),
(111, 6, 'San Rafael Obrajuelo'),
(112, 6, 'Santa María Ostuma'),
(113, 6, 'Santiago Nonualco'),
(114, 6, 'Tapalhuaca'),
(115, 7, 'La Unión'),
(116, 7, 'Anamorós'),
(117, 7, 'Bolívar'),
(118, 7, 'Concepción de Oriente'),
(119, 7, 'Conchagua'),
(120, 7, 'El Carmen'),
(121, 7, 'El Sauce'),
(122, 7, 'Intipucá'),
(123, 7, 'Lislique'),
(124, 7, 'Meanguera del Golfo'),
(125, 7, 'Nueva Esparta'),
(126, 7, 'Pasaquina'),
(127, 7, 'Polorós'),
(128, 7, 'San Alejo'),
(129, 7, 'San José'),
(130, 7, 'Santa Rosa de Lima'),
(131, 7, 'Yayantique'),
(132, 7, 'Yucuaiquín'),
(133, 8, 'San Francisco Gotera'),
(134, 8, 'Arambala'),
(135, 8, 'Cacaopera'),
(136, 8, 'Chilanga'),
(137, 8, 'Corinto'),
(138, 8, 'Delicias de Concepción'),
(139, 8, 'El Divisadero'),
(140, 8, 'El Rosario'),
(141, 8, 'Gualococti'),
(142, 8, 'Guatajiagua'),
(143, 8, 'Joateca'),
(144, 8, 'Jocoaitique'),
(145, 8, 'Jocoro'),
(146, 8, 'Lolotiquillo'),
(147, 8, 'Meanguera'),
(148, 8, 'Osicala'),
(149, 8, 'Perquín'),
(150, 8, 'San Carlos'),
(151, 8, 'San Fernando'),
(152, 8, 'San Isidro'),
(153, 8, 'San Simón'),
(154, 8, 'Sensembra'),
(155, 8, 'Sociedad'),
(156, 8, 'Torola'),
(157, 8, 'Yamabal'),
(158, 8, 'Yoloaiquín'),
(159, 9, 'Ciudad de San Miguel'),
(160, 9, 'Carolina'),
(161, 9, 'Chapeltique'),
(162, 9, 'Chinameca'),
(163, 9, 'Chirilagua'),
(164, 9, 'Ciudad Barrios'),
(165, 9, 'Comacarán'),
(166, 9, 'El Tránsito'),
(167, 9, 'Lolotique'),
(168, 9, 'Moncagua'),
(169, 9, 'Nueva Guadalupe'),
(170, 9, 'Nuevo Edén de San Juan'),
(171, 9, 'Quelepa'),
(172, 9, 'San Antonio'),
(173, 9, 'San Gerardo'),
(174, 9, 'San Jorge'),
(175, 9, 'San Luis de la Reina'),
(176, 9, 'San Rafael Oriente'),
(177, 9, 'Sesori'),
(178, 9, 'Uluazapa'),
(179, 10, 'San Salvador'),
(180, 10, 'Aguilares'),
(181, 10, 'Apopa'),
(182, 10, 'Ayutuxtepeque'),
(183, 10, 'Cuscatancingo'),
(184, 10, 'Delgado'),
(185, 10, 'El Paisnal'),
(186, 10, 'Guazapa'),
(187, 10, 'Ilopango'),
(188, 10, 'Mejicanos'),
(189, 10, 'Nejapa'),
(190, 10, 'Panchimalco'),
(191, 10, 'Rosario de Mora'),
(192, 10, 'San Marcos'),
(193, 10, 'San Martín'),
(194, 10, 'Santiago Texacuangos'),
(195, 10, 'Santo Tomás'),
(196, 10, 'Soyapango'),
(197, 10, 'Tonacatepeque'),
(198, 11, 'San Vicente'),
(199, 11, 'Apastepeque'),
(200, 11, 'Guadalupe'),
(201, 11, 'San Cayetano Istepeque'),
(202, 11, 'San Esteban Catarina'),
(203, 11, 'San Ildefonso'),
(204, 11, 'San Lorenzo'),
(205, 11, 'San Sebastián'),
(206, 11, 'Santa Clara'),
(207, 11, 'Santo Domingo'),
(208, 11, 'Tecoluca'),
(209, 11, 'Tepetitán'),
(210, 11, 'Verapaz'),
(211, 12, 'Santa Ana'),
(212, 12, 'Candelaria de la Frontera'),
(213, 12, 'Chalchuapa'),
(214, 12, 'Coatepeque'),
(215, 12, 'El Congo'),
(216, 12, 'El Porvenir'),
(217, 12, 'Masahuat'),
(218, 12, 'Metapán'),
(219, 12, 'San Antonio Pajonal'),
(220, 12, 'San Sebastián Salitrillo'),
(221, 12, 'Santa Rosa Guachipilín'),
(222, 12, 'Santiago de la Frontera'),
(223, 12, 'Texistepeque'),
(224, 13, 'Sonsonate'),
(225, 13, 'Acajutla'),
(226, 13, 'Armenia'),
(227, 13, 'Caluco'),
(228, 13, 'Cuisnahuat'),
(229, 13, 'Izalco'),
(230, 13, 'Juayúa'),
(231, 13, 'Nahuizalco'),
(232, 13, 'Nahulingo'),
(233, 13, 'Salcoatitán'),
(234, 13, 'San Antonio del Monte'),
(235, 13, 'San Julián'),
(236, 13, 'Santa Catarina Masahuat'),
(237, 13, 'Santa Isabel Ishuatán'),
(238, 13, 'Santo Domingo de Guzmán'),
(239, 13, 'Sonzacate'),
(240, 14, 'Usulután'),
(241, 14, 'Alegría'),
(242, 14, 'Berlín'),
(243, 14, 'California'),
(244, 14, 'Concepción Batres'),
(245, 14, 'El Triunfo'),
(246, 14, 'Ereguayquín'),
(247, 14, 'Estanzuelas'),
(248, 14, 'Jiquilisco'),
(249, 14, 'Jucuapa'),
(250, 14, 'Jucuarán'),
(251, 14, 'Mercedes Umaña'),
(252, 14, 'Nueva Granada'),
(253, 14, 'Ozatlán'),
(254, 14, 'Puerto El Triunfo'),
(255, 14, 'San Agustín'),
(256, 14, 'San Buenaventura'),
(257, 14, 'San Dionisio'),
(258, 14, 'San Francisco Javier'),
(259, 14, 'Santa Elena'),
(260, 14, 'Santa María'),
(261, 14, 'Santiago de María'),
(262, 14, 'Tecapán');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `provedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` longblob NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `registrado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `correo`, `telefono`, `rol`, `registrado`) VALUES
(1, 'Ronald Arce', 'rarce', 'b1adc6c3dfffb991b51dccea24eb24ef', 'rarce@jardin.com', '1111112321', '1', '2020-04-09 22:16:16'),
(2, 'Yamir', 'ynovosky', 'b1adc6c3dfffb991b51dccea24eb24ef', 'ynovosky@jardin.com', '1111112321', '2', '2020-04-09 22:16:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`cod_dpto`);

--
-- Indexes for table `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`cod_mun`),
  ADD KEY `cod_dpto` (`cod_dpto`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `cod_dpto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `municipios`
--
ALTER TABLE `municipios`
  MODIFY `cod_mun` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`cod_dpto`) REFERENCES `departamentos` (`cod_dpto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
