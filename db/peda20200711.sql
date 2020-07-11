CREATE DATABASE pedagogico DEFAULT  CHARSET utf8 COLLATE utf8_spanish_ci;
USE pedagogico;

-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: pedagogico
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignatura` (
  `idasignatura` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(20) NOT NULL,
  `horassemana` varchar(20) NOT NULL,
  PRIMARY KEY (`idasignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) NOT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (101,'Educación Inicial'),(102,'Educación Primaria'),(103,'Educ. Sec. Comunicación'),(104,'Educ. Sec. Ciencias Sociales'),(105,'Educ. Sec. CTA'),(106,'Educ. Sec. Matemática'),(107,'Computación e Informático'),(108,'Educación Física');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docente` (
  `iddoc` int(11) NOT NULL AUTO_INCREMENT,
  `doc_nombres` varchar(45) NOT NULL,
  `doc_apellidos` varchar(60) NOT NULL,
  `doc_dni` varchar(8) NOT NULL,
  `doc_direccion` varchar(45) NOT NULL,
  `doc_telefono` varchar(45) NOT NULL,
  `doc_especialidad` varchar(45) NOT NULL,
  `doc_distrito` varchar(45) NOT NULL,
  PRIMARY KEY (`iddoc`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` VALUES (1,'Sebastian','Caro','12345678','jr','951','Primaria','Puno'),(2,'Hernán Rolando','APAZA PINTO','1','Jr.','951555555','Especialidad','Puno'),(3,'Victor Orlando','AYLLÓN GEMIO','2','Jr.','951555556','Especialidad','Puno'),(4,'Nilda Marcela','CARPIO MIRANDA','3','Jr.','951555557','Especialidad','Puno'),(5,'Eleazar Rafael ','MONTALVO GUTIERREZ','4','Jr.','951555558','Especialidad','Puno'),(6,'María Elena','PAZO PRIETO','5','Jr.','951555559','Especialidad','Puno'),(7,'Luis','QUISPE APAZA','6','Jr.','951555560','Especialidad','Puno'),(8,'María Nelly','RAMOS ROJAS','7','Jr.','951555561','Especialidad','Puno'),(9,'Mirian María','ROJAS GORDILLO','8','Jr.','951555562','Especialidad','Puno'),(10,'Marco Antonio','ARDILES CATACORA','9','Jr.','951555563','Especialidad','Puno'),(11,'Beltrán Erasmo','CASTILLO CÁCERES','10','Jr.','951555564','Especialidad','Puno'),(12,'Ricardo','DELGADO RAMOS','11','Jr.','951555565','Especialidad','Puno'),(13,'Vilma Rosaura','PARICAHUA MAMANI','12','Jr.','951555566','Especialidad','Puno'),(14,'Eliana Honoria','PINEDA MACEDO','13','Jr.','951555567','Especialidad','Puno'),(15,'Dominga Vianney','RAMIREZ RAMIREZ','14','Jr.','951555568','Especialidad','Puno'),(16,'Roger Marco','RAMOS ORTEGA','15','Jr.','951555569','Especialidad','Puno'),(17,'Jesús','VILCAPAZA CCUNO','16','Jr.','951555570','Especialidad','Puno'),(18,'Wilmer Andrés    ','AROHUANCA QUISPE','17','Jr.','951555571','Especialidad','Puno'),(19,'Seyli Niesleyni','CHOQUE MAMANI','18','Jr.','951555572','Especialidad','Puno'),(20,'Beatríz Vilma','MAMANI MARON','19','Jr.','951555573','Especialidad','Puno'),(21,'Juan José','MANSILLA PARI','20','Jr.','951555574','Especialidad','Puno'),(22,'Javier David','OLIVERA CHURA','21','Jr.','951555575','Especialidad','Puno'),(23,'Giuliana Claudia','PEREZ VALLE','22','Jr.','951555576','Especialidad','Puno'),(24,'Einar','TURPO AROQUIPA','23','Jr.','951555577','Especialidad','Puno'),(25,'Miriam Milagros','CAZORLA AGUIRRE','24','Jr.','951555578','Especialidad','Puno'),(26,'judith Gabriela','FLORES QUISPE','25','Jr.','951555579','Especialidad','Puno'),(27,'German','MAMANI PARI','26','Jr.','951555580','Especialidad','Puno'),(28,'Erika','OLIVERA CONDORI','27','Jr.','951555581','Especialidad','Puno'),(29,'Yeni','PARI YANA','28','Jr.','951555582','Especialidad','Puno'),(30,'Celestina','ROJAS MAYTA','29','Jr.','951555583','Especialidad','Puno'),(31,'Elizabeth Jesús','VALVERDE HERRERA','30','Jr.','951555584','Especialidad','Puno');
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante` (
  `idstudent` int(11) NOT NULL AUTO_INCREMENT,
  `alu_nombre` varchar(45) NOT NULL,
  `alu_paterno` varchar(60) NOT NULL,
  `alu_materno` varchar(60) NOT NULL,
  `alu_email` varchar(45) NOT NULL,
  `alu_usuario` varchar(30) DEFAULT NULL,
  `alu_pass` varchar(255) DEFAULT NULL,
  `fecCreate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idstudent`)
) ENGINE=InnoDB AUTO_INCREMENT=21004 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (21000,'NOLBERTO','SANTOS','COAQUIRA','santos@gmail.com','a','a','2020-02-02 05:00:00'),(21001,'gregorio','martinez','morales','sebita_18923_@gmial.com','goyo','goyo','2020-05-09 03:53:10'),(21002,'ELENA','SALAS','VARGAS','elenit_corazon@hotmail.com','elena','elena','2020-05-09 03:56:12'),(21003,'JAVIER','SANTOS','MACHACA','santos_machaca@hotmail.com','jsantos','santos123','2020-07-10 23:43:24');
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `nameuser` varchar(30) NOT NULL,
  `passuser` varchar(255) NOT NULL,
  `nivel` int(11) DEFAULT '2',
  `stateuser` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,1,'admin','21232f297a57a5a743894a0e4a801fc3',1,1),(2,1,'personal','0be5a6c82893ecaa8bb29bd36831e457',2,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matricula`
