-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2016 at 02:06 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmobileproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `habits`
--

DROP TABLE IF EXISTS `habits`;
CREATE TABLE `habits` (
  `id` int(5) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habits`
--

INSERT INTO `habits` (`id`, `description`) VALUES
(1, 'Niet roken'),
(2, '5km lopen'),
(3, '3 liters water drinken'),
(4, 'Geen frietjes eten');

-- --------------------------------------------------------

--
-- Table structure for table `habitsprogress`
--

DROP TABLE IF EXISTS `habitsprogress`;
CREATE TABLE `habitsprogress` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `progressHabit1` tinyint(1) NOT NULL,
  `progressHabit2` tinyint(1) NOT NULL,
  `progressHabit3` tinyint(1) NOT NULL,
  `weight` double NOT NULL,
  `calories` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitsprogress`
--

INSERT INTO `habitsprogress` (`id`, `date`, `progressHabit1`, `progressHabit2`, `progressHabit3`, `weight`, `calories`) VALUES
(1, '2016-10-03', 0, 1, 1, 50.3, 520);

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

DROP TABLE IF EXISTS `klanten`;
CREATE TABLE `klanten` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `habit_1_Id` int(5) NOT NULL,
  `habit_2_Id` int(5) NOT NULL,
  `habit_3_Id` int(5) NOT NULL,
  `habitProgressId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`id`, `name`, `habit_1_Id`, `habit_2_Id`, `habit_3_Id`, `habitProgressId`) VALUES
(1, 'Nida', 1, 2, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `habits`
--
ALTER TABLE `habits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `habitsprogress`
--
ALTER TABLE `habitsprogress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `habitProgressId` (`habitProgressId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `habits`
--
ALTER TABLE `habits`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `habitsprogress`
--
ALTER TABLE `habitsprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `klanten`
--
ALTER TABLE `klanten`
  ADD CONSTRAINT `klant_progress_fk` FOREIGN KEY (`habitProgressId`) REFERENCES `habitsprogress` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
