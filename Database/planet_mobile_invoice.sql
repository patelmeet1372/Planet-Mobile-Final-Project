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
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice` (
  `InvoiceID` int(11) NOT NULL AUTO_INCREMENT,
  `OrderID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Payment_date` text,
  `Order_total` text,
  PRIMARY KEY (`InvoiceID`)
) ENGINE=MyISAM AUTO_INCREMENT=30059 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (30010,10543,12340,'2022-11-05','$200.20'),(30011,10544,12341,'2022-05-25','$1,023.00'),(30012,10545,12342,'2022-09-22','$250.50'),(30013,10540,12343,'2022-10-21','$1,136'),(30014,10541,12344,'2022-09-20','$1,030.30'),(30015,10542,12345,'2022-11-03','$551.00'),(30047,10568,12350,'2022/11/29','1376'),(30046,10567,12350,'2022/11/29','2883'),(30045,10566,12349,'2022/11/29','1051'),(30044,10565,12349,'2022/11/29','2000'),(30043,10564,12349,'2022/11/29','2985'),(30042,10563,12349,'2022/11/29','322'),(30041,10562,12349,'2022/11/29','1206'),(30040,10560,12349,'2022/11/29','2839'),(30039,10560,12349,'2022/11/29','1762'),(30038,10560,12349,'2022/11/29','1879'),(30037,10560,12349,'2022/11/29','626'),(30036,10560,12349,'2022/11/29','2058'),(30035,10560,12349,'2022/11/29','2127'),(30030,10546,12348,'2022/11/28','$100'),(30031,10543,12340,'2022/11/28','$100'),(30032,10560,12349,'2022/11/28','$100'),(30034,10560,12349,'2022/11/28','$100'),(30048,10569,12350,'2022/11/29','1918'),(30049,10570,12351,'2022/11/29','2274'),(30050,10572,12352,'2022/11/29','180'),(30051,10573,12351,'2022/11/29','2122'),(30052,10574,12351,'2022/11/29','1592'),(30053,10575,12351,'2022/11/29','1870'),(30054,10576,12351,'2022/11/29','894'),(30055,10577,12351,'2022/11/29','443'),(30056,10578,12354,'2022/11/29','1585'),(30057,10579,12354,'2022/11/29','415'),(30058,10580,12354,'2022/11/29','1533');
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
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
