CREATE DATABASE  IF NOT EXISTS `bookstore` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bookstore`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: bookstore
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `orderr`
--

DROP TABLE IF EXISTS `orderr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderr` (
  `idorder` int NOT NULL AUTO_INCREMENT,
  `customerid` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `totalamount` int NOT NULL,
  `totalqty` int NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderr`
--

LOCK TABLES `orderr` WRITE;
/*!40000 ALTER TABLE `orderr` DISABLE KEYS */;
INSERT INTO `orderr` VALUES (1,1,'North Nazimabad block L',450,1,'2023-05-16 09:51:41'),(2,1,'North Nazimabad Block L',4450,2,'2023-05-16 11:51:41'),(3,1,'North Nazimabad block L',950,2,'2023-05-16 11:30:11'),(4,1,'North Nazimabad block L',1450,3,'2023-05-16 12:08:04'),(5,1,'North Nazimabad block L',1000,2,'2023-05-16 12:45:38'),(6,2,'abc xyz block 7',1000,1,'2023-05-16 12:52:18'),(7,2,'abc xyz block 7',4450,2,'2023-05-16 13:21:14'),(8,2,'abc xyz block 7',4500,2,'2023-05-16 17:05:31'),(9,2,'abc xyz block 7',4000,1,'2023-05-17 09:58:09'),(10,2,'abc xyz block 7',4450,2,'2023-05-17 10:15:23');
/*!40000 ALTER TABLE `orderr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-28  2:23:28
