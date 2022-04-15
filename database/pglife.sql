-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 12:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pglife`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(125) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `phone`, `email`, `password`) VALUES
(6, 'Admin', 7897897897, 'admin@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87');

-- --------------------------------------------------------

--
-- Table structure for table `adminproperty`
--

CREATE TABLE `adminproperty` (
  `id` int(11) NOT NULL,
  `properties_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminproperty`
--

INSERT INTO `adminproperty` (`id`, `properties_id`, `admin_id`) VALUES
(2, 44, 6),
(3, 45, 6),
(4, 46, 6),
(5, 47, 6),
(6, 48, 6),
(7, 49, 6);

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(255) UNSIGNED NOT NULL,
  `amenitie0` varchar(255) DEFAULT NULL,
  `amenitie1` varchar(255) DEFAULT NULL,
  `amenitie2` varchar(255) DEFAULT NULL,
  `amenitie3` varchar(255) DEFAULT NULL,
  `amenitie4` varchar(255) DEFAULT NULL,
  `amenitie5` varchar(255) DEFAULT NULL,
  `amenitie6` varchar(255) DEFAULT NULL,
  `amenitie7` varchar(255) DEFAULT NULL,
  `amenitie8` varchar(255) DEFAULT NULL,
  `amenitie9` varchar(255) DEFAULT NULL,
  `amenitie10` varchar(255) DEFAULT NULL,
  `amenitie11` varchar(255) DEFAULT NULL,
  `amenitie12` varchar(255) DEFAULT NULL,
  `amenitie13` varchar(255) DEFAULT NULL,
  `amenitie14` varchar(255) DEFAULT NULL,
  `amenitie15` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenitie0`, `amenitie1`, `amenitie2`, `amenitie3`, `amenitie4`, `amenitie5`, `amenitie6`, `amenitie7`, `amenitie8`, `amenitie9`, `amenitie10`, `amenitie11`, `amenitie12`, `amenitie13`, `amenitie14`, `amenitie15`) VALUES
(44, 'cctv', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', 'rowater', 'tv', 'wifi', 'fire exit', 'garden'),
(45, 'cctv', '', 'bed', '', 'dining', '', 'lift', '', 'powerbackup', '', 'geyser', '', 'tv', '', 'fire exit', ''),
(46, '', 'ac', '', 'double bed', '', 'gym', '', 'parking', '', 'washing machine', '', 'rowater', '', 'wifi', '', 'garden'),
(47, '', '', '', '', '', 'gym', '', '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '', 'dining', 'gym', 'lift', 'parking', '', '', '', '', 'tv', 'wifi', 'fire exit', 'garden'),
(49, 'cctv', '', '', '', 'dining', 'gym', '', '', '', 'washing machine', 'geyser', '', '', '', 'fire exit', 'garden');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(255) NOT NULL,
  `properties` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `full_name`, `email`, `phone`, `properties`) VALUES
(4, 'shubham', 'shubham@gmail.com', 2147483647, 44);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` tinyint(125) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `rent` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `address`, `gender`, `rent`) VALUES
(44, 'Sona Boys Hostel', 'Bidholi Majhaun Rd. ,Bidholi', 'male', 15000),
(45, 'Example', 'UPES', 'male', 12345),
(46, 'Example_2', 'Upes', 'female', 14523),
(47, 'Rishabh jain', 'upes', 'male', 545),
(48, 'Example_3', 'upes', 'female', 13500),
(49, 'Example_4', 'Bidoli', 'male', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(125) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminproperty`
--
ALTER TABLE `adminproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adminproperty`
--
ALTER TABLE `adminproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` tinyint(125) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
