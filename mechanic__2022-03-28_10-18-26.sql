-- MySQL dump 10.14  Distrib 5.5.68-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: mechanic_
-- ------------------------------------------------------
-- Server version	5.5.68-MariaDB

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
-- Table structure for table `Booking`
--

DROP TABLE IF EXISTS `Booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Booking` (
  `BookingID` int(10) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `TimeSlot` time NOT NULL,
  `JobType` varchar(50) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  `JobCommenced` tinyint(1) NOT NULL,
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Booking`
--

LOCK TABLES `Booking` WRITE;
/*!40000 ALTER TABLE `Booking` DISABLE KEYS */;
INSERT INTO `Booking` VALUES (1,5,'2022-03-21','00:00:00','wheels',0,0),(2,2,'2022-03-23','00:00:00','handbrake',0,0),(3,3,'2022-03-28','00:00:00','gearbox',0,0),(4,4,'2022-03-27','00:00:00','brake pads',0,0),(5,3,'2022-03-25','00:00:00','timing belt',0,0),(6,3,'2022-03-01','00:00:00','gearbox',0,0),(7,7,'2022-03-11','00:00:00','indicator',0,0),(8,3,'2022-03-23','00:00:00','windscreen',0,0),(9,2,'2022-03-22','00:00:00','diagnostics',0,0),(10,8,'2022-03-27','00:00:00','timing belt',0,0),(13,20,'2022-03-31','838:59:59','breakdown',0,0);
/*!40000 ALTER TABLE `Booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer` (
  `CustomerID` int(10) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `AddressLine1` varchar(70) NOT NULL,
  `AddressStreet` varchar(70) NOT NULL,
  `AddressTown` varchar(70) NOT NULL,
  `AddressCounty` varchar(70) NOT NULL,
  `AddressCountry` varchar(70) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer`
--

LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
INSERT INTO `Customer` VALUES (1,'Smith','Alan','11','Verschoyle Drive','Portlaoise','Laois','Ireland','875-333-444','smith22@hotmail.com',0),(2,'Eastwood','Tom','23','New Seskin Court','Dublin','Dublin','Ireland','876-345-222','tom22@.gmail.com',0),(3,'Cruse','Sam','34','Westend Gate','Cork','Cork','Ireland','877-111-222','samcr@gmail.com',0),(4,'Monroe','Eliot ','34','Main Street','Kilkenny','Kilkenny','Ireland','875-444-321','eliotmonroe@hotmail.com',0),(5,'Travolta','Samuel','23','Henry street','Dublin','Dublin','Ireland','876-555-321','samueltravolta@hotmail.com',0),(6,'Toledo','Eduardo','33','New Bridge Street','New Bridge','Dublin','Ireland','875-555-666','eduardotoledo@hotmail.com',0),(7,'Burke','Philip','23','Main Street','Killarney','Kerry','Ireland','877-444-213','philipburke@gmail.com',0),(8,'Eto','Samuel','54','New Seskin Court','Killarney','Kerry','Ireland','876-444-234','samueleto@gmail,com',0),(9,'Colonko','Max','8','Verschoyle Drive','Dublin','Dublin','Ireland','876-666-666','maxcolonko@gmail.com',0),(10,'Baron','Jason','5','Crescent Gardens','Portlaoise','Laois','Ireland','875-555-222','jasonbaron@hotmail.com',0);
/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Job`
--

DROP TABLE IF EXISTS `Job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Job` (
  `JobID` int(10) NOT NULL,
  `BookingID` int(10) NOT NULL,
  `CarModel` varchar(50) NOT NULL,
  `RegNumber` varchar(20) NOT NULL,
  `CurrentMileage` int(10) NOT NULL,
  `Instructions` varchar(500) NOT NULL,
  `TotalTime` int(10) DEFAULT NULL,
  `WorkDone` varchar(500) DEFAULT NULL,
  `JobCompleted` tinyint(1) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`JobID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Job`
--

LOCK TABLES `Job` WRITE;
/*!40000 ALTER TABLE `Job` DISABLE KEYS */;
INSERT INTO `Job` VALUES (1,1,'Mercedes-Benz','132-D-12366',120000,'Wheels have to be replace',1,'',0,0),(2,2,'Toyota Corolla','103-D-91922',125000,'The handbrake needs to be fixed',2,'',0,0),(3,3,'Nissan Micra','99-D-91912',300000,'The car won\'t engage or respond when in gear.',3,'',0,0),(5,5,'Honda Civic','182-CE-2536',50346,'The timing belt needs to be replaced.',2,'',0,0),(6,6,'Skoda Octavia','07-MH-25614',220455,'Problems shifting gears.',3,'',0,0),(7,7,'Seat Leon','201-D-1239',60325,'Indicators don\'t work.',1,'',0,0),(8,8,'Ford Focus','99-WX-21158',320555,'The windscreen needs to be replaced.',1,'',0,0),(9,9,'Opel Corsa','141-D-2355',203377,'The general diagnostic of the car before NCT.',1,'',0,0);
/*!40000 ALTER TABLE `Job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `JobPart`
--

DROP TABLE IF EXISTS `JobPart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JobPart` (
  `JobID` int(10) NOT NULL,
  `StockID` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`JobID`,`StockID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `JobPart`
--

LOCK TABLES `JobPart` WRITE;
/*!40000 ALTER TABLE `JobPart` DISABLE KEYS */;
INSERT INTO `JobPart` VALUES (1,10,50,0),(2,8,11,0),(3,9,10,0),(4,1,44,0),(5,2,22,0),(6,3,13,0),(7,4,23,0),(8,5,7,0),(9,7,25,0),(10,3,2,0);
/*!40000 ALTER TABLE `JobPart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Order`
--

DROP TABLE IF EXISTS `Order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Order` (
  `OrderID` int(10) NOT NULL,
  `SupplierID` int(10) NOT NULL,
  `OrderDate` date NOT NULL,
  `Recieved` tinyint(1) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Order`
--

LOCK TABLES `Order` WRITE;
/*!40000 ALTER TABLE `Order` DISABLE KEYS */;
INSERT INTO `Order` VALUES (1,2,'2022-03-09',1,0),(2,5,'2022-02-28',0,0),(3,6,'2022-03-28',0,0),(4,3,'2022-03-18',1,0),(5,5,'2022-03-17',0,0);
/*!40000 ALTER TABLE `Order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OrderItem`
--

DROP TABLE IF EXISTS `OrderItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OrderItem` (
  `OrderID` int(10) NOT NULL,
  `StockID` int(10) NOT NULL,
  `QtyOrdered` int(10) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`OrderID`,`StockID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OrderItem`
--

LOCK TABLES `OrderItem` WRITE;
/*!40000 ALTER TABLE `OrderItem` DISABLE KEYS */;
INSERT INTO `OrderItem` VALUES (1,5,10,0),(1,6,5,0),(2,2,3,0),(2,4,5,0),(3,2,4,0),(4,1,10,0),(5,1,4,0),(5,2,7,0);
/*!40000 ALTER TABLE `OrderItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Payments`
--

DROP TABLE IF EXISTS `Payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Payments` (
  `PaymentsID` int(10) NOT NULL AUTO_INCREMENT,
  `PaymentsAmount` double(10,2) NOT NULL,
  `PaymentsDate` date NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`PaymentsID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Payments`
--

LOCK TABLES `Payments` WRITE;
/*!40000 ALTER TABLE `Payments` DISABLE KEYS */;
INSERT INTO `Payments` VALUES (1,102.60,'2022-03-09',0),(2,55.40,'2022-03-10',0),(3,44.30,'2022-03-13',0),(4,22.60,'2022-03-15',0),(5,22.90,'2022-03-18',0);
/*!40000 ALTER TABLE `Payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Staff`
--

DROP TABLE IF EXISTS `Staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Staff` (
  `StaffID` int(10) NOT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `AddressLine1` varchar(70) DEFAULT NULL,
  `AddressStreet` varchar(70) DEFAULT NULL,
  `AddressTown` varchar(70) DEFAULT NULL,
  `AddressCounty` varchar(70) DEFAULT NULL,
  `AddressCountry` varchar(70) DEFAULT NULL,
  `PPSNumber` varchar(20) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `JobTitle` varchar(50) DEFAULT NULL,
  `LoginName` varchar(50) DEFAULT NULL,
  `LoginPassword` varchar(50) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Staff`
--

LOCK TABLES `Staff` WRITE;
/*!40000 ALTER TABLE `Staff` DISABLE KEYS */;
INSERT INTO `Staff` VALUES (1,'Molley','James','Row 13A','Downton Street','Abbeyleix','Laois','Ireland','7700225PH','056-7281929','jmolley@autorepairireland.ie','Technician','jmolley','pass1',0),(2,'Sarah','Blanchard','House 12B','Riverside Park','Naas','Kildare','Ireland','1241125LH','056-2873762','sblanchard@autorepaireland.ie','Mechanic','sblanchard','pass',0),(3,'Peter','McCormick','Woodview House','Brook Lane','Portlaoise','Laois','Ireland','8268048MA','056-2893798','pmccormick@autorepairireland.ie','Accountant','pmccormick','pass',1),(4,'Jones','Dara','House 77B','Emperor Road','Abbeyleix','Laois','Ireland','9857460WH','056-2892892','djones@autorepairireland.ie','Technician','djones','pass',0),(5,'Bree','Martha','66 Wilton Close','Abbey Street','Portlaoise','Laois','Ireland','8268048MA','067-3893783','mbree@autorepairireland.com','Technician','mbree','pass',0),(7,'Wallace','Adam','Elmscourt House','Luggacurren','Stradbally','Laois','Ireland','4835734QA','067-3878378','awallace@autorepairireland.com','Mechanic','awallace','pass',0),(8,'Brown','Tim','Apartment 12B','Eyres Lane','Portlaoise','Laois','Ireland','9857460SH','059-29892892','tbrown@autorepairireland.ie','Mechanic','tbrown','pass',1),(9,'Burns','Jonathon','House 82B','Ashford Lane','Rathdowney','Laois','Ireland','5484880UA','057-78656456','jburns@autorepaireland.ie','Mechanic','jburns','pass',0),(10,'Patterson','Emma','Apartment 90','Avroe Apartments','Athlone','Westmeath','Ireland','8268048MA','046-7876677','epatterson@autorepairireland.com','Technician','epatterson','pass',0),(11,'Everton','Robert','House 42','Lower Street','Athy','Kildare','Ireland','8789788A','086-9289228','reverton@autorepairireland.ie','Technician','reverton','pass',1);
/*!40000 ALTER TABLE `Staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stock`
--

DROP TABLE IF EXISTS `Stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stock` (
  `StockID` int(10) NOT NULL,
  `StockDescription` varchar(255) NOT NULL,
  `QtyInStock` int(10) NOT NULL,
  `QtyOnOrder` int(10) NOT NULL,
  `ReorderLevel` int(10) NOT NULL,
  `ReorderQuantity` int(11) NOT NULL,
  `CostPrice` double(10,2) NOT NULL,
  `RetailPrice` double(10,2) NOT NULL,
  `Deleted` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`StockID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stock`
--

LOCK TABLES `Stock` WRITE;
/*!40000 ALTER TABLE `Stock` DISABLE KEYS */;
INSERT INTO `Stock` VALUES (1,'A windscreen wiper, windshield wiper, or wiper blade is a device used to remove rain, snow, ice, washer fluid, water, and/or debris from a vehicle\'s front window.',10,10,10,10,30.22,50.00,0,'waper blades'),(2,'The wheel of a car or other vehicle is the circular object that is used to steer it. The wheel is used in expressions to talk about who is driving a vehicle.',9,10,10,10,151.00,181.00,0,'wheels'),(3,'An automotive battery or car battery is a rechargeable battery that is used to start a motor vehicle. Its main purpose is to provide an electric current to the electric-powered starting motor, which in turn starts the chemically-powered internal combustio',8,10,10,10,50.00,110.00,0,'Battery'),(4,'A brake is a mechanical device that inhibits motion by absorbing energy from a moving system. It is used for slowing or stopping a moving vehicle, wheel, axle, or to prevent its motion, most often accomplished by means of friction.',5,10,10,10,50.00,110.00,0,'Brakes'),(5,'The heart and soul of your vehicle is the internal combustion engine. The engine block features parts such as the timing chain, camshaft, crankshaft, spark plugs, cylinder heads, valves and pistons.',3,3,3,2,2000.00,3000.00,0,'Engine');
/*!40000 ALTER TABLE `Stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Supplier`
--

DROP TABLE IF EXISTS `Supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Supplier` (
  `SupplierID` int(10) NOT NULL,
  `SupplierName` varchar(50) DEFAULT NULL,
  `AddressLine1` varchar(70) DEFAULT NULL,
  `AddressStreet` varchar(70) DEFAULT NULL,
  `AddressTown` varchar(70) DEFAULT NULL,
  `AddressCounty` varchar(70) DEFAULT NULL,
  `AddressCountry` varchar(70) DEFAULT NULL,
  `PhoneNumber` varchar(70) DEFAULT NULL,
  `WebsiteAddress` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `Deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`SupplierID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Supplier`
--

LOCK TABLES `Supplier` WRITE;
/*!40000 ALTER TABLE `Supplier` DISABLE KEYS */;
INSERT INTO `Supplier` VALUES (1,'Happy Cars','7 ','The Village','Portlaoise','Laois','Ireland','876-188-555','https://www.happycars.com','happycars@gmail.com',0),(2,'Millennium Parts ','34','Mount View','Dublin','Dublin','Ireland','888-777-222','https://www.millenniumparts .com','millenniumparts@gmail.com',0),(3,'Sam Wilson Parts','36','New Seskin Court','Portlaoise','Laois','Ireland','876-188-328','https://www.samparts.com','samparts84@gmail.com',0),(4,'Car Zone','25','Westend Gate','Dublin','Dublin','Ireland','876-118-225','https://www.carzone.com','carzone@hotmail.com',0),(5,'Enigma ','55','Verschoyle Drive','Cork','Cork','Ireland','888-777-666','https://www.enigma.com','enigma@hotmail.com',0),(6,'Auto Star','12','Maple Road','Cork','Cork','Ireland','877-564-453','https://www.carstar.com','carstar@gmail.com',0),(7,'Cacey','12','Main Street','Killkeny','Killkeny','Ireland','875-456-333','https://www.casey.com','caseyt@gmail.com',0),(8,'Top parts','27','Main Street','Dublin','Dublin','Ireland','876-122-100','https://www.topparts.com','topparts@hotmail.com',0),(9,'Sam Smith','5','Crescent Road','Portlaoise','Laois','Ireland','876-188-987','https://www.adamparts.','samsmith@gmail.com',0),(10,'Samuel Cars','23','New Bridge House','New Bridge','Dublin','Ireland','876-188-333','https://www.samuelcars.com','samuelcars@hotmail.com',0),(11,'Elton John Parts','34','The main street','Dublin','Dublin','Ireland','876-555-280','http://www.johnparts.ie','johnparts@gmail.com',0),(12,'Car World','55','Mountain View','Killarney','Kerry','Ireland','876-333-345','http://carworld.ie','carworld@hotmail.com',0),(13,'','','','','','','','','',0),(14,'','','','','','','','','',0);
/*!40000 ALTER TABLE `Supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SupplierInvoice`
--

DROP TABLE IF EXISTS `SupplierInvoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SupplierInvoice` (
  `InvoiceID` int(10) NOT NULL,
  `SupplierID` int(10) NOT NULL,
  `PaymentID` int(10) NOT NULL,
  `SupplierInvoiceRefrence` varchar(50) NOT NULL,
  `DateOfInvoice` date NOT NULL,
  `AmountOfInvoice` double(10,2) NOT NULL,
  `ReorderQuantity` int(10) NOT NULL,
  `CostPrice` double(10,2) NOT NULL,
  `RetailPrice` double(10,2) NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`InvoiceID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SupplierInvoice`
--

LOCK TABLES `SupplierInvoice` WRITE;
/*!40000 ALTER TABLE `SupplierInvoice` DISABLE KEYS */;
INSERT INTO `SupplierInvoice` VALUES (1,3,1,'REF5672','2022-02-23',102.60,5,12.60,66.70,0),(2,2,2,'REF7688','2022-01-28',55.40,2,10.20,30.10,0),(3,6,3,'REF6738','2022-02-28',44.30,1,44.30,55.80,0),(4,2,4,'REF7638','2022-03-01',22.60,1,22.60,40.00,0),(5,3,5,'REF7398','2022-03-04',22.90,1,22.90,35.90,0);
/*!40000 ALTER TABLE `SupplierInvoice` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-28 10:18:33
