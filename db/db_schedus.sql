-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 03-12-2018 a las 13:16:00
-- Versión del servidor: 10.3.9-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_schedus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_proyecto`
--

DROP TABLE IF EXISTS `actividad_proyecto`;
CREATE TABLE IF NOT EXISTS `actividad_proyecto` (
  `id_actividad_proyecto` int(10) NOT NULL AUTO_INCREMENT,
  `num_actividad_proyecto` varchar(5) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `name_actividad_proyecto` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_proyecto` int(10) DEFAULT NULL,
  `cod_fase` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_actividad_proyecto`),
  UNIQUE KEY `name_actividad_proyecto` (`name_actividad_proyecto`),
  KEY `actividad_proyecto` (`num_actividad_proyecto`),
  KEY `FK_cod_fase` (`cod_fase`),
  KEY `FK_cod_proyecto_actividad_proyecto` (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

DROP TABLE IF EXISTS `ambiente`;
CREATE TABLE IF NOT EXISTS `ambiente` (
  `id_ambiente` int(10) NOT NULL AUTO_INCREMENT,
  `num_ambiente` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_sede` int(10) DEFAULT NULL,
  `cod_estado_ambiente` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_ambiente`),
  UNIQUE KEY `num_ambiente` (`num_ambiente`),
  KEY `ambiente` (`num_ambiente`,`cod_sede`),
  KEY `FK_cod_sede` (`cod_sede`),
  KEY `FK_cod_estado_ambiente` (`cod_estado_ambiente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`id_ambiente`, `num_ambiente`, `cod_sede`, `cod_estado_ambiente`, `create_time`, `update_time`, `version`) VALUES
