-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:05 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `mobile`, `msg`) VALUES
('JAynat', 'jayshrinath@gmail.com', 47474747, 'ddd'),
('ajay shindesqweqeq', 'shindeeqweqeqeeajay@gmail.com', 7499934535508162, 'sssssssssssssssssssssssssss'),
('ajay shindesqweqeq', 'shindeeqweqeqeeajay@gmail.com', 7499934535508162, 'sssssssssssssssssssssssssss'),
('ajay shindesqweqeq', 'shindeeqweqeqeeajay@gmail.com', 7499934535508162, 'sssssssssssssssssssssssssss'),
('ajay shindesqweqeq', 'shindeeqweqeqeeajay@gmail.com', 7499934535508162, 'sssssssssssssssssssssssssss'),
('ajay shindesqweqeq', 'shindeeqweqeqeeajay@gmail.com', 7499934535508162, 'sssssssssssssssssssssssssss'),
('karan', 'karan@gmail.com', 9922654012, 'sandip foundation is very big campus this also contain many branch and different country student learn in different courses');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
