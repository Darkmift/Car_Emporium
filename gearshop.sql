-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 07:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gearshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0.00',
  `date created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_sold` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `price`, `date created`, `date_sold`) VALUES
(1, 'TEST01', 'someType', '$price', '2018-03-09 15:31:17', '0000-00-00 00:00:00'),
(2, 'TEST01', 'someType', '$price', '2018-03-09 15:36:30', '0000-00-00 00:00:00'),
(3, 'TEST02', 'someType', '$price', '2018-03-09 16:03:24', '0000-00-00 00:00:00'),
(4, 'TEST03', 'someType', '$price', '2018-03-09 16:08:28', '0000-00-00 00:00:00'),
(5, 'TEST04', 'someType', '$price', '2018-03-09 16:15:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_sold` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `licensePlate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `type`, `price`, `date_created`, `date_sold`, `licensePlate`) VALUES
(1, 'TEST01', 'someType', '$price', '2018-03-09 15:45:31', '0000-00-00 00:00:00', NULL),
(2, 'TEST02', 'someType', '$price', '2018-03-09 16:03:24', '0000-00-00 00:00:00', NULL),
(3, 'TEST03', 'someType', '$price', '2018-03-09 16:08:28', '0000-00-00 00:00:00', NULL),
(4, 'TEST04', 'someType', '$price', '2018-03-09 16:15:43', '0000-00-00 00:00:00', NULL),
(5, 'TEST05', 'someType', '$price', '2018-03-09 16:29:15', '0000-00-00 00:00:00', NULL),
(6, 'TEST06', 'someType', '$price', '2018-03-09 16:33:25', '0000-00-00 00:00:00', NULL),
(7, 'TEST07', 'someType', '$price', '2018-03-09 16:37:56', '0000-00-00 00:00:00', NULL),
(8, 'TEST08', 'someType', '$price', '2018-03-09 16:57:59', '0000-00-00 00:00:00', NULL),
(9, '', '', '', '2018-03-09 17:12:27', '0000-00-00 00:00:00', NULL),
(10, 'someType', '$price', '$date_sold', '2018-03-09 17:28:04', '0000-00-00 00:00:00', 'TEST10'),
(11, 'someType', '$price', '$date_sold', '2018-03-09 17:30:17', '0000-00-00 00:00:00', 'TEST11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `date_created` (`date_created`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
