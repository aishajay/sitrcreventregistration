-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `dep` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `come` varchar(50) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `ajay` varchar(50) NOT NULL,
  `ajju` varchar(50) NOT NULL,
  `qr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`fname`, `lname`, `id`, `dep`, `class`, `mobile`, `email`, `come`, `checkindate`, `checkoutdate`, `ajay`, `ajju`, `qr`) VALUES
('karan', 'jagtap', 56637, 0, 0, 5765764756, 'karan@gmail.com', '1', '2024-02-16', '2024-02-23', 'Evening', 'Morning', 'jagtap karan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
