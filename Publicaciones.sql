-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: postprincipal
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publicaciones` (
  `idPublicaciones` int(11) NOT NULL,
  `Titulo` varchar(200) DEFAULT NULL,
  `Autor` varchar(45) DEFAULT NULL,
  `Fecha` varchar(45) DEFAULT NULL,
  `Parrafo` varchar(1000) DEFAULT NULL,
  `LinkImagen` varchar(1000) DEFAULT NULL,
  `Numero de comentarios` int(5) DEFAULT NULL,
  `LinkTitulo` varchar(1000) DEFAULT NULL,
  `LinkLeerMas` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idPublicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
INSERT INTO `publicaciones` VALUES (1,'Imp of the sun: todo lo que tienes que saber.','Sunwolf Entertainment','01 de Octubre del 2021','Imp of the Sun es un juego de plataformas de acción en 2D no lineal que combina una exploración y un combate trepidantes en un impresionante mundo inspirado en Perú, desde las brillantes cumbres de las montañas andinas hasta las densas selvas amazónicas, y mucho más.','https://i0.wp.com/gadgerss.com/wp-content/uploads/2020/11/Imp-of-the-Sun-imagen-0022305843009238891499.jpeg?fit=900%2C497&ssl=1',35,'html/Peliculreseña1.html','html/Peliculreseña1.html'),(2,'Horizon Forbidden West: La sorpresa de PlayStation','Sony Entertainment','Martes 23 de Mayo del 2021','Domar poderosas bestias mecanizadas. La sensación de descubrir y zambullirse en imponentes paisajes naturales y ruinas anteriores al mismísimo apocalipsis.','https://i0.wp.com/gadgerss.com/wp-content/uploads/2020/11/Imp-of-the-Sun-imagen-0022305843009238891499.jpeg?fit=900%2C497&ssl=1',43,'html/PostMusica1.html','html/PostMusica1.html'),(3,'herahrah','herqhhqh','rheqhqh','erhqhqh','eqrhqh',54,NULL,NULL);
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-01 20:07:24
