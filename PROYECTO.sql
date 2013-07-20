-- MySQL dump 10.11
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades` (
  `id_actividad` int(11) NOT NULL auto_increment,
  `id_evento` int(11) NOT NULL,
  `nombre_actividad` varchar(500) default NULL,
  `lugares` int(2) default NULL,
  `precio` decimal(5,2) default NULL,
  `descripcion` text,
  `id_instructor` int(11) default NULL,
  PRIMARY KEY  (`id_actividad`),
  KEY `fkactividades` (`id_evento`),
  CONSTRAINT `fkactividades` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistentes_eventos`
--

DROP TABLE IF EXISTS `asistentes_eventos`;
CREATE TABLE `asistentes_eventos` (
  `id_asistente_evento` int(11) NOT NULL auto_increment,
  `id_actividad` int(11) NOT NULL,
  `id_asistente` int(11) NOT NULL,
  `fecha_registro` date default NULL,
  PRIMARY KEY  (`id_asistente_evento`),
  KEY `fk1asistentes_eventos` (`id_actividad`),
  KEY `fk2asistentes_eventos` (`id_asistente`),
  CONSTRAINT `fk1asistentes_eventos` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`),
  CONSTRAINT `fk2asistentes_eventos` FOREIGN KEY (`id_asistente`) REFERENCES `usuarios` (`id_asistente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asistentes_eventos`
--

LOCK TABLES `asistentes_eventos` WRITE;
/*!40000 ALTER TABLE `asistentes_eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `asistentes_eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistentes_tipos_usuarios`
--

DROP TABLE IF EXISTS `asistentes_tipos_usuarios`;
CREATE TABLE `asistentes_tipos_usuarios` (
  `id_asistente_tipo_usuario` int(11) NOT NULL auto_increment,
  `id_asistente` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY  (`id_asistente_tipo_usuario`),
  KEY `fk1asistentes_tipos_usuarios` (`id_tipo_usuario`),
  KEY `fk2asistentes_tipos_usuarios` (`id_asistente`),
  CONSTRAINT `fk1asistentes_tipos_usuarios` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipos_usuarios` (`id_tipo_usuario`),
  CONSTRAINT `fk2asistentes_tipos_usuarios` FOREIGN KEY (`id_asistente`) REFERENCES `usuarios` (`id_asistente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asistentes_tipos_usuarios`
--

LOCK TABLES `asistentes_tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `asistentes_tipos_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `asistentes_tipos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL auto_increment,
  `nombre_evento` varchar(200) default NULL,
  `contacto` text,
  `cuando` text,
  `donde` text,
  `informacion` text,
  `fecha_inicio` date default NULL,
  `fecha_fin` date default NULL,
  PRIMARY KEY  (`id_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_tipos_usuarios`
--

DROP TABLE IF EXISTS `eventos_tipos_usuarios`;
CREATE TABLE `eventos_tipos_usuarios` (
  `id_evento_tipo_usuario` int(11) NOT NULL auto_increment,
  `id_evento` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY  (`id_evento_tipo_usuario`),
  KEY `fk1eventos_tipos_usuarios` (`id_tipo_usuario`),
  KEY `fk2eventos_tipos_usuarios` (`id_evento`),
  CONSTRAINT `fk1eventos_tipos_usuarios` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipos_usuarios` (`id_tipo_usuario`),
  CONSTRAINT `fk2eventos_tipos_usuarios` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos_tipos_usuarios`
--

LOCK TABLES `eventos_tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `eventos_tipos_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_tipos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_usuarios`
--

DROP TABLE IF EXISTS `tipos_usuarios`;
CREATE TABLE `tipos_usuarios` (
  `id_tipo_usuario` int(11) NOT NULL auto_increment,
  `tipo` varchar(100) default NULL,
  PRIMARY KEY  (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipos_usuarios`
--

LOCK TABLES `tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `tipos_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_asistente` int(11) NOT NULL auto_increment,
  `apellido_paterno` varchar(120) default NULL,
  `apellido_materno` varchar(120) default NULL,
  `nombre` varchar(120) default NULL,
  `sexo` char(1) default NULL,
  `edad` decimal(2,0) default NULL,
  `email` varchar(200) default NULL,
  `nctr_rfc` varchar(13) default NULL,
  `numero_control` int(8) default NULL,
  PRIMARY KEY  (`id_asistente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-10 12:59:53
