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
-- Database: `hrlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `candi_info`
--

CREATE TABLE `candi_info` (
  `id` int(3) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `myemail` varchar(20) NOT NULL,
  `mymobile` varchar(10) NOT NULL,
  `mygender` varchar(10) NOT NULL,
  `mydob` date NOT NULL,
  `myaddress` varchar(30) NOT NULL,
  `mycity` varchar(30) NOT NULL,
  `mypin` int(6) NOT NULL,
  `mystate` varchar(30) NOT NULL,
  `myqualification` varchar(30) NOT NULL,
  `mysalary` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candi_info`
--

INSERT INTO `candi_info` (`id`, `first_name`, `last_name`, `myemail`, `mymobile`, `mygender`, `mydob`, `myaddress`, `mycity`, `mypin`, `mystate`, `myqualification`, `mysalary`) VALUES
(1, 'darshan', 'prajapati', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-03', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 575876),
(3, 'Devang', 'Patel', 'devang@gmail.com', '7896541236', 'male', '2022-02-01', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 95489),
(4, 'Datt', 'patel', 'xyz@gmail.com', '9874563214', 'male', '2022-02-14', 'dolphin web solutions', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 8781),
(8, 'sahil', 'patel', 'abc@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 65965),
(9, 'Dhruvil', 'patel', 'dp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 987456, 'Gujarat', 'BTech.', 651984),
(10, 'Pratham', 'Patel', 'ptp@gmail.com', '2147483647', 'male', '2022-02-07', '2,xyz colony, ahmedabad', 'ahmedabad', 380061, 'Gujarat', 'BTech.', 95984),
(11, 'Dhruvil', 'patel', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 65194),
(12, 'Dhruvil', 'patel', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 65194),
(13, 'Pratham', 'prajapati', 'ab@hotmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 36514),
(14, 'sahil', 'patel', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 519651),
(15, 'darshan', 'prajapati', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 54984),
(17, 'Abc', 'xyz', 'pqr@gmail.com', '7845123569', 'male', '2022-02-09', 'dolphin web solutions', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 196591),
(123, 'darshan', 'prajapati', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 42),
(124, 'darshan', 'prajapati', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380080, 'Gujarat', 'BTech.', 6519),
(125, 'sahil', 'patel', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-07', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 651894),
(126, 'darshan', 'prajapati', '1210.drp@gmail.com', '2147483647', 'male', '2022-02-08', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 163546),
(127, 'sahil', 'sharma', 'xyz@gmail.com', '9874532165', 'male', '2022-02-08', '2/Uma tenament, b/h Annapurna ', 'ahmedabad', 380060, 'Gujarat', 'BTech.', 216519);

-- --------------------------------------------------------

--
-- Table structure for table `candi_status`
--

CREATE TABLE `candi_status` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `myemail` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candi_status`
--

INSERT INTO `candi_status` (`id`, `first_name`, `last_name`, `myemail`, `status`) VALUES
(3, 'Devang', 'Patel', 'devang@gmail.com', 'Rejected'),
(4, 'Datt', 'patel', 'xyz@gmail.com', 'Selected'),
(8, 'sahil', 'patel', 'abc@gmail.com', 'Selected'),
(9, 'Dhruvil', 'patel', 'dp@gmail.com', 'Selected'),
(127, 'sahil', 'sharma', 'xyz@gmail.com', 'onHold');

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`email`, `password`) VALUES
('1210.drp@gmail.com', '12345'),
('abc@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `email` varchar(30) NOT NULL,
  `mypassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`email`, `mypassword`) VALUES
('1210.drp@gmail.com', '12345'),
('123@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `logintable2`
--

CREATE TABLE `logintable2` (
  `email` varchar(30) NOT NULL,
  `mypassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable2`
--

INSERT INTO `logintable2` (`email`, `mypassword`) VALUES
('1210.drp@gmail.com', '12345'),
('123@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `myemail` varchar(30) NOT NULL,
  `Inter_name` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `first_name`, `last_name`, `myemail`, `Inter_name`, `Date`, `note`) VALUES
(8, 'sahil', 'patel', 'abc@gmail.com', 'Chirag Barot', '2022-02-22 11:43:00', 'hello darshan\r\n'),
(4, 'Datt', 'patel', 'xyz@gmail.com', 'Rohit Prajapati', '2022-02-22 20:08:00', 'php interview'),
(3, 'Devang', 'Patel', 'devang@gmail.com', 'Rohit Prajapati', '2022-02-25 14:05:00', 'hello devang'),
(12, 'Dhruvil', 'patel', '1210.drp@gmail.com', 'Chirag Barot', '2022-02-24 16:30:00', 'hello '),
(4, 'Datt', 'patel', '180020107055.ait@gmail.com', 'Rohit Prajapati', '2022-02-25 17:20:00', 'hello ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candi_info`
--
ALTER TABLE `candi_info`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `candi_status`
--
ALTER TABLE `candi_status`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candi_info`
--
ALTER TABLE `candi_info`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
