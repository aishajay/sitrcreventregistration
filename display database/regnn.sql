-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:11 PM
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
-- Table structure for table `regnn`
--

CREATE TABLE `regnn` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `stud` varchar(10) NOT NULL,
  `yes` varchar(50) NOT NULL,
  `study` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `smoke` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regnn`
--

INSERT INTO `regnn` (`id`, `name`, `mobile`, `email`, `stud`, `yes`, `study`, `status`, `smoke`, `img`) VALUES
(24, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '12345678', 'no', 'yes', 'no', 'yes', 'IMG-20230812-WA0033.jpg'),
(26, 'Ajay', 7499908162, 'shindeajay@gmail.com', '234567', 'no', 'yes', 'no', 'no', 'aish.jpg'),
(36, 'Aishwarya Shinde', 7558345844, 'shindeaishu@gmail.com', '123456789', 'no', 'no', 'no', 'yes', '1675854528353.jpg'),
(37, 'Aishwarya', 23, 'karan@gmail.com', '123', 'no', 'no', 'no', 'no', 'aish.jpg'),
(38, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '222222222', 'no', 'no', 'no', 'no', '1675854528353.jpg'),
(40, 'ajay shinde', 7499908162, 'shindeajay@gmail.com', '23456', 'no', 'no', 'no', 'yes', '1675854528353.jpg'),
(41, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '222', 'no', 'no', 'no', 'no', '1676556734717.jpg'),
(42, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '222', 'no', 'no', 'no', 'no', '1676470968886.jpg'),
(43, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '222', 'no', 'no', 'no', 'no', '1676470968886.jpg'),
(44, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '222', 'no', 'no', 'no', 'no', 'ashu.jpg'),
(45, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '222', 'no', 'yes', 'no', 'no', '1675854157492.jpg'),
(46, 'AGOvind Shinde', 7558345844, 'shindeaishu@gmail.com', '45678', 'yes', 'yes', 'yes', 'yes', '1676470690384.jpg'),
(51, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '12', 'no', 'no', 'yes', 'no', '1676556734717.jpg'),
(52, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '213', 'yes', 'yes', 'yes', 'no', '1675854157492.jpg'),
(53, 'Aishu Ajju Shinde', 7558345844, 'shindeaishu@gmail.com', '213', 'yes', 'yes', 'yes', 'no', '1675854157492.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regnn`
--
ALTER TABLE `regnn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regnn`
--
ALTER TABLE `regnn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
