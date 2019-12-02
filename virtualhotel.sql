-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2019 a las 03:47:30
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `virtualhotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_usuario` int(11) NOT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `habilitado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id_habitacion` int(11) NOT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  `tipo_habitacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones_servicio_rel`
--

CREATE TABLE `habitaciones_servicio_rel` (
  `id_habitacion` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_servicios_rel`
--

CREATE TABLE `hotel_servicios_rel` (
  `id_hotel` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_habitacion`
--

CREATE TABLE `imagenes_habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_hotel`
--

CREATE TABLE `imagenes_hotel` (
  `id_hotel` int(11) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre_p` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id_reservacion` int(11) NOT NULL,
  `id_hotel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `disponibilidad_hot` bit(1) NOT NULL,
  `disponibilidad_hab` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_hotel_rel`
--

CREATE TABLE `usuarios_hotel_rel` (
  `id_usuario` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_reservaciones_rel`
--

CREATE TABLE `usuarios_reservaciones_rel` (
  `id_usuario` int(11) NOT NULL,
  `id_reservacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD KEY `FK_peridestado_idestado` (`id_estado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `FK_estadoidpais_idpais` (`id_pais`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id_habitacion`),
  ADD KEY `FK_habidhotel_idhotel` (`id_hotel`),
  ADD KEY `FK_idhabita_idhabita` (`tipo_habitacion`);

--
-- Indices de la tabla `habitaciones_servicio_rel`
--
ALTER TABLE `habitaciones_servicio_rel`
  ADD KEY `FK_idhabit_idhabit` (`id_habitacion`),
  ADD KEY `FK_relidservicio_idservicio` (`id_servicios`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `FK_idestado_idestado` (`id_estado`);

--
-- Indices de la tabla `hotel_servicios_rel`
--
ALTER TABLE `hotel_servicios_rel`
  ADD KEY `FK_relidhotel_idhotel` (`id_hotel`),
  ADD KEY `FK_idservicio_relidservicio` (`id_servicio`);

--
-- Indices de la tabla `imagenes_habitacion`
--
ALTER TABLE `imagenes_habitacion`
  ADD KEY `FK_imagidhabita_idhabi` (`id_habitacion`);

--
-- Indices de la tabla `imagenes_hotel`
--
ALTER TABLE `imagenes_hotel`
  ADD KEY `FK_imgidhotel` (`id_hotel`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `FK_reseridhotel_idhotel` (`id_hotel`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_hotel_rel`
--
ALTER TABLE `usuarios_hotel_rel`
  ADD KEY `FK_relidusuario_idusuario` (`id_usuario`),
  ADD KEY `FK_rel_idhotel_idhotel` (`id_hotel`);

--
-- Indices de la tabla `usuarios_reservaciones_rel`
--
ALTER TABLE `usuarios_reservaciones_rel`
  ADD KEY `FK_idreservaci_idreserva` (`id_reservacion`),
  ADD KEY `FK_idusuario_id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD CONSTRAINT `FK_peridestado_idestado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `FK_peridusuario_idusuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `FK_estadoidpais_idpais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `FK_habidhotel_idhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `FK_idhabita_idhabita` FOREIGN KEY (`tipo_habitacion`) REFERENCES `tipo_habitacion` (`id_tipo`);

--
-- Filtros para la tabla `habitaciones_servicio_rel`
--
ALTER TABLE `habitaciones_servicio_rel`
  ADD CONSTRAINT `FK_idhabit_idhabit` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`),
  ADD CONSTRAINT `FK_relidservicio_idservicio` FOREIGN KEY (`id_servicios`) REFERENCES `servicios` (`id_servicio`);

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FK_idestado_idestado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `hotel_servicios_rel`
--
ALTER TABLE `hotel_servicios_rel`
  ADD CONSTRAINT `FK_idservicio_relidservicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`),
  ADD CONSTRAINT `FK_relidhotel_idhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Filtros para la tabla `imagenes_habitacion`
--
ALTER TABLE `imagenes_habitacion`
  ADD CONSTRAINT `FK_imagidhabita_idhabi` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`);

--
-- Filtros para la tabla `imagenes_hotel`
--
ALTER TABLE `imagenes_hotel`
  ADD CONSTRAINT `FK_imgidhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `FK_reseridhotel_idhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Filtros para la tabla `usuarios_hotel_rel`
--
ALTER TABLE `usuarios_hotel_rel`
  ADD CONSTRAINT `FK_rel_idhotel_idhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `FK_relidusuario_idusuario` FOREIGN KEY (`id_usuario`) REFERENCES `datos_personales` (`id_usuario`);

--
-- Filtros para la tabla `usuarios_reservaciones_rel`
--
ALTER TABLE `usuarios_reservaciones_rel`
  ADD CONSTRAINT `FK_idreservaci_idreserva` FOREIGN KEY (`id_reservacion`) REFERENCES `reservaciones` (`id_reservacion`),
  ADD CONSTRAINT `FK_idusuario_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `habitaciones` ADD `num_cama` INT(10) NOT NULL AFTER `tipo_habitacion`, ADD `precio` DOUBLE NOT NULL AFTER `num_cama`;

INSERT INTO `pais` ( `nombre_p`) VALUES ( 'Mexico');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Aguascalientes', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Baja California', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Baja California Sur', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Campeche', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Coahuila de Zaragoza', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Colima', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Chiapas', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Chihuahua', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Ciudad de Mexico', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Durango', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Guanajuato', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Guerrero', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Hidalgo', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Jalico', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Estado de Mexico', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Michoacan', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Morelos', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Nuevo Leon', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Oaxaca', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Puebla', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Queretaro', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Quintana Roo', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Sinaloa', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Sonora', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Tabasco', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Tamaulipas', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Tlaxcala', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Veracruz', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Yucatan', '1');
INSERT INTO `estado` ( `nombre`, `id_pais`) VALUES ( 'Zacatecas', '1');
INSERT INTO `servicios` ( `nombre`, `disponibilidad_hot`, `disponibilidad_hab`) VALUES ( 'alberca', b'1', ''), ( 'bar', b'1', '');
INSERT INTO `servicios` ( `nombre`, `disponibilidad_hot`, `disponibilidad_hab`) VALUES ( 'minibar', b'0', b'1'), ( 'jacuzzi', b'0', b'1');
INSERT INTO `tipo_habitacion` ( `descripcion`) VALUES ( 'Sencilla'), ( 'Doble');