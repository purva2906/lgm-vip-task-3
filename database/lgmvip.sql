-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 02:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgmvip`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult`
--

CREATE TABLE `studentresult` (
  `seat_no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mathematics` decimal(65,2) NOT NULL,
  `english` decimal(65,2) NOT NULL,
  `physics` decimal(65,2) NOT NULL,
  `chemistry` decimal(65,2) NOT NULL,
  `computer` decimal(65,2) NOT NULL,
  `PE` decimal(65,2) NOT NULL,
  `percentage` decimal(65,2) NOT NULL,
  `result` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentresult`
--

INSERT INTO `studentresult` (`seat_no`, `name`, `mathematics`, `english`, `physics`, `chemistry`, `computer`, `PE`, `percentage`, `result`, `mothers_name`) VALUES
(5001, 'Manish', '98.00', '99.00', '98.00', '99.00', '95.00', '99.00', '98.00', 'pass', 'Reema'),
(5002, 'Ramesh', '98.00', '99.00', '98.00', '97.00', '99.00', '99.00', '98.33', 'pass', 'Manju'),
(5003, 'Nandamuri', '98.00', '99.00', '100.00', '99.00', '97.00', '99.00', '98.66', 'pass', 'Pallavi'),
(5004, 'Brijesh', '100.00', '99.00', '100.00', '93.00', '99.00', '100.00', '98.50', 'pass', 'Samiksha'),
(5005, 'Armaan', '98.00', '99.00', '98.00', '99.00', '100.00', '99.00', '98.83', 'pass', 'Amrita'),
(5006, 'Samar', '88.00', '99.00', '98.00', '77.00', '99.00', '99.00', '93.33', 'pass', 'Nandita'),
(5007, 'Soma', '98.00', '89.00', '100.00', '100.00', '97.00', '99.00', '97.16', 'pass', 'Tanuja'),
(5008, 'Sagarika', '100.00', '89.00', '100.00', '100.00', '99.00', '100.00', '98.00', 'pass', 'Gauri'),
(5009, 'Jaya', '98.00', '100.00', '100.00', '100.00', '97.00', '99.00', '99.00', 'pass', 'Harmeet'),
(5010, 'Jemimah', '100.00', '99.00', '100.00', '98.00', '99.00', '100.00', '99.33', 'pass', 'Lavita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD PRIMARY KEY (`seat_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
