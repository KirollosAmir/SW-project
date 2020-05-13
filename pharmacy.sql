-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2020 at 06:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting`
--

DROP TABLE IF EXISTS `accounting`;
CREATE TABLE IF NOT EXISTS `accounting` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Taxes` int(100) NOT NULL,
  `delivery` int(100) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting`
--

INSERT INTO `accounting` (`ID`, `Taxes`, `delivery`, `UserTypeID`) VALUES
(3, 14, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `allpharmacy`
--

DROP TABLE IF EXISTS `allpharmacy`;
CREATE TABLE IF NOT EXISTS `allpharmacy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Location` varchar(300) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpharmacy`
--

INSERT INTO `allpharmacy` (`ID`, `Name`, `Location`, `UserTypeID`) VALUES
(2, 'pharmacy2', 'nasrcity45', 1),
(3, 'pharmacy1', 'maady', 1),
(4, 'pharmacy3', 'obour', 6),
(5, 'pharmacy3', 'obour', 6);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(300) NOT NULL,
  `Model` varchar(300) NOT NULL,
  `DateOFEntery` date NOT NULL,
  `Color` varchar(300) NOT NULL,
  `License` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`ID`, `Type`, `Model`, `DateOFEntery`, `Color`, `License`) VALUES
(1, 'Motocycle', '1902', '2020-04-03', 'red', 1454564),
(5, 'motocucle', '2000', '2020-04-03', 'blue', 1202),
(6, 'motocucle', '2000', '2020-04-03', 'blue', 1201);

-- --------------------------------------------------------

--
-- Table structure for table `cardriver`
--

DROP TABLE IF EXISTS `cardriver`;
CREATE TABLE IF NOT EXISTS `cardriver` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserTypeID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DriverID` (`UserTypeID`),
  KEY `CarID` (`CarID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardriver`
--

INSERT INTO `cardriver` (`ID`, `UserTypeID`, `CarID`) VALUES
(1, 2, 1),
(2, 5, 6),
(3, 1, 1),
(4, 2, 1),
(7, 2, 1),
(8, 2, 5),
(9, 2, 5),
(10, 2, 5),
(11, 2, 5),
(12, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserTypeID` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Subject`, `comment`, `UserTypeID`) VALUES
(1, 'waleed', 'Medicines', 'Order problem', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

DROP TABLE IF EXISTS `customerorder`;
CREATE TABLE IF NOT EXISTS `customerorder` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` double NOT NULL,
  `ProductDescription` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`ID`, `ProductName`, `ProductPrice`, `ProductDescription`, `Quantity`, `image`) VALUES
(1, 'panadol', 130, 'Panadol is a medication used to treat pain and fever. ', 500, 'images\\Panadol.png'),
(2, 'Augmentin ', 100, 'It is an antibiotic useful for the treatment of a number of bacterial infections. ', 600, 'images\\augmantine.png'),
(3, 'Excedrin', 200, ' Extra Strength combines three active ingredients to provide a strong over-the-counter medicine for headaches and other kinds of pain.', 400, 'images\\EXCEDRIN-20___L.jpg'),
(4, 'Panadol Extra', 120, 'Panadol Extra is extra effective against pain, it does not irritate the stomach and is gentle on you. ', 1000, 'images\\44.png'),
(5, 'Bronchicum', 70, ' It acts centrally to suppress cough.\r\n\r\n', 300, 'images\\br.jfif'),
(6, 'Hand Sanitizer', 50, 'It is a liquid, gel, or foam generally used to decrease infectious agents on the hands.', 1000, 'images\\4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Item` varchar(300) NOT NULL,
  `number` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ID`, `Name`, `Description`, `Type`, `Item`, `number`, `cost`) VALUES
(1, 'panadol1', 'headack', 'medicine', 'jh', 10, 50),
(2, 'Augmantine', 'antibiotic', 'antibiotic', 'medicine', 100, 120),
(5, 'augamntin', 'bhh', 'vhvh', 'vhvh', 125, 124);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Discription` varchar(300) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  `MedcineSeen` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `medicine_ibfk_1` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `Name`, `Discription`, `Type`, `Cost`, `Number`, `UserTypeID`, `MedcineSeen`) VALUES
(2, 'panadol', 'prevent headeah', 'headach', 100, 50, 1, 1),
(3, 'panadol', 'prevent headach', 'headach', 120, 50, 1, 1),
(4, 'panadol', 'prevent headach', 'headach', 120, 50, 1, 1),
(5, 'panadol', 'prevent headach', 'headach', 120, 50, 1, 1),
(6, 'panadol', 'prevent headach', 'headach', 120, 50, 1, 1),
(7, 'panadol', 'prevent hedach', 'headach', 120, 50, 1, 1),
(8, 'augmentne', 'bhbh', 'njbj', 554, 112, 1, 1),
(9, 'dhd', 'dmkmdmd ', 'lmd', 1, 12, 1, 1),
(10, 'panadol', 'prevent headach', 'headach', 130, 100, 1, 1),
(11, 'panadol', 'prevent headach', 'headach', 110, 112, 1, 1),
(12, 'panadol', 'prevent hedach', 'headach', 110, 50, 1, 1),
(14, 'augamntin', 'prevent hedach', 'vhvh', 110, 50, 1, 1),
(15, 'augmentne', 'prevent headach', 'headach', 120, 112, 5, 1),
(16, 'augmentne', 'prevent hedach', 'headach', 120, 50, 1, 1),
(17, 'panadol', 'prevent headach', 'headach', 110, 500, 1, 1),
(18, 'augmentne', 'prevent headach', 'headach', 110, 50, 5, 0),
(19, 'augmentne', 'prevent headach', 'headach', 110, 50, 5, 0),
(20, 'augamntin', 'prevent headach', 'headach', 545, 100, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `Name`, `UserTypeID`) VALUES
(2, 'visaa', 6),
(8, 'cash', 6);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PhysicalAddress` int(11) NOT NULL,
  `FriendAddress` int(11) NOT NULL,
  `Html` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ReportName` varchar(300) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `ReportName`, `UserTypeID`) VALUES
