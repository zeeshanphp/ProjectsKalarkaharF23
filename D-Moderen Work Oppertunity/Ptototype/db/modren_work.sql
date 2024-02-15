-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 07:38 PM
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
-- Database: `modren_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `ccontact` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `cname`, `ccontact`, `cemail`, `cphoto`) VALUES
(1, 'Diana ', 'Aliqua Numquam fuga', 'zysogubula@mailinator.com', 'logo.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `company_rating`
--

CREATE TABLE `company_rating` (
  `ratingId` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `custId` int(11) NOT NULL,
  `companyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_rating`
--

INSERT INTO `company_rating` (`ratingId`, `rating`, `custId`, `companyId`) VALUES
(1, 5, 2, 1),
(2, 3, 2, 1),
(3, 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custId`, `fullname`, `username`, `password`, `email`, `phone`, `city`, `created_at`) VALUES
(2, 'Wing Savage', 'abc', '123', 'kekisuda@mailinator.com', '+1 (564) 846-1916', 'Qui placeat sunt la', '2024-01-19 12:45:39'),
(3, 'Rudyard Kane', 'Aline Morgan', 'Pa$$w0rd!', 'xecygo@mailinator.com', '+1 (588) 906-9232', 'Incidunt delectus ', '2024-01-19 12:47:45'),
(4, 'Hiroko Martinez', 'Tamekah Buck', 'Pa$$w0rd!', 'joqukaqery@mailinator.com', '+1 (382) 916-9004', 'Obcaecati et earum i', '2024-01-27 06:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `empId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`empId`, `fullname`, `username`, `password`, `email`, `phone`, `city`, `created_at`) VALUES
(1, 'Chadwick Cook', 'employer', '123', 'nuvicax@mailinator.com', '+1 (953) 394-8616', 'Consectetur ab ipsu', '2024-02-01 12:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackId` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `custId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `jname` varchar(255) NOT NULL,
  `jloc` varchar(255) NOT NULL,
  `jskills` varchar(255) NOT NULL,
  `jcompany` int(11) NOT NULL,
  `jsalary` varchar(255) NOT NULL,
  `jdesc` text NOT NULL,
  `employerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `jname`, `jloc`, `jskills`, `jcompany`, `jsalary`, `jdesc`, `employerId`) VALUES
(1, 'PHP/LARAVEL DEVELOPER REQUIRED', 'Lahore', 'HTML , CSS , PHP , MYSQL , BOOTSTRAP', 1, '50000', 'We need of a Laravel developer who will be responsible for building and creating web apps for our organization. The successful Laravel developer candidate will use the Laravel framework and PHP to help the front-end and the back-end teams produce exceptional web apps and tools.', 1),
(2, 'Full Stack Developer Node Js', 'Karachi', 'ReactJS , MongoDB , Redux', 1, '50000', ' </ul>\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda placeat dicta in laboriosam! Neque, repellendus, dolores fuga qui at reprehenderit eveniet doloribus quae sint esse libero aspernatur molestiae doloremque officiis!\r\n Ipsam molestias vero temporibus minima esse ut et qui officia illo, dicta atque nobis saepe fugit deserunt a voluptatum natus. Sed ad aspernatur iste placeat exercitationem in atque aut praesentium.', 1),
(3, 'Laravel Developer', 'Lahore', 'Laravel', 1, 'Rs. 100000', 'Illo aut alias qui i', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `applicationId` int(11) NOT NULL,
  `custId` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending',
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`applicationId`, `custId`, `jobId`, `resume`, `status`, `applied_date`) VALUES
(2, 2, 2, 'Fall 2023_CS619_8867_3.pdf', 'Please Visit Our Office', '2024-02-03 11:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profileId` int(11) NOT NULL,
  `skills` varchar(150) NOT NULL,
  `qual` varchar(150) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profileId`, `skills`, `qual`, `photo`, `customerId`) VALUES
(2, 'HTML , CSS , JavaScript', 'Phd', 'avatar4.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ratingId` int(11) NOT NULL,
  `rating` varchar(22) NOT NULL,
  `custId` int(11) NOT NULL,
  `employerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`ratingId`, `rating`, `custId`, `employerId`) VALUES
(1, '4.7', 1, 1),
(2, '3.8', 3, 1),
(3, '', 2, 1),
(4, '', 4, 1),
(5, '4.7', 4, 1),
(6, '4', 2, 1),
(7, '4.8', 3, 1),
(8, '5', 3, 1),
(9, '4.6', 2, 1),
(10, '', 2, 1),
(11, '4.6', 2, 1),
(12, '4.5', 4, 1),
(13, '5', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `company_rating`
--
ALTER TABLE `company_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackId`),
  ADD KEY `custId` (`custId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`),
  ADD KEY `jcompany` (`jcompany`),
  ADD KEY `employerId` (`employerId`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`applicationId`),
  ADD KEY `custId` (`custId`),
  ADD KEY `jobId` (`jobId`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profileId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ratingId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_rating`
--
ALTER TABLE `company_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `empId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `applicationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customers` (`custId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`jcompany`) REFERENCES `company` (`companyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`employerId`) REFERENCES `employers` (`empId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customers` (`custId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`jobId`) REFERENCES `jobs` (`jobId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customers` (`custId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