--

DROP TABLE IF EXISTS `matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matricula` (
  `idmatricula` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) DEFAULT NULL,
  `carrera` varchar(45) DEFAULT NULL,
  `semestre` varchar(45) DEFAULT NULL,
  `docente` varchar(120) DEFAULT NULL,
  `fecmatricula` date DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL,
  `iddocente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmatricula`),
  KEY `fk_matricula_alumno_idx` (`idalumno`),
  KEY `fk_matricula_docente_idx` (`iddocente`),
  CONSTRAINT `fk_matricula_alumno` FOREIGN KEY (`idalumno`) REFERENCES `estudiante` (`idstudent`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_matricula_docente` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`iddoc`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula`
--

LOCK TABLES `matricula` WRITE;
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
INSERT INTO `matricula` VALUES (3,21000,'Educ. Sec. Ciencias Sociales','IV','APAZA PINTO, Hernán Rolando','2020-05-05','2020-05-08 23:10:19',1),(11,21001,'Educ. Sec. CTA','VIII','APAZA PINTO, Hernán Rolando','2020-05-02','2020-05-08 23:58:30',1),(12,21001,'Educ. Sec. CTA','VIII','APAZA PINTO, Hernán Rolando','2020-05-02','2020-05-08 23:59:04',1),(13,21002,'Computación e Informático','VI','APAZA PINTO, Hernán Rolando','2020-05-05','2020-05-09 00:00:04',1),(14,21003,'Educ. Sec. Ciencias Sociales','V','FLORES QUISPE judith Gabriela','2020-07-10','2020-07-11 00:10:26',26),(16,21003,'Educ. Sec. Matemática','VIII','MANSILLA PARI Juan José','2020-07-10','2020-07-11 00:12:02',21),(17,21002,'Educ. Sec. CTA','IX','CARPIO MIRANDA Nilda Marcela','2020-07-10','2020-07-11 00:13:30',4);
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `idnotas` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `idnivel` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `idsemestre` int(11) NOT NULL,
  `fecCreate` datetime DEFAULT NULL,
  `fecUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `n1` float DEFAULT '0',
  `n2` float DEFAULT '0',
  `n3` float DEFAULT '0',
  `n4` float DEFAULT '0',
  `n5` float DEFAULT '0',
  `n6` float DEFAULT '0',
  `n7` float DEFAULT '0',
  `n8` float DEFAULT '0',
  `n9` float DEFAULT '0',
  `n10` float DEFAULT '0',
  `n11` float DEFAULT '0',
  `n12` float DEFAULT '0',
  `prom` float DEFAULT '0',
  PRIMARY KEY (`idnotas`),
  KEY `fk_notas_alumnos_idx` (`idalumno`),
  KEY `fk_notas_periodo_idx` (`idperiodo`),
  KEY `fk_notas_carrera_idx` (`idcarrera`),
  KEY `fk_notas_docente_idx` (`iddocente`),
  KEY `fk_notas_semestre_idx` (`idsemestre`),
  CONSTRAINT `fk_notas_alumnos` FOREIGN KEY (`idalumno`) REFERENCES `estudiante` (`idstudent`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_notas_carrera` FOREIGN KEY (`idcarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_notas_docente` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`iddoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_notas_periodo` FOREIGN KEY (`idperiodo`) REFERENCES `periodo` (`idperiodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_notas_semestre` FOREIGN KEY (`idsemestre`) REFERENCES `semestre` (`idsemestre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodo`
--

DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `idperiodo` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` char(4) NOT NULL,
  PRIMARY KEY (`idperiodo`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo`
--

LOCK TABLES `periodo` WRITE;
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
INSERT INTO `periodo` VALUES (1,'1920'),(2,'1921'),(3,'1922'),(4,'1923'),(5,'1924'),(6,'1925'),(7,'1926'),(8,'1927'),(9,'1928'),(10,'1929'),(11,'1930'),(12,'1931'),(13,'1932'),(14,'1933'),(15,'1934'),(16,'1935'),(17,'1936'),(18,'1937'),(19,'1938'),(20,'1939'),(21,'1940'),(22,'1941'),(23,'1942'),(24,'1943'),(25,'1944'),(26,'1945'),(27,'1946'),(28,'1947'),(29,'1948'),(30,'1949'),(31,'1950'),(32,'1951'),(33,'1952'),(34,'1953'),(35,'1954'),(36,'1955'),(37,'1956'),(38,'1957'),(39,'1958'),(40,'1959'),(41,'1960'),(42,'1961'),(43,'1962'),(44,'1963'),(45,'1964'),(46,'1965'),(47,'1966'),(48,'1967'),(49,'1968'),(50,'1969'),(51,'1970'),(52,'1971'),(53,'1972'),(54,'1973'),(55,'1974'),(56,'1975'),(57,'1976'),(58,'1977'),(59,'1978'),(60,'1979'),(61,'1980'),(62,'1981'),(63,'1982'),(64,'1983'),(65,'1984'),(66,'1985'),(67,'1986'),(68,'1987'),(69,'1988'),(70,'1989'),(71,'1990'),(72,'1991'),(73,'1992'),(74,'1993'),(75,'1994'),(76,'1995'),(77,'1996'),(78,'1997'),(79,'1998'),(80,'1999'),(81,'2000'),(82,'2001'),(83,'2002'),(84,'2003'),(85,'2004'),(86,'2005'),(87,'2006'),(88,'2007'),(89,'2008'),(90,'2009'),(91,'2010'),(92,'2011'),(93,'2012'),(94,'2013'),(95,'2014'),(96,'2015'),(97,'2016'),(98,'2017'),(99,'2018'),(100,'2019'),(101,'2020'),(102,'2021'),(103,'2022'),(104,'2023'),(105,'2024'),(106,'2025'),(107,'2026'),(108,'2027'),(109,'2028'),(110,'2029'),(111,'2030'),(112,'2031'),(113,'2032'),(114,'2033'),(115,'2034'),(116,'2035'),(117,'2036'),(118,'2037'),(119,'2038'),(120,'2039'),(121,'2040');
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `per_nombres` varchar(45) NOT NULL,
  `per_apellidos` varchar(60) NOT NULL,
  `per_email` varchar(60) NOT NULL,
  PRIMARY KEY (`idpersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'Jhoana','Paredes','jhoana@gmail.com');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semestre` (
  `idsemestre` int(11) NOT NULL AUTO_INCREMENT,
  `semestre` varchar(10) NOT NULL,
  PRIMARY KEY (`idsemestre`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semestre`
--

LOCK TABLES `semestre` WRITE;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
INSERT INTO `semestre` VALUES (1,'I'),(2,'II'),(3,'III'),(4,'IV'),(5,'V'),(6,'VI'),(7,'VII'),(8,'VIII'),(9,'IX'),(10,'X');
/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-11  9:05:28
