-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-11-2024 a las 20:36:13
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sismedicina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

DROP TABLE IF EXISTS `administrativos`;
CREATE TABLE IF NOT EXISTS `administrativos` (
  `id_administrativo` int NOT NULL AUTO_INCREMENT,
  `persona_id` int DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_administrativo`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

DROP TABLE IF EXISTS `asignaciones`;
CREATE TABLE IF NOT EXISTS `asignaciones` (
  `id_asignacion` int NOT NULL AUTO_INCREMENT,
  `docente_id` int DEFAULT NULL,
  `nivel_id` int DEFAULT NULL,
  `grado_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`),
  KEY `docente_id` (`docente_id`),
  KEY `nivel_id` (`nivel_id`),
  KEY `grado_id` (`grado_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id_calificacion` int NOT NULL AUTO_INCREMENT,
  `estudiante_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  `nota1` decimal(5,2) DEFAULT NULL,
  `nota2` decimal(5,2) DEFAULT NULL,
  `nota3` decimal(5,2) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_calificacion`),
  KEY `estudiante_id` (`estudiante_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_instituciones`
--

DROP TABLE IF EXISTS `configuracion_instituciones`;
CREATE TABLE IF NOT EXISTS `configuracion_instituciones` (
  `id_config_institucion` int NOT NULL AUTO_INCREMENT,
  `nombre_institucion` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_config_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` int NOT NULL AUTO_INCREMENT,
  `persona_id` int DEFAULT NULL,
  `especialidad` varchar(255) DEFAULT NULL,
  `antiguedad` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_docente`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `persona_id` int DEFAULT NULL,
  `nivel_id` int DEFAULT NULL,
  `grado_id` int DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`),
  KEY `persona_id` (`persona_id`),
  KEY `nivel_id` (`nivel_id`),
  KEY `grado_id` (`grado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

DROP TABLE IF EXISTS `grados`;
CREATE TABLE IF NOT EXISTS `grados` (
  `id_grado` int NOT NULL AUTO_INCREMENT,
  `nivel_id` int DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `paralelo` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_grado`),
  KEY `nivel_id` (`nivel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

DROP TABLE IF EXISTS `kardex`;
CREATE TABLE IF NOT EXISTS `kardex` (
  `id_kardex` int NOT NULL AUTO_INCREMENT,
  `docente_id` int DEFAULT NULL,
  `estudiante_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `nota` tinyint DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_kardex`),
  KEY `docente_id` (`docente_id`),
  KEY `estudiante_id` (`estudiante_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

DROP TABLE IF EXISTS `niveles`;
CREATE TABLE IF NOT EXISTS `niveles` (
  `id_nivel` int NOT NULL AUTO_INCREMENT,
  `gestion_id` int DEFAULT NULL,
  `nivel` varchar(255) DEFAULT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permiso` int NOT NULL AUTO_INCREMENT,
  `nombre_url` varchar(100) DEFAULT NULL,
  `url` text,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `ci` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `id_usuario`, `nombres`, `apellidos`, `ci`, `fecha_nacimiento`, `profesion`, `direccion`, `celular`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(16, 16, 'Ismael ', 'Cancari Apaza', '222222', '1994-08-25', 'Tec. Analista de Sistemas', 'Z. San Juan c/Sucre Nª 695', '65110897', '2024-11-13 15:41:00', '2024-11-13 15:41:00', 0),
(17, 17, 'Ivan', 'Luque Quispe', '9867460', '1994-08-25', 'Tec. Analista de Sistemas', 'Z. San Juan c/Sucre Nª 6820', '65110897', '2024-11-13 15:41:00', '2024-11-13 15:41:00', 0),
(18, 18, 'Ivan', 'Luque Quispe', '9867460', '1994-08-25', 'Tec. Analista de Sistemas', 'Z. San Juan c/Sucre Nª 6820', '65110897', '2024-11-13 16:39:00', '2024-11-13 16:39:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'Administrador', '2024-11-13 11:45:24', '2024-11-13 11:45:24', 1),
(2, 'Docente', '2024-11-13 11:45:53', '2024-11-13 11:45:53', 1),
(3, 'Estudiante', '2024-11-13 11:46:06', '2024-11-13 11:46:06', 1),
(4, 'Secretaria', '2024-11-13 13:49:34', '2024-11-13 13:49:34', 0),
(5, 'Resagado', '2024-11-13 13:50:12', '2024-11-13 13:50:12', 0),
(6, 'Director', '2024-11-13 13:50:49', '2024-11-13 13:50:49', 0),
(28, 'prueba08', '2024-11-20 11:39:40', '2024-11-20 11:39:40', 0),
(29, 'prueba09', '2024-11-20 11:42:51', '2024-11-20 11:42:51', 1),
(30, 'prueba10', '2024-11-20 11:44:09', '2024-11-20 11:44:09', 1),
(31, 'prueba10', '2024-11-20 11:44:14', '2024-11-20 11:44:14', 1),
(32, 'prueba11', '2024-11-20 11:44:31', '2024-11-20 11:44:31', 0),
(33, 'prueba12', '2024-11-20 11:46:03', '2024-11-20 11:46:03', 0),
(34, 'prueba12', '2024-11-20 11:47:53', '2024-11-20 11:47:53', 0),
(35, 'prueba13', '2024-11-20 11:48:07', '2024-11-20 11:48:07', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_permisos`
--

DROP TABLE IF EXISTS `roles_permisos`;
CREATE TABLE IF NOT EXISTS `roles_permisos` (
  `id_rol_permiso` int NOT NULL AUTO_INCREMENT,
  `rol_id` int DEFAULT NULL,
  `permiso_id` int DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_rol_permiso`),
  KEY `rol_id` (`rol_id`),
  KEY `permiso_id` (`permiso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `rol_id` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `unique_email` (`email`),
  KEY `rol_id` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `rol_id`, `email`, `password`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(16, 1, 'ismael.cancari@gmail.com', '$2y$10$/0VoFJJDd5VrFx7bx28CGOOY/qR7KCMopGq.JnDMJWXTRCWq2/pdq', '2024-11-13 15:41:00', '2024-11-13 15:41:00', 0),
(17, 1, 'ivan.luque2016@gmail.com', '$2y$10$aOqXQkDatU6r0s1wlqU0BuTIja8HQIkRURzlczG/58BHiF4.J.hdW', '2024-11-13 15:41:00', '2024-11-13 15:41:00', 0),
(18, 2, 'ivan.luque@administrador.com', '$2y$10$3XBlIiBvbjbKV34w8aHVPOg2cmhQIVM68InbUpTKTLrh0FJl6XH5W', '2024-11-13 16:39:00', '2024-11-13 16:39:00', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD CONSTRAINT `administrativos_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`);

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id_docente`),
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`id_nivel`),
  ADD CONSTRAINT `asignaciones_ibfk_3` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id_grado`),
  ADD CONSTRAINT `asignaciones_ibfk_4` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_persona`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`id_nivel`),
  ADD CONSTRAINT `estudiantes_ibfk_3` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id_grado`);

--
-- Filtros para la tabla `grados`
--
ALTER TABLE `grados`
  ADD CONSTRAINT `grados_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`id_nivel`);

--
-- Filtros para la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD CONSTRAINT `kardex_ibfk_1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id_docente`),
  ADD CONSTRAINT `kardex_ibfk_2` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `kardex_ibfk_3` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `roles_permisos`
--
ALTER TABLE `roles_permisos`
  ADD CONSTRAINT `roles_permisos_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `roles_permisos_ibfk_2` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id_permiso`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
