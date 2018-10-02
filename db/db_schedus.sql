-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2018 a las 23:39:15
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

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

CREATE TABLE `actividad_proyecto` (
  `id_actividad_proyecto` int(10) NOT NULL,
  `num_actividad_proyecto` varchar(5) DEFAULT NULL,
  `name_actividad_proyecto` varchar(100) DEFAULT NULL,
  `cod_proyecto` int(10) NOT NULL,
  `cod_fase` int(10) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `id_ambiente` int(10) NOT NULL,
  `ambiente` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `cod_sede` int(10) NOT NULL,
  `cod_estado_ambiente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`id_ambiente`, `ambiente`, `create_time`, `update_time`, `version`, `cod_sede`, `cod_estado_ambiente`) VALUES
(1, '203', '2018-10-02 16:23:50', NULL, NULL, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `id_competencia` int(10) NOT NULL,
  `num_competencia1` varchar(20) DEFAULT NULL,
  `num_competencia2` varchar(20) DEFAULT NULL,
  `cod_programa_formacion` int(10) NOT NULL,
  `name_competencia` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`id_competencia`, `num_competencia1`, `num_competencia2`, `cod_programa_formacion`, `name_competencia`, `create_time`, `update_time`, `version`) VALUES
(1, '220501014', '35848', 1, 'Administrar hardware y software de seguridad en la red a partir de normas internacionales. ', '2018-10-02 19:17:28', NULL, NULL),
(2, '﻿220501013', '35823', 1, 'Utilizar software de administración de red para garantizar la accesibilidad de los servicios y optim', '2018-10-02 19:25:38', NULL, NULL),
(3, '220501031', '02966', 2, 'Entregar la aplicación multimedia para evaluar la satisfacción del cliente.', '2018-10-02 19:25:38', NULL, NULL),
(4, '220501039', '33279', 2, 'Realizar la post-producción para generar la animación final de acuerdo con las especificaciones del ', '2018-10-02 19:25:38', NULL, NULL),
(5, '220501034', '35325', 3, 'Implantar la solución que cumpla con los requerimientos para su operación.', '2018-10-02 19:25:38', NULL, NULL),
(6, '220501035', '35329', 3, 'Aplicar buenas prácticas de calidad en el proceso de desarrollo de software, de acuerdo con el refer', '2018-10-02 19:25:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id_dias` int(10) NOT NULL,
  `name_dias` varchar(100) DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `estado_ambiente` (
  `id_estado_ambiente` int(10) NOT NULL,
  `name_estado_ambiente` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_ambiente`
--

INSERT INTO `estado_ambiente` (`id_estado_ambiente`, `name_estado_ambiente`, `create_time`, `update_time`, `version`) VALUES
(1, 'Disponible', '2018-10-02 16:18:19', NULL, NULL),
(2, 'Asignado', '2018-10-02 16:18:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ficha`
--

CREATE TABLE `estado_ficha` (
  `id_estado_ficha` int(10) NOT NULL,
  `name_estado_ficha` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_horario_asignada`
--

CREATE TABLE `estado_horario_asignada` (
  `id_estado_horario_asignada` int(10) NOT NULL,
  `name_estado_horario_asignada` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_horario_asignada`
--

INSERT INTO `estado_horario_asignada` (`id_estado_horario_asignada`, `name_estado_horario_asignada`, `create_time`, `update_time`, `version`) VALUES
(1, 'Creado', '2018-10-02 17:03:00', NULL, NULL),
(2, 'En proceso', '2018-10-02 17:03:08', NULL, NULL),
(3, 'Revisión', '2018-10-02 17:03:23', NULL, NULL),
(4, 'Publicado', '2018-10-02 17:03:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_programa_formacion`
--

CREATE TABLE `estado_programa_formacion` (
  `id_estado_programa_formacion` int(10) NOT NULL,
  `name_estado_programa_formacion` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_programa_formacion`
--

INSERT INTO `estado_programa_formacion` (`id_estado_programa_formacion`, `name_estado_programa_formacion`, `create_time`, `update_time`, `version`) VALUES
(1, 'Activo', '2018-10-02 16:45:41', NULL, NULL),
(2, 'Inactivo', '2018-10-02 16:45:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `id_estado_usuario` int(10) NOT NULL,
  `name_estado_usuario` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_estado_usuario`, `name_estado_usuario`, `create_time`, `update_time`, `version`) VALUES
(1, 'Creado', '2018-10-02 16:35:35', NULL, NULL),
(2, 'Activo', '2018-10-02 16:35:40', NULL, NULL),
(3, 'Inactivo', '2018-10-02 16:35:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE `fase` (
  `id_fase` int(10) NOT NULL,
  `name_fase` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`id_fase`, `name_fase`, `create_time`, `update_time`, `version`) VALUES
(1, 'ANALISIS', '2018-10-02 16:25:10', NULL, NULL),
(2, 'PLANEACIÓN', '2018-10-02 16:25:13', NULL, NULL),
(3, 'EJECUCIÓN', '2018-10-02 16:25:19', NULL, NULL),
(4, 'EVALUACIÓN', '2018-10-02 16:25:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `id_ficha` int(10) NOT NULL,
  `num_ficha` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `cod_estado_ficha` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(10) NOT NULL,
  `cod_ficha` int(10) NOT NULL,
  `num_grupo` varchar(3) DEFAULT NULL,
  `cod_ruta_ficha` int(10) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_asignada`
--

CREATE TABLE `horario_asignada` (
  `id_horas_asignadas` int(10) NOT NULL,
  `cod_modo` int(10) NOT NULL,
  `cod_ruta_ficha` int(10) NOT NULL,
  `cod_resultado_aprendizaje` int(10) NOT NULL,
  `cod_instructor` int(10) NOT NULL,
  `cod_dias` int(10) NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `cod_ambiente` int(10) NOT NULL,
  `completado` tinyint(1) DEFAULT NULL,
  `cod_estado_horario` int(10) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `cod_trimestre_horario` int(10) NOT NULL,
  `trimestre` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int(10) NOT NULL,
  `name_jornada` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `name_jornada`, `create_time`, `update_time`, `version`) VALUES
(1, 'Diurna', '2018-10-02 16:12:56', NULL, NULL),
(2, 'Nocturna', '2018-10-02 16:13:01', NULL, NULL),
(3, 'Fin de semana', '2018-10-02 16:13:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo`
--

CREATE TABLE `modo` (
  `id_modo` int(10) NOT NULL,
  `name_modo` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modo`
--

INSERT INTO `modo` (`id_modo`, `name_modo`, `create_time`, `update_time`, `version`) VALUES
(1, 'Presencial', '2018-10-02 16:12:40', NULL, NULL),
(2, 'Virtual', '2018-10-02 17:04:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_programa_formacion`
--

CREATE TABLE `nivel_programa_formacion` (
  `id_nivel_programa_formacion` int(10) NOT NULL,
  `name_nivel_programa_formacion` varchar(100) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel_programa_formacion`
--

INSERT INTO `nivel_programa_formacion` (`id_nivel_programa_formacion`, `name_nivel_programa_formacion`, `duracion`, `create_time`, `update_time`, `version`) VALUES
(1, 'Curso complementario', NULL, '2018-10-02 16:39:11', NULL, NULL),
(2, 'Certificación De Competencia Laboral', NULL, '2018-10-02 16:41:01', NULL, NULL),
(3, 'Técnico', NULL, '2018-10-02 16:41:04', NULL, NULL),
(4, 'Tecnólogia', NULL, '2018-10-02 16:42:20', NULL, NULL),
(5, 'Especialización Tecnológica', NULL, '2018-10-02 16:43:08', NULL, NULL),
(6, 'Pregrado', NULL, '2018-10-02 16:43:16', NULL, NULL),
(7, 'Especialización', NULL, '2018-10-02 16:43:22', NULL, NULL),
(8, 'Maestría', NULL, '2018-10-02 16:43:29', NULL, NULL),
(9, 'Doctorado', NULL, '2018-10-02 16:43:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_formacion`
--

CREATE TABLE `programa_formacion` (
  `id_programa_formacion` int(10) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `short_name_programa_formacion` varchar(5) DEFAULT NULL,
  `name_programa_formacion` varchar(200) DEFAULT NULL,
  `version_programa` varchar(10) DEFAULT NULL,
  `cod_nivel_programa_formacion` int(10) NOT NULL,
  `cod_proyecto` int(10) NOT NULL,
  `cod_estado_programa_formacion` int(10) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programa_formacion`
--

INSERT INTO `programa_formacion` (`id_programa_formacion`, `codigo`, `short_name_programa_formacion`, `name_programa_formacion`, `version_programa`, `cod_nivel_programa_formacion`, `cod_proyecto`, `cod_estado_programa_formacion`, `create_time`, `update_time`, `version`) VALUES
(1, '228101', 'GRD', 'GESTION DE REDES DE DATOS ', 'V 1', 3, 3, 1, '2018-10-02 19:11:28', NULL, NULL),
(2, '228106', 'PM', 'PRODUCCIÓN DE MULTIMEDIA', 'V 102', 3, 2, 1, '2018-10-02 19:12:27', NULL, NULL),
(3, '228183', 'ADSI', 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION ', 'V 102', 4, 1, 1, '2018-10-02 19:15:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(10) NOT NULL,
  `name_proyecto` varchar(250) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `name_proyecto`, `create_time`, `update_time`, `version`) VALUES
(1, 'SISTEMA INTEGRAL WEB PARA GESTION DE PROCESOS EDUCATIVOS DEL CEET', '2018-10-02 16:37:03', NULL, NULL),
(2, 'PRODUCCIÓN DE CONTENIDOS DIGITALES  E IMPRESOS QUE PROMUEVAN LA SOLUCIÓN DE PROBLEMÁTICAS SOCIALES EN BOGOTÁ', '2018-10-02 16:37:21', NULL, NULL),
(3, 'IMPLEMENTACION DE UNA RED DE DATOS CORPORATIVA MULTISERVICIO, ADMINISTRADA Y CONFIGURADA BAJO SISTEMA OPERATIVO LINUX', '2018-10-02 16:37:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_aprendizaje`
--

CREATE TABLE `resultado_aprendizaje` (
  `id_resultado_aprendizaje` int(10) NOT NULL,
  `cod_competencia` varchar(20) DEFAULT NULL,
  `num_resultado_aprendizaje1` varchar(10) DEFAULT NULL,
  `num_resultado_aprendizaje2` varchar(10) DEFAULT NULL,
  `name_resultado_aprendizaje` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resultado_aprendizaje`
--

INSERT INTO `resultado_aprendizaje` (`id_resultado_aprendizaje`, `cod_competencia`, `num_resultado_aprendizaje1`, `num_resultado_aprendizaje2`, `name_resultado_aprendizaje`, `create_time`, `update_time`, `version`) VALUES
(1, '220501034', NULL, NULL, NULL, '2018-10-02 21:26:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL,
  `name_rol` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `name_rol`, `create_time`, `update_time`, `version`) VALUES
(1, 'Coordinador', '2018-10-02 15:57:22', NULL, NULL),
(2, 'Lider', '2018-10-02 15:57:31', NULL, NULL),
(3, 'Instructor', '2018-10-02 15:57:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_ficha`
--

CREATE TABLE `ruta_ficha` (
  `id_ruta_ficha` int(10) NOT NULL,
  `name_ruta_ficha` varchar(100) DEFAULT NULL,
  `num_ruta_ficha` varchar(10) DEFAULT NULL,
  `cod_jornada` int(10) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` varchar(250) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(10) NOT NULL,
  `name_sede` varchar(100) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `name_sede`, `direccion`, `create_time`, `update_time`, `version`) VALUES
(1, 'CEET', NULL, '2018-10-02 16:14:58', NULL, NULL),
(2, 'BARRIO COLOMBIA', 'Calle 69 No 20 – 36', '2018-10-02 16:14:42', NULL, NULL),
(3, 'RESTREPO', 'Av. 1ra de Mayo N° 12 D-68 ', '2018-10-02 16:13:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

CREATE TABLE `trimestre` (
  `id_trimestre` int(10) NOT NULL,
  `name_trimestre` varchar(100) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trimestre`
--

INSERT INTO `trimestre` (`id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin`, `create_time`, `update_time`, `version`) VALUES
(1, 'I-2019', '2019-01-21', '2019-04-05', '2018-10-02 16:26:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `cod_rol` int(10) NOT NULL,
  `cod_estado_usuario` int(10) NOT NULL,
  `version` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Este tabla del usuario para accede el sistema SCHEDUS';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `nombre`, `apellido`, `password`, `cod_rol`, `cod_estado_usuario`, `version`, `create_time`, `update_time`) VALUES
(1, 'admin@email.com', 'Admin', 'Nimda', '123456', 1, 2, NULL, '2018-10-02 16:36:25', NULL),
(2, 'lider@email.com', 'Lider', 'Redil', '654321', 2, 2, NULL, '2018-10-02 17:04:51', NULL),
(3, 'instructor@email.com', 'Instructor', 'Rotcurtsni', '321654', 3, 2, NULL, '2018-10-02 17:05:48', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_proyecto`
--
ALTER TABLE `actividad_proyecto`
  ADD PRIMARY KEY (`id_actividad_proyecto`),
  ADD UNIQUE KEY `name_actividad_proyecto` (`name_actividad_proyecto`),
  ADD KEY `actividad_proyecto` (`num_actividad_proyecto`),
  ADD KEY `FKactividad_782184` (`cod_fase`),
  ADD KEY `FKactividad_977084` (`cod_proyecto`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id_ambiente`),
  ADD UNIQUE KEY `ambiente` (`ambiente`),
  ADD KEY `FKambiente983549` (`cod_sede`),
  ADD KEY `FKambiente827022` (`cod_estado_ambiente`);

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`id_competencia`),
  ADD UNIQUE KEY `name_competencia` (`name_competencia`),
  ADD KEY `competencia` (`num_competencia1`,`num_competencia2`),
  ADD KEY `FKcompetenci386058` (`cod_programa_formacion`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id_dias`),
  ADD UNIQUE KEY `name_dias` (`name_dias`);

--
-- Indices de la tabla `estado_ambiente`
--
ALTER TABLE `estado_ambiente`
  ADD PRIMARY KEY (`id_estado_ambiente`),
  ADD UNIQUE KEY `name_estado_ambiente` (`name_estado_ambiente`);

--
-- Indices de la tabla `estado_ficha`
--
ALTER TABLE `estado_ficha`
  ADD PRIMARY KEY (`id_estado_ficha`),
  ADD UNIQUE KEY `name_estado_ficha` (`name_estado_ficha`);

--
-- Indices de la tabla `estado_horario_asignada`
--
ALTER TABLE `estado_horario_asignada`
  ADD PRIMARY KEY (`id_estado_horario_asignada`),
  ADD UNIQUE KEY `name_estado_horario_asignada` (`name_estado_horario_asignada`);

--
-- Indices de la tabla `estado_programa_formacion`
--
ALTER TABLE `estado_programa_formacion`
  ADD PRIMARY KEY (`id_estado_programa_formacion`),
  ADD UNIQUE KEY `name_estado_programa_formacion` (`name_estado_programa_formacion`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`id_estado_usuario`),
  ADD UNIQUE KEY `name_estado_usuario` (`name_estado_usuario`);

--
-- Indices de la tabla `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`id_fase`),
  ADD UNIQUE KEY `name_fase` (`name_fase`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id_ficha`),
  ADD UNIQUE KEY `num_ficha` (`num_ficha`),
  ADD KEY `FKficha980236` (`cod_estado_ficha`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD UNIQUE KEY `cod_ficha` (`cod_ficha`),
  ADD KEY `FKgrupo122710` (`cod_ruta_ficha`);

--
-- Indices de la tabla `horario_asignada`
--
ALTER TABLE `horario_asignada`
  ADD PRIMARY KEY (`id_horas_asignadas`),
  ADD KEY `FKhorario_as984309` (`cod_estado_horario`),
  ADD KEY `FKhorario_as257351` (`cod_dias`),
  ADD KEY `FKhorario_as79274` (`cod_modo`),
  ADD KEY `FKhorario_as232796` (`cod_instructor`),
  ADD KEY `FKhorario_as592451` (`cod_resultado_aprendizaje`),
  ADD KEY `FKhorario_as635052` (`cod_ruta_ficha`),
  ADD KEY `FKhorario_as629941` (`cod_ambiente`),
  ADD KEY `FKhorario_as886572` (`cod_trimestre_horario`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornada`),
  ADD UNIQUE KEY `name_jornada` (`name_jornada`);

--
-- Indices de la tabla `modo`
--
ALTER TABLE `modo`
  ADD PRIMARY KEY (`id_modo`),
  ADD UNIQUE KEY `name_modo` (`name_modo`);

--
-- Indices de la tabla `nivel_programa_formacion`
--
ALTER TABLE `nivel_programa_formacion`
  ADD PRIMARY KEY (`id_nivel_programa_formacion`),
  ADD UNIQUE KEY `name_nivel_programa_formacion` (`name_nivel_programa_formacion`);

--
-- Indices de la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD PRIMARY KEY (`id_programa_formacion`),
  ADD UNIQUE KEY `name_programa_formacion` (`name_programa_formacion`),
  ADD KEY `codigo_programa_formacion` (`codigo`) USING BTREE,
  ADD KEY `FKCod_nivel_programa_formacion` (`cod_nivel_programa_formacion`) USING BTREE,
  ADD KEY `FKCod_estado_programa` (`cod_estado_programa_formacion`) USING BTREE,
  ADD KEY `FKCod_proyecto` (`cod_proyecto`) USING BTREE;

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD UNIQUE KEY `name_proyecto` (`name_proyecto`);

--
-- Indices de la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  ADD PRIMARY KEY (`id_resultado_aprendizaje`),
  ADD UNIQUE KEY `name_resultado_aprendizaje` (`name_resultado_aprendizaje`),
  ADD KEY `resultado_aprendizaje` (`num_resultado_aprendizaje1`,`num_resultado_aprendizaje2`),
  ADD KEY `FKCod_Competencia` (`cod_competencia`) USING BTREE;

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `name_rol` (`name_rol`);

--
-- Indices de la tabla `ruta_ficha`
--
ALTER TABLE `ruta_ficha`
  ADD PRIMARY KEY (`id_ruta_ficha`),
  ADD UNIQUE KEY `name_ruta_ficha` (`name_ruta_ficha`),
  ADD KEY `ruta_ficha` (`name_ruta_ficha`,`num_ruta_ficha`),
  ADD KEY `FKruta_ficha297110` (`cod_jornada`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD UNIQUE KEY `name_sede` (`name_sede`);

--
-- Indices de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`id_trimestre`),
  ADD UNIQUE KEY `name_trimestre` (`name_trimestre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario_email` (`email`),
  ADD KEY `FKusuario602020` (`cod_estado_usuario`),
  ADD KEY `FKusuario660816` (`cod_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_proyecto`
--
ALTER TABLE `actividad_proyecto`
  MODIFY `id_actividad_proyecto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id_ambiente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `id_competencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id_dias` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estado_ambiente`
--
ALTER TABLE `estado_ambiente`
  MODIFY `id_estado_ambiente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_ficha`
--
ALTER TABLE `estado_ficha`
  MODIFY `id_estado_ficha` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_horario_asignada`
--
ALTER TABLE `estado_horario_asignada`
  MODIFY `id_estado_horario_asignada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_programa_formacion`
--
ALTER TABLE `estado_programa_formacion`
  MODIFY `id_estado_programa_formacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  MODIFY `id_estado_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fase`
--
ALTER TABLE `fase`
  MODIFY `id_fase` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id_ficha` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario_asignada`
--
ALTER TABLE `horario_asignada`
  MODIFY `id_horas_asignadas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modo`
--
ALTER TABLE `modo`
  MODIFY `id_modo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nivel_programa_formacion`
--
ALTER TABLE `nivel_programa_formacion`
  MODIFY `id_nivel_programa_formacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  MODIFY `id_programa_formacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  MODIFY `id_resultado_aprendizaje` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ruta_ficha`
--
ALTER TABLE `ruta_ficha`
  MODIFY `id_ruta_ficha` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `id_trimestre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_proyecto`
--
ALTER TABLE `actividad_proyecto`
  ADD CONSTRAINT `FKactividad_782184` FOREIGN KEY (`cod_fase`) REFERENCES `fase` (`id_fase`),
  ADD CONSTRAINT `FKactividad_977084` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `FKambiente827022` FOREIGN KEY (`cod_estado_ambiente`) REFERENCES `estado_ambiente` (`id_estado_ambiente`),
  ADD CONSTRAINT `FKambiente983549` FOREIGN KEY (`cod_sede`) REFERENCES `sede` (`id_sede`);

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `FKcompetenci386058` FOREIGN KEY (`cod_programa_formacion`) REFERENCES `programa_formacion` (`id_programa_formacion`);

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `FKficha980236` FOREIGN KEY (`cod_estado_ficha`) REFERENCES `estado_ficha` (`id_estado_ficha`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `FKgrupo122710` FOREIGN KEY (`cod_ruta_ficha`) REFERENCES `ruta_ficha` (`id_ruta_ficha`),
  ADD CONSTRAINT `FKgrupo863514` FOREIGN KEY (`cod_ficha`) REFERENCES `ficha` (`id_ficha`);

--
-- Filtros para la tabla `horario_asignada`
--
ALTER TABLE `horario_asignada`
  ADD CONSTRAINT `FKhorario_as232796` FOREIGN KEY (`cod_instructor`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `FKhorario_as257351` FOREIGN KEY (`cod_dias`) REFERENCES `dias` (`id_dias`),
  ADD CONSTRAINT `FKhorario_as592451` FOREIGN KEY (`cod_resultado_aprendizaje`) REFERENCES `resultado_aprendizaje` (`id_resultado_aprendizaje`),
  ADD CONSTRAINT `FKhorario_as629941` FOREIGN KEY (`cod_ambiente`) REFERENCES `ambiente` (`id_ambiente`),
  ADD CONSTRAINT `FKhorario_as635052` FOREIGN KEY (`cod_ruta_ficha`) REFERENCES `ruta_ficha` (`id_ruta_ficha`),
  ADD CONSTRAINT `FKhorario_as79274` FOREIGN KEY (`cod_modo`) REFERENCES `modo` (`id_modo`),
  ADD CONSTRAINT `FKhorario_as886572` FOREIGN KEY (`cod_trimestre_horario`) REFERENCES `trimestre` (`id_trimestre`),
  ADD CONSTRAINT `FKhorario_as984309` FOREIGN KEY (`cod_estado_horario`) REFERENCES `estado_horario_asignada` (`id_estado_horario_asignada`);

--
-- Filtros para la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD CONSTRAINT `FKCod_estado_programa_formacion` FOREIGN KEY (`cod_estado_programa_formacion`) REFERENCES `estado_programa_formacion` (`id_estado_programa_formacion`),
  ADD CONSTRAINT `FKCod_nivel_programa_formacion` FOREIGN KEY (`cod_nivel_programa_formacion`) REFERENCES `nivel_programa_formacion` (`id_nivel_programa_formacion`),
  ADD CONSTRAINT `FKCod_proyecto` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  ADD CONSTRAINT `FkCod_competencia` FOREIGN KEY (`cod_competencia`) REFERENCES `competencia` (`num_competencia1`);

--
-- Filtros para la tabla `ruta_ficha`
--
ALTER TABLE `ruta_ficha`
  ADD CONSTRAINT `FKruta_ficha297110` FOREIGN KEY (`cod_jornada`) REFERENCES `jornada` (`id_jornada`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FKusuario602020` FOREIGN KEY (`cod_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`),
  ADD CONSTRAINT `FKusuario660816` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
