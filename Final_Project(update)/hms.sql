-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 08:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookbook`
--

CREATE TABLE `cookbook` (
  `id` int(11) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `process` varchar(1000) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `itemName` varchar(200) NOT NULL,
  `chefId` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookbook`
--

INSERT INTO `cookbook` (`id`, `ingredients`, `process`, `picture`, `itemName`, `chefId`, `status`) VALUES
(4, 'fgggggggggggggg    		', ' seeeeeeeeeee', 'users.PNG', 'awffffff', 9, 'requested'),
(5, 'potato', 'pahihdffhiwfif', 'companies.PNG', 'porota', 0, 'accepted'),
(6, 'potato', 'pahihdffhiwfif', 'companies.PNG', 'porota', 0, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `empfeedback`
--

CREATE TABLE `empfeedback` (
  `id` int(11) NOT NULL,
  `rating` int(15) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `empId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `empsalary`
--

CREATE TABLE `empsalary` (
  `empId` int(11) NOT NULL,
  `date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `totalSalary` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `empschedule`
--

CREATE TABLE `empschedule` (
  `date` date NOT NULL,
  `startTime` time(6) NOT NULL,
  `endTime` time(6) NOT NULL,
  `workingHour` int(15) NOT NULL,
  `id` int(11) NOT NULL,
  `empId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`id`, `itemName`, `quantity`, `picture`, `price`, `status`) VALUES
(1, 'ttt', 1, 'aff.jpg', 34, 'processing'),
(2, 'tala', 3, 'jash.jpg', 56, 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product`, `amount`, `price`, `picture`) VALUES
(1, 'tto', 500, 50, 'gsdaf.jpg'),
(2, 'tgtt', 100, 50, 'final3.jpg'),
(3, 'bfd', 111, 50, 'hotel3.jpg'),
(4, 'fgg', 200, 50, 'hotel3.jpg'),
(5, 'hd', 160, 90, 'final4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(2, 'Shahriar_Isha', '1234', 'shahariaresha@gmail.com', 'chef'),
(3, 'shahriar201', '123', 'shahariar@gmail.com', 'staff'),
(6, 'abdullah', '1234', 'shahariaresha@gmail.com', 'chef'),
(9, 'Amena', '1234', 'amenarimy838@gmail.com', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookbook`
--
ALTER TABLE `cookbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empfeedback`
--
ALTER TABLE `empfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empsalary`
--
ALTER TABLE `empsalary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empschedule`
--
ALTER TABLE `empschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
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
-- AUTO_INCREMENT for table `cookbook`
--
ALTER TABLE `cookbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `empfeedback`
--
ALTER TABLE `empfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empsalary`
--
ALTER TABLE `empsalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empschedule`
--
ALTER TABLE `empschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
