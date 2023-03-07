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
-- Database: `mypaudhadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `id` int(10) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `proquantity` varchar(10) NOT NULL,
  `proprice` int(20) NOT NULL,
  `proimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`id`, `proname`, `proquantity`, `proprice`, `proimage`) VALUES
(2, 'Anthurium Red Plant', '2 X 1189 ', 2378, 'products/p2.webp'),
(3, 'Satin pothos Argyraeus', '3 X 399 ', 1197, 'products/p3.webp'),
(7, 'Swiss cheese plant', '5 X 999 ', 4995, 'products/p1.webp'),
(10, 'Spider Plant', '3 X 499', 1497, 'products/p4.webp'),
(11, 'Mini Cactus', '2 X 850 ', 1700, 'products/succ1.jpg'),
(12, 'Echeveria laui', '4 X 599 ', 2396, 'products/succ3.jpg'),
(13, 'Echinopsis Tubiflora', '2 X 999 ', 1998, 'products/succ2.jpg'),
(14, 'Calathea Prayer Plant', '6 X 599 ', 3594, 'products/p5.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
