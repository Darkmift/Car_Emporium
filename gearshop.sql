-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 10:52 AM
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
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `date created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `color`, `date created`) VALUES
(1, 'pi4lnEpjSH', 'this', '2018-03-08 08:53:32'),
(2, 'Neu3FoicDj', 'this', '2018-03-08 08:53:39'),
(3, 'DYXCaQZzqj', 'this', '2018-03-08 08:53:45'),
(4, 'peEcc3T72V', 'this', '2018-03-08 08:53:46'),
(5, 'TUkaf4T0nj', 'this', '2018-03-08 08:53:46'),
(6, 'vIt688d85n', 'this', '2018-03-08 08:53:46');

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
(1, 'cuntzu', 'Vehicle', '1.99', '2018-03-08 09:12:13', '0000-00-00 00:00:00', '012-34-589:IL'),
(3, 'your cuntie ass mom', 'Vehicle', '1.99', '2018-03-08 09:14:42', '0000-00-00 00:00:00', '012-34-589:IL'),
(5, 'your flappie ass papa', 'Vehicle', '1.99', '2018-03-08 09:15:58', '0000-00-00 00:00:00', '012-34-589:IL'),
(6, 'your flappie ass SASA', 'Vehicle', '1.99', '2018-03-08 09:16:54', '0000-00-00 00:00:00', '012-34-589:IL'),
(7, 'shababi', 'Vehicle', '1.99', '2018-03-08 09:18:35', '0000-00-00 00:00:00', '012-34-589:IL'),
(8, '$myshinyassname', '$type', '$price', '2018-03-08 09:35:09', '0000-00-00 00:00:00', '$licensePlate'),
(9, 'MetalButt', '$type', '$price', '2018-03-08 09:52:03', '0000-00-00 00:00:00', '$licensePlate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
