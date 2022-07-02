-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 08:16 PM
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
-- Database: `rhaerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `email`, `pass`) VALUES
('Ahmad', 'Raza', 'ahmadraza16042002@gmail.com', 'aaa'),
('Abdul', 'Rafay', 'ahmadraza16042002@gmail.com', 'aaaaa'),
('Abdul', 'Rafay', 'ahmadraza16042002@gmail.com', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sap_id` int(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`fname`, `lname`, `sap_id`, `semester`, `email`) VALUES
('Abdul', 'Rafay', 25601, '1', ''),
('Ahmad', 'Raza', 27030, '4', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234398, '5', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234399, '6', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234400, '4', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234401, '4', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234402, '3', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234403, '4', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234404, '4', 'ahmadraza16042002@gmail.com'),
('Ahmad', 'Raza', 234405, '4', 'ahmadraza16042002@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`sap_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `sap_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234406;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
