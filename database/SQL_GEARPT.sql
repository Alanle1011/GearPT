-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: gearpt
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `adminID` int NOT NULL AUTO_INCREMENT,
  `adminName` varchar(100) NOT NULL,
  `adminPhone` varchar(10) DEFAULT NULL,
  `adminAddress` varchar(100) DEFAULT NULL,
  `adminUsername` varchar(50) NOT NULL,
  `adminPassword` varchar(500) NOT NULL,
  `adminImage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Alan','1900-1011','20 Cong Hoa Street, HCMC.','Alan','1011','luxana.jpg'),(2,'Mark','1900-1412','20 Cong Hoa Street, HCMC.','Mark','1412','kata.jfif'),(3,'Tester','N/A','N/A','1','1','1.png');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `clientID` int NOT NULL AUTO_INCREMENT,
  `clientName` varchar(100) NOT NULL,
  `clientPhone` varchar(10) DEFAULT NULL,
  `clientAddress` varchar(100) DEFAULT NULL,
  `clientUsername` varchar(50) NOT NULL,
  `clientPassword` varchar(500) NOT NULL,
  `clientImage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clientID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Taylor Swift','19001818','79 North Street DURHAM DH10 8EK','TS','0000','client_swift.jpg'),(2,'Tom Hiddleston','17005654','79 North Street DURHAM DH10 8EK','Loki','0000','client_hiddleston.jpg'),(3,'Anne Hathaway','18001515','99 Victoria Road NORTH LONDON N83 3VY','Hathaway','0000','client_hathaway.jpg'),(4,'Rosamund Pike','15006367','34 West Street NOTTINGHAM NG33 5PT','Amy Elliott','0000','client_pike.jpg'),(5,'Tom Holland','18009693','44 London Road OXFORD OX51 2WT','Friendly neighborhood Spider-Man','0000','client_holland.jpg');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `feedbackID` int NOT NULL AUTO_INCREMENT,
  `clientID` int NOT NULL,
  `productID` int NOT NULL,
  `ranking` int DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`feedbackID`),
  KEY `clientID` (`clientID`),
  KEY `productID` (`productID`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`),
  CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,1,1,1,'Great product.'),(2,2,2,2,'Terrible product.'),(3,3,3,3,'Bad packing.'),(4,4,4,4,'Friendly shipper.'),(5,5,5,5,'False product.');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `orderDetailID` int NOT NULL AUTO_INCREMENT,
  `orderID` int NOT NULL,
  `productID` int NOT NULL,
  PRIMARY KEY (`orderDetailID`),
  KEY `orderID` (`orderID`),
  KEY `productID` (`productID`),
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `clientID` int NOT NULL,
  `orderStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`orderID`),
  KEY `clientID` (`clientID`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'Packing'),(2,2,'Handling'),(3,3,'Delivering'),(4,4,'Delivered'),(5,5,'Received');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producers`
--

DROP TABLE IF EXISTS `producers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producers` (
  `producerID` int NOT NULL AUTO_INCREMENT,
  `producerName` varchar(30) NOT NULL,
  `producerImage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`producerID`),
  UNIQUE KEY `producerName` (`producerName`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producers`
--

LOCK TABLES `producers` WRITE;
/*!40000 ALTER TABLE `producers` DISABLE KEYS */;
INSERT INTO `producers` VALUES (1,'Acer','ac.jpg'),(2,'AMD','amd.png'),(3,'Aorus','ar.png'),(4,'Apple','ap.png'),(5,'Asus','as.jpg'),(6,'Corsair','cs.png'),(7,'DareU','du.jpg'),(8,'Dell','d.png'),(9,'Gigabyte','ggb.png'),(10,'HP','hp.png'),(11,'Huawei','hw.jpg'),(12,'HyperX','hpx.png'),(13,'Intel','it.png'),(14,'Kingston','ks.jpg'),(15,'Lenovo','lnv.png'),(16,'LG','lg.png'),(17,'Logitech','lgt.png'),(18,'MSI','msi.jpg'),(19,'Razer','rz.jpg'),(20,'Samsung','ss.png'),(21,'Steelseries','ssr.png'),(22,'Xiaomi','xam.jpg'),(23,'Zowie','zw.png');
/*!40000 ALTER TABLE `producers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_types`
--

DROP TABLE IF EXISTS `product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_types` (
  `productTypeID` int NOT NULL AUTO_INCREMENT,
  `productTypeName` varchar(100) NOT NULL,
  `productTypeDescription` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`productTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_types`
--

LOCK TABLES `product_types` WRITE;
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT INTO `product_types` VALUES (1,'Office Laptop',NULL),(2,'Gaming Laptop',NULL),(3,'Office Desktop',NULL),(4,'Gaming Desktop',NULL),(5,'Mouse',NULL),(6,'Mouse Pad',NULL),(7,'Keyboard',NULL),(8,'Headphone',NULL),(9,'Speaker',NULL),(10,'Monitor',NULL),(11,'Gaming Chair/Table',NULL),(12,'Console',NULL),(13,'Router',NULL),(14,'Accessorise',NULL);
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `productPrice` varchar(10) NOT NULL,
  `productDescription` varchar(3000) DEFAULT NULL,
  `productImage` varchar(30) NOT NULL,
  `producerID` int NOT NULL,
  `productTypeID` int NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `producerID` (`producerID`),
  KEY `productTypeID` (`productTypeID`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`producerID`) REFERENCES `producers` (`producerID`),
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`productTypeID`) REFERENCES `product_types` (`productTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Product 01','$100',NULL,'product01.jpg',1,5),(2,'Product 02','$100',NULL,'product02.jpg',1,5),(3,'Product 03','$100',NULL,'product03.jpg',1,5),(4,'Product 04','$100',NULL,'product04.jpg',1,5),(5,'Product 05','$100',NULL,'product05.jpg',1,5),(6,'Product 06','$100',NULL,'product06.jpg',1,5),(7,'Product 07','$100',NULL,'product07.jpg',1,5),(8,'Product 08','$100',NULL,'product08.jpg',1,5),(9,'Product 09','$100',NULL,'product09.jpg',1,5),(10,'Product 10','$100',NULL,'product10.jpg',1,5),(11,'Product 11','$200',NULL,'product11.jpg',1,7),(12,'Product 12','$200',NULL,'product12.jpg',1,7),(13,'Product 13','$200',NULL,'product13.jpg',1,7),(14,'Product 14','$200',NULL,'product14.jpg',1,7),(15,'Product 15','$200',NULL,'product15.jpg',1,7),(16,'Product 16','$150',NULL,'product16.jpg',1,8),(17,'Product 17','$150',NULL,'product17.jpg',1,8),(18,'Product 18','$150',NULL,'product18.jpg',1,8),(19,'Product 19','$1000',NULL,'product19.jpg',1,2),(20,'Product 20','$5000',NULL,'product20.jpg',1,10),(21,'a','20000','N/A','fruits_apple.jpg',13,6),(22,'k1','1','N/A','cart-removebg-preview.png',18,7),(23,'k2','2',NULL,'bgHotel.jpg',19,7),(24,'k3','1111','N/A','2011Creeper.png',16,7),(25,'k4','2222',NULL,'cart.png',14,7);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `staffID` int NOT NULL AUTO_INCREMENT,
  `staffName` varchar(100) NOT NULL,
  `staffPhone` varchar(10) DEFAULT NULL,
  `staffAddress` varchar(100) DEFAULT NULL,
  `staffUsername` varchar(50) NOT NULL,
  `staffPassword` varchar(500) NOT NULL,
  `staffImage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'Staff 01','1','1','1','1','1.png'),(2,'Staff 02','2','2','2','2','2.png'),(3,'Staff 03','3','3','3','3','3.png');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-29 14:57:09