(1, '203', 2, 1, '2018-10-03 02:23:50', '2018-10-03 22:49:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

DROP TABLE IF EXISTS `competencia`;
CREATE TABLE IF NOT EXISTS `competencia` (
  `id_competencia` int(10) NOT NULL,
  `cod_programa_formacion` int(10) DEFAULT NULL,
  `codigo_competencia` int(10) NOT NULL,
  `num_competencia2` varchar(20) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `name_competencia` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo_competencia`),
  UNIQUE KEY `name_competencia` (`name_competencia`),
  KEY `competencia` (`codigo_competencia`),
  KEY `FK_cod_programa_formacion` (`cod_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`id_competencia`, `cod_programa_formacion`, `codigo_competencia`, `num_competencia2`, `name_competencia`, `create_time`, `update_time`, `version`) VALUES
(14, 3, 65421385, '2131', 'manhu', '2018-11-29 21:59:50', NULL, NULL),
(13, 5, 123456787, '46513', 'ASDFSAFASF', '2018-11-29 21:29:01', NULL, NULL),
(7, 3, 123456789, '54321', 'Hello', '2018-11-29 21:03:53', NULL, NULL),
(12, 15, 142343242, '13246', 'ASDSADSADAS', '2018-11-29 21:23:58', NULL, NULL),
(2, 1, 220501013, '35823', 'Utilizar software de administración de red para garantizar la accesibilidad de los servicios y optim', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(1, 1, 220501014, '35848', 'Administrar hardware y software de seguridad en la red a partir de normas internacionales. ', '2018-10-03 05:17:28', '2018-10-03 22:49:09', NULL),
(3, 2, 220501031, '02966', 'Entregar la aplicación multimedia para evaluar la satisfacción del cliente.', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(5, 3, 220501034, '35325', 'Implantar la solución que cumpla con los requerimientos para su operación.', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(6, 3, 220501035, '35329', 'Aplicar buenas prácticas de calidad en el proceso de desarrollo de software, de acuerdo con el refer', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(4, 2, 220501039, '33279', 'Realizar la post-producción para generar la animación final de acuerdo con las especificaciones del ', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(9, 3, 654829713, '65231', 'Joahn', '2018-11-29 21:21:34', NULL, NULL),
(8, 3, 985632147, '98745', 'Nao', '2018-11-29 21:20:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

DROP TABLE IF EXISTS `dias`;
CREATE TABLE IF NOT EXISTS `dias` (
  `id_dias` int(10) NOT NULL AUTO_INCREMENT,
  `name_dias` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_dias`),
  UNIQUE KEY `name_dias` (`name_dias`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id_dias`, `name_dias`, `version`) VALUES
(1, 'Lunes', NULL),
(2, 'Martes', NULL),
(3, 'Miércoles', NULL),
(4, 'Jueves', NULL),
(5, 'Viernes', NULL),
(6, 'Sabado', NULL),
(7, 'Domingo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ambiente`
--

DROP TABLE IF EXISTS `estado_ambiente`;
CREATE TABLE IF NOT EXISTS `estado_ambiente` (
  `id_estado_ambiente` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_ambiente` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_ambiente`),
  UNIQUE KEY `name_estado_ambiente` (`name_estado_ambiente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `estado_ambiente`
--

INSERT INTO `estado_ambiente` (`id_estado_ambiente`, `name_estado_ambiente`, `create_time`, `update_time`, `version`) VALUES
(1, 'Disponible', '2018-10-03 02:18:19', '2018-10-03 22:49:16', NULL),
(2, 'Asignado', '2018-10-03 02:18:26', '2018-10-03 22:49:16', NULL),
(3, 'Chao', '2018-11-30 14:23:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ficha`
--

DROP TABLE IF EXISTS `estado_ficha`;
CREATE TABLE IF NOT EXISTS `estado_ficha` (
  `id_estado_ficha` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_ficha` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_ficha`),
  UNIQUE KEY `name_estado_ficha` (`name_estado_ficha`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `estado_ficha`
--

INSERT INTO `estado_ficha` (`id_estado_ficha`, `name_estado_ficha`, `create_time`, `update_time`, `version`) VALUES
(1, 'Pendiente Asignado', '2018-10-03 22:57:14', '0000-00-00 00:00:00', NULL),
(2, 'En formación', '2018-10-03 22:57:22', '0000-00-00 00:00:00', NULL),
(3, 'Cancelado', '2018-10-03 22:57:30', '0000-00-00 00:00:00', NULL),
(4, 'Completado', '2018-10-03 22:57:39', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_horario_asignada`
--

DROP TABLE IF EXISTS `estado_horario_asignada`;
CREATE TABLE IF NOT EXISTS `estado_horario_asignada` (
  `id_estado_horario_asignada` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_horario_asignada` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_horario_asignada`),
  UNIQUE KEY `name_estado_horario_asignada` (`name_estado_horario_asignada`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `estado_horario_asignada`
--

INSERT INTO `estado_horario_asignada` (`id_estado_horario_asignada`, `name_estado_horario_asignada`, `create_time`, `update_time`, `version`) VALUES
(1, 'Creado', '2018-10-03 03:03:00', '2018-10-03 22:49:25', NULL),
(2, 'En proceso', '2018-10-03 03:03:08', '2018-10-03 22:49:25', NULL),
(3, 'Revisión', '2018-10-03 03:03:23', '2018-10-03 22:49:25', NULL),
(4, 'Publicado', '2018-10-03 03:03:31', '2018-10-03 22:49:25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_programa_formacion`
--

DROP TABLE IF EXISTS `estado_programa_formacion`;
CREATE TABLE IF NOT EXISTS `estado_programa_formacion` (
  `id_estado_programa_formacion` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_programa_formacion` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_programa_formacion`),
  UNIQUE KEY `name_estado_programa_formacion` (`name_estado_programa_formacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `estado_programa_formacion`
--

INSERT INTO `estado_programa_formacion` (`id_estado_programa_formacion`, `name_estado_programa_formacion`, `create_time`, `update_time`, `version`) VALUES
(1, 'Activo', '2018-10-03 02:45:41', '2018-10-03 22:49:08', NULL),
(2, 'Inactivo', '2018-10-03 02:45:51', '2018-10-03 22:49:08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

DROP TABLE IF EXISTS `estado_usuario`;
CREATE TABLE IF NOT EXISTS `estado_usuario` (
  `id_estado_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_usuario` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_usuario`),
  UNIQUE KEY `name_estado_usuario` (`name_estado_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_estado_usuario`, `name_estado_usuario`, `create_time`, `update_time`, `version`) VALUES
(1, 'Creado', '2018-10-03 02:35:35', '2018-10-03 22:49:04', NULL),
(2, 'Activo', '2018-10-03 02:35:40', '2018-10-03 22:49:04', NULL),
(3, 'Inactivo', '2018-10-03 02:35:46', '2018-10-03 22:49:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

DROP TABLE IF EXISTS `fase`;
CREATE TABLE IF NOT EXISTS `fase` (
  `id_fase` int(10) NOT NULL AUTO_INCREMENT,
  `name_fase` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_fase`),
  UNIQUE KEY `name_fase` (`name_fase`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`id_fase`, `name_fase`, `create_time`, `update_time`, `version`) VALUES
(1, 'ANALISIS', '2018-10-03 02:25:10', '2018-10-03 22:49:21', NULL),
(2, 'PLANEACIÓN', '2018-10-03 02:25:13', '2018-10-03 22:49:21', NULL),
(3, 'EJECUCIÓN', '2018-10-03 02:25:19', '2018-10-03 22:49:21', NULL),
(4, 'EVALUACIÓN', '2018-10-03 02:25:26', '2018-10-03 22:49:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

DROP TABLE IF EXISTS `ficha`;
CREATE TABLE IF NOT EXISTS `ficha` (
  `id_ficha` int(10) NOT NULL AUTO_INCREMENT,
  `num_ficha` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `cod_estado_ficha` int(10) DEFAULT NULL,
  `cod_programa_formacion` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_ficha`),
  UNIQUE KEY `num_ficha` (`num_ficha`),
  KEY `FK_cod_estado_ficha` (`cod_estado_ficha`),
  KEY `FK_cod_programa_formacion_ficha` (`cod_programa_formacion`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `num_ficha`, `create_time`, `update_time`, `version`, `cod_estado_ficha`, `cod_programa_formacion`) VALUES
(1, '1320652', '2018-10-05 00:44:49', '0000-00-00 00:00:00', NULL, 4, 11),
(2, '1320500', '2018-10-05 00:45:10', '0000-00-00 00:00:00', NULL, 2, 3),
(3, '6546513', '2018-11-08 19:29:43', NULL, NULL, 4, 2),
(6, '1320658', '2018-11-23 13:18:02', NULL, NULL, 1, 3),
(7, '124434', '2018-11-23 21:44:58', NULL, NULL, 3, 1),
(8, '346436', '2018-11-23 21:45:42', NULL, NULL, 1, 2),
(9, '6546546', '2018-11-23 21:46:43', NULL, NULL, 1, 3),
(10, '4598897798798', '2018-11-28 16:45:15', NULL, NULL, 3, 2),
(12, '54645645', '2018-11-28 16:46:23', NULL, NULL, 2, 2),
(15, '6456465', '2018-11-28 18:25:31', NULL, NULL, 1, 5),
(16, '54544554', '2018-11-28 18:25:37', NULL, NULL, 1, 3),
(17, '545', '2018-11-28 18:25:41', NULL, NULL, 4, 5),
(19, '132065258', '2018-11-30 21:47:16', NULL, NULL, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id_grupo` int(10) NOT NULL AUTO_INCREMENT,
  `cod_ficha` int(10) DEFAULT NULL,
  `num_grupo` varchar(3) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_ruta_ficha` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `grupo` (`cod_ficha`,`num_grupo`,`cod_ruta_ficha`),
  KEY `FK_cod_ruta_ficha` (`cod_ruta_ficha`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `cod_ficha`, `num_grupo`, `cod_ruta_ficha`, `create_time`, `update_time`, `version`) VALUES
(1, 1, 'G1', 1, '2018-10-05 00:47:29', '0000-00-00 00:00:00', NULL),
(2, 1, 'G2', 1, '2018-10-05 01:22:57', '0000-00-00 00:00:00', NULL),
(3, 1, 'G3', 2, '2018-10-05 01:26:10', '0000-00-00 00:00:00', NULL),
(4, 2, 'G1', 2, '2018-10-05 01:26:23', '0000-00-00 00:00:00', NULL),
(5, 2, 'G2', 3, '2018-10-05 01:26:48', '0000-00-00 00:00:00', NULL),
(6, 2, 'G3', 3, '2018-10-05 01:28:01', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_asignada`
--

DROP TABLE IF EXISTS `horario_asignada`;
CREATE TABLE IF NOT EXISTS `horario_asignada` (
  `id_horas_asignadas` int(10) NOT NULL AUTO_INCREMENT,
  `cod_trimestre_horario` int(10) DEFAULT NULL,
  `cod_modo` int(10) DEFAULT NULL,
  `cod_ruta_ficha` int(10) DEFAULT NULL,
  `trimestre_ficha` varchar(4) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_resultado_aprendizaje` int(10) DEFAULT NULL,
  `cod_instructor` int(10) DEFAULT NULL,
  `cod_dias` int(10) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `cod_ambiente` int(10) DEFAULT NULL,
  `completado` bit(1) DEFAULT NULL,
  `cod_estado_horario` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_horas_asignadas`),
  KEY `FK_cod_estado_horario_asignado` (`cod_estado_horario`),
  KEY `FK_cod_dias` (`cod_dias`),
  KEY `FK_cod_trimestre` (`cod_trimestre_horario`),
  KEY `FK_cod_modo` (`cod_modo`),
  KEY `FK_cod_instructor` (`cod_instructor`),
  KEY `FK_cod_resultado_aprendizaje` (`cod_resultado_aprendizaje`),
  KEY `FK_cod_ruta_ficha_horario_asignada` (`cod_ruta_ficha`),
  KEY `FK_cod_ambiente` (`cod_ambiente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

DROP TABLE IF EXISTS `jornada`;
CREATE TABLE IF NOT EXISTS `jornada` (
  `id_jornada` int(10) NOT NULL AUTO_INCREMENT,
  `name_jornada` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_jornada`),
  UNIQUE KEY `name_jornada` (`name_jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `name_jornada`, `create_time`, `update_time`, `version`) VALUES
(1, 'Diurna', '2018-10-03 02:12:56', '2018-10-03 22:49:17', NULL),
(2, 'Nocturna', '2018-10-03 02:13:01', '2018-10-03 22:49:17', NULL),
(3, 'Fin de semana', '2018-10-03 02:13:10', '2018-10-03 22:49:17', NULL),
(4, 'hola', '2018-11-29 21:54:30', NULL, NULL),
(9, 'sad', '2018-11-30 12:25:35', NULL, NULL),
(10, 'holasd', '2018-11-30 12:35:38', NULL, NULL),
(12, 'mixta', '2018-11-30 22:12:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo`
--

DROP TABLE IF EXISTS `modo`;
CREATE TABLE IF NOT EXISTS `modo` (
  `id_modo` int(10) NOT NULL AUTO_INCREMENT,
  `name_modo` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_modo`),
  UNIQUE KEY `name_modo` (`name_modo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `modo`
--

INSERT INTO `modo` (`id_modo`, `name_modo`, `create_time`, `update_time`, `version`) VALUES
(1, 'Presencial', '2018-10-03 02:12:40', '2018-10-03 22:49:12', NULL),
(2, 'Virtual', '2018-10-03 03:04:05', '2018-10-03 22:49:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_programa_formacion`
--

DROP TABLE IF EXISTS `nivel_programa_formacion`;
CREATE TABLE IF NOT EXISTS `nivel_programa_formacion` (
  `id_nivel_programa_formacion` int(10) NOT NULL AUTO_INCREMENT,
  `name_nivel_programa_formacion` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `duracion` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_nivel_programa_formacion`),
  UNIQUE KEY `name_nivel_programa_formacion` (`name_nivel_programa_formacion`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `nivel_programa_formacion`
--

INSERT INTO `nivel_programa_formacion` (`id_nivel_programa_formacion`, `name_nivel_programa_formacion`, `duracion`, `create_time`, `update_time`, `version`) VALUES
(1, 'Curso complementario', NULL, '2018-10-03 02:39:11', '2018-10-03 22:49:08', NULL),
(2, 'Certificación De Competencia Laboral', '2 años', '2018-10-03 02:41:01', '2018-10-03 22:49:08', NULL),
(3, 'Técnico', NULL, '2018-10-03 02:41:04', '2018-10-03 22:49:08', NULL),
(4, 'Tecnólogia', NULL, '2018-10-03 02:42:20', '2018-10-03 22:49:08', NULL),
(5, 'Especialización Tecnológica', '6 meses', '2018-10-03 02:43:08', '2018-10-03 22:49:08', NULL),
(6, 'Pregrado', NULL, '2018-10-03 02:43:16', '2018-10-03 22:49:08', NULL),
(7, 'Especialización', '5 años', '2018-10-03 02:43:22', '2018-10-03 22:49:08', NULL),
(8, 'Maestría', NULL, '2018-10-03 02:43:29', '2018-10-03 22:49:08', NULL),
(9, 'Doctorado', NULL, '2018-10-03 02:43:40', '2018-10-03 22:49:08', NULL),
(11, 'dsfdf', 'asdasd', '2018-11-29 16:33:09', NULL, NULL),
(12, 'kasjl', 'safas', '2018-11-29 16:33:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_formacion`
--

DROP TABLE IF EXISTS `programa_formacion`;
CREATE TABLE IF NOT EXISTS `programa_formacion` (
  `id_programa_formacion` int(10) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `short_name_programa_formacion` varchar(5) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `name_programa_formacion` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `version_programa` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_nivel_programa_formacion` int(10) DEFAULT NULL,
  `cod_proyecto` int(10) DEFAULT NULL,
  `cod_estado_programa_formacion` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_programa_formacion`),
  UNIQUE KEY `name_programa_formacion` (`name_programa_formacion`),
  KEY `programa_formacion` (`codigo`),
  KEY `FK_cod_estado_programa_formacion` (`cod_estado_programa_formacion`),
  KEY `FK_cod_nivel_programa_formacion` (`cod_nivel_programa_formacion`),
  KEY `FK_cod_proyecto_programa_formacion` (`cod_proyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `programa_formacion`
--

INSERT INTO `programa_formacion` (`id_programa_formacion`, `codigo`, `short_name_programa_formacion`, `name_programa_formacion`, `version_programa`, `cod_nivel_programa_formacion`, `cod_proyecto`, `cod_estado_programa_formacion`, `create_time`, `update_time`, `version`) VALUES
(0, NULL, 'NULL', 'NULL', NULL, NULL, NULL, NULL, '2018-11-08 20:20:52', NULL, NULL),
(1, '228101', 'GRD', 'GESTION DE REDES DE DATOS ', 'V 1', 3, 3, 2, '2018-10-03 05:11:28', '2018-10-03 22:49:11', NULL),
(2, '228106', 'PM', 'PRODUCCIÓN DE MULTIMEDIA', 'V 102', 3, 2, 1, '2018-10-03 05:12:27', '2018-10-03 22:49:11', NULL),
(3, '228183', 'ADSI', 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION ', 'V 102', 4, 1, 1, '2018-10-03 05:15:53', '2018-10-03 22:49:11', NULL),
(5, '228102', 'TPS', 'TECNICO DE PROGRAMACION DE SOTFWARE', '25', 3, 1, 2, '2018-11-19 19:11:18', NULL, NULL),
(8, '4', 'sdf', 'dsfds ', 's 3', 8, 2, 2, '2018-11-21 14:33:35', NULL, NULL),
(11, '4', 'sdf', 'asdfsdfsd', 'd 5 ', 8, 3, 2, '2018-11-21 14:34:32', NULL, NULL),
(13, '2', 'SF', 'SDAF', 'D 5JKJMK', 7, 3, 2, '2018-11-21 14:38:04', NULL, NULL),
(14, '665', 'fc', 'vqfa', 'qva', 4, 2, 2, '2018-11-21 14:51:30', NULL, NULL),
(15, '645', 'GDHDH', 'FGHDGFDHG', 'V 32423', 8, 2, 1, '2018-11-29 12:52:49', NULL, NULL),
(16, '324', 'SADF', 'ASFD', 'ASF', 8, 3, 1, '2018-11-29 12:54:15', NULL, NULL),
(18, '324342', 'SDAS', 'DSAF', 'ADFS', 8, 3, 2, '2018-11-29 12:55:28', NULL, NULL),
(23, '11111', 'SAF', 'ASDFSAF', 'ASDSA', 8, 3, 1, '2018-11-29 12:58:20', NULL, NULL),
(26, '1234', 'SADF', 'SAD', 'SAD', 2, 3, 1, '2018-11-29 13:57:22', NULL, NULL),
(27, '564645', 'GGSJ', 'BJHA', 'GGG', 4, 3, 1, '2018-11-29 14:19:28', NULL, NULL),
(31, '4856', 'SDFA', 'SAFD', 'V 5', 3, 3, 1, '2018-11-29 14:45:28', NULL, NULL),
(32, '12345', 'JJAJA', 'JAJAJAJ', 'V 51324654', 3, 3, 2, '2018-11-29 14:46:05', NULL, NULL),
(34, '999900', 'AAA', 'DFGSDVFV', 'GFCGCFGC', 2, 2, 1, '2018-11-29 15:15:28', NULL, NULL),
(35, '159', 'ADSI', 'ANALISIS DE DESARROLO DE SISTEMA DE INFORMACION', 'V 15', 4, 1, 1, '2018-11-30 21:48:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(10) NOT NULL AUTO_INCREMENT,
  `name_proyecto` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_proyecto`),
  UNIQUE KEY `name_proyecto` (`name_proyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `name_proyecto`, `create_time`, `update_time`, `version`) VALUES
(1, 'SISTEMA INTEGRAL WEB PARA GESTION DE PROCESOS EDUCATIVOS DEL CEET', '2018-10-03 02:37:03', '2018-10-03 22:49:19', NULL),
(2, 'PRODUCCIÓN DE CONTENIDOS DIGITALES  E IMPRESOS QUE PROMUEVAN LA SOLUCIÓN DE PROBLEMÁTICAS SOCIALES EN BOGOTÁ', '2018-10-03 02:37:21', '2018-10-03 22:49:19', NULL),
(3, 'IMPLEMENTACION DE UNA RED DE DATOS CORPORATIVA MULTISERVICIO, ADMINISTRADA Y CONFIGURADA BAJO SISTEMA OPERATIVO LINUX', '2018-10-03 02:37:25', '2018-10-03 22:49:19', NULL),
(4, 'hola', '2018-11-29 19:13:06', NULL, NULL),
(5, 'johann', '2018-11-29 19:13:46', NULL, NULL),
(8, 'Lopez Parra', '2018-11-29 19:14:49', NULL, NULL),
(11, 'johannasd', '2018-11-30 12:40:31', NULL, NULL),
(12, 'safdsagdsgfdas', '2018-11-30 12:48:45', NULL, NULL),
(13, 'sfsdfgdagsdsfg', '2018-11-30 12:49:59', NULL, NULL),
(14, 'sadfsafsafsafsafasfsa', '2018-11-30 12:50:03', NULL, NULL),
(15, 'safsafsafsafsafsadsad', '2018-11-30 12:50:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_aprendizaje`
--

DROP TABLE IF EXISTS `resultado_aprendizaje`;
CREATE TABLE IF NOT EXISTS `resultado_aprendizaje` (
  `id_resultado_aprendizaje` int(10) NOT NULL AUTO_INCREMENT,
  `num_resultado_aprendizaje1` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `num_resultado_aprendizaje2` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_competencia` int(10) DEFAULT NULL,
  `name_resultado_aprendizaje` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_resultado_aprendizaje`),
  UNIQUE KEY `name_resultado_aprendizaje` (`name_resultado_aprendizaje`),
  KEY `resultado_aprendizaje` (`num_resultado_aprendizaje1`,`num_resultado_aprendizaje2`),
  KEY `FK_cod_competencia` (`cod_competencia`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `resultado_aprendizaje`
--

INSERT INTO `resultado_aprendizaje` (`id_resultado_aprendizaje`, `num_resultado_aprendizaje1`, `num_resultado_aprendizaje2`, `cod_competencia`, `name_resultado_aprendizaje`, `create_time`, `update_time`, `version`) VALUES
(1, 'NULL', 'NULL', 0, 'Definir el plan de seguridad para la red de datos aplicando estándares y normas internacionales de s', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'NULL', 'NULL', 0, 'Diagnosticar el estado de la seguridad en la red de datos de la organización para definir el plan de', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'NULL', 'NULL', 0, 'Implementar el plan de seguridad en la organización aplicando estándares y normas internacionales de', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'NULL', '437214', 0, 'Realizar procesos de contratación y negociación de la infraestructura de TI, participando como contr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'NULL', '437208', 0, 'Elaborar la documentación de los procedimientos técnicos y administrativos, de acuerdo a los requeri', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'NULL', '437207', 0, 'Monitorear los eventos en la infraestructura de red, mediante herramientas y técnicas forenses que p', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'NULL', '437152', 0, 'Monitorear el funcionamiento de la red de acuerdo a políticas de la organización y frente a eventual', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'NULL', '437151', 0, 'Elaborar la bitácora de los procedimientos técnicos y administrativos, mediante el uso de herramient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'NULL', '437150', 0, 'Comprobar especificaciones técnicas del software mediante la comparación del software recibido con e', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'NULL', '437149', 0, 'Establecer sistemas de control en la red para mantenerla activa y disponible, según necesidades, pol', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, '04', '437140', 220501031, 'Elaborar los manuales y ayudas análogas o digitales necesarias para facilitar la operación del proye', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, '03', '437139', 220501031, 'Realizar las modificaciones pertinentes de acuerdo a lo evaluado en las pruebas de accesibilidad, di', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, '01', '436565', 220501035, 'Identificar las características de los procesos de desarrollo de software, frente al referente de ca', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, '05', '436564', 220501035, 'Evaluar procesos y productos de desarrollo de software, documentar y concertar acciones a seguir, pa', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, '06', '436563', 220501035, 'Elaborar el informe final del proceso de gestión de calidad en el desarrollo de software, que consol', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, '02', '436562', 220501035, 'Identificar los puntos críticos de control en los procesos de desarrollo de software, para establece', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, '04', '436561', 220501035, 'Elaborar instrumentos e instructivos, requeridos por el aseguramiento de la calidad, para documentar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, '03', '436560', 220501035, 'Aplicar los estándares de calidad involucrados en los procesos de desarrollo de software, siguiendo ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, '03', '436555', 220501034, 'Definir estrategias para la validación de manuales de usuario y de operación, respondiendo a las nec', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, '05', '436554', 220501034, 'Elaborar informes técnicos relacionados con la solución informática implantada, de acuerdo con las p', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, '02', '436553', 220501034, 'Elaborar el informe administrativo, siguiendo los protocolos de la organización, basado en los plane', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, '01', '436552', 220501034, 'Configurar el software de la aplicación para cliente y servidor, mediante la utilización del hardwar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, '04', '436551', 220501034, 'Capacitar a los usuarios del sistema, sobre la estructuración y el manejo del aplicativo, de acuerdo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, '02', '436465', 220501039, 'Editar imágenes utilizando software de edición audiovisual de acuerdo con lo establecido en guion té', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(25, '01', '436464', 220501039, 'Ajustar la iluminación y el color de la escena para lograr la apariencia visual deseada', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `name_rol` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_rol`),
  UNIQUE KEY `name_rol` (`name_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `name_rol`, `create_time`, `update_time`, `version`) VALUES
(1, 'Coordinador', '2018-10-03 01:57:22', '2018-10-03 22:49:03', NULL),
(2, 'Lider', '2018-10-03 01:57:31', '2018-10-03 22:49:03', NULL),
(3, 'Instructor', '2018-10-03 01:57:44', '2018-10-03 22:49:03', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_ficha`
--

DROP TABLE IF EXISTS `ruta_ficha`;
CREATE TABLE IF NOT EXISTS `ruta_ficha` (
  `id_ruta_ficha` int(10) NOT NULL AUTO_INCREMENT,
  `name_ruta_ficha` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `num_ruta_ficha` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_jornada` int(10) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_ruta_ficha`),
  UNIQUE KEY `name_ruta_ficha` (`name_ruta_ficha`),
  KEY `ruta_ficha` (`name_ruta_ficha`,`num_ruta_ficha`),
  KEY `FK_cod_jornada` (`cod_jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `ruta_ficha`
--

INSERT INTO `ruta_ficha` (`id_ruta_ficha`, `name_ruta_ficha`, `num_ruta_ficha`, `cod_jornada`, `fecha_inicio`, `fecha_fin`, `observaciones`, `create_time`, `update_time`, `version`) VALUES
(1, '1320652 G1-G2', '1320652 G1', 1, '2017-01-22', '2019-01-22', 'FUSION', '2018-10-05 00:47:05', '0000-00-00 00:00:00', NULL),
(2, '1320652 G3 - 1320500', '13206520 G', 1, '2017-01-22', '2019-01-22', 'FUSION', '2018-10-05 01:25:38', '0000-00-00 00:00:00', NULL),
(3, '1320500 G2-G3', '1320500 G2', 1, '2017-01-22', '2019-01-22', 'FUSION', '2018-10-05 01:27:40', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

DROP TABLE IF EXISTS `sede`;
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(10) NOT NULL AUTO_INCREMENT,
  `name_sede` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_sede`),
  UNIQUE KEY `name_sede` (`name_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `name_sede`, `direccion`, `create_time`, `update_time`, `version`) VALUES
(1, 'CEET', 'asfdsafd', '2018-10-03 02:14:58', '2018-10-03 22:49:15', NULL),
(2, 'BARRIO COLOMBIA', 'Calle 69 No 20 – 36', '2018-10-03 02:14:42', '2018-10-03 22:49:15', NULL),
(3, 'RESTREPO', 'Av. 1ra de Mayo N° 12 D-68 ', '2018-10-03 02:13:54', '2018-10-03 22:49:15', NULL),
(4, 'sadsa', 'sadasda', '2018-11-30 15:10:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

DROP TABLE IF EXISTS `trimestre`;
CREATE TABLE IF NOT EXISTS `trimestre` (
  `id_trimestre` int(10) NOT NULL AUTO_INCREMENT,
  `name_trimestre` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_trimestre`),
  UNIQUE KEY `name_trimestre` (`name_trimestre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `trimestre`
--

INSERT INTO `trimestre` (`id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin`, `create_time`, `update_time`, `version`) VALUES
(1, 'I-2019', '2019-01-21', '2019-04-05', '2018-10-03 02:26:48', '2018-10-03 22:49:22', NULL),
(2, 'II-2019', '2018-11-21', '2018-11-15', '2018-11-30 19:26:30', NULL, NULL),
(3, '', '2018-11-06', '2018-12-20', '2018-11-30 19:33:38', NULL, NULL),
(4, 'help!!!', '2018-12-20', '2019-03-15', '2018-11-30 19:36:11', NULL, NULL),
(5, 'hola', '2018-11-04', '2020-02-13', '2018-11-30 19:37:56', NULL, NULL),
(6, 'III - 2019', '2018-07-07', '2018-09-24', '2018-11-30 22:07:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `dni` varchar(15) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `apellido` varchar(60) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_rol` int(10) DEFAULT NULL,
  `cod_estado_usuario` int(10) DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `documento` (`dni`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `token` (`token`),
  KEY `FK_cod_estado_usuario` (`cod_estado_usuario`),
  KEY `FK_cod_rol` (`cod_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci COMMENT='Este tabla del usuario para accede el sistema SCHEDUS' ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `dni`, `nombre`, `apellido`, `email`, `password`, `token`, `cod_rol`, `cod_estado_usuario`, `version`, `create_time`, `update_time`) VALUES
(1, '1231', 'Admin', 'Nimda', 'admin@email.com', '123456', NULL, 1, 2, NULL, '2018-10-03 02:36:25', '2018-10-03 22:49:02'),
(2, '1232', 'Lider', 'Redil', 'lider@email.com', '654321', NULL, 2, 2, NULL, '2018-10-03 03:04:51', '2018-10-03 22:49:02'),
(3, '1233', 'Instructor', 'Rotcurtsni', 'instructor@email.com', '321654', NULL, 3, 2, NULL, '2018-10-03 03:05:48', '2018-10-03 22:49:02'),
(4, '354654', 'Andres', 'Garcia', 'afgarcia0479@misena.edu.co', NULL, NULL, 3, 2, NULL, '2018-10-23 15:08:33', NULL),
(5, '1230', 'Johann', 'Amaya', 'jaamaya643@misena.edu.co', NULL, NULL, 3, 2, NULL, '2018-10-29 17:09:46', NULL),
(6, '1239', 'Camila', 'Gaona', 'fcgaona@misena.edu.co', NULL, NULL, 3, 3, NULL, '2018-10-29 17:25:08', NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ambientes`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ambientes`;
CREATE TABLE IF NOT EXISTS `v_ambientes` (
`id_ambiente` int(10)
,`num_ambiente` varchar(100)
,`name_sede` varchar(100)
,`direccion` varchar(191)
,`name_estado_ambiente` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_competencias_resultado_aprendizaje_programa_formacion`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_competencias_resultado_aprendizaje_programa_formacion`;
CREATE TABLE IF NOT EXISTS `v_competencias_resultado_aprendizaje_programa_formacion` (
`id_resultado_aprendizaje` int(10)
,`cod_competencia` int(10)
,`num_resultado_aprendizaje1` varchar(10)
,`num_resultado_aprendizaje2` varchar(10)
,`name_resultado_aprendizaje` varchar(100)
,`cod_programa_formacion` int(10)
,`codigo_competencia` int(10)
,`num_competencia2` varchar(20)
,`name_competencia` varchar(100)
,`id_programa_formacion` int(10)
,`codigo` varchar(10)
,`short_name_programa_formacion` varchar(5)
,`name_programa_formacion` varchar(191)
,`version_programa` varchar(10)
,`id_nivel_programa_formacion` int(10)
,`name_nivel_programa_formacion` varchar(100)
,`duracion` varchar(100)
,`id_estado_programa_formacion` int(10)
,`name_estado_programa_formacion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ficha_grupo_programa_nivel_estado`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ficha_grupo_programa_nivel_estado`;
CREATE TABLE IF NOT EXISTS `v_ficha_grupo_programa_nivel_estado` (
`id_ficha` int(10)
,`num_ficha` varchar(100)
,`num_grupo` varchar(3)
,`name_programa_formacion` varchar(191)
,`name_nivel_programa_formacion` varchar(100)
,`name_estado_ficha` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ficha_programa_nivel_estado`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ficha_programa_nivel_estado`;
CREATE TABLE IF NOT EXISTS `v_ficha_programa_nivel_estado` (
`id_ficha` int(10)
,`num_ficha` varchar(100)
,`id_programa_formacion` int(10)
,`name_programa_formacion` varchar(191)
,`id_nivel_programa_formacion` int(10)
,`name_nivel_programa_formacion` varchar(100)
,`id_estado_ficha` int(10)
,`name_estado_ficha` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_grupo_ficha`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_grupo_ficha`;
CREATE TABLE IF NOT EXISTS `v_grupo_ficha` (
`id_grupo` int(10)
,`id_ficha` int(10)
,`num_ficha` varchar(100)
,`num_grupo` varchar(3)
,`id_ruta_ficha` int(10)
,`name_ruta_ficha` varchar(100)
,`num_ruta_ficha` varchar(10)
,`cod_jornada` int(10)
,`fecha_inicio` date
,`fecha_fin` date
,`observaciones` varchar(191)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_horario_asignado`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_horario_asignado`;
CREATE TABLE IF NOT EXISTS `v_horario_asignado` (
`name_trimestre` varchar(100)
,`fecha_inicio` date
,`fecha_fin` date
,`name_ruta_ficha` varchar(100)
,`num_ruta_ficha` varchar(10)
,`name_jornada` varchar(100)
,`short_name_programa_formacion` varchar(5)
,`name_programa_formacion` varchar(191)
,`fecha_inicio2` date
,`fecha_fin2` date
,`cod_competencia` int(10)
,`num_resultado_aprendizaje1` varchar(10)
,`num_resultado_aprendizaje2` varchar(10)
,`name_resultado_aprendizaje` varchar(100)
,`cod_programa_formacion` int(10)
,`codigo_competencia` int(10)
,`num_competencia2` varchar(20)
,`name_competencia` varchar(100)
,`nombre` varchar(60)
,`apellido` varchar(60)
,`name_modo` varchar(100)
,`name_dias` varchar(100)
,`hora_inicio` time
,`hora_fin` time
,`num_ambiente` varchar(100)
,`name_sede` varchar(100)
,`direccion` varchar(191)
,`name_estado_horario_asignada` varchar(100)
,`num_actividad_proyecto` varchar(5)
,`name_actividad_proyecto` varchar(100)
,`observaciones` varchar(191)
,`name_fase` varchar(100)
,`name_proyecto` varchar(191)
,`name_nivel_programa_formacion` varchar(100)
,`duracion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_programa_formacion`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_programa_formacion`;
CREATE TABLE IF NOT EXISTS `v_programa_formacion` (
`id_programa_formacion` int(10)
,`codigo` varchar(10)
,`short_name_programa_formacion` varchar(5)
,`name_programa_formacion` varchar(191)
,`version_programa` varchar(10)
,`id_proyecto` int(10)
,`name_proyecto` varchar(191)
,`id_nivel_programa_formacion` int(10)
,`name_nivel_programa_formacion` varchar(100)
,`duracion` varchar(100)
,`id_estado_programa_formacion` int(10)
,`name_estado_programa_formacion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ruta_ficha`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ruta_ficha`;
CREATE TABLE IF NOT EXISTS `v_ruta_ficha` (
`id_ruta_ficha` int(10)
,`name_ruta_ficha` varchar(100)
,`num_ruta_ficha` varchar(10)
,`fecha_inicio` date
,`fecha_fin` date
,`observaciones` varchar(191)
,`id_jornada` int(10)
,`name_jornada` varchar(100)
,`id_ficha` int(10)
,`num_ficha` varchar(100)
,`num_grupo` varchar(3)
,`id_estado_ficha` int(10)
,`name_estado_ficha` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_usuarios`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_usuarios`;
CREATE TABLE IF NOT EXISTS `v_usuarios` (
`id_usuario` int(10)
,`dni` varchar(15)
,`nombre` varchar(60)
,`apellido` varchar(60)
,`email` varchar(60)
,`password` varchar(128)
,`id_rol` int(10)
,`name_rol` varchar(100)
,`id_estado_usuario` int(10)
,`name_estado_usuario` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ambientes`
--
DROP TABLE IF EXISTS `v_ambientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambientes`  AS  select `ambiente`.`id_ambiente` AS `id_ambiente`,`ambiente`.`num_ambiente` AS `num_ambiente`,`sede`.`name_sede` AS `name_sede`,`sede`.`direccion` AS `direccion`,`estado_ambiente`.`name_estado_ambiente` AS `name_estado_ambiente` from ((`ambiente` join `sede` on(`ambiente`.`cod_sede` = `sede`.`id_sede`)) join `estado_ambiente` on(`ambiente`.`cod_estado_ambiente` = `estado_ambiente`.`id_estado_ambiente`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_competencias_resultado_aprendizaje_programa_formacion`
--
DROP TABLE IF EXISTS `v_competencias_resultado_aprendizaje_programa_formacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_competencias_resultado_aprendizaje_programa_formacion`  AS  select `resultado_aprendizaje`.`id_resultado_aprendizaje` AS `id_resultado_aprendizaje`,`resultado_aprendizaje`.`cod_competencia` AS `cod_competencia`,`resultado_aprendizaje`.`num_resultado_aprendizaje1` AS `num_resultado_aprendizaje1`,`resultado_aprendizaje`.`num_resultado_aprendizaje2` AS `num_resultado_aprendizaje2`,`resultado_aprendizaje`.`name_resultado_aprendizaje` AS `name_resultado_aprendizaje`,`competencia`.`cod_programa_formacion` AS `cod_programa_formacion`,`competencia`.`codigo_competencia` AS `codigo_competencia`,`competencia`.`num_competencia2` AS `num_competencia2`,`competencia`.`name_competencia` AS `name_competencia`,`programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`codigo` AS `codigo`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`programa_formacion`.`version_programa` AS `version_programa`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion`,`estado_programa_formacion`.`id_estado_programa_formacion` AS `id_estado_programa_formacion`,`estado_programa_formacion`.`name_estado_programa_formacion` AS `name_estado_programa_formacion` from ((((`competencia` join `resultado_aprendizaje` on(`competencia`.`codigo_competencia` = `resultado_aprendizaje`.`cod_competencia`)) join `programa_formacion` on(`competencia`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `estado_programa_formacion` on(`programa_formacion`.`cod_estado_programa_formacion` = `estado_programa_formacion`.`id_estado_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ficha_grupo_programa_nivel_estado`
--
DROP TABLE IF EXISTS `v_ficha_grupo_programa_nivel_estado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ficha_grupo_programa_nivel_estado`  AS  select `ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`grupo`.`num_grupo` AS `num_grupo`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from ((((`ficha` join `grupo` on(`ficha`.`id_ficha` = `grupo`.`cod_ficha`)) join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `programa_formacion` on(`ficha`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ficha_programa_nivel_estado`
--
DROP TABLE IF EXISTS `v_ficha_programa_nivel_estado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ficha_programa_nivel_estado`  AS  select `ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`estado_ficha`.`id_estado_ficha` AS `id_estado_ficha`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from (((`ficha` join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `programa_formacion` on(`ficha`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_grupo_ficha`
--
DROP TABLE IF EXISTS `v_grupo_ficha`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_grupo_ficha`  AS  select `g`.`id_grupo` AS `id_grupo`,`f`.`id_ficha` AS `id_ficha`,`f`.`num_ficha` AS `num_ficha`,`g`.`num_grupo` AS `num_grupo`,`rf`.`id_ruta_ficha` AS `id_ruta_ficha`,`rf`.`name_ruta_ficha` AS `name_ruta_ficha`,`rf`.`num_ruta_ficha` AS `num_ruta_ficha`,`rf`.`cod_jornada` AS `cod_jornada`,`rf`.`fecha_inicio` AS `fecha_inicio`,`rf`.`fecha_fin` AS `fecha_fin`,`rf`.`observaciones` AS `observaciones` from ((`grupo` `g` join `ruta_ficha` `rf` on(`rf`.`id_ruta_ficha` = `g`.`cod_ruta_ficha`)) join `ficha` `f` on(`f`.`id_ficha` = `g`.`cod_ficha`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_horario_asignado`
--
DROP TABLE IF EXISTS `v_horario_asignado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_horario_asignado`  AS  select `trimestre`.`name_trimestre` AS `name_trimestre`,`trimestre`.`fecha_inicio` AS `fecha_inicio`,`trimestre`.`fecha_fin` AS `fecha_fin`,`ruta_ficha`.`name_ruta_ficha` AS `name_ruta_ficha`,`ruta_ficha`.`num_ruta_ficha` AS `num_ruta_ficha`,`jornada`.`name_jornada` AS `name_jornada`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`ruta_ficha`.`fecha_inicio` AS `fecha_inicio2`,`ruta_ficha`.`fecha_fin` AS `fecha_fin2`,`resultado_aprendizaje`.`cod_competencia` AS `cod_competencia`,`resultado_aprendizaje`.`num_resultado_aprendizaje1` AS `num_resultado_aprendizaje1`,`resultado_aprendizaje`.`num_resultado_aprendizaje2` AS `num_resultado_aprendizaje2`,`resultado_aprendizaje`.`name_resultado_aprendizaje` AS `name_resultado_aprendizaje`,`competencia`.`cod_programa_formacion` AS `cod_programa_formacion`,`competencia`.`codigo_competencia` AS `codigo_competencia`,`competencia`.`num_competencia2` AS `num_competencia2`,`competencia`.`name_competencia` AS `name_competencia`,`usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido`,`modo`.`name_modo` AS `name_modo`,`dias`.`name_dias` AS `name_dias`,`horario_asignada`.`hora_inicio` AS `hora_inicio`,`horario_asignada`.`hora_fin` AS `hora_fin`,`ambiente`.`num_ambiente` AS `num_ambiente`,`sede`.`name_sede` AS `name_sede`,`sede`.`direccion` AS `direccion`,`estado_horario_asignada`.`name_estado_horario_asignada` AS `name_estado_horario_asignada`,`actividad_proyecto`.`num_actividad_proyecto` AS `num_actividad_proyecto`,`actividad_proyecto`.`name_actividad_proyecto` AS `name_actividad_proyecto`,`ruta_ficha`.`observaciones` AS `observaciones`,`fase`.`name_fase` AS `name_fase`,`proyecto`.`name_proyecto` AS `name_proyecto`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion` from (((((((((((((((((((`ficha` join `grupo` on(`ficha`.`id_ficha` = `grupo`.`cod_ficha`)) join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `ruta_ficha` on(`grupo`.`cod_ruta_ficha` = `ruta_ficha`.`id_ruta_ficha`)) join `horario_asignada` on(`ruta_ficha`.`id_ruta_ficha` = `horario_asignada`.`cod_ruta_ficha`)) join `jornada` on(`ruta_ficha`.`cod_jornada` = `jornada`.`id_jornada`)) join `usuario` on(`horario_asignada`.`cod_instructor` = `usuario`.`id_usuario`)) join `dias` on(`horario_asignada`.`cod_dias` = `dias`.`id_dias`)) join `modo` on(`horario_asignada`.`cod_modo` = `modo`.`id_modo`)) join `ambiente` on(`horario_asignada`.`cod_ambiente` = `ambiente`.`id_ambiente`)) join `resultado_aprendizaje` on(`horario_asignada`.`cod_resultado_aprendizaje` = `resultado_aprendizaje`.`id_resultado_aprendizaje`)) join `trimestre` on(`horario_asignada`.`cod_trimestre_horario` = `trimestre`.`id_trimestre`)) join `estado_horario_asignada` on(`horario_asignada`.`cod_estado_horario` = `estado_horario_asignada`.`id_estado_horario_asignada`)) join `sede` on(`ambiente`.`cod_sede` = `sede`.`id_sede`)) join `competencia` on(`resultado_aprendizaje`.`cod_competencia` = `competencia`.`codigo_competencia`)) join `programa_formacion` on(`competencia`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) join `proyecto` on(`programa_formacion`.`cod_proyecto` = `proyecto`.`id_proyecto`)) join `actividad_proyecto` on(`proyecto`.`id_proyecto` = `actividad_proyecto`.`cod_proyecto`)) join `fase` on(`actividad_proyecto`.`cod_fase` = `fase`.`id_fase`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_programa_formacion`
--
DROP TABLE IF EXISTS `v_programa_formacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_programa_formacion`  AS  select `programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`codigo` AS `codigo`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`programa_formacion`.`version_programa` AS `version_programa`,`proyecto`.`id_proyecto` AS `id_proyecto`,`proyecto`.`name_proyecto` AS `name_proyecto`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion`,`estado_programa_formacion`.`id_estado_programa_formacion` AS `id_estado_programa_formacion`,`estado_programa_formacion`.`name_estado_programa_formacion` AS `name_estado_programa_formacion` from (((`programa_formacion` join `estado_programa_formacion` on(`programa_formacion`.`cod_estado_programa_formacion` = `estado_programa_formacion`.`id_estado_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) join `proyecto` on(`programa_formacion`.`cod_proyecto` = `proyecto`.`id_proyecto`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ruta_ficha`
--
DROP TABLE IF EXISTS `v_ruta_ficha`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ruta_ficha`  AS  select `ruta_ficha`.`id_ruta_ficha` AS `id_ruta_ficha`,`ruta_ficha`.`name_ruta_ficha` AS `name_ruta_ficha`,`ruta_ficha`.`num_ruta_ficha` AS `num_ruta_ficha`,`ruta_ficha`.`fecha_inicio` AS `fecha_inicio`,`ruta_ficha`.`fecha_fin` AS `fecha_fin`,`ruta_ficha`.`observaciones` AS `observaciones`,`jornada`.`id_jornada` AS `id_jornada`,`jornada`.`name_jornada` AS `name_jornada`,`ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`grupo`.`num_grupo` AS `num_grupo`,`estado_ficha`.`id_estado_ficha` AS `id_estado_ficha`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from ((((`ficha` join `grupo` on(`ficha`.`id_ficha` = `grupo`.`cod_ficha`)) join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `ruta_ficha` on(`grupo`.`cod_ruta_ficha` = `ruta_ficha`.`id_ruta_ficha`)) join `jornada` on(`ruta_ficha`.`cod_jornada` = `jornada`.`id_jornada`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_usuarios`
--
DROP TABLE IF EXISTS `v_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usuarios`  AS  select `usuario`.`id_usuario` AS `id_usuario`,`usuario`.`dni` AS `dni`,`usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido`,`usuario`.`email` AS `email`,`usuario`.`password` AS `password`,`rol`.`id_rol` AS `id_rol`,`rol`.`name_rol` AS `name_rol`,`estado_usuario`.`id_estado_usuario` AS `id_estado_usuario`,`estado_usuario`.`name_estado_usuario` AS `name_estado_usuario` from ((`estado_usuario` join `usuario` on(`estado_usuario`.`id_estado_usuario` = `usuario`.`cod_estado_usuario`)) join `rol` on(`usuario`.`cod_rol` = `rol`.`id_rol`)) ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_proyecto`
--
ALTER TABLE `actividad_proyecto`
  ADD CONSTRAINT `FK_cod_fase` FOREIGN KEY (`cod_fase`) REFERENCES `fase` (`id_fase`),
  ADD CONSTRAINT `FK_cod_proyecto_actividad_proyecto` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `FK_cod_estado_ambiente` FOREIGN KEY (`cod_estado_ambiente`) REFERENCES `estado_ambiente` (`id_estado_ambiente`),
  ADD CONSTRAINT `FK_cod_sede` FOREIGN KEY (`cod_sede`) REFERENCES `sede` (`id_sede`);

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `FK_cod_programa_formacion` FOREIGN KEY (`cod_programa_formacion`) REFERENCES `programa_formacion` (`id_programa_formacion`);

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `FK_cod_estado_ficha` FOREIGN KEY (`cod_estado_ficha`) REFERENCES `estado_ficha` (`id_estado_ficha`),
  ADD CONSTRAINT `FK_cod_programa_formacion_ficha` FOREIGN KEY (`cod_programa_formacion`) REFERENCES `programa_formacion` (`id_programa_formacion`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `FK_cod_ficha` FOREIGN KEY (`cod_ficha`) REFERENCES `ficha` (`id_ficha`),
  ADD CONSTRAINT `FK_cod_ruta_ficha` FOREIGN KEY (`cod_ruta_ficha`) REFERENCES `ruta_ficha` (`id_ruta_ficha`);

--
-- Filtros para la tabla `horario_asignada`
--
ALTER TABLE `horario_asignada`
  ADD CONSTRAINT `FK_cod_ambiente` FOREIGN KEY (`cod_ambiente`) REFERENCES `ambiente` (`id_ambiente`),
  ADD CONSTRAINT `FK_cod_dias` FOREIGN KEY (`cod_dias`) REFERENCES `dias` (`id_dias`),
  ADD CONSTRAINT `FK_cod_estado_horario_asignado` FOREIGN KEY (`cod_estado_horario`) REFERENCES `estado_horario_asignada` (`id_estado_horario_asignada`),
  ADD CONSTRAINT `FK_cod_instructor` FOREIGN KEY (`cod_instructor`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `FK_cod_modo` FOREIGN KEY (`cod_modo`) REFERENCES `modo` (`id_modo`),
  ADD CONSTRAINT `FK_cod_resultado_aprendizaje` FOREIGN KEY (`cod_resultado_aprendizaje`) REFERENCES `resultado_aprendizaje` (`id_resultado_aprendizaje`),
  ADD CONSTRAINT `FK_cod_ruta_ficha_horario_asignada` FOREIGN KEY (`cod_ruta_ficha`) REFERENCES `ruta_ficha` (`id_ruta_ficha`),
  ADD CONSTRAINT `FK_cod_trimestre` FOREIGN KEY (`cod_trimestre_horario`) REFERENCES `trimestre` (`id_trimestre`);

--
-- Filtros para la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD CONSTRAINT `FK_cod_estado_programa_formacion` FOREIGN KEY (`cod_estado_programa_formacion`) REFERENCES `estado_programa_formacion` (`id_estado_programa_formacion`),
  ADD CONSTRAINT `FK_cod_nivel_programa_formacion` FOREIGN KEY (`cod_nivel_programa_formacion`) REFERENCES `nivel_programa_formacion` (`id_nivel_programa_formacion`),
  ADD CONSTRAINT `FK_cod_proyecto_programa_formacion` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  ADD CONSTRAINT `FK_cod_competencia` FOREIGN KEY (`cod_competencia`) REFERENCES `competencia` (`codigo_competencia`);

--
-- Filtros para la tabla `ruta_ficha`
--
ALTER TABLE `ruta_ficha`
  ADD CONSTRAINT `FK_cod_jornada` FOREIGN KEY (`cod_jornada`) REFERENCES `jornada` (`id_jornada`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_cod_estado_usuario` FOREIGN KEY (`cod_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`),
  ADD CONSTRAINT `FK_cod_rol` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
