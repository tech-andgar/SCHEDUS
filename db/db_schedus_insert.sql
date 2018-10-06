-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2018 a las 22:11:29
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

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`id_ambiente`, `num_ambiente`, `cod_sede`, `create_time`, `update_time`, `version`, `cod_estado_ambiente`) VALUES
(1, '203', 2, '2018-10-03 02:23:50', '2018-10-03 22:49:14', NULL, 1);

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`id_competencia`, `codigo_competencia`, `cod_programa_formacion`, `num_competencia2`, `name_competencia`, `create_time`, `update_time`, `version`) VALUES
(1, 220501014, 1, '35848', 'Administrar hardware y software de seguridad en la red a partir de normas internacionales. ', '2018-10-03 05:17:28', '2018-10-03 22:49:09', NULL),
(2, 220501013, 1, '35823', 'Utilizar software de administración de red para garantizar la accesibilidad de los servicios y optim', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(3, 220501031, 2, '02966', 'Entregar la aplicación multimedia para evaluar la satisfacción del cliente.', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(4, 220501039, 2, '33279', 'Realizar la post-producción para generar la animación final de acuerdo con las especificaciones del ', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(5, 220501034, 3, '35325', 'Implantar la solución que cumpla con los requerimientos para su operación.', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL),
(6, 220501035, 3, '35329', 'Aplicar buenas prácticas de calidad en el proceso de desarrollo de software, de acuerdo con el refer', '2018-10-03 05:25:38', '2018-10-03 22:49:09', NULL);

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

--
-- Volcado de datos para la tabla `estado_ambiente`
--

INSERT INTO `estado_ambiente` (`id_estado_ambiente`, `name_estado_ambiente`, `create_time`, `update_time`, `version`) VALUES
(1, 'Disponible', '2018-10-03 02:18:19', '2018-10-03 22:49:16', NULL),
(2, 'Asignado', '2018-10-03 02:18:26', '2018-10-03 22:49:16', NULL);

--
-- Volcado de datos para la tabla `estado_ficha`
--

INSERT INTO `estado_ficha` (`id_estado_ficha`, `name_estado_ficha`, `create_time`, `update_time`, `version`) VALUES
(1, 'Pendiente Asignado', '2018-10-03 22:57:14', '0000-00-00 00:00:00', NULL),
(2, 'En formación', '2018-10-03 22:57:22', '0000-00-00 00:00:00', NULL),
(3, 'Cancelado', '2018-10-03 22:57:30', '0000-00-00 00:00:00', NULL),
(4, 'Completado', '2018-10-03 22:57:39', '0000-00-00 00:00:00', NULL);

--
-- Volcado de datos para la tabla `estado_horario_asignada`
--

INSERT INTO `estado_horario_asignada` (`id_estado_horario_asignada`, `name_estado_horario_asignada`, `create_time`, `update_time`, `version`) VALUES
(1, 'Creado', '2018-10-03 03:03:00', '2018-10-03 22:49:25', NULL),
(2, 'En proceso', '2018-10-03 03:03:08', '2018-10-03 22:49:25', NULL),
(3, 'Revisión', '2018-10-03 03:03:23', '2018-10-03 22:49:25', NULL),
(4, 'Publicado', '2018-10-03 03:03:31', '2018-10-03 22:49:25', NULL);

--
-- Volcado de datos para la tabla `estado_programa_formacion`
--

INSERT INTO `estado_programa_formacion` (`id_estado_programa_formacion`, `name_estado_programa_formacion`, `create_time`, `update_time`, `version`) VALUES
(1, 'Activo', '2018-10-03 02:45:41', '2018-10-03 22:49:08', NULL),
(2, 'Inactivo', '2018-10-03 02:45:51', '2018-10-03 22:49:08', NULL);

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_estado_usuario`, `name_estado_usuario`, `create_time`, `update_time`, `version`) VALUES
(1, 'Creado', '2018-10-03 02:35:35', '2018-10-03 22:49:04', NULL),
(2, 'Activo', '2018-10-03 02:35:40', '2018-10-03 22:49:04', NULL),
(3, 'Inactivo', '2018-10-03 02:35:46', '2018-10-03 22:49:04', NULL);

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`id_fase`, `name_fase`, `create_time`, `update_time`, `version`) VALUES
(1, 'ANALISIS', '2018-10-03 02:25:10', '2018-10-03 22:49:21', NULL),
(2, 'PLANEACIÓN', '2018-10-03 02:25:13', '2018-10-03 22:49:21', NULL),
(3, 'EJECUCIÓN', '2018-10-03 02:25:19', '2018-10-03 22:49:21', NULL),
(4, 'EVALUACIÓN', '2018-10-03 02:25:26', '2018-10-03 22:49:21', NULL);

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `num_ficha`, `create_time`, `update_time`, `version`, `cod_estado_ficha`, `cod_programa_formacion`) VALUES
(1, '1320652', '2018-10-05 00:44:49', '0000-00-00 00:00:00', NULL, 2, 1),
(2, '1320500', '2018-10-05 00:45:10', '0000-00-00 00:00:00', NULL, 2, 0);

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

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `name_jornada`, `create_time`, `update_time`, `version`) VALUES
(1, 'Diurna', '2018-10-03 02:12:56', '2018-10-03 22:49:17', NULL),
(2, 'Nocturna', '2018-10-03 02:13:01', '2018-10-03 22:49:17', NULL),
(3, 'Fin de semana', '2018-10-03 02:13:10', '2018-10-03 22:49:17', NULL);

--
-- Volcado de datos para la tabla `modo`
--

INSERT INTO `modo` (`id_modo`, `name_modo`, `create_time`, `update_time`, `version`) VALUES
(1, 'Presencial', '2018-10-03 02:12:40', '2018-10-03 22:49:12', NULL),
(2, 'Virtual', '2018-10-03 03:04:05', '2018-10-03 22:49:12', NULL);

--
-- Volcado de datos para la tabla `nivel_programa_formacion`
--

INSERT INTO `nivel_programa_formacion` (`id_nivel_programa_formacion`, `name_nivel_programa_formacion`, `duracion`, `create_time`, `update_time`, `version`) VALUES
(1, 'Curso complementario', NULL, '2018-10-03 02:39:11', '2018-10-03 22:49:08', NULL),
(2, 'Certificación De Competencia Laboral', NULL, '2018-10-03 02:41:01', '2018-10-03 22:49:08', NULL),
(3, 'Técnico', NULL, '2018-10-03 02:41:04', '2018-10-03 22:49:08', NULL),
(4, 'Tecnólogia', NULL, '2018-10-03 02:42:20', '2018-10-03 22:49:08', NULL),
(5, 'Especialización Tecnológica', NULL, '2018-10-03 02:43:08', '2018-10-03 22:49:08', NULL),
(6, 'Pregrado', NULL, '2018-10-03 02:43:16', '2018-10-03 22:49:08', NULL),
(7, 'Especialización', NULL, '2018-10-03 02:43:22', '2018-10-03 22:49:08', NULL),
(8, 'Maestría', NULL, '2018-10-03 02:43:29', '2018-10-03 22:49:08', NULL),
(9, 'Doctorado', NULL, '2018-10-03 02:43:40', '2018-10-03 22:49:08', NULL);

--
-- Volcado de datos para la tabla `programa_formacion`
--

INSERT INTO `programa_formacion` (`id_programa_formacion`, `codigo`, `short_name_programa_formacion`, `name_programa_formacion`, `version_programa`, `cod_nivel_programa_formacion`, `cod_proyecto`, `cod_estado_programa_formacion`, `create_time`, `update_time`, `version`) VALUES
(1, '228101', 'GRD', 'GESTION DE REDES DE DATOS ', 'V 1', 3, 3, 1, '2018-10-03 05:11:28', '2018-10-03 22:49:11', NULL),
(2, '228106', 'PM', 'PRODUCCIÓN DE MULTIMEDIA', 'V 102', 3, 2, 1, '2018-10-03 05:12:27', '2018-10-03 22:49:11', NULL),
(3, '228183', 'ADSI', 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION ', 'V 102', 4, 1, 1, '2018-10-03 05:15:53', '2018-10-03 22:49:11', NULL);

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `name_proyecto`, `create_time`, `update_time`, `version`) VALUES
(1, 'SISTEMA INTEGRAL WEB PARA GESTION DE PROCESOS EDUCATIVOS DEL CEET', '2018-10-03 02:37:03', '2018-10-03 22:49:19', NULL),
(2, 'PRODUCCIÓN DE CONTENIDOS DIGITALES  E IMPRESOS QUE PROMUEVAN LA SOLUCIÓN DE PROBLEMÁTICAS SOCIALES EN BOGOTÁ', '2018-10-03 02:37:21', '2018-10-03 22:49:19', NULL),
(3, 'IMPLEMENTACION DE UNA RED DE DATOS CORPORATIVA MULTISERVICIO, ADMINISTRADA Y CONFIGURADA BAJO SISTEMA OPERATIVO LINUX', '2018-10-03 02:37:25', '2018-10-03 22:49:19', NULL);

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

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `name_rol`, `create_time`, `update_time`, `version`) VALUES
(1, 'Coordinador', '2018-10-03 01:57:22', '2018-10-03 22:49:03', NULL),
(2, 'Lider', '2018-10-03 01:57:31', '2018-10-03 22:49:03', NULL),
(3, 'Instructor', '2018-10-03 01:57:44', '2018-10-03 22:49:03', NULL);

--
-- Volcado de datos para la tabla `ruta_ficha`
--

INSERT INTO `ruta_ficha` (`id_ruta_ficha`, `name_ruta_ficha`, `num_ruta_ficha`, `cod_jornada`, `fecha_inicio`, `fecha_fin`, `observaciones`, `create_time`, `update_time`, `version`) VALUES
(1, '1320652 G1-G2', '1320652 G1', 1, '2017-01-22', '2019-01-22', 'FUSION', '2018-10-05 00:47:05', '0000-00-00 00:00:00', NULL),
(2, '1320652 G3 - 1320500', '13206520 G', 1, '2017-01-22', '2019-01-22', 'FUSION', '2018-10-05 01:25:38', '0000-00-00 00:00:00', NULL),
(3, '1320500 G2-G3', '1320500 G2', 1, '2017-01-22', '2019-01-22', 'FUSION', '2018-10-05 01:27:40', '0000-00-00 00:00:00', NULL);

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `name_sede`, `direccion`, `create_time`, `update_time`, `version`) VALUES
(1, 'CEET', NULL, '2018-10-03 02:14:58', '2018-10-03 22:49:15', NULL),
(2, 'BARRIO COLOMBIA', 'Calle 69 No 20 – 36', '2018-10-03 02:14:42', '2018-10-03 22:49:15', NULL),
(3, 'RESTREPO', 'Av. 1ra de Mayo N° 12 D-68 ', '2018-10-03 02:13:54', '2018-10-03 22:49:15', NULL);

--
-- Volcado de datos para la tabla `trimestre`
--

INSERT INTO `trimestre` (`id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin`, `create_time`, `update_time`, `version`) VALUES
(1, 'I-2019', '2019-01-21', '2019-04-05', '2018-10-03 02:26:48', '2018-10-03 22:49:22', NULL);

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `nombre`, `apellido`, `password`, `cod_rol`, `cod_estado_usuario`, `version`, `create_time`, `update_time`) VALUES
(1, 'admin@email.com', 'Admin', 'Nimda', '123456', 1, 2, NULL, '2018-10-03 02:36:25', '2018-10-03 22:49:02'),
(2, 'lider@email.com', 'Lider', 'Redil', '654321', 2, 2, NULL, '2018-10-03 03:04:51', '2018-10-03 22:49:02'),
(3, 'instructor@email.com', 'Instructor', 'Rotcurtsni', '321654', 3, 2, NULL, '2018-10-03 03:05:48', '2018-10-03 22:49:02');

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ambientes`
--
DROP TABLE IF EXISTS `v_ambientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambientes`  AS  select `ambiente`.`id_ambiente` AS `id_ambiente`,`ambiente`.`num_ambiente` AS `num_ambiente`,`sede`.`name_sede` AS `name_sede`,`sede`.`direccion` AS `direccion`,`estado_ambiente`.`name_estado_ambiente` AS `name_estado_ambiente` from ((`ambiente` join `sede` on((`ambiente`.`cod_sede` = `sede`.`id_sede`))) join `estado_ambiente` on((`ambiente`.`cod_estado_ambiente` = `estado_ambiente`.`id_estado_ambiente`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_horario_asignado`
--
DROP TABLE IF EXISTS `v_horario_asignado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_horario_asignado`  AS  select `trimestre`.`name_trimestre` AS `name_trimestre`,`trimestre`.`fecha_inicio` AS `fecha_inicio`,`trimestre`.`fecha_fin` AS `fecha_fin`,`ruta_ficha`.`name_ruta_ficha` AS `name_ruta_ficha`,`ruta_ficha`.`num_ruta_ficha` AS `num_ruta_ficha`,`jornada`.`name_jornada` AS `name_jornada`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`ruta_ficha`.`fecha_inicio` AS `fecha_inicio2`,`ruta_ficha`.`fecha_fin` AS `fecha_fin2`,`resultado_aprendizaje`.`cod_competencia` AS `cod_competencia`,`resultado_aprendizaje`.`num_resultado_aprendizaje1` AS `num_resultado_aprendizaje1`,`resultado_aprendizaje`.`num_resultado_aprendizaje2` AS `num_resultado_aprendizaje2`,`resultado_aprendizaje`.`name_resultado_aprendizaje` AS `name_resultado_aprendizaje`,`competencia`.`cod_programa_formacion` AS `cod_programa_formacion`,`competencia`.`codigo_competencia` AS `codigo_competencia`,`competencia`.`num_competencia2` AS `num_competencia2`,`competencia`.`name_competencia` AS `name_competencia`,`usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido`,`modo`.`name_modo` AS `name_modo`,`dias`.`name_dias` AS `name_dias`,`horario_asignada`.`hora_inicio` AS `hora_inicio`,`horario_asignada`.`hora_fin` AS `hora_fin`,`ambiente`.`num_ambiente` AS `num_ambiente`,`sede`.`name_sede` AS `name_sede`,`sede`.`direccion` AS `direccion`,`estado_horario_asignada`.`name_estado_horario_asignada` AS `name_estado_horario_asignada`,`actividad_proyecto`.`num_actividad_proyecto` AS `num_actividad_proyecto`,`actividad_proyecto`.`name_actividad_proyecto` AS `name_actividad_proyecto`,`ruta_ficha`.`observaciones` AS `observaciones`,`fase`.`name_fase` AS `name_fase`,`proyecto`.`name_proyecto` AS `name_proyecto`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion` from (((((((((((((((((((`ficha` join `grupo` on((`ficha`.`id_ficha` = `grupo`.`cod_ficha`))) join `estado_ficha` on((`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`))) join `ruta_ficha` on((`grupo`.`cod_ruta_ficha` = `ruta_ficha`.`id_ruta_ficha`))) join `horario_asignada` on((`ruta_ficha`.`id_ruta_ficha` = `horario_asignada`.`cod_ruta_ficha`))) join `jornada` on((`ruta_ficha`.`cod_jornada` = `jornada`.`id_jornada`))) join `usuario` on((`horario_asignada`.`cod_instructor` = `usuario`.`id_usuario`))) join `dias` on((`horario_asignada`.`cod_dias` = `dias`.`id_dias`))) join `modo` on((`horario_asignada`.`cod_modo` = `modo`.`id_modo`))) join `ambiente` on((`horario_asignada`.`cod_ambiente` = `ambiente`.`id_ambiente`))) join `resultado_aprendizaje` on((`horario_asignada`.`cod_resultado_aprendizaje` = `resultado_aprendizaje`.`id_resultado_aprendizaje`))) join `trimestre` on((`horario_asignada`.`cod_trimestre_horario` = `trimestre`.`id_trimestre`))) join `estado_horario_asignada` on((`horario_asignada`.`cod_estado_horario` = `estado_horario_asignada`.`id_estado_horario_asignada`))) join `sede` on((`ambiente`.`cod_sede` = `sede`.`id_sede`))) join `competencia` on((`resultado_aprendizaje`.`cod_competencia` = `competencia`.`codigo_competencia`))) join `programa_formacion` on((`competencia`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`))) join `nivel_programa_formacion` on((`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`))) join `proyecto` on((`programa_formacion`.`cod_proyecto` = `proyecto`.`id_proyecto`))) join `actividad_proyecto` on((`proyecto`.`id_proyecto` = `actividad_proyecto`.`cod_proyecto`))) join `fase` on((`actividad_proyecto`.`cod_fase` = `fase`.`id_fase`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_programa_formacion`
--
DROP TABLE IF EXISTS `v_programa_formacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_programa_formacion`  AS  select `resultado_aprendizaje`.`id_resultado_aprendizaje` AS `id_resultado_aprendizaje`,`resultado_aprendizaje`.`cod_competencia` AS `cod_competencia`,`resultado_aprendizaje`.`num_resultado_aprendizaje1` AS `num_resultado_aprendizaje1`,`resultado_aprendizaje`.`num_resultado_aprendizaje2` AS `num_resultado_aprendizaje2`,`resultado_aprendizaje`.`name_resultado_aprendizaje` AS `name_resultado_aprendizaje`,`competencia`.`cod_programa_formacion` AS `cod_programa_formacion`,`competencia`.`codigo_competencia` AS `codigo_competencia`,`competencia`.`num_competencia2` AS `num_competencia2`,`competencia`.`name_competencia` AS `name_competencia`,`programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`codigo` AS `codigo`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`programa_formacion`.`version_programa` AS `version_programa`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion`,`estado_programa_formacion`.`id_estado_programa_formacion` AS `id_estado_programa_formacion`,`estado_programa_formacion`.`name_estado_programa_formacion` AS `name_estado_programa_formacion` from ((((`competencia` join `resultado_aprendizaje` on((`competencia`.`codigo_competencia` = `resultado_aprendizaje`.`cod_competencia`))) join `programa_formacion` on((`competencia`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`))) join `estado_programa_formacion` on((`programa_formacion`.`cod_estado_programa_formacion` = `estado_programa_formacion`.`id_estado_programa_formacion`))) join `nivel_programa_formacion` on((`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ruta_ficha`
--
DROP TABLE IF EXISTS `v_ruta_ficha`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ruta_ficha`  AS  select `ruta_ficha`.`id_ruta_ficha` AS `id_ruta_ficha`,`ruta_ficha`.`name_ruta_ficha` AS `name_ruta_ficha`,`ruta_ficha`.`num_ruta_ficha` AS `num_ruta_ficha`,`ruta_ficha`.`fecha_inicio` AS `fecha_inicio`,`ruta_ficha`.`fecha_fin` AS `fecha_fin`,`ruta_ficha`.`observaciones` AS `observaciones`,`jornada`.`id_jornada` AS `id_jornada`,`jornada`.`name_jornada` AS `name_jornada`,`ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`grupo`.`num_grupo` AS `num_grupo`,`estado_ficha`.`id_estado_ficha` AS `id_estado_ficha`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from ((((`ficha` join `grupo` on((`ficha`.`id_ficha` = `grupo`.`cod_ficha`))) join `estado_ficha` on((`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`))) join `ruta_ficha` on((`grupo`.`cod_ruta_ficha` = `ruta_ficha`.`id_ruta_ficha`))) join `jornada` on((`ruta_ficha`.`cod_jornada` = `jornada`.`id_jornada`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_usuarios`
--
DROP TABLE IF EXISTS `v_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usuarios`  AS  select `usuario`.`id_usuario` AS `id_usuario`,`usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido`,`usuario`.`email` AS `email`,`usuario`.`password` AS `password`,`rol`.`id_rol` AS `id_rol`,`rol`.`name_rol` AS `name_rol`,`estado_usuario`.`id_estado_usuario` AS `id_estado_usuario`,`estado_usuario`.`name_estado_usuario` AS `name_estado_usuario` from ((`estado_usuario` join `usuario` on((`estado_usuario`.`id_estado_usuario` = `usuario`.`cod_estado_usuario`))) join `rol` on((`usuario`.`cod_rol` = `rol`.`id_rol`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
