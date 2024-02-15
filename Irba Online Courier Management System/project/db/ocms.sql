-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 09:11 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branchId` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sphone` varchar(50) NOT NULL,
  `scity` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branchId`, `sname`, `sphone`, `scity`, `image`, `adress`) VALUES
(1, 'TCS  Garhi Shahu Branch', '032265656', 'Lahore', 'tcs-logo.jpg', 'Plot no 25 near jamia naeemia '),
(2, 'Allama Iqbal Town ', '+1 (532) 699-3059', 'Lahore', 'tcs-logo.jpg', 'Maulana shouqat ali road, Office no 3 near PITB');

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
  `cfee` varchar(150) NOT NULL,
  `memberId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Booked At Parent Branch',
  `booked_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courierId`, `sname`, `sphone`, `semail`, `sadress`, `rbranch`, `rname`, `rphone`, `remail`, `ctype`, `cqty`, `cfee`, `memberId`, `status`, `booked_on`) VALUES
(1, 'Hector Burgess', '+1 (733) 238-7333', 'lyxojuroho@mailinator.com', 'Ut sint et quam eu c', 'Allama Iqbal Town ', 'Velma Case', '+1 (938) 419-5444', 'tabesaq@mailinator.com', 'Urgent', '20', '8300', 3, 'Parcel Ready To Dispatch', '2024-02-12 13:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `branch` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberId`, `fullname`, `username`, `password`, `email`, `phone`, `city`, `branch`, `created_at`) VALUES
(2, 'Chaney Mccormick', 'Reuben Doyle', 'Pa$$w0rd!', 'qytyviduq@mailinator.com', '+1 (208) 452-6032', 'Quasi ut accusantium', 1, '2024-02-12 11:09:49'),
(3, 'Avye Mathis', 'abc', '123', 'witu@mailinator.com', '+1 (493) 659-8438', 'Dolores nulla accusa', 1, '2024-02-12 11:15:33'),
(4, 'Yoko Estrada', 'iqbal', '123', 'foguluw@mailinator.com', '+1 (235) 578-8517', 'Architecto et sequi ', 2, '2024-02-12 13:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `track_courier`
--

CREATE TABLE `track_courier` (
  `track_id` int(11) NOT NULL,
  `courierId` int(11) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `date_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `track_courier`
--

INSERT INTO `track_courier` (`track_id`, `courierId`, `current_status`, `date_on`) VALUES
(1, 1, 'Booked At Parent Branch', '2024-02-12 13:21:15'),
(2, 1, 'Parcel Ready To Dispatch', '2024-02-12 13:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branchId`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courierId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberId`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `track_courier`
--
ALTER TABLE `track_courier`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `track_courier`
--
ALTER TABLE `track_courier`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branches` (`branchId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
