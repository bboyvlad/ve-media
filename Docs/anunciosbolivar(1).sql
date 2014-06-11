-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2014 a las 02:42:37
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `anunciosbolivar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_categorias`
--

CREATE TABLE IF NOT EXISTS `d_categorias` (
  `codcat` varchar(5) NOT NULL,
  `descat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Definiciones de las Categorias';

--
-- Volcar la base de datos para la tabla `d_categorias`
--

INSERT INTO `d_categorias` (`codcat`, `descat`) VALUES
('00000', 'Seleccione'),
('00001', 'Inmuebles'),
('00002', 'Vehiculos/Repuestos'),
('00003', 'Computacion/Electronica/Telefo'),
('00004', 'Servicios'),
('00005', 'Educacion/Cursos/Asesorias'),
('00006', 'Musica/Sonido'),
('00007', 'Varios/Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_anunciantes`
--

CREATE TABLE IF NOT EXISTS `r_anunciantes` (
  `a_id` int(9) NOT NULL AUTO_INCREMENT,
  `a_mail` varchar(25) NOT NULL,
  `a_passwd` varchar(10) NOT NULL,
  `a_telefono1` varchar(15) NOT NULL,
  `a_telefono2` varchar(15) NOT NULL,
  `a_anunciante` varchar(25) NOT NULL,
  `a_status` int(1) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcar la base de datos para la tabla `r_anunciantes`
--

INSERT INTO `r_anunciantes` (`a_id`, `a_mail`, `a_passwd`, `a_telefono1`, `a_telefono2`, `a_anunciante`, `a_status`) VALUES
(32, 'qwe@qwe.com', 'qwe', '123', '123', 'qwe', 1),
(29, 'eddfernandez@gmail.com', '123456', '555', '555', 'Alguien de Prueba', 1),
(30, 'edurecordset9@gmail.com', 'qwe', '123', '123', 'Eduardo Fernandez', 1),
(31, '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_anuncios`
--

CREATE TABLE IF NOT EXISTS `r_anuncios` (
  `an_id` int(9) NOT NULL AUTO_INCREMENT,
  `an_titulo` varchar(35) NOT NULL,
  `a_id` varchar(9) NOT NULL,
  `an_desanun` text NOT NULL,
  `an_monto` decimal(18,2) NOT NULL,
  `an_status` int(1) NOT NULL,
  `an_fecpub` date NOT NULL,
  `an_rutagallery` varchar(100) NOT NULL,
  `an_codcat` varchar(5) NOT NULL,
  PRIMARY KEY (`an_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcar la base de datos para la tabla `r_anuncios`
--

INSERT INTO `r_anuncios` (`an_id`, `an_titulo`, `a_id`, `an_desanun`, `an_monto`, `an_status`, `an_fecpub`, `an_rutagallery`, `an_codcat`) VALUES
(43, 'Otra cosas', '29', 'jbsdjbjsdf', 1209.00, 1, '2014-06-07', 'ruta/de/la/galeria/', '00001'),
(44, 'otro 2', '29', 'khgsjdhbfhjsd', 12345.00, 1, '2014-06-07', 'ruta/de/la/galeria/', '00001'),
(45, 'curso de pedicure', '30', 'wsed', 123.00, 1, '2014-06-08', 'ruta/de/la/galeria/', '00001'),
(46, '', '31', '', 0.00, 1, '2014-06-08', 'ruta/de/la/galeria/', ''),
(47, 'weqwe', '32', 'asdasdasd', 0.00, 1, '2014-06-08', 'ruta/de/la/galeria/', '00001');
