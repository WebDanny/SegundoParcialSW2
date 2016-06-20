-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 01:57 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `constructora`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `actividad`
--

INSERT INTO `actividad` (`id`, `tipo`, `nombre`, `unidad`) VALUES
(1, 'Ceramica', 'Ceramica Lisa', 'kg'),
(2, 'Material', 'Martillo', 'Pieza'),
(3, 'Material ', 'Clavos', 'Plg'),
(5, 'Ladrillos', 'muros', 'Unid'),
(6, 'Tejado', 'trabajos preliminares', ''),
(7, 'Maquinaria', 'capa aisladora', ''),
(8, 'Alcantarrillado', 'trabajos preliminares', ''),
(9, 'trabajos preliminares', 'cemento', 'Kg'),
(10, '1', 'actividad1', ''),
(11, '2', 'activdad2', ''),
(12, '2', 'actividad1', 'asdasd'),
(13, '1', 'Limpiar Terreno', 'Unidad');

-- --------------------------------------------------------

--
-- Table structure for table `analisisitem`
--

CREATE TABLE IF NOT EXISTS `analisisitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `unidad` varchar(200) NOT NULL,
  `rendimiento` float NOT NULL,
  `precioUnitario` float NOT NULL,
  `precioParcial` float NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `diagrama`
--

CREATE TABLE IF NOT EXISTS `diagrama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idItem` int(11) NOT NULL,
  `predecesor` int(11) NOT NULL,
  `fechaIni` varchar(30) NOT NULL,
  `fechaFin` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `diagrama`
--

INSERT INTO `diagrama` (`id`, `idItem`, `predecesor`, `fechaIni`, `fechaFin`) VALUES
(1, 13, 0, '10/10/2010', '11/10/2010'),
(2, 14, 13, '11/10/2016', '12/20/2016'),
(3, 15, 0, '2016-06-09', '2016-06-16'),
(4, 16, 15, '2016-06-17', '2016-06-30'),
(5, 17, 15, '2016-06-30', '2016-07-14'),
(6, 18, 16, '2016-07-07', '2016-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProyecto` int(11) NOT NULL,
  `idActividad` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `PParcial` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `idProyecto`, `idActividad`, `cantidad`, `PParcial`) VALUES
(1, 1, 1, 0, 0),
(2, 1, 9, 0, 0),
(3, 1, 8, 0, 0),
(4, 1, 7, 0, 0),
(5, 1, 10, 0, 0),
(6, 1, 1, 0, 0),
(7, 1, 11, 0, 0),
(8, 1, 1, 0, 0),
(9, 1, 1, 0, 0),
(10, 1, 1, 0, 0),
(11, 1, 7, 0, 0),
(12, 1, 7, 0, 0),
(13, 2, 6, 0, 0),
(14, 2, 7, 0, 0),
(15, 9, 5, 0, 0),
(16, 9, 1, 0, 0),
(17, 9, 6, 0, 0),
(18, 9, 13, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nombrePropietario` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `responsable` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `nombrePropietario`, `direccion`, `responsable`, `total`) VALUES
(8, 'Gracomp', 'Roy Medina', 'Los mangales', 'Jose Luis Rivera', 0),
(9, 'Constructora SRL', 'Moises Gutierrez', 'Los Tusequis', 'Hernan Fernandez Monroy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipoa`
--

CREATE TABLE IF NOT EXISTS `tipoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipoa`
--

INSERT INTO `tipoa` (`id`, `nombre`) VALUES
(1, 'tipo1'),
(2, 'tipo2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
