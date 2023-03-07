-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 06:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `rdetails`
--

CREATE TABLE `rdetails` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdetails`
--

INSERT INTO `rdetails` (`id`, `name`, `email`, `password`) VALUES
(8, 'Trump', 'trump89@yahoo.com', 'Schdbc34#6'),
(9, 'alladdin', 'abuu@jennie.com', 'Jasmine@32'),
(10, 'mahendra', 'bahu@rajamatha.com', 'Jaimazhilmathi#1'),
(12, 'mohanlal', 'mohan@kerala.com', '345mohan'),
(25, 'GUY', 'guy1@freeguy.city', 'free123'),
(27, 'shanmuga', 'priya3456@yahoo.com', 'Priya#23'),
(29, 'jamesbond', 'james007@bond.co', 'bond007'),
(30, 'stephen', 'step321@gmail.com', 'step#39'),
(31, 'sakthi', 'sakthi321@gamil.com', 'Sakthi@#4532'),
(32, 'mickey', 'mickey34@mouse.com', 'mineey34&32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rdetails`
--
ALTER TABLE `rdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rdetails`
--
ALTER TABLE `rdetails`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
