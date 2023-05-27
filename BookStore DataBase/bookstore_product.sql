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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `bookid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'The Past Is Rising','Good Novel','bookimages/The Past Is RisingKathryn Bywaters.jpeg','Kathryn Bywaters',100,450),(2,'Sin Eater','Good Novel','bookimages/Sin EaterMegan Campisi.jpeg','Megan Campisi',100,4000),(3,'Harry Potter and the cursed child','Good Novel','bookimages/Harry Potter and the cursed childJ.K.Rowling.jpeg','J.K.Rowling',10,500),(4,'Better Than The Movie','Good Novel','bookimages/Better Than The MovieLynn Painter.jpeg','Lynn Painter',10,500),(5,'Things We Never Got Over','Good Novel','bookimages/Things We Never Got OverLucy Score.png','Lucy Score',20,500),(11,'Fangirl','Good Novel','bookimages/FangirlRainbow Rowell.jpeg','Rainbow Rowell',20,1500),(13,'Book Lovers','Good Novel','bookimages/Book LoversEmily Henry.jpeg','Emily Henry',20,1000),(15,'People We Meet On Vacatioin','Good Novel','bookimages/People We Meet On VacatioinEmily Henry.jpeg','Emily Henry',20,1000),(16,'Looking For Alaska','Good Novel','bookimages/Looking For AlaskaJohn Green.jpeg','John Green',20,2000),(17,'Holding Up The Universe','Good Novel','bookimages/Holding Up The UniverseJinnifer Niven.jpeg','Jinnifer Niven',20,2000),(18,'ThePerks Of Being A WallFlower','Good Novel','bookimages/ThePerks Of Being A WallFlowerStephen Chbosky.jpeg','Stephen Chbosky',20,750),(19,'cover','this is a book','bookimages/coverfareeha.jpeg','fareeha',200,20);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
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
