-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2018 a las 22:34:29
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
-- Base de datos: `db_ambolando`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL COMMENT 'id categoria',
  `nombre` varchar(45) NOT NULL COMMENT 'nombre de categoria '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'Sala'),
(2, 'Alcoba'),
(3, 'Comedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_reembolso`
--

CREATE TABLE `estado_reembolso` (
  `idestado_reembolso` int(11) NOT NULL COMMENT 'id estado de reembolso',
  `nombre` varchar(45) NOT NULL COMMENT 'nombre estado de reembolso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_reembolso`
--

INSERT INTO `estado_reembolso` (`idestado_reembolso`, `nombre`) VALUES
(1, 'Enviado'),
(2, 'Aceptado'),
(3, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL COMMENT 'id factura',
  `fecha_facturacion` datetime NOT NULL COMMENT 'fecha de facturacion',
  `cod_cliente` int(11) NOT NULL COMMENT 'codigo de cliente desde tabla persona',
  `cod_empleado` int(11) NOT NULL COMMENT 'codigo de empleado desde tabla persona'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL COMMENT 'id producto',
  `imagen` blob COMMENT 'imagen de producto',
  `nombre` varchar(45) NOT NULL COMMENT 'nombre de producto',
  `descripcion` varchar(145) NOT NULL COMMENT 'descripcion de producto',
  `precio` int(11) NOT NULL COMMENT 'precio de producto',
  `stock` int(11) NOT NULL COMMENT 'Stock de producto',
  `cod_categoria` int(11) NOT NULL COMMENT 'codigo de categoria desde tabla categoria',
  `puesto` varchar(3) DEFAULT NULL COMMENT 'cantidad de puestos',
  `cod_tipo_tela` int(11) NOT NULL COMMENT 'codigo de tipo de tela desde tabla tipo_tela\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reembolso`
--

CREATE TABLE `reembolso` (
  `idreembolso` int(11) NOT NULL COMMENT 'id reembolso',
  `cod_cliente` int(11) NOT NULL COMMENT 'codigo de cliente desde tabla cliente',
  `motivo` varchar(145) NOT NULL COMMENT 'Descripcion de motivo',
  `cod_estado_reembolso` int(11) NOT NULL COMMENT 'codigo de estado de reembolso desde tabla estado_reembolso',
  `cod_factura` int(11) NOT NULL COMMENT 'codigo de factura desde tabla factura'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL COMMENT 'id Rol',
  `nombre` varchar(45) NOT NULL COMMENT 'Nombre de rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`) VALUES
(1, 'empleado'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subfactura`
--

CREATE TABLE `subfactura` (
  `idsubfactura` int(11) NOT NULL COMMENT 'id Subfactura',
  `cod_factura` int(11) NOT NULL COMMENT 'codigo de factura desde tabla factura',
  `cod_producto` int(11) NOT NULL COMMENT 'codigo de producto desde tabla producto',
  `cantidad` int(11) NOT NULL COMMENT 'cantidad de producto',
  `total_valor` int(11) NOT NULL COMMENT 'total valor de producto por cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tela`
--

CREATE TABLE `tipo_tela` (
  `idtipo_tela` int(11) NOT NULL COMMENT 'id tipo de tela',
  `nombre` varchar(45) NOT NULL COMMENT 'nombre tipo de tela'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_tela`
--

INSERT INTO `tipo_tela` (`idtipo_tela`, `nombre`) VALUES
(1, 'N/A'),
(2, 'CUERO SINTETICO'),
(3, 'MICRO FIBRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL COMMENT 'id usuario',
  `nombre` varchar(45) NOT NULL COMMENT 'nombre de persona',
  `apellido` varchar(45) NOT NULL COMMENT 'apellido de persona',
  `correo` varchar(45) NOT NULL COMMENT 'correo de persona',
  `password` varchar(45) DEFAULT NULL COMMENT 'contraseña de persona',
  `cod_rol` int(11) NOT NULL COMMENT 'codigo de rol desde tabla rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `correo`, `password`, `cod_rol`) VALUES
(1, 'Andres', 'Garcia', 'ag@email.com', '123456789', 1),
(2, 'Diana', 'Rodriguez', 'dr@email.com', '987654321', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `estado_reembolso`
--
ALTER TABLE `estado_reembolso`
  ADD PRIMARY KEY (`idestado_reembolso`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfactura`),
  ADD KEY `fk_factura_persona1_idx` (`cod_cliente`),
  ADD KEY `fk_factura_persona2_idx` (`cod_empleado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fk_producto_categoria1_idx` (`cod_categoria`),
  ADD KEY `fk_producto_tipo_tela1_idx` (`cod_tipo_tela`);

--
-- Indices de la tabla `reembolso`
--
ALTER TABLE `reembolso`
  ADD PRIMARY KEY (`idreembolso`),
  ADD KEY `fk_reembolso_persona1_idx` (`cod_cliente`),
  ADD KEY `fk_reembolso_estado_reembolso1_idx` (`cod_estado_reembolso`),
  ADD KEY `fk_reembolso_factura1_idx` (`cod_factura`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `subfactura`
--
ALTER TABLE `subfactura`
  ADD PRIMARY KEY (`idsubfactura`),
  ADD KEY `fk_subfactura_producto1_idx` (`cod_producto`),
  ADD KEY `fk_subfactura_factura1_idx` (`cod_factura`);

--
-- Indices de la tabla `tipo_tela`
--
ALTER TABLE `tipo_tela`
  ADD PRIMARY KEY (`idtipo_tela`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_persona_rol_idx` (`cod_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id categoria', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_reembolso`
--
ALTER TABLE `estado_reembolso`
  MODIFY `idestado_reembolso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id estado de reembolso', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idfactura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id factura';

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id producto';

--
-- AUTO_INCREMENT de la tabla `reembolso`
--
ALTER TABLE `reembolso`
  MODIFY `idreembolso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id reembolso';

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id Rol', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `subfactura`
--
ALTER TABLE `subfactura`
  MODIFY `idsubfactura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id Subfactura';

--
-- AUTO_INCREMENT de la tabla `tipo_tela`
--
ALTER TABLE `tipo_tela`
  MODIFY `idtipo_tela` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id tipo de tela', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id usuario', AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_persona1` FOREIGN KEY (`cod_cliente`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_factura_persona2` FOREIGN KEY (`cod_empleado`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_tipo_tela1` FOREIGN KEY (`cod_tipo_tela`) REFERENCES `tipo_tela` (`idtipo_tela`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reembolso`
--
ALTER TABLE `reembolso`
  ADD CONSTRAINT `fk_reembolso_estado_reembolso1` FOREIGN KEY (`cod_estado_reembolso`) REFERENCES `estado_reembolso` (`idestado_reembolso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reembolso_factura1` FOREIGN KEY (`cod_factura`) REFERENCES `factura` (`idfactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reembolso_persona1` FOREIGN KEY (`cod_cliente`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subfactura`
--
ALTER TABLE `subfactura`
  ADD CONSTRAINT `fk_subfactura_factura1` FOREIGN KEY (`cod_factura`) REFERENCES `factura` (`idfactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_subfactura_producto1` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_persona_rol` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
