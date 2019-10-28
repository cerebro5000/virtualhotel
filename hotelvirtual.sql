-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 01:30:21
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
-- Base de datos: `hotelvirtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_usuario` int(15) NOT NULL,
  `id_pais` int(15) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `habilitado` tinyint(1) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(15) NOT NULL,
  `id_pais` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id_habitacion` int(15) NOT NULL,
  `id_hotel` int(15) NOT NULL,
  `tipo_habitacion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones_servicio_rel`
--

CREATE TABLE `habitaciones_servicio_rel` (
  `id_habitacion` int(15) NOT NULL,
  `id_servicio` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(20) NOT NULL,
  `id_pais` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_servicios_rel`
--

CREATE TABLE `hotel_servicios_rel` (
  `id_hotel` int(15) NOT NULL,
  `id_servicio` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(15) NOT NULL,
  `nombre_pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id_reservacion` int(15) NOT NULL,
  `id_hotel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `disponibilidad_hotel` int(1) NOT NULL,
  `disponibilidad_habi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `id_tipo` int(15) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_hotel_rel`
--

CREATE TABLE `usuarios_hotel_rel` (
  `id_usuario` int(15) NOT NULL,
  `id_hotel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_reservaciones_rel`
--

CREATE TABLE `usuarios_reservaciones_rel` (
  `id_usuario` int(15) NOT NULL,
  `id_reservacion` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FK_idpais_idpais` (`id_pais`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `FK_idpaisestado_idpaispais` (`id_pais`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id_habitacion`),
  ADD KEY `FK_idtipo_tipohabitacion` (`tipo_habitacion`),
  ADD KEY `FK_idhotelhabitacion_idhotel` (`id_hotel`);

--
-- Indices de la tabla `habitaciones_servicio_rel`
--
ALTER TABLE `habitaciones_servicio_rel`
  ADD KEY `FK_idhabitacion_idhabitacion` (`id_habitacion`),
  ADD KEY `FK_idservicio_idservicio` (`id_servicio`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `FK_idpais_idpaishotel` (`id_pais`);

--
-- Indices de la tabla `hotel_servicios_rel`
--
ALTER TABLE `hotel_servicios_rel`
  ADD KEY `FK_idhotel_idhotel` (`id_hotel`),
  ADD KEY `FK_idservicio_idserviciorel` (`id_servicio`);

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
  ADD KEY `FK_idusuario_idusuario` (`id_hotel`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

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
  ADD KEY `FK_idusuario_idusuariohote` (`id_usuario`),
  ADD KEY `FK_idhotel_idhotelhotel` (`id_hotel`);

--
-- Indices de la tabla `usuarios_reservaciones_rel`
--
ALTER TABLE `usuarios_reservaciones_rel`
  ADD KEY `FK_idusuario_idusuariorel` (`id_usuario`),
  ADD KEY `FK_idreservacion_idreserva` (`id_reservacion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD CONSTRAINT `FK_id_idusuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `FK_idpais_idpais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `FK_idpaisestado_idpaispais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `FK_idhotelhabitacion_idhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `FK_idtipo_tipohabitacion` FOREIGN KEY (`tipo_habitacion`) REFERENCES `tipo_habitacion` (`id_tipo`);

--
-- Filtros para la tabla `habitaciones_servicio_rel`
--
ALTER TABLE `habitaciones_servicio_rel`
  ADD CONSTRAINT `FK_idhabitacion_idhabitacion` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`),
  ADD CONSTRAINT `FK_idservicio_idservicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicios`);

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FK_idpais_idpaishotel` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `hotel_servicios_rel`
--
ALTER TABLE `hotel_servicios_rel`
  ADD CONSTRAINT `FK_idhotel_idhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `FK_idservicio_idserviciorel` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicios`);

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `FK_idusuario_idusuario` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Filtros para la tabla `usuarios_hotel_rel`
--
ALTER TABLE `usuarios_hotel_rel`
  ADD CONSTRAINT `FK_idhotel_idhotelhotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `FK_idusuario_idusuariohote` FOREIGN KEY (`id_usuario`) REFERENCES `datos_personales` (`id_usuario`);

--
-- Filtros para la tabla `usuarios_reservaciones_rel`
--
ALTER TABLE `usuarios_reservaciones_rel`
  ADD CONSTRAINT `FK_idreservacion_idreserva` FOREIGN KEY (`id_reservacion`) REFERENCES `reservaciones` (`id_reservacion`),
  ADD CONSTRAINT `FK_idusuario_idusuariorel` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
