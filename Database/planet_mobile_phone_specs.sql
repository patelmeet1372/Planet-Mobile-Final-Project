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
-- Table structure for table `phone_specs`
--

DROP TABLE IF EXISTS `phone_specs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phone_specs` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `Processor` text,
  `RAM` text,
  `ROM` text,
  `Battery` text,
  `OS` text,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=10156 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_specs`
--

LOCK TABLES `phone_specs` WRITE;
/*!40000 ALTER TABLE `phone_specs` DISABLE KEYS */;
INSERT INTO `phone_specs` VALUES (10145,'A15 Bionic processor','4GB','256GB','Lithium-ion battery','iOS 16.1'),(10146,'A14 Bionic processor','4GB','64GB','Lithium-ion battery','iOS 16.1'),(10147,'A15 Bionic processor','6GB','256GB','Lithium-ion battery','iOS 16.1'),(10148,'Snapdragon 8 Gen 1','8GB','256GB','Lithium-ion battery','Andrioid 12'),(10149,'Snapdragon 765G','8GB','256GB','Lithium-ion battery','Andrioid 12'),(10150,'Snapdragon 845','8GB','256GB','Lithium-ion battery','Andrioid 9'),(10151,'Dual Core','1GB','8GB','Lithium-ion battery','Android 10'),(10152,'A15 Bionic Processor','6GB','1TB','Lithium-ion battery','iOS 16'),(10153,'1.3GHz CPU','0.5GB','32GB','Lithium-ion Battery','Android 10(Go)'),(10154,'MediaTek Single Core CPU','0.004GB','0.008GB','Lithium-ion Battery','Nokia Series'),(10155,'Exynos 1280 Octa-core CPU	','6GB','128GB','Lithium-ion Battery','Andrioid 12');
/*!40000 ALTER TABLE `phone_specs` ENABLE KEYS */;
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
