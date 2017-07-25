-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2012 a las 20:52:22
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sscpoa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id_autor` int(15) NOT NULL AUTO_INCREMENT,
  `nom_autor` text COLLATE utf8_unicode_ci NOT NULL,
  `ape_autor` text COLLATE utf8_unicode_ci NOT NULL,
  `pais_autor` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nom_autor`, `ape_autor`, `pais_autor`) VALUES
(2, 'Carlos Pepe', 'Mendoza', 'Venezuela'),
(3, 'Meyer', 'Vaisman', ' Caracas, Venezuela'),
(7, 'fulano', 'de tal', 'Brasil'),
(8, 'Leonardo', 'da Vinci', 'Italia'),
(14, 'leonar', 'leo', 'caracs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
  `id_dep` int(15) NOT NULL AUTO_INCREMENT,
  `rif_dep` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nom_dep` text COLLATE utf8_unicode_ci NOT NULL,
  `dir_dep` longtext COLLATE utf8_unicode_ci NOT NULL,
  `telf_dep` int(11) NOT NULL,
  PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id_dep`, `rif_dep`, `nom_dep`, `dir_dep`, `telf_dep`) VALUES
(4, '123456', 'dependencia Estado V', 'caracas es la direccion jd jd  jksjks jkd jkdjksjkjkjs jkjks jdkkjk jkjkjd jksjd ', 12121222),
(6, '3333', 'Dependencia Caracas', 'Caracas', 3322),
(8, '454545', 'Maracay', 'Maracay\r\n', 4545),
(9, 'fdffdf', 'dfdf', 'Valencia', 222),
(10, 'dfdfdf', 'Maracaibo', 'Maracaibo', 443434),
(11, 'dfdf', 'Maturin', 'Maturin', 22222);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `login`, `contrasena`) VALUES
(42, '6', '6'),
(44, '111', '111'),
(46, '2', '2'),
(47, 'yyy', 'yyy'),
(48, 'ttt', 'tt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE IF NOT EXISTS `meses` (
  `id_mes` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id_mes`, `mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE IF NOT EXISTS `movimientos` (
  `id_mov` int(15) NOT NULL AUTO_INCREMENT,
  `id_usu` int(15) NOT NULL,
  `id_dep` int(15) NOT NULL,
  `id_obras` int(15) NOT NULL,
  `solic_mov` int(15) NOT NULL,
  `fec_mov` date NOT NULL,
  PRIMARY KEY (`id_mov`),
  UNIQUE KEY `id_usu` (`id_usu`),
  UNIQUE KEY `id_dep` (`id_dep`),
  UNIQUE KEY `id_obras` (`id_obras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_mov`, `id_usu`, `id_dep`, `id_obras`, `solic_mov`, `fec_mov`) VALUES
(1, 48, 4, 15, 6, '2012-04-12'),
(2, 46, 6, 11, 10, '2012-04-12'),
(3, 47, 11, 9, 4, '2012-04-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id_obra` int(15) NOT NULL AUTO_INCREMENT,
  `id_autor` int(15) NOT NULL,
  `id_premio` int(15) NOT NULL,
  `id_dep` int(15) NOT NULL,
  `nom_obra` text COLLATE utf8_unicode_ci NOT NULL,
  `tip_obra` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fec_obra` date NOT NULL,
  `dimen_obra` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `colec_obra` text COLLATE utf8_unicode_ci NOT NULL,
  `cond_obra` text COLLATE utf8_unicode_ci NOT NULL,
  `foto_obra` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'foto_0.jpg',
  PRIMARY KEY (`id_obra`),
  KEY `id_dep` (`id_dep`),
  KEY `id_autor` (`id_autor`),
  KEY `id_premio` (`id_premio`),
  KEY `id_dep_2` (`id_dep`),
  KEY `id_autor_2` (`id_autor`),
  KEY `id_premio_2` (`id_premio`),
  KEY `id_dep_3` (`id_dep`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id_obra`, `id_autor`, `id_premio`, `id_dep`, `nom_obra`, `tip_obra`, `fec_obra`, `dimen_obra`, `colec_obra`, `cond_obra`, `foto_obra`) VALUES
(1, 8, 1, 4, 'Alumbramiento 44', 'Pintura', '1975-07-05', '200x30', ' I Salón de la Joven Pintura (Galería Serra, Caracas)', 'Buena', 'foto_1.jpg'),
(2, 3, 2, 4, 'OtroAlumbramiento', 'Pintura', '1975-04-05', '200x30', ' I Salón de la Joven Pintura (Galería Serra, Caracas)', 'Buena', 'foto_2.jpg'),
(8, 7, 2, 6, 'nombre obra', 'Papel', '2012-05-12', 'dim', 'niomv', 'cond', 'foto_8.jpg'),
(9, 2, 1, 6, 'n', 'Pintura', '2010-03-15', 'dim', '222233', '222', 'foto_9.jpg'),
(10, 3, 2, 4, 'obra de arte', 'Escultura', '2010-03-15', 'wewe', 'la coleccionm', 'expuesta', 'foto_10.jpg'),
(11, 2, 2, 10, 'obra nueva', 'Escultura', '2012-05-12', 'dim', 'colll', 'eed', 'foto_11.jpg'),
(12, 8, 5, 6, 'ererer rerer  rerer', 'Pintura', '0000-00-00', 'rer', 'reere', 'ererer', 'foto_12.jpg'),
(13, 8, 2, 8, '5555555', 'Papel', '1990-12-31', '', '55', '55', 'foto_13.jpg'),
(14, 7, 2, 8, '5656', 'Papel', '2012-04-30', '56', '56', '56', 'foto_14.jpg'),
(15, 2, 1, 6, 'eeeeeeeeee555555555', 'Escultura', '1984-01-02', 'eeee5', 'eeee5', 'ee5', 'foto_15.jpg'),
(16, 8, 2, 6, '4444 444444 666', 'Papel', '2012-04-09', '4666', '4444666', '44466', 'foto_16.jpg'),
(18, 2, 1, 8, 'hhhhhhhhhhhhh        gfg ', 'Pintura', '2012-04-09', 'fffff', 'fffffff', 'ffffffff', 'foto_18.jpg'),
(19, 3, 2, 6, '1111111', 'Escultura', '2012-04-12', '111111', '1111', '111', 'foto_19.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obrasmov`
--

CREATE TABLE IF NOT EXISTS `obrasmov` (
  `id_movob` int(15) NOT NULL AUTO_INCREMENT,
  `id_mov` int(15) NOT NULL,
  `id_obras` int(15) NOT NULL,
  `tipomov` int(4) NOT NULL,
  PRIMARY KEY (`id_movob`),
  KEY `id_mov` (`id_mov`),
  KEY `id_obras` (`id_obras`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE IF NOT EXISTS `premios` (
  `id_premio` int(15) NOT NULL AUTO_INCREMENT,
  `nom_premio` text COLLATE utf8_unicode_ci NOT NULL,
  `fec_premio` date NOT NULL,
  `event_premio` text COLLATE utf8_unicode_ci NOT NULL,
  `pais_premio` int(30) NOT NULL,
  `ciudad_premio` int(30) NOT NULL,
  PRIMARY KEY (`id_premio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`id_premio`, `nom_premio`, `fec_premio`, `event_premio`, `pais_premio`, `ciudad_premio`) VALUES
(1, 'Primer premio de obra tridimensional', '2007-01-01', 'I Salón de Arte Centro Plaza', 2, 5),
(2, 'segundo premio', '2001-04-02', 'evento premio', 1, 1),
(5, 'premio2', '2010-03-19', 'el evento1', 1, 2),
(10, 'gfgfg', '2012-12-30', 'gfgfg44', 44, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'clave primaria',
  `id_login` int(11) NOT NULL,
  `ci_usu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nom_usu` text COLLATE utf8_unicode_ci NOT NULL,
  `ape_usu` text COLLATE utf8_unicode_ci NOT NULL,
  `tip_usu` text COLLATE utf8_unicode_ci NOT NULL,
  `dep_usu` text COLLATE utf8_unicode_ci NOT NULL,
  `cargo_usu` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_login` (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_login`, `ci_usu`, `nom_usu`, `ape_usu`, `tip_usu`, `dep_usu`, `cargo_usu`) VALUES
(42, 42, '44', '333555', '3333555', 'Administrador', 'Conservación', 'Jefe de Registro'),
(44, 44, '121', '1111', '111', 'Administrador', 'Registro', 'Jefe de conservación'),
(46, 46, '1234', 'nombr', 'apell', 'Supervisor', 'Conservación', 'Jefe de conservación'),
(47, 47, '556', 'yyyyy', 'yyyyyyyy', 'Especialista', 'Conservación', 'Registrador I'),
(48, 48, '6767', 'ttt', 'ttt', 'Especialista', 'Conservación', 'Jefe de conservación');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`id_dep`) REFERENCES `dependencias` (`id_dep`),
  ADD CONSTRAINT `movimientos_ibfk_3` FOREIGN KEY (`id_obras`) REFERENCES `obras` (`id_obra`);

--
-- Filtros para la tabla `obras`
--
ALTER TABLE `obras`
  ADD CONSTRAINT `obras_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`),
  ADD CONSTRAINT `obras_ibfk_2` FOREIGN KEY (`id_premio`) REFERENCES `premios` (`id_premio`),
  ADD CONSTRAINT `obras_ibfk_3` FOREIGN KEY (`id_dep`) REFERENCES `dependencias` (`id_dep`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
