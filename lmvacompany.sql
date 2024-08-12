-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 05:23 AM
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
-- Database: `lmvacompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `addinguser`
--

CREATE TABLE `addinguser` (
  `staffid` int(2) NOT NULL,
  `sfname` varchar(255) NOT NULL,
  `slname` varchar(255) NOT NULL,
  `sinitial` varchar(255) NOT NULL,
  `snameextension` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `spassword` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addinguser`
--

INSERT INTO `addinguser` (`staffid`, `sfname`, `slname`, `sinitial`, `snameextension`, `semail`, `spassword`) VALUES
(1, 'Zhyryll Ryj', 'Posadas', 'C.', '', 'zhyryllposadas@gmail.com', 12345678),
(4, 'Christopher', 'Cabatbat', 'C.', 'JR', 'christopher@gmail.comm', 0),
(6, 'John Jovit', 'Soriano', 'F.', '', 'soriano@gmail.com', 12345678),
(8, 'Arron Paul', 'Macaraeg', 'P.', '', 'macaraeg@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(2) NOT NULL,
  `qrtext` varchar(255) NOT NULL,
  `qrimage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `qrtext`, `qrimage`) VALUES
(0, 'AT', 1716432746);

-- --------------------------------------------------------

--
-- Table structure for table `registeredaccount`
--

CREATE TABLE `registeredaccount` (
  `user_id` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeredaccount`
--

INSERT INTO `registeredaccount` (`user_id`, `username`, `fname`, `lname`, `contact`, `email`, `password`) VALUES
(2, 'Miracle', 'Zhyryll Ryj', 'Posadas', 2147483647, 'zhyryllposadas@gmail.com', 'Zhy@2001'),
(3, 'Christoh', 'Christopher', 'Cabatbat', 2147483647, 'zhyryllposadas@gmail.com', 'cabatbat'),
(4, 'Zhiee', 'Zhyryll Ryj', 'Posadas', 2147483647, 'zhyryllposadas@gmail.com', '12345678'),
(5, 'zhyryll29', 'Zhyryll Ryj ', 'Posadas', 2147483647, 'zhyryllposadas@gmail.com', 'zhyzhyzhy'),
(23, 'zhyryll29', 'Zhy29', 'Posadas', 2147483647, 'zhyryllposadas@gmail.com', '87654321'),
(52, 'zhyryll29', 'Zhyryll Ryj ', 'Posadas', 2147483647, 'zhyryllposadas@gmail.com', '123456789'),
(65, 'Psuu', 'Zhyrll', 'Posadas', 2147483647, 'zhyryllposadas@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addinguser`
--
ALTER TABLE `addinguser`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `registeredaccount`
--
ALTER TABLE `registeredaccount`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addinguser`
--
ALTER TABLE `addinguser`
  MODIFY `staffid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registeredaccount`
--
ALTER TABLE `registeredaccount`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
