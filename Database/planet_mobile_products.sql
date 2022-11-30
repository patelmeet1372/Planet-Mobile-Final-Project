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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `ProductID` int(9) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(100) NOT NULL,
  `Model` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=10156 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (10145,'Smart phone','iPhone 13','Apple',1420,'iPhone 13 featuring a dual 12mp camera system, and a A15 bionic chip'),(10146,'Smart phone','iPhone 12','Apple',1023,'iPhone 12 featuring a dual 12mp camera system, and a A14 bionic chip'),(10147,'Smart phone','iPhone 13','Apple',1740,'iPhone 13 pro featuring a dual 12mp camera system, and a A15 bionic chip\n'),(10148,'Smart phone','Samsung Galaxy S22','Samsung',1630,'Samsung Galaxy S22 featuring a 12MP ultra wide camera system, and a Snapdragon 8 Gen 1 chipset\n'),(10149,'Smart phone','Google Pixel 5','Google',551,'Google Pixel 5 featuring a 12.2MP camera sensor, and a Snapdragon 765G chip\n'),(10150,'Smart phone','Google Pixel 4','Google',501,'Google Pixel 4 featuring a 12.2MP camera sensor, and a Snapdragon 765G chip\n\n'),(10151,'Flip Phone','Telus ZTE','Telus',60,'Telus ZTE featuring a 4MP camera sensor, and a dual core processor\r\n\r\n'),(10152,'Smartphone','iPhone 14','Apple',1500,'iPhone 14 featuring a dual 12mp camera system, and a A15 bionic chip'),(10153,'Pre-paid','Telus Alcatel 1B','Telus',90,'Enjoy the best smartphone experience with the TELUS Alcatel 1B. Powered by Android 10 (Go Edition)'),(10154,'Pre-paid','Nokia 150 TA 1235 DS','Nokia',65,'Nokia 150 elevates with its easy-to-navigate screen and larger-than-ever ergonomic keys.'),(10155,'Smart phone','Samsung Galaxy A53 5G','Samsung',400,'It features high-performance front and rear cameras and tonnes of onboard storage space');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
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
