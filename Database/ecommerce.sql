-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2017 at 03:10 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1001, 'category1'),
(1002, 'category2'),
(1003, 'category3'),
(1004, 'category4');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date_joined` varchar(45) DEFAULT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE `Item` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `units` varchar(15) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Item`
--

INSERT INTO `Item` (`id`, `name`, `description`, `price`, `units`, `rank`, `Category_id`) VALUES
(2001, 'item1', 'item1 description', 10, 'no', 1, 1001),
(2002, 'item2', 'item2 description', 20, 'kg', 2, 1001),
(2003, 'item3', 'item3 decription', 30, 'g', 3, 1001),
(2004, 'item4', 'item4 decription', 40, 'units', 4, 1001),
(2005, 'item5', 'item5 description', 50, 'kg', 5, 1002),
(2006, 'item6', 'item6 description', 60, 'g', 9, 1002),
(2007, 'item7', 'item7 description', 70, 'units', 8, 1002),
(2008, 'item8', 'item8 description', 80, 'g', 7, 1003),
(2009, 'item9', 'item9 description', 90, 'kg', 6, 1004);

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `id` int(11) NOT NULL,
  `state` enum('pending','confirmed','paied','delivered') DEFAULT NULL,
  `Customer_id` int(11) NOT NULL,
  `Shipper_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `OrderQutedPrice`
--

CREATE TABLE `OrderQutedPrice` (
  `Item_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PersonalInfo`
--

CREATE TABLE `PersonalInfo` (
  `id` int(11) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `Customer_id` int(11) NOT NULL,
  `Supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Shipper`
--

CREATE TABLE `Shipper` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`,`User_id`),
  ADD KEY `fk_Customer_User1_idx` (`User_id`);

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Item_Category_idx` (`Category_id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Order_Customer1_idx` (`Customer_id`),
  ADD KEY `fk_Order_Shipper1_idx` (`Shipper_id`);

--
-- Indexes for table `OrderQutedPrice`
--
ALTER TABLE `OrderQutedPrice`
  ADD PRIMARY KEY (`Item_id`,`Order_id`),
  ADD KEY `fk_Item_has_Order_Order1_idx` (`Order_id`),
  ADD KEY `fk_Item_has_Order_Item1_idx` (`Item_id`);

--
-- Indexes for table `PersonalInfo`
--
ALTER TABLE `PersonalInfo`
  ADD PRIMARY KEY (`id`,`Customer_id`,`Supplier_id`),
  ADD KEY `fk_PersonalInfo_Customer1_idx` (`Customer_id`),
  ADD KEY `fk_PersonalInfo_Supplier1_idx` (`Supplier_id`);

--
-- Indexes for table `Shipper`
--
ALTER TABLE `Shipper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`id`,`User_id`),
  ADD KEY `fk_Supplier_User1_idx` (`User_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `fk_Customer_User1` FOREIGN KEY (`User_id`) REFERENCES `User` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Item`
--
ALTER TABLE `Item`
  ADD CONSTRAINT `fk_Item_Category` FOREIGN KEY (`Category_id`) REFERENCES `Category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `fk_Order_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Order_Shipper1` FOREIGN KEY (`Shipper_id`) REFERENCES `Shipper` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `OrderQutedPrice`
--
ALTER TABLE `OrderQutedPrice`
  ADD CONSTRAINT `fk_Item_has_Order_Item1` FOREIGN KEY (`Item_id`) REFERENCES `Item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Item_has_Order_Order1` FOREIGN KEY (`Order_id`) REFERENCES `Order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `PersonalInfo`
--
ALTER TABLE `PersonalInfo`
  ADD CONSTRAINT `fk_PersonalInfo_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PersonalInfo_Supplier1` FOREIGN KEY (`Supplier_id`) REFERENCES `Supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD CONSTRAINT `fk_Supplier_User1` FOREIGN KEY (`User_id`) REFERENCES `User` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
