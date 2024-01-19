-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 10:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minglebox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `coderId` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `speciality` varchar(400) NOT NULL,
  `Description` text NOT NULL,
  `skills` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`coderId`, `username`, `pass`, `email`, `phone`, `fullname`, `image`, `speciality`, `Description`, `skills`) VALUES
(1, 'SOHAIL', '321', 'alpo@gmail.com', '787978', 'ZARYAB', 'download.jpg', 'GRAPHICS DESIGNER', 'I am a passionate developer looking for a client to work with', 'ADOBE PHOTOSHOP'),
(2, 'jamal_ahmad', '1254  ', 'bob_whill@gmail.com', '03236517781', 'Azam Khan', '123.jpg', 'Web Developer', 'I am a professional developer', 'PHP, CodeIgnitor');

-- --------------------------------------------------------

--
-- Table structure for table `hiering`
--

CREATE TABLE `hiering` (
  `hierId` int(11) NOT NULL,
  `coderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `remarks` varchar(350) NOT NULL,
  `price` varchar(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hiering`
--

INSERT INTO `hiering` (`hierId`, `coderId`, `userId`, `remarks`, `price`, `description`) VALUES
(6, 1, 1, 'Pending', '80000', 'I need a full working website for my e commmerce website'),
(7, 2, 1, 'ACCEPTED', '80000', 'I want a quick web develoment ');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `category` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `title`, `skills`, `category`, `description`, `added_by`) VALUES
(1, 'Web Programing', 'HTML,CSS', 'Web Application', 'die();', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `pass`, `email`, `phone`, `fullname`) VALUES
(1, 'Alpio', '125', 'shanii0802@gmail.com', '787978', 'Alpino Zikr'),
(2, 'Jamal', '123  ', 'alpo@gmail.com', '787978', 'Jamal Ahmad'),
(3, 'Ahmad', '1245 ', 'alpo@gmail.com', '96632232364', ' Ahmad Jamal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`coderId`);

--
-- Indexes for table `hiering`
--
ALTER TABLE `hiering`
  ADD PRIMARY KEY (`hierId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `coderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hiering`
--
ALTER TABLE `hiering`
  MODIFY `hierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
