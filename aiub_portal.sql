-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 01:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseinfo`
--

CREATE TABLE `courseinfo` (
  `courseId` int(100) NOT NULL,
  `courseName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`courseId`, `courseName`) VALUES
(101, 'Introduction to Programming'),
(102, 'Programming in java'),
(104, 'Web Technology');

-- --------------------------------------------------------

--
-- Table structure for table `enrollinfo`
--

CREATE TABLE `enrollinfo` (
  `studentId` varchar(100) NOT NULL,
  `studentName` varchar(150) NOT NULL,
  `courseId` varchar(100) NOT NULL,
  `courseName` varchar(200) NOT NULL,
  `sectionId` varchar(100) NOT NULL,
  `sectionName` varchar(200) NOT NULL,
  `roomNumber` varchar(100) NOT NULL,
  `dayTime` varchar(250) NOT NULL,
  `teacherId` varchar(100) NOT NULL,
  `teacherName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollinfo`
--

INSERT INTO `enrollinfo` (`studentId`, `studentName`, `courseId`, `courseName`, `sectionId`, `sectionName`, `roomNumber`, `dayTime`, `teacherId`, `teacherName`) VALUES
('2', 'Israt Jahan Kakon', '104', 'Web Technology', '4', 'D', 'DS0501', 'S/T - 1:00 - 3:00 Pm', '5', 'Irfan Hossain Eshan'),
('2', 'Israt Jahan Kakon', '102', 'Programming in Java', '2', 'B', 'DS502', 'M/W - 11:30-1:00 Pm', '5', 'Irfan Hossain Eshan');

-- --------------------------------------------------------

--
-- Table structure for table `resultinfo`
--

CREATE TABLE `resultinfo` (
  `courseId` varchar(100) NOT NULL,
  `courseName` varchar(150) NOT NULL,
  `sectionId` varchar(100) NOT NULL,
  `sectionName` varchar(150) NOT NULL,
  `teacherId` varchar(100) NOT NULL,
  `teacherName` varchar(150) NOT NULL,
  `studentId` varchar(100) NOT NULL,
  `studentName` varchar(150) NOT NULL,
  `midResult` int(150) NOT NULL,
  `finalResult` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resultinfo`
--

INSERT INTO `resultinfo` (`courseId`, `courseName`, `sectionId`, `sectionName`, `teacherId`, `teacherName`, `studentId`, `studentName`, `midResult`, `finalResult`) VALUES
('104', 'Web Technology', '4', 'D', '5', 'Irfan Hossain Eshan', '2', 'Israt Jahan Kakon', 0, 0),
('102', 'Programming in Java', '2', 'B', '5', 'Irfan Hossain Eshan', '2', 'Israt Jahan Kakon', 56, 69);

-- --------------------------------------------------------

--
-- Table structure for table `sectioninfo`
--

CREATE TABLE `sectioninfo` (
  `courseId` varchar(100) NOT NULL,
  `courseName` varchar(150) NOT NULL,
  `teacherId` varchar(100) NOT NULL,
  `teacherName` varchar(150) NOT NULL,
  `sectionId` int(11) NOT NULL,
  `sectionName` varchar(100) NOT NULL,
  `roomNumber` varchar(150) NOT NULL,
  `dayTime` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sectioninfo`
--

INSERT INTO `sectioninfo` (`courseId`, `courseName`, `teacherId`, `teacherName`, `sectionId`, `sectionName`, `roomNumber`, `dayTime`) VALUES
('101', 'Introduction to Programming', '4', 'Irfan Hossain Nishan', 1, 'A', 'DS101', 'S/T - 9:30-11:00 Am'),
('102', 'Programming in Java', '5', 'Irfan Hossain Eshan', 2, 'B', 'DS502', 'M/W - 11:30-1:00 Pm'),
('101', 'Introduction to Programming', '4', 'Irfan Hossain Nishan', 3, 'B', 'DS101', 'M/W - 8:30- 10:30 Pm'),
('104', 'Web Technology', '5', 'Irfan Hossain Eshan', 4, 'D', 'DS0501', 'S/T - 1:00 - 3:00 Pm');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userId` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `profilePicture` varchar(400) NOT NULL,
  `fathersName` varchar(100) NOT NULL,
  `mothersName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `bloodGroup` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userId`, `userName`, `profilePicture`, `fathersName`, `mothersName`, `email`, `password`, `role`, `dob`, `bloodGroup`, `status`, `remarks`) VALUES
(1, 'Tanvir Hasan Tamal', 'Uploads/default.jpg', 'MD. Abul Kalam Azad', 'Morzina Begum', 'tanvirh103@gmail.com', '12', 'Admin', '2002-07-05', 'B+', 'Active', ''),
(2, 'Israt Jahan Kakon', 'Uploads/default.jpg', 'MD. Abul Kalam Azad', 'Morzina Begum', 'isratjahankakon103@gmail.com', '1', 'Student', '2004-01-11', 'B+', 'Active', ''),
(3, 'Imran Hossain ', 'Uploads/default.jpg', 'Monirul Haque', 'Lake Begum', 'imran103@gmail.com', '1', 'Admin HR', '2010-02-09', 'AB+', 'Active', ''),
(4, 'Irfan Hossain Nishan', 'Uploads/default.jpg', 'Mosharrf Hossain', 'Easmin Akter', 'nishan103@gmail.com', '1', 'Faculty', '2007-02-05', 'A+', 'Active', 'LECTURER'),
(5, 'Irfan Hossain Eshan', 'Uploads/default.jpg', 'Mosharrf Hossain', 'Easmin Akter', 'eshan103@gmail.com', '1', 'Faculty', '1996-02-05', 'B+', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sectioninfo`
--
ALTER TABLE `sectioninfo`
  ADD PRIMARY KEY (`sectionId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sectioninfo`
--
ALTER TABLE `sectioninfo`
  MODIFY `sectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
