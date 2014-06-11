-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2014 a las 22:47:49
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
-- Volcado de datos para la tabla `d_categorias`
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
-- Estructura de tabla para la tabla `r_anuncios`
--

CREATE TABLE IF NOT EXISTS `r_anuncios` (
  `an_id` int(9) NOT NULL AUTO_INCREMENT,
  `an_titulo` varchar(35) NOT NULL,
  `an_anunciante` varchar(25) NOT NULL,
  `an_desanun` text NOT NULL,
  `an_telefono1` varchar(15) NOT NULL,
  `an_telefono2` varchar(15) NOT NULL,
  `an_correo` varchar(25) NOT NULL,
  `an_monto` decimal(18,2) NOT NULL,
  `an_status` int(1) NOT NULL,
  `an_fecpub` date NOT NULL,
  `an_rutagallery` varchar(20) NOT NULL,
  `an_codcat` varchar(5) NOT NULL,
  PRIMARY KEY (`an_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `r_anuncios`
--

INSERT INTO `r_anuncios` (`an_id`, `an_titulo`, `an_anunciante`, `an_desanun`, `an_telefono1`, `an_telefono2`, `an_correo`, `an_monto`, `an_status`, `an_fecpub`, `an_rutagallery`, `an_codcat`) VALUES
(1, 'Vendo Algodon', 'Eduardo Fernandez', 'asdasdasdasdasdadasdasdsd', '123', '1234', 'eddfernandez@gmail.com', 3000.00, 0, '2014-06-03', 'ruta/de/la/galeria/', '00002'),
(2, 'Vendo Yodo', 'Alguien de Prueba', 'loren ipsun valor', '4444', '5555', 'edurecordset@gmail.com', 1234.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00006'),
(3, 'CURSO DE PROGRAMACION', 'LORIS SANTAMARIA', 'PUBLICACION DE EJEMPL 3', '7777', '8888', 'edurecordset@gmail.com', 0.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00005'),
(4, 'VENDO CELULAR BLACKBERRY Z10', 'LUIS PERALES', 'POR LOQUERAS DE PRUEBA VENDO CELULAR', '777', '888', 'QWE@QUE.COM', 2500.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00003'),
(5, 'VENDO ALGO BUENO', 'BLADIMIR GALINDO', 'algo de prueba ', '9999', '8888', 'BBOYmacareno@gmail.com', 2150.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00007'),
(6, 'ALQUILER DE BURRO', 'alguien de prueba2 ', 'kkbbbzxjc', '0000', '9987', 'aluien@gmail.com', 0.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00003'),
(7, 'PRESTO DINERO', 'Ricardo Lopez', 'presto rial a todo el mundo', '1234', '1235', 'ricardolopez@gmail.com', 0.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00002'),
(8, 'DESCRUBRIMOS CACHOS', 'Cachonda Claro', 'hola hola hola', '1234', '23345', 'cachonda@gmail.com', 2500.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00003'),
(9, 'PLOMERIA Y ELECTRICIDAD', 'LUIS LOCO', 'DESTAPADO DE CAÑERIAS', '59793', '3945847', 'LOCO@GMAIL.COM', 0.00, 1, '2014-06-03', 'ruta/de/la/galeria/', '00005');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
