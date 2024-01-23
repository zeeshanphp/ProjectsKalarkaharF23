-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 12:10 PM
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
-- Database: `residence`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingId` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `teanantId` int(11) NOT NULL,
  `orderon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingId`, `roomId`, `teanantId`, `orderon`, `order_status`) VALUES
(1, 2, 1, '2024-01-23 11:07:30', 'Room Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `ownerId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `fullname`, `username`, `password`, `email`, `phone`, `city`, `created_at`) VALUES
(1, 'Quamar Craft', 'owner', '123', 'subyredilo@mailinator.com', '+1 (893) 458-2706', 'Mollit fuga Dolor e', '2024-01-23 08:44:09'),
(2, 'Carl Flowers', 'xyz', '000', 'qefal@mailinator.com', '+1 (788) 718-6084', 'Qui laboris eveniet', '2024-01-23 08:44:39'),
(3, 'Wyatt Burns', 'Aline Wolfe', 'Pa$$w0rd!', 'jexevikybu@mailinator.com', '+1 (834) 811-8448', 'Eligendi sunt adipis', '2024-01-23 08:45:05'),
(4, 'Hope Willis', 'Vivian York', 'Pa$$w0rd!', 'cevuwezihe@mailinator.com', '+1 (593) 281-3292', 'Voluptatem et velit ', '2024-01-23 08:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomId` int(11) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomId`, `roomno`, `rent`, `type`, `image`, `status`, `created_at`) VALUES
(1, 'Amet itaque similiq', 'Ut quia in quis pari', 'Flat', 'fuel.jpg', 'Available', '2024-01-23 09:13:11'),
(2, 'Ratione ad enim qui ', 'Error alias molestia', 'Room', 'tetst.jpeg', 'Room is booked', '2024-01-23 09:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `teanant`
--

CREATE TABLE `teanant` (
  `teanantid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teanant`
--

INSERT INTO `teanant` (`teanantid`, `fullname`, `username`, `password`, `email`, `phone`, `city`, `created_at`) VALUES
(1, 'Kirby Perry', 'abc', '123', 'puminenisi@mailinator.com', '+1 (813) 764-2561', 'Enim deleniti doloru', '2024-01-23 09:45:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`ownerId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `teanant`
--
ALTER TABLE `teanant`
  ADD PRIMARY KEY (`teanantid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teanant`
--
ALTER TABLE `teanant`
  MODIFY `teanantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;