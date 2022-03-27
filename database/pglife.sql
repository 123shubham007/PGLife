-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 11:03 AM
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
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(255) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `type`, `facility`) VALUES
(1, 'Building', 'cctv'),
(1, 'Building', 'parking'),
(2, 'Building', 'cctv'),
(3, 'Building', 'wifi'),
(3, 'Building', 'garden'),
(3, 'Building', 'geyser'),
(3, 'Building', 'lift'),
(3, 'Common Area', 'dining'),
(3, 'Common Area', 'gym'),
(3, 'Common Area', 'play zone'),
(3, 'Bedroom', 'bed'),
(3, 'Bedroom', 'attach washroom'),
(3, 'Washroom', 'geyser'),
(4, 'Washroom', 'geyser'),
(4, 'Common Area', 'dining'),
(4, 'Common Area', 'gym'),
(4, 'Building', 'lift'),
(4, 'Building', 'wifi'),
(1, 'Bedroom', 'bed'),
(1, 'Bedroom', 'double bed'),
(1, 'Washroom', 'geyser'),
(1, 'Common Area', 'dining'),
(1, 'Building', 'fire exit'),
(1, 'Common Area', 'gym'),
(1, 'Building', 'lift'),
(1, 'Building', 'powerbackup'),
(1, 'Bedroom', 'wifi'),
(1, 'Common Area', 'rowater'),
(1, 'Common Area', 'tv'),
(1, 'Common Area', 'washing machine'),
(2, 'Bedroom', 'wifi'),
(2, 'Bedroom', 'ac'),
(2, 'Bedroom', 'double bed'),
(2, 'Bedroom', 'bed'),
(2, 'Building', 'fire exit'),
(2, 'Building', 'lift'),
(2, 'Common Area', 'garden'),
(2, 'Common Area', 'dining'),
(2, 'washroom', 'geyser'),
(2, 'Common Area', 'gym'),
(2, 'Common Area', 'parking'),
(2, 'Building', 'powerbackup'),
(2, 'Common Area', 'rowater'),
(2, 'Common Area', 'tv'),
(2, 'Common Area', 'washing machine'),
(3, 'Bedroom', 'triple sharing');

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
(1, 'SONA Boys Hostel', 'UPES', 'Male', 13000),
(2, 'Example Hostel', 'UPES', 'Femail', 12000),
(3, 'Deep Boys', 'Nanda ki Chowki', 'Male', 12000),
(4, 'Aashiyana Grand', 'Uper Kandoli', 'Male', 15500);

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
(1, 'shubham', 7979816961, 'sk@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'male'),
(3, 'sidhant', 9876543211, 'sd@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'male'),
(4, 'shubham k', 7894561235, 'sksks@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'male'),
(5, 'abcd', 7417417417, 'shubham@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'female'),
(6, 'Rishabh Jain', 1234567890, 'rj@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'female'),
(10, 'priyam', 1234567890, 'priyam2@gmail.com', 'c250f88274cb8a75961a08502efcb7c262033c87', 'male');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` tinyint(125) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
