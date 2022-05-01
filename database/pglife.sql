-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 11:25 AM
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
(1, 'Admin', 7979816961, 'admin@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87');

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
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1);

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
(9, 'cctv', '', '', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', 'rowater', 'tv', 'wifi', '', ''),
(10, 'cctv', '', '', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', 'rowater', '', 'wifi', '', ''),
(11, 'cctv', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', '', '', '', 'fire exit', ''),
(12, 'cctv', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', '', '', '', '', '', '', 'fire exit', ''),
(13, '', '', 'bed', 'double bed', 'dining', '', '', 'parking', 'powerbackup', 'washing machine', '', '', '', 'wifi', '', ''),
(14, '', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', 'rowater', '', '', '', ''),
(15, '', 'ac', 'bed', 'double bed', '', 'gym', 'lift', 'parking', 'powerbackup', '', 'geyser', '', '', '', '', ''),
(16, '', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', '', 'washing machine', '', '', '', '', '', ''),
(17, '', 'ac', 'bed', 'double bed', '', 'gym', 'lift', 'parking', '', 'washing machine', 'geyser', 'rowater', 'tv', 'wifi', 'fire exit', ''),
(18, 'cctv', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', '', '', '', '', ''),
(19, '', 'ac', 'bed', 'double bed', 'dining', 'gym', 'lift', 'parking', 'powerbackup', 'washing machine', 'geyser', 'rowater', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(11) NOT NULL,
  `property_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`full_name`, `email`, `phone`, `property_id`, `user_id`) VALUES
('shubham', 'sk@gmail.com', 7894561238, 6, 1),
('shubham', 'sk@gmail.com', 7979816961, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `property_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`property_id`, `status`) VALUES
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` tinyint(125) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `rent` int(255) NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `address`, `gender`, `rent`, `approve`) VALUES
(9, 'Sona Boys Hostel', 'upes', 'male', 15000, 1),
(10, 'Aashiyana Grand', 'Upper Kandoli', 'male', 17000, 0),
(11, 'Aashirwad Hostel', 'pondha , near kandoli', 'female', 15000, 1),
(12, 'Deep Boys Hostel', 'Nanda ki chowki ', 'male', 12000, 0),
(13, 'jiya Boys Hostel', 'Nanda ki chowki', 'male', 14000, 0),
(14, 'Stanza living', 'near kandoli ', 'female', 16000, 0),
(15, 'Arihant Home', 'Upper nanda ki chowki', 'male', 15000, 1),
(16, 'Ankur palace', 'Pondha , upper kandoli', 'male', 16000, 0),
(17, 'Agrasen Hostel', 'upper kandoli', 'female', 13000, 0),
(18, 'JMD Girls Hostel', 'kandoli ', 'female', 16000, 0),
(19, 'Royal Stay', 'upper kandoli', 'male', 15000, 1);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `phone`, `email`, `password`, `gender`) VALUES
(1, 'shubham', 7979816961, 'sk@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'male');

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
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`property_id`);

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
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminproperty`
--
ALTER TABLE `adminproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` tinyint(125) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
