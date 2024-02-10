-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:04 PM
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
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `addresss` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `tehsil` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `dst` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` bigint(50) NOT NULL,
  `comp` varchar(100) NOT NULL,
  `persn` varchar(50) NOT NULL,
  `sam` varchar(100) NOT NULL,
  `invol` varchar(100) NOT NULL,
  `resl` varchar(100) NOT NULL,
  `resln` varchar(100) NOT NULL,
  `any` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`fname`, `lname`, `mobile`, `class`, `address`, `addresss`, `city`, `tehsil`, `zip`, `dst`, `email`, `id`, `comp`, `persn`, `sam`, `invol`, `resl`, `resln`, `any`) VALUES
('Aishu', 'Shinde', 7558345844, 'thiird year', 'Dongargaon', 'Chandwad', 'Dongargaom', 'chandwad', '423104', 'nashik', 'shindeaishu@gmail.com', 1234567890, '2024-02-07', ' Ajay', 'Shinde', 'Ajay', 'Shinde', 'Ajay', 'Ajay'),
('Aishu', 'Shinde', 7558345844, 'thiird year', 'Dongargaon', 'Chandwad', 'Dongargaom', 'chandwad', '423104', 'nashik', 'shindeaishu@gmail.com', 1234567890, '2024-02-12', ' dfghj', '', 'hjk', 'dfghj', 'drtfgyjh', 'fghj'),
('Aishu', 'Shinde', 7558345844, 'thiird year', 'Dongargaon', 'Chandwad', 'Dongargaom', 'chandwad', '423104', 'nashik', 'shindeaishu@gmail.com', 1234567890, '2024-02-17', ' as', 's', 'ss', 'ssssss', 'sss', 'sss'),
('', '', 0, '', '', '', '', '', '', '', '', 0, '', ' ', '', '', '', '', ''),
('', '', 0, '', '', '', '', '', '', '', '', 0, '', ' ', '', '', '', '', ''),
('', '', 0, '', '', '', '', '', '', '', '', 0, '', ' ', '', '', '', '', ''),
('Aishu', 'Shinde', 7558345844, 'third year', 'Dongargaon', 'Chandwad', 'Dongargaom', 'chandwad', '423104', 'nashik', 'shindeaishu@gmail.com', 2345, '2024-02-08', ' sdf', 'ddsdsdds', 'ddddddd', 'dfdfd', 'dsdfdf', 'dfdfd'),
('Aishu', 'Shinde', 7558345844, 'third year', 'Dongargaon', 'Chandwad', 'Dongargaom', 'chandwad', '423104', 'nashik', 'shindeaishu@gmail.com', 2345, '2024-02-03', ' ssa', 'a', 'sdasd', 'sdd', 'sdad', 'asdsd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
