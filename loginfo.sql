-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 11:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_auth`
--

CREATE TABLE `emp_auth` (
  `email` varchar(30) NOT NULL,
  `emp_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_auth`
--

INSERT INTO `emp_auth` (`email`, `emp_pass`) VALUES
('admin@gmail.com', 'admin123'),
('123@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `intw_auth`
--

CREATE TABLE `intw_auth` (
  `email` varchar(30) NOT NULL,
  `emp_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intw_auth`
--

INSERT INTO `intw_auth` (`email`, `emp_pass`) VALUES
('xyz12@gmail.com', '12345'),
('abc@gmail.com', 'admin123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
