-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2017 at 04:22 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.24

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
  `name` varchar(45) DEFAULT NULL,
  `parent_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `name`, `parent_category`) VALUES
(1001, 'cat1', NULL),
(1002, 'cat2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date_joined` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL
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
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `id` int(11) NOT NULL,
  `state` enum('pending','confirmed','paied','delivered') DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `shipper_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Order_quoted_price`
--

CREATE TABLE `Order_quoted_price` (
  `Item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
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
  `customer_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
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
-- Table structure for table `Site`
--

CREATE TABLE `Site` (
  `name` varchar(45) NOT NULL,
  `data` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Site`
--

INSERT INTO `Site` (`name`, `data`) VALUES
('registration_email', '{\"message\": \"custom message\", \"siteURL\": \"http://localhost:8002/\", \"subject\": \"Registration Ecommerce\", \"from_name\": \"ecommerce site\", \"from_email\": \"register@ecommerce.com\"}'),
('site', '{\"title\": \"Site Title\", \"twitterURL\": null, \"youtubeURL\": null, \"facebookURL\": \"#\", \"instagramURL\": null, \"searchKeywords\": \"ecommerce site\"}');

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `password_salt` varchar(64) NOT NULL,
  `verification_code` varchar(64) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Category_Category1_idx` (`parent_category`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_Customer_User1_idx` (`user_id`);

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Item_Category_idx` (`category_id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Order_Customer1_idx` (`customer_id`),
  ADD KEY `fk_Order_Shipper1_idx` (`shipper_id`);

--
-- Indexes for table `Order_quoted_price`
--
ALTER TABLE `Order_quoted_price`
  ADD PRIMARY KEY (`Item_id`,`order_id`),
  ADD KEY `fk_Item_has_Order_Order1_idx` (`order_id`),
  ADD KEY `fk_Item_has_Order_Item1_idx` (`Item_id`);

--
-- Indexes for table `PersonalInfo`
--
ALTER TABLE `PersonalInfo`
  ADD PRIMARY KEY (`id`,`customer_id`,`supplier_id`),
  ADD KEY `fk_PersonalInfo_Customer1_idx` (`customer_id`),
  ADD KEY `fk_PersonalInfo_Supplier1_idx` (`supplier_id`);

--
-- Indexes for table `Shipper`
--
ALTER TABLE `Shipper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Site`
--
ALTER TABLE `Site`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_Supplier_User1_idx` (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_UNIQUE` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Category`
--
ALTER TABLE `Category`
  ADD CONSTRAINT `fk_Category_Category1` FOREIGN KEY (`parent_category`) REFERENCES `Category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `fk_Customer_User1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Item`
--
ALTER TABLE `Item`
  ADD CONSTRAINT `fk_Item_Category` FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `fk_Order_Customer1` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Order_Shipper1` FOREIGN KEY (`shipper_id`) REFERENCES `Shipper` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Order_quoted_price`
--
ALTER TABLE `Order_quoted_price`
  ADD CONSTRAINT `fk_Item_has_Order_Item1` FOREIGN KEY (`Item_id`) REFERENCES `Item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Item_has_Order_Order1` FOREIGN KEY (`order_id`) REFERENCES `Order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `PersonalInfo`
--
ALTER TABLE `PersonalInfo`
  ADD CONSTRAINT `fk_PersonalInfo_Customer1` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PersonalInfo_Supplier1` FOREIGN KEY (`supplier_id`) REFERENCES `Supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD CONSTRAINT `fk_Supplier_User1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
