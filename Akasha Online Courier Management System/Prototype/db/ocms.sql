-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 07:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courierId` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sphone` varchar(150) NOT NULL,
  `semail` varchar(150) NOT NULL,
  `sadress` varchar(255) NOT NULL,
  `rbranch` varchar(250) NOT NULL,
  `rname` varchar(150) NOT NULL,
  `rphone` varchar(50) NOT NULL,
  `remail` varchar(150) NOT NULL,
  `ctype` varchar(150) NOT NULL,
  `cqty` varchar(150) NOT NULL,
  `cfee` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courierId`, `sname`, `sphone`, `semail`, `sadress`, `rbranch`, `rname`, `rphone`, `remail`, `ctype`, `cqty`, `cfee`) VALUES
(1, 'Quintessa Pearson', '+1 (976) 212-7339', 'zepejukeb@mailinator.com', 'Dolor sunt commodo q', 'Et sed laudantium r', 'Ferris Alford', '+1 (909) 804-1369', 'qepevyb@mailinator.com', 'Urgent', '915', 'Libero aut rerum ist'),
(2, 'Aristotle Noel', '+1 (885) 935-3589', 'pefij@mailinator.com', 'Sunt asperiores volu', 'Aspernatur cillum qu', 'Benjamin Wheeler', '+1 (871) 567-7059', 'wodijydigi@mailinator.com', 'Urgent', '751', 'Delectus cillum rer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courierId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
