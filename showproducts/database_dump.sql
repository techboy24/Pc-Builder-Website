-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: pcbuilder
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `username` varchar(20) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `pc_case` varchar(20) NOT NULL,
  `processor` varchar(20) NOT NULL,
  `motherboard` varchar(20) NOT NULL,
  `graphics_card` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `power_supply` varchar(20) NOT NULL,
  `storage` varchar(20) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `username` (`username`),
  KEY `pc_case` (`pc_case`),
  KEY `processor` (`processor`),
  KEY `motherboard` (`motherboard`),
  KEY `graphics_card` (`graphics_card`),
  KEY `ram` (`ram`),
  KEY `power_supply` (`power_supply`),
  KEY `storage` (`storage`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  CONSTRAINT `cart_ibfk_10` FOREIGN KEY (`storage`) REFERENCES `storage` (`number`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pc_case`) REFERENCES `pc_case` (`id`),
  CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`processor`) REFERENCES `processor` (`number`),
  CONSTRAINT `cart_ibfk_6` FOREIGN KEY (`motherboard`) REFERENCES `motherboard` (`number`),
  CONSTRAINT `cart_ibfk_7` FOREIGN KEY (`graphics_card`) REFERENCES `graphics_card` (`number`),
  CONSTRAINT `cart_ibfk_8` FOREIGN KEY (`ram`) REFERENCES `ram` (`number`),
  CONSTRAINT `cart_ibfk_9` FOREIGN KEY (`power_supply`) REFERENCES `power_supply` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graphics_card`
--

DROP TABLE IF EXISTS `graphics_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graphics_card` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graphics_card`
--

LOCK TABLES `graphics_card` WRITE;
/*!40000 ALTER TABLE `graphics_card` DISABLE KEYS */;
INSERT INTO `graphics_card` VALUES ('Zotac','GT 710','DDR3',2,3125),('MSI','GTX 1050 Ti','DDR3',4,15599),('Zotac','GTX 1050 Ti ZT-P105','DDR5',4,14700),('Gigabyte ','Gtx 1080 Ti','DDR5',11,72164),('Gigabyte','GV-N710D3-2GL','DDR3',2,3189),('Asus','RX 580','GDDR5',8,28999),('ASUS','STRIX-GTX1080TI-O','GDDR5',11,88199);
/*!40000 ALTER TABLE `graphics_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motherboard`
--

DROP TABLE IF EXISTS `motherboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motherboard` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `socket` varchar(20) NOT NULL,
  `generation` varchar(20) NOT NULL,
  `graphics_type` varchar(20) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motherboard`
--

LOCK TABLES `motherboard` WRITE;
/*!40000 ALTER TABLE `motherboard` DISABLE KEYS */;
INSERT INTO `motherboard` VALUES ('GIGABYTE','GA-B150M-D3H ','1151','6','DDR5',8199),('Gigabyte','GA-H110M-S2 ','1151','6','DDR5',4529),('Gigabyte','Ga-H61M-S','1155','3','DDR4',4050),('MSI','H110 ','1151','7','DDR5',5199),('Asus','H61M-K','1155','3','DDR4',4449),('MSI','X299 ','2066','8','DDR5',21586),('GIGABYTE ','X299 UD4','2066','8','DDR5',25100),('MSI','X99','2011','6','DDR5',38099);
/*!40000 ALTER TABLE `motherboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pc_case`
--

DROP TABLE IF EXISTS `pc_case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pc_case` (
  `company` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pc_case`
--

LOCK TABLES `pc_case` WRITE;
/*!40000 ALTER TABLE `pc_case` DISABLE KEYS */;
INSERT INTO `pc_case` VALUES ('CORSAIR ','570X',14350),('COUGAR','CONQUER',18028),('PHANTEKS','EVOLV',11128),('THERMALTAKE ','G21',8999),('Cooler Master','H500P',11443),('COUGAR','PANZER-S',17802);
/*!40000 ALTER TABLE `pc_case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `power_supply`
--

DROP TABLE IF EXISTS `power_supply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `power_supply` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `watts` int(11) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `power_supply`
--

LOCK TABLES `power_supply` WRITE;
/*!40000 ALTER TABLE `power_supply` DISABLE KEYS */;
/*!40000 ALTER TABLE `power_supply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processor`
--

DROP TABLE IF EXISTS `processor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processor` (
  `company` varchar(10) NOT NULL,
  `model` varchar(15) NOT NULL,
  `number` varchar(20) NOT NULL,
  `generation` varchar(10) NOT NULL,
  `frequency` float NOT NULL,
  `cores` int(11) DEFAULT NULL,
  `socket_pin` varchar(10) NOT NULL,
  `ram_frequency` int(11) NOT NULL,
  `ram_type` varchar(10) NOT NULL,
  `power` int(11) NOT NULL,
  `cost` float NOT NULL,
  `overclockable` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processor`
--

LOCK TABLES `processor` WRITE;
/*!40000 ALTER TABLE `processor` DISABLE KEYS */;
INSERT INTO `processor` VALUES ('intel','i3','3220','3',3.3,2,'1155',1333,'DDR3',55,5890,'No'),('intel','i3','6100','6',3.7,2,'1151',2400,'DDR4',65,8247,'No'),('intel','i5','6400','6',2.7,4,'1151',2133,'DDR4',65,14785,'No'),('intel','i5','6600k','6',3.5,4,'1151',2133,'DDR4',91,18989,'Yes'),('intel','i7','6950x','6',3,10,'2011',2400,'DDR4',140,139199,'Yes'),('intel','i7','7800x','8',3.5,6,'2066',2400,'DDR4',140,32990,'Yes'),('intel','i3','8100','8',3.6,4,'1151',2400,'ddr4',63,9490,'No'),('intel','i5','8400','8',2.8,4,'1151',2400,'DDR4',65,14900,'No'),('intel','i7','8700k','8',3.7,6,'1151',2666,'DDR4',95,30282,'Yes');
/*!40000 ALTER TABLE `processor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ram` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `frequency` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ram`
--

LOCK TABLES `ram` WRITE;
/*!40000 ALTER TABLE `ram` DISABLE KEYS */;
INSERT INTO `ram` VALUES ('Corsair','CMK8GX4M1A2400C16R',2400,'DDR4',8,6785),('Corsair ','CMU16GX4M2A2666C16R',2666,'DDR4',8,17302),('Crucial','CT4G4DFS8213',2133,'DDR4',4,3425),('HyperX','HX421C14FB',2133,'DDR4',4,4975),('HyperX','HX424C15FB2',2400,'DDR4',2,2350),('Kingston','HX426C16FW2',2666,'DDR4',8,7999),('Hynix','hymd564m6646cp6',1333,'DDR3',4,1899),('Kingston','KVR1333D3N9',1333,'DDR3',2,925),('Kingston','KVR1333D3N9/2G',1333,'DDR3',2,1703);
/*!40000 ALTER TABLE `ram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storage`
--

DROP TABLE IF EXISTS `storage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storage` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `port` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storage`
--

LOCK TABLES `storage` WRITE;
/*!40000 ALTER TABLE `storage` DISABLE KEYS */;
/*!40000 ALTER TABLE `storage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `cart` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('rdhere','Rohan','drtert','17rohan@gmail.com',123456,1,NULL),('rdhere123','rohandhere1','465798','1@gmail.com',123456,1,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-01 20:47:12
