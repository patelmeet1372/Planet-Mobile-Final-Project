-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: planet_mobile
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` text,
  `Lname` text,
  `Email` text,
  `Password` text,
  `Address` text,
  `City` text,
  `Province` text,
  `Postal_code` text,
  `Country` text,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=12355 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (12340,'Jane','Doe','Jane.Doe@gmail.com','DoeJ356yy','55 Bluebird Place','Toronto','Ontario','M1G2C3','Canada'),(12341,'Nancy','Emanuel','Nancy.Emanuel@gmail.com','GSJSB3783','6 Greenpark Road','Toronto','Ontario','M3G4G5','Canada'),(12342,'Meet ','Patel','Meet.Patel5@outlook.com','PATELa2y43','70 Trailviews Terrance','Guelph','Ontario','H5D3G6','Canada'),(12343,'Shahab','Zafar','Shahab.Zafar@outlook.com','Zafar3674_5','38 Kings Road','Oshawa','Ontario','M6B3K6','Canada'),(12344,'Par','Marwah','Paras.Marwah@gmail.com','Par50_655','102 Elles Street','Ajax','Ontario ','H3V3G4','Canada'),(12345,'Nathanael','Selvaraj','Nathanael.Selvaraj@outlook.com','SelVaraj6365','20 Ortan Road','Guelph','Ontario ','J3B1G3','Canada'),(12346,'Parasjeet','Marwah','pariputter@gmail.com','123','42 Glennie Drive','Ajax','ON','L1T 5A4','Canada'),(12347,'bob','bob','bob@gmaik.com','123','dwih','Toronto','hiuh','uhiuh','hiuh'),(12348,'Paras','Marwah','paras@gmail.com','abc123','30 colin dr','Oshawa','Ontario','l1t6a7','Canada'),(12349,'Sehaj','Bhel','sehaj@gmail.com','123','30 colin rd','Oshawa','Ontario','L1t7a5','Canada'),(12350,'Soumil','Thete','soumil@gmail.com','123','30 colin dr','Oshawa','Ontario','L1t8a5','Canada'),(12351,'Joe','Mahone','joe@gmail.com','joe123','12 Oxlade Cres','B-town','Ontario','L16a5','Canada'),(12352,'Ali','Kahlid','ali@gmail.com','123','30 colin dr','Oshawa','Ontario','L1t6a7','Canada'),(12353,'example','exmple','ex@gmail.com','123','12 glen dr','Whitby','Ontario','Le8h4d','Canada'),(12354,'Lenovo','len','len@gmail.com','123','123 street','Miami','Ontario','L1t6a5','Flordia');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-29 22:42:05
