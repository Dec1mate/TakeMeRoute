-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2019 a las 18:19:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `takemeroute`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `sender_userid` varchar(9) NOT NULL,
  `reciever_userid` varchar(9) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`chatid`, `sender_userid`, `reciever_userid`, `message`, `timestamp`, `status`) VALUES
(16, '23456753V', '26578635L', 'Hola amigo', '2019-04-09 13:57:35', 0),
(17, '23456753V', '26578635L', 'Como estas?', '2019-04-09 13:58:01', 0),
(18, '26578635L', '23456753V', 'Bien y tu?', '2019-04-09 14:11:30', 0),
(19, '45768432P', '26578635L', 'hi', '2019-04-09 14:11:38', 0),
(20, '26578635L', '45768432P', 'hola', '2019-04-09 14:11:51', 0),
(21, '26578635L', '45768432P', 'asdfasdfa', '2019-04-09 14:11:56', 0),
(22, '45768432P', '26578635L', 'sadfadsf', '2019-04-09 14:12:08', 0),
(23, '45768432P', '26578635L', 'adfadsf', '2019-04-09 14:13:02', 0),
(24, '45768432P', '26578635L', 'aasdfasdfadsfadsfaf', '2019-04-09 14:13:28', 0),
(25, '45768432P', '26578635L', 'hjgkkj', '2019-04-09 14:13:40', 0),
(26, '45768432P', '26578635L', 'asdfasdfadf', '2019-04-09 14:14:04', 0),
(27, '26578635L', '45768432P', 'gkjgkjghk', '2019-04-09 14:15:28', 0),
(28, '26578635L', '45768432P', 'nÃ±lk', '2019-04-09 14:15:53', 0),
(29, '45768432P', '26578635L', 'asdfadsfa', '2019-04-09 14:16:22', 0),
(30, '45768432P', '26578635L', 'dfghdgh', '2019-04-09 14:17:04', 0),
(31, '45768432P', '26578635L', 'hgghghghhgh', '2019-04-09 14:17:16', 0),
(32, '45768432P', '26578635L', 'asdfdsf', '2019-04-09 14:17:48', 0),
(33, '45768432P', '26578635L', 'gfhdfghd', '2019-04-09 14:19:21', 0),
(34, '45768432P', '26578635L', 'lÃ±Â´Ã§Ã±Â´l', '2019-04-09 14:19:29', 0),
(35, '45768432P', '26578635L', 'Ã±lÂ´Ã§Ã§Â´Ã±', '2019-04-09 14:19:32', 0),
(36, '45768432P', '26578635L', 'lÃ±Â´Ã§lÂ´Ã±Ã§', '2019-04-09 14:19:34', 0),
(37, '26578635L', '45721423O', 'Hola cocacola', '2019-04-09 14:40:12', 1),
(38, '26578635L', '45721423O', 'fdg', '2019-04-09 14:40:16', 1),
(39, '26578635L', '45721423O', 'gf', '2019-04-09 14:40:17', 1),
(40, '26578635L', '45721423O', 'gf', '2019-04-09 14:40:17', 1),
(41, '26578635L', '45721423O', 'gf', '2019-04-09 14:40:17', 1),
(42, '26578635L', '45721423O', 'gf', '2019-04-09 14:40:17', 1),
(43, '26578635L', '45721423O', 'gf', '2019-04-09 14:40:17', 1),
(44, '26578635L', '45721423O', 'df', '2019-04-09 14:40:17', 1),
(45, '26578635L', '45721423O', 'dgf', '2019-04-09 14:40:18', 1),
(46, '26578635L', '45721423O', 'dgf', '2019-04-09 14:40:18', 1),
(47, '26578635L', '45721423O', 'dgf', '2019-04-09 14:40:18', 1),
(48, '26578635L', '45721423O', 'dgfgf', '2019-04-09 14:40:18', 1),
(49, '26578635L', '45721423O', 'gf', '2019-04-09 14:40:18', 1),
(50, '26578635L', '45721423O', 'gfd', '2019-04-09 14:40:18', 1),
(51, '26578635L', '23456753V', 'asdfadsf', '2019-04-09 15:51:40', 0),
(52, '23456753V', '26578635L', 'sdfgsdfgsdgf', '2019-04-09 15:55:37', 0),
(53, '26578635L', '23456753V', 'Hola cocacola', '2019-04-24 11:52:16', 0),
(54, '23456753V', '26578635L', 'Adios cococolo', '2019-04-24 11:53:05', 0),
(55, '26578635L', '23456753V', 'sdfgsdfgsdgfs', '2019-04-24 11:58:33', 0),
(56, '23456753V', '26578635L', 'sdfgsdfsdg', '2019-04-24 11:58:35', 0),
(73, '11111111A', '45768432P', 'Hola, la ruta ya ha terminado, visita este link para valorar al conductor. <a href=\'../valoraConductor.php?conductor=26578635L&id=1\'>Valora al conductor</a>', '2019-04-30 11:43:45', 0),
(74, '11111111A', '47621423A', 'Hola, la ruta ya ha terminado, visita este link para valorar al conductor. <a href=\'../valoraConductor.php?conductor=26578635L&id=1\'>Valora al conductor</a>', '2019-04-30 11:43:45', 1),
(75, '45768432P', '11111111A', 'Ok, recibido', '2019-04-30 11:56:27', 1),
(76, '45768432P', '11111111A', 'fghdfgyhf', '2019-04-30 11:56:35', 1),
(77, '11111111A', '23456753V', 'Hola, la ruta ya ha terminado, visita este link para valorar al conductor. <a href=\'../valoraConductor.php?conductor=26578635L&id=13\'>Valora al conductor</a>', '2019-05-02 15:06:35', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_login_details`
--

CREATE TABLE `chat_login_details` (
  `id` int(11) NOT NULL,
  `userid` varchar(9) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_typing` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat_login_details`
--

INSERT INTO `chat_login_details` (`id`, `userid`, `last_activity`, `is_typing`) VALUES
(20, '23456753V', '2019-04-09 13:31:17', 'no'),
(21, '23456753V', '2019-04-09 13:31:18', 'no'),
(22, '23456753V', '2019-04-09 13:31:50', 'no'),
(23, '23456753V', '2019-04-09 13:36:11', 'yes'),
(24, '23456753V', '2019-04-09 13:51:48', 'yes'),
(25, '23456753V', '2019-04-09 13:54:40', 'yes'),
(26, '23456753V', '2019-04-09 13:54:48', 'no'),
(27, '23456753V', '2019-04-09 13:55:48', 'no'),
(28, '23456753V', '2019-04-09 13:56:02', 'no'),
(29, '23456753V', '2019-04-09 13:58:15', 'no'),
(30, '23456753V', '2019-04-09 14:01:49', 'no'),
(31, '26578635L', '2019-04-09 14:10:41', 'no'),
(32, '45768432P', '2019-04-09 14:11:10', 'no'),
(33, '23456753V', '2019-04-09 14:22:59', 'no'),
(34, '26578635L', '2019-04-09 14:26:06', 'no'),
(35, '26578635L', '2019-04-09 14:27:39', 'no'),
(36, '26578635L', '2019-04-09 14:28:17', 'no'),
(37, '26578635L', '2019-04-09 14:28:38', 'no'),
(38, '26578635L', '2019-04-09 14:28:41', 'no'),
(39, '26578635L', '2019-04-09 14:28:44', 'no'),
(40, '26578635L', '2019-04-09 15:39:15', 'no'),
(41, '26578635L', '2019-04-09 15:45:09', 'no'),
(42, '26578635L', '2019-04-09 15:52:11', 'no'),
(43, '23456753V', '2019-04-09 15:55:16', 'no'),
(44, '23456753V', '2019-04-09 15:57:41', 'no'),
(45, '23456753V', '2019-04-09 15:57:45', 'no'),
(46, '23456753V', '2019-04-09 16:08:46', 'no'),
(47, '23456753V', '2019-04-09 16:08:57', 'no'),
(48, '23456753V', '2019-04-09 16:09:12', 'no'),
(49, '26578635L', '2019-04-10 06:57:37', 'no'),
(50, '26578635L', '2019-04-10 16:28:44', 'no'),
(51, '26578635L', '2019-04-16 11:39:29', 'no'),
(52, '26578635L', '2019-04-24 10:19:20', 'no'),
(53, '26578635L', '2019-04-24 10:20:17', 'no'),
(54, '26578635L', '2019-04-24 10:20:45', 'no'),
(55, '26578635L', '2019-04-24 10:20:52', 'no'),
(56, '26578635L', '2019-04-24 10:21:03', 'no'),
(57, '26578635L', '2019-04-24 10:22:10', 'no'),
(58, '26578635L', '2019-04-24 10:22:56', 'no'),
(59, '26578635L', '2019-04-24 10:23:04', 'no'),
(60, '26578635L', '2019-04-24 10:23:58', 'no'),
(61, '26578635L', '2019-04-24 10:24:01', 'no'),
(62, '26578635L', '2019-04-24 10:24:06', 'no'),
(63, '26578635L', '2019-04-24 10:24:10', 'no'),
(64, '26578635L', '2019-04-24 11:52:08', 'no'),
(65, '23456753V', '2019-04-24 11:52:56', 'no'),
(66, '23456753V', '2019-04-24 11:58:26', 'no'),
(67, '26578635L', '2019-04-24 11:58:27', 'no'),
(68, '26578635L', '2019-04-24 16:14:15', 'no'),
(69, '26578635L', '2019-04-24 16:16:04', 'no'),
(70, '26578635L', '2019-04-25 07:27:30', 'no'),
(71, '26578635L', '2019-04-25 11:59:17', 'no'),
(72, '26578635L', '2019-04-25 15:30:15', 'no'),
(73, '26578635L', '2019-04-26 08:01:14', 'no'),
(74, '23456753V', '2019-04-30 10:30:08', 'yes'),
(75, '47621423A', '2019-04-30 10:34:35', 'no'),
(76, '23456753V', '2019-04-30 10:40:34', 'no'),
(77, '47621423A', '2019-04-30 10:40:53', 'no'),
(78, '47621423A', '2019-04-30 10:43:26', 'no'),
(79, '47621423A', '2019-04-30 10:51:12', 'no'),
(80, '47621423A', '2019-04-30 10:58:26', 'no'),
(81, '47621423A', '2019-04-30 11:00:28', 'no'),
(82, '23456753V', '2019-04-30 11:00:45', 'no'),
(83, '23456753V', '2019-04-30 11:10:04', 'no'),
(84, '47621423A', '2019-04-30 11:10:12', 'no'),
(85, '47621423A', '2019-04-30 11:16:54', 'no'),
(86, '47621423A', '2019-04-30 11:18:22', 'no'),
(87, '47621423A', '2019-04-30 11:19:39', 'no'),
(88, '47621423A', '2019-04-30 11:19:49', 'no'),
(89, '47621423A', '2019-04-30 11:25:49', 'no'),
(90, '47621423A', '2019-04-30 11:26:23', 'no'),
(91, '47621423A', '2019-04-30 11:31:35', 'no'),
(92, '47621423A', '2019-04-30 11:35:43', 'no'),
(93, '47621423A', '2019-04-30 11:41:03', 'no'),
(94, '23456753V', '2019-04-30 11:43:58', 'no'),
(95, '47621423A', '2019-04-30 11:44:07', 'no'),
(96, '45768432P', '2019-04-30 11:47:29', 'no'),
(97, '45768432P', '2019-04-30 11:49:04', 'no'),
(98, '45768432P', '2019-04-30 16:00:25', 'no'),
(99, '45768432P', '2019-04-30 16:01:21', 'no'),
(100, '45768432P', '2019-04-30 16:01:38', 'no'),
(101, '26578635L', '2019-05-02 11:50:59', 'no'),
(102, '26578635L', '2019-05-02 11:51:51', 'no'),
(103, '26578635L', '2019-05-02 14:19:10', 'no'),
(104, '23456753V', '2019-05-02 15:06:43', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_users`
--

CREATE TABLE `chat_users` (
  `userid` varchar(9) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `current_session` varchar(9) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat_users`
--

INSERT INTO `chat_users` (`userid`, `username`, `avatar`, `current_session`, `online`) VALUES
('11111111A', 'MAQUINERA FULL', './img/usuarios/Maquinera Full.jpg', '0', 0),
('23456753V', 'Roger Fernandez', './img/usuarios/Roger Fernandez.jpg', '11111111A', 0),
('26578635L', 'Adrian Ortiz', './img/usuarios/Adrian Ortiz.jpg', '11111111A', 0),
('45721423O', 'Francisco Tarrega', './img/usuarios/Francisco Tarrega.jpg', '0', 0),
('45721432S', 'Eustakio Rodrigo', './img/usuarios/Eustakio Rodrigo.jpg', '0', 0),
('45768432P', 'Paul Walker', './img/usuarios/Paul Walker.jpg', '11111111A', 1),
('47621423A', 'Salam Abdulah', './img/usuarios/Salam Abdulah.jpg', '11111111A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `matricula` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `conductor` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `cv` int(11) NOT NULL,
  `plazas` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`matricula`, `marca`, `modelo`, `conductor`, `cv`, `plazas`, `photo`, `deleted`) VALUES
('2323JDM', 'Nissan', 'r34 GTR', '26578635L', 560, 3, './img/coches/r34 GTR-2323JDM.jpg', 0),
('2424JDM', 'Subaru', 'WRX STI HATCHBACK 2009', '26578635L', 380, 3, './img/coches/WRX STI HATCHBACK 2009-2424JDM.jpg', 0),
('2525JDM', 'Mazda', 'RX-7', '26578635L', 280, 3, './img/coches/Tailored-FD-mazda-RX7-stanced.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conduce`
--

CREATE TABLE `conduce` (
  `id` int(11) NOT NULL,
  `matricula` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `conductor` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_conduce` date NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `plazas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conduce`
--

INSERT INTO `conduce` (`id`, `matricula`, `conductor`, `fecha_conduce`, `nombre`, `estado`, `plazas`) VALUES
(1, '2323JDM', '26578635L', '2019-04-03', 'Alto_Tajo', 0, 1),
(2, '2424JDM', '26578635L', '2019-04-03', 'Akina', 0, 1),
(8, '2323JDM', '26578635L', '2019-05-03', 'Akina', 1, 3),
(9, '2424JDM', '26578635L', '2019-05-10', 'Akina', 1, 3),
(11, '2323JDM', '26578635L', '2019-05-23', 'Montaña Oronet', 1, 3),
(12, '2323JDM', '26578635L', '2019-06-28', 'Transfaragasan', 1, 3),
(13, '2525JDM', '26578635L', '2019-05-05', 'Transfaragasan', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `pasajero` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `valorada` tinyint(1) NOT NULL,
  `valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `pasajero`, `fecha`, `valorada`, `valoracion`) VALUES
(1, '45768432P', '2019-04-26', 1, 5),
(1, '47621423A', '2019-04-26', 1, 5),
(2, '23456753V', '2019-04-26', 0, 0),
(2, '45768432P', '2019-04-26', 0, 0),
(13, '23456753V', '2019-05-02', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`nombre`, `foto`) VALUES
('Akina', './img/rutas/Akina.jpg'),
('Alto_Tajo', './img/rutas/Alto_Tajo.jpg'),
('Montaña Oronet', './img/rutas/oronet-bk.jpg'),
('Transfaragasan', './img/rutas/Transfagarasan.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `saldo` int(11) NOT NULL,
  `estrellas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`dni`, `nombre`, `foto`, `saldo`, `estrellas`, `fecha`, `pass`) VALUES
('11111111A', 'Maquinera Full (ADMIN)', './img/usuarios/Maquinera Full.jpg', 2147483647, 10, '2019-04-30', '$2y$10$jztlz5tR5POVozH4LzTm.uLDcLnKb0GpH6QbSC5fFjEcLnep2UyBe'),
('23456753V', 'Roger Fernandez', './img/usuarios/Roger Fernandez.jpg', 100, 4, '2019-04-03', '$2y$10$yFza36rg5iOzmkAXFiAj7.qjbqQq.jWUUXCt1gn11PfhHO7uVu5WK'),
('26578635L', 'Adrian Ortiz', './img/usuarios/Adrian Ortiz.jpg', 999999, 5, '2019-04-03', '$2y$10$iHdA8qUFgXKMwi32I6YomuO8MatPD6.QGl2kjOaCjiT72E0yidT9m'),
('45721423O', 'Francisco Tarrega', './img/usuarios/Francisco Tarrega.jpg', 132421, 2, '2019-04-03', '$2y$10$mHYZ4DuHJqgQiALQyXcM1ewqV4Yh.1YzR5Y/1MoaNtYnekkX.ZCC6'),
('45721432S', 'Eustakio Rodrigo', './img/usuarios/Eustakio Rodrigo.jpg', 132421, 2, '2019-04-03', '$2y$10$1FrV1rnjsnmHjyrresmqKeqNrDnI56zshBw1oxL9yED3y3i3pE6Mi'),
('45768432P', 'Paul Walker', './img/usuarios/Paul Walker.jpg', 132421, 4, '2019-04-03', '$2y$10$6EIdKE4wSvSrPf25cmOosunopGjztVBZzl3iLRGSViPga7dXTutc6'),
('47621423A', 'Salam Abdulah', './img/usuarios/Salam Abdulah.jpg', 132421, 4, '2019-04-03', '$2y$10$8LHxiJygmXriGRu42ducr.BmAvdSsXvuNUjcTTgcdqvw7lfjN3xFe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`),
  ADD KEY `sender_userid` (`sender_userid`),
  ADD KEY `reciever_userid` (`reciever_userid`);

--
-- Indices de la tabla `chat_login_details`
--
ALTER TABLE `chat_login_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `conductor` (`conductor`);

--
-- Indices de la tabla `conduce`
--
ALTER TABLE `conduce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conductor` (`conductor`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `conduce_ibfk_1` (`matricula`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`,`pasajero`) USING BTREE,
  ADD KEY `pasajero` (`pasajero`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `chat_login_details`
--
ALTER TABLE `chat_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `conduce`
--
ALTER TABLE `conduce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`sender_userid`) REFERENCES `chat_users` (`userid`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`reciever_userid`) REFERENCES `chat_users` (`userid`);

--
-- Filtros para la tabla `chat_login_details`
--
ALTER TABLE `chat_login_details`
  ADD CONSTRAINT `chat_login_details_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `chat_users` (`userid`);

--
-- Filtros para la tabla `coches`
--
ALTER TABLE `coches`
  ADD CONSTRAINT `coches_ibfk_1` FOREIGN KEY (`conductor`) REFERENCES `usuarios` (`dni`);

--
-- Filtros para la tabla `conduce`
--
ALTER TABLE `conduce`
  ADD CONSTRAINT `conduce_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `coches` (`matricula`),
  ADD CONSTRAINT `conduce_ibfk_2` FOREIGN KEY (`conductor`) REFERENCES `usuarios` (`dni`),
  ADD CONSTRAINT `conduce_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `rutas` (`nombre`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`pasajero`) REFERENCES `usuarios` (`dni`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id`) REFERENCES `conduce` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