(2, 'waleed', 1),
(3, 'waleed', 2);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `NumberOFproduct` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserTypeID` (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`ID`, `Name`, `NumberOFproduct`, `price`, `UserTypeID`) VALUES
(3, 'store3', 1500, 100000, 1),
(4, 'store1', 1500, 100, 1),
(5, 'store3', 1500, 80, 2);

-- --------------------------------------------------------

--
-- Table structure for table `storeinventory`
--

DROP TABLE IF EXISTS `storeinventory`;
CREATE TABLE IF NOT EXISTS `storeinventory` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `StoreID` int(11) NOT NULL,
  `InventoryID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `InventoryID` (`InventoryID`),
  KEY `StoreID` (`StoreID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storeinventory`
--

INSERT INTO `storeinventory` (`ID`, `StoreID`, `InventoryID`) VALUES
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `storemedicine`
--

DROP TABLE IF EXISTS `storemedicine`;
CREATE TABLE IF NOT EXISTS `storemedicine` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MedicineID` int(11) NOT NULL,
  `StoreID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `MedicineID` (`MedicineID`),
  KEY `StoreID` (`StoreID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storemedicine`
--

INSERT INTO `storemedicine` (`ID`, `MedicineID`, `StoreID`) VALUES
(2, 2, 3),
(3, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(300) NOT NULL,
  `LastName` varchar(300) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` int(11) NOT NULL,
  `UsetTypeID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UsetTypeID` (`UsetTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `LastName`, `DateOfBirth`, `Gender`, `Email`, `Password`, `UsetTypeID`) VALUES
(2, 'waleed', 'wagdyyy', '2020-04-01', 'male', 'waleed@gmail.con', 1234, 2),
(4, 'kiro', 'emad', '2020-04-01', 'male', 'kiro@gmail.com', 123, 1),
(5, 'waleed', 'wagdy', '2020-05-11', 'male', 'waleed123@gmail.com', 12456, 6),
(6, 'kiro', 'amir', '2020-05-18', 'male', 'kiro@hotmail.com', 123456, 5),
(7, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(8, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(9, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(10, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(11, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(12, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(13, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(14, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(15, 'waleed', 'wagdy', '2020-05-13', 'male', 'waleed123@gmail.com', 1254, 1),
(16, 'kirols', 'amir', '2020-05-06', 'male', 'kiro@gmail.com', 123, 1),
(17, 'waleeed', 'wagdyyyy', '2020-05-05', 'male', 'waleed123@gmail.com', 1254, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `Type`) VALUES
(1, 'PHARMACIST'),
(2, 'Driver1'),
(5, 'customer'),
(6, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `usertypelink`
--

DROP TABLE IF EXISTS `usertypelink`;
CREATE TABLE IF NOT EXISTS `usertypelink` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `LinkID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `LinkID` (`LinkID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounting`
--
ALTER TABLE `accounting`
  ADD CONSTRAINT `accounting_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `allpharmacy`
--
ALTER TABLE `allpharmacy`
  ADD CONSTRAINT `allpharmacy_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `cardriver`
--
ALTER TABLE `cardriver`
  ADD CONSTRAINT `cardriver_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`),
  ADD CONSTRAINT `cardriver_ibfk_2` FOREIGN KEY (`CarID`) REFERENCES `car` (`ID`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `storeinventory`
--
ALTER TABLE `storeinventory`
  ADD CONSTRAINT `storeinventory_ibfk_1` FOREIGN KEY (`InventoryID`) REFERENCES `inventory` (`ID`),
  ADD CONSTRAINT `storeinventory_ibfk_2` FOREIGN KEY (`StoreID`) REFERENCES `store` (`ID`);

--
-- Constraints for table `storemedicine`
--
ALTER TABLE `storemedicine`
  ADD CONSTRAINT `storemedicine_ibfk_1` FOREIGN KEY (`MedicineID`) REFERENCES `medicine` (`ID`),
  ADD CONSTRAINT `storemedicine_ibfk_2` FOREIGN KEY (`StoreID`) REFERENCES `store` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UsetTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `usertypelink`
--
ALTER TABLE `usertypelink`
  ADD CONSTRAINT `usertypelink_ibfk_1` FOREIGN KEY (`LinkID`) REFERENCES `permission` (`ID`),
  ADD CONSTRAINT `usertypelink_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `usertype` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
