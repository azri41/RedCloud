-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 04:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_development_program`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventId` int(11) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `eventStart` datetime NOT NULL,
  `eventEnd` datetime NOT NULL,
  `eventType` varchar(30) NOT NULL,
  `requirement` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `quota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventId`, `eventName`, `eventStart`, `eventEnd`, `eventType`, `requirement`, `status`, `quota`) VALUES
(1, 'Volunteering Work', '2021-02-03 22:54:21', '2021-02-04 22:54:21', 'Volunteering', 'No Requirement', 'Ongoing', 10);

-- --------------------------------------------------------

--
-- Table structure for table `eventuser`
--

CREATE TABLE `eventuser` (
  `email` varchar(50) NOT NULL,
  `eventId` int(11) NOT NULL,
  `enrolment` varchar(50) NOT NULL DEFAULT 'Unenrolled',
  `status` varchar(50) NOT NULL DEFAULT 'Unattended'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventuser`
--

INSERT INTO `eventuser` (`email`, `eventId`, `enrolment`, `status`) VALUES
('ariff@dell.com', 1, 'Enrolled', 'Attended');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `progressId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `volunteeringProgress` int(11) NOT NULL DEFAULT 0,
  `trainingProgress` int(11) NOT NULL DEFAULT 0,
  `socialProgress` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`progressId`, `email`, `volunteeringProgress`, `trainingProgress`, `socialProgress`) VALUES
(1, 'ariff@dell.com', 1, 0, 0),
(2, 'azri@dell.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNo` varchar(30) NOT NULL,
  `userType` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `totalProgress` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `phoneNo`, `userType`, `password`, `photo`, `totalProgress`) VALUES
('ariff@dell.com', 'Ariff Rahimin', '01163430800', 'Participant', 'test', 'img/ariff.jpg', 20),
('azri@dell.com', 'Azri Azmi', '0182993843', 'Participant', 'test', 'img/azri.jpg', 0),
('hussain@dell.com', 'Hussain', '0129482883', 'Program Manager', 'test', 'img/hussain.jpg', 0),
('siti@dell.com', 'Siti Maimunah', '0123990493', 'Program Manager', 'test', 'img/siti.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `eventuser`
--
ALTER TABLE `eventuser`
  ADD KEY `email` (`email`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progressId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `progressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
