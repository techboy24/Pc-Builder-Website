-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2018 at 03:57 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcbuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

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
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `graphics_card`
--

CREATE TABLE `graphics_card` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics_card`
--

INSERT INTO `graphics_card` (`company`, `number`, `type`, `capacity`, `cost`) VALUES
('Zotac', 'GT 710', 'DDR3', 2, 3125),
('MSI', 'GTX 1050 Ti', 'DDR3', 4, 15599),
('Zotac', 'GTX 1050 Ti ZT-P105', 'DDR5', 4, 14700),
('Gigabyte ', 'Gtx 1080 Ti', 'DDR5', 11, 72164),
('Gigabyte', 'GV-N710D3-2GL', 'DDR3', 2, 3189),
('Asus', 'RX 580', 'GDDR5', 8, 28999),
('ASUS', 'STRIX-GTX1080TI-O', 'GDDR5', 11, 88199);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `socket` varchar(20) NOT NULL,
  `generation` varchar(20) NOT NULL,
  `graphics_type` varchar(20) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`company`, `number`, `socket`, `generation`, `graphics_type`, `cost`) VALUES
('GIGABYTE', 'GA-B150M-D3H ', '1151', '6', 'DDR5', 8199),
('Gigabyte', 'GA-H110M-S2 ', '1151', '6', 'DDR5', 4529),
('Gigabyte', 'Ga-H61M-S', '1155', '3', 'DDR4', 4050),
('MSI', 'H110 ', '1151', '7', 'DDR5', 5199),
('Asus', 'H61M-K', '1155', '3', 'DDR4', 4449),
('MSI', 'X299 ', '2066', '8', 'DDR5', 21586),
('GIGABYTE ', 'X299 UD4', '2066', '8', 'DDR5', 25100),
('MSI', 'X99', '2011', '6', 'DDR5', 38099);

-- --------------------------------------------------------

--
-- Table structure for table `pc_case`
--

CREATE TABLE `pc_case` (
  `company` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_case`
--

INSERT INTO `pc_case` (`company`, `id`, `cost`) VALUES
('CORSAIR ', '570X', 14350),
('COUGAR', 'CONQUER', 18028),
('PHANTEKS', 'EVOLV', 11128),
('THERMALTAKE ', 'G21', 8999),
('Cooler Master', 'H500P', 11443),
('COUGAR', 'PANZER-S', 17802);

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

CREATE TABLE `power_supply` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `watts` int(11) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

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
  `overclockable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`company`, `model`, `number`, `generation`, `frequency`, `cores`, `socket_pin`, `ram_frequency`, `ram_type`, `power`, `cost`, `overclockable`) VALUES
('intel', 'i3', '3220', '3', 3.3, 2, '1155', 1333, 'DDR3', 55, 5890, 0),
('intel', 'i3', '6100', '6', 3.7, 2, '1151', 2400, 'DDR4', 65, 8247, 0),
('intel', 'i5', '6400', '6', 2.7, 4, '1151', 2133, 'DDR4', 65, 14785, 0),
('intel', 'i5', '6600k', '6', 3.5, 4, '1151', 2133, 'DDR4', 91, 18989, 1),
('intel', 'i7', '6950x', '6', 3, 10, '2011', 2400, 'DDR4', 140, 139199, 1),
('intel', 'i7', '7800x', '8', 3.5, 6, '2066', 2400, 'DDR4', 140, 32990, 1),
('intel', 'i3', '8100', '8', 3.6, 4, '1151', 2400, 'ddr4', 63, 9490, 0),
('intel', 'i5', '8400', '8', 2.8, 4, '1151', 2400, 'DDR4', 65, 14900, 0),
('intel', 'i7', '8700k', '8', 3.7, 6, '1151', 2666, 'DDR4', 95, 30282, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `frequency` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`company`, `number`, `frequency`, `type`, `capacity`, `cost`) VALUES
('Corsair', 'CMK8GX4M1A2400C16R', 2400, 'DDR4', 8, 6785),
('Corsair ', 'CMU16GX4M2A2666C16R', 2666, 'DDR4', 8, 17302),
('Crucial', 'CT4G4DFS8213', 2133, 'DDR4', 4, 3425),
('HyperX', 'HX421C14FB', 2133, 'DDR4', 4, 4975),
('HyperX', 'HX424C15FB2', 2400, 'DDR4', 2, 2350),
('Kingston', 'HX426C16FW2', 2666, 'DDR4', 8, 7999),
('Hynix', 'hymd564m6646cp6', 1333, 'DDR3', 4, 1899),
('Kingston', 'KVR1333D3N9', 1333, 'DDR3', 2, 925),
('Kingston', 'KVR1333D3N9/2G', 1333, 'DDR3', 2, 1703);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `company` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `port` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `cart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `username` (`username`),
  ADD KEY `pc_case` (`pc_case`),
  ADD KEY `processor` (`processor`),
  ADD KEY `motherboard` (`motherboard`),
  ADD KEY `graphics_card` (`graphics_card`),
  ADD KEY `ram` (`ram`),
  ADD KEY `power_supply` (`power_supply`),
  ADD KEY `storage` (`storage`);

--
-- Indexes for table `graphics_card`
--
ALTER TABLE `graphics_card`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `pc_case`
--
ALTER TABLE `pc_case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `cart_ibfk_10` FOREIGN KEY (`storage`) REFERENCES `storage` (`number`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pc_case`) REFERENCES `pc_case` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`processor`) REFERENCES `processor` (`number`),
  ADD CONSTRAINT `cart_ibfk_6` FOREIGN KEY (`motherboard`) REFERENCES `motherboard` (`number`),
  ADD CONSTRAINT `cart_ibfk_7` FOREIGN KEY (`graphics_card`) REFERENCES `graphics_card` (`number`),
  ADD CONSTRAINT `cart_ibfk_8` FOREIGN KEY (`ram`) REFERENCES `ram` (`number`),
  ADD CONSTRAINT `cart_ibfk_9` FOREIGN KEY (`power_supply`) REFERENCES `power_supply` (`number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
