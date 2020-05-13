-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2020 at 03:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
  `Value` varchar(300) NOT NULL,
  `Date` date NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `allpharmacy`
--

DROP TABLE IF EXISTS `allpharmacy`;
CREATE TABLE IF NOT EXISTS `allpharmacy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Location` varchar(300) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cardriver`
--

DROP TABLE IF EXISTS `cardriver`;
CREATE TABLE IF NOT EXISTS `cardriver` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DriverID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DriverID` (`DriverID`),
  KEY `CarID` (`CarID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `LicenseType` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD CONSTRAINT `accounting_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `allpharmacy`
--
ALTER TABLE `allpharmacy`
  ADD CONSTRAINT `allpharmacy_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `cardriver`
--
ALTER TABLE `cardriver`
  ADD CONSTRAINT `cardriver_ibfk_1` FOREIGN KEY (`DriverID`) REFERENCES `driver` (`ID`),
  ADD CONSTRAINT `cardriver_ibfk_2` FOREIGN KEY (`CarID`) REFERENCES `car` (`ID`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usertype` (`ID`);

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
