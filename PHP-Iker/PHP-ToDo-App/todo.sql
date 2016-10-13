-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: todo
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

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
-- Table structure for table `listas`
--

DROP TABLE IF EXISTS `listas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listas` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listas`
--

LOCK TABLES `listas` WRITE;
/*!40000 ALTER TABLE `listas` DISABLE KEYS */;
INSERT INTO `listas` VALUES (1,'Egiteko'),(2,'Egiten'),(3,'Eginda'),(4,'Egiteko2'),(5,'Egiteko3'),(6,'Eginda2');
/*!40000 ALTER TABLE `listas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `hecho` tinyint(1) DEFAULT '0',
  `fechaFin` date NOT NULL,
  `ID_listas` int(8) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_listas` (`ID_listas`),
  CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`ID_listas`) REFERENCES `listas` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` VALUES (1,'Bazkaria','Makarroiak',0,'0000-00-00',1),(2,'Korri itea','Orduerditxo bat',0,'0000-00-00',2),(4,'Kaka egin','popo',0,'0000-00-00',4),(5,'Tele ikusi','Salvame limon',0,'0000-00-00',1),(6,'Jolastu','Visio Bisio',0,'0000-00-00',5);
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Izayer','iker','Iker','Izaguirre','943555677','iker_izaguirre@hotmail.com'),(2,'Ravasaurio','aitor','Aitor','Redondo','943555678','aredondob@gmail.com'),(4,'asdf','asdf','asdf','',NULL,'asdf'),(5,'Patata','haizea','Haizea','',NULL,'haizea@gmail.com'),(6,'xempro','asdf','Xempronio','',NULL,'adf@asdf'),(7,'eloisa','asdf','eloisa','',NULL,'eloisa@asdf'),(8,'po','asdf','asdf','',NULL,'af@asdf'),(9,'miniom','asdf','miniom','',NULL,'miniom@asdf'),(10,'l','asdf','l','',NULL,'l@l'),(11,'unai','unai','unai','',NULL,'unai@unai'),(12,'ttopttoro','asdf','ttopttoro','',NULL,'ttopttoro@ttopttoro'),(13,'juan','juan','juan','',NULL,'juana@juan');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_listas`
--

DROP TABLE IF EXISTS `usuarios_listas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_listas` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `ID_usuarios` int(8) unsigned NOT NULL,
  `ID_listas` int(8) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_usuarios` (`ID_usuarios`),
  KEY `ID_listas` (`ID_listas`),
  CONSTRAINT `usuarios_listas_ibfk_1` FOREIGN KEY (`ID_usuarios`) REFERENCES `usuarios` (`ID`),
  CONSTRAINT `usuarios_listas_ibfk_2` FOREIGN KEY (`ID_listas`) REFERENCES `listas` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_listas`
--

LOCK TABLES `usuarios_listas` WRITE;
/*!40000 ALTER TABLE `usuarios_listas` DISABLE KEYS */;
INSERT INTO `usuarios_listas` VALUES (1,1,1),(2,1,2),(3,1,3),(4,2,4),(5,2,5),(6,2,6);
/*!40000 ALTER TABLE `usuarios_listas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-13  7:21:26
