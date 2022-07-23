-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 05:51 PM
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
-- Table structure for table `assign_course`
--

CREATE TABLE `assign_course` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_course`
--

INSERT INTO `assign_course` (`t_id`, `c_id`, `c_num`) VALUES
(1, 1, 2),
(1, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(3) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `crh` int(1) NOT NULL,
  `semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `crh`, `semester`) VALUES
(1, 'OOP', 3, 3),
(2, 'Software Engineering', 3, 4),
(3, 'DBS', 4, 4),
(5, 'TBW', 3, 4),
(6, 'IBQ', 2, 3),
(7, 'IICT', 4, 1),
(8, 'PF', 4, 1),
(9, 'Discrete Structures', 3, 1),
(10, 'Calculus', 3, 1),
(11, 'MVC', 3, 2),
(12, 'Prob & Stats', 3, 2),
(13, 'DSA', 4, 3),
(14, 'COAL', 4, 4),
(15, 'Web Programming', 3, 4),
(16, 'COA', 3, 3),
(17, 'Pak Std.', 3, 2),
(18, 'IST', 3, 1),
(19, 'English Composition', 3, 1),
(20, 'DLD', 3, 2),
(21, 'IHS', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_sal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `p_name`, `p_sal`) VALUES
(1, 'Assistant Lecturar', 40000),
(2, 'Junior Lecturar', 60000),
(3, 'Lab Attendent', 45000),
(4, 'Senior Lecturar', 90000);

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
('Abdul', 'Rafay', 'ahmadraza16042002@gmail.com', 'aaaaa'),
('Ahmad', 'Raza', 'ahmadraza16042002@gmail.com', '12345678'),
('Hasnain', 'Sajid', 'hasajid882@gmail.com', '1234'),
('Abdul', 'Rafay', 'abdulrafeh380@gmail.com', 'admin');

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
('Abdul', 'Rafay', 25602, '5', 'abdulrafeh380@gmail.com'),
('Ahmad', 'Raza', 25603, '3', 'ahmadraza123@gmail.com'),
('Husnain', 'Sajid', 25604, '3', 'hassi@gmail.com'),
('Fahad', 'Khan', 25606, '5', 'fahadkhan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `std_enroll_course`
--

CREATE TABLE `std_enroll_course` (
  `sap_id` int(11) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `crs1` int(11) NOT NULL,
  `crs2` int(11) NOT NULL,
  `crs3` int(11) NOT NULL,
  `crs4` int(11) NOT NULL,
  `crs5` int(11) NOT NULL,
  `crs6` int(11) NOT NULL,
  `sr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_enroll_course`
--

INSERT INTO `std_enroll_course` (`sap_id`, `std_name`, `crs1`, `crs2`, `crs3`, `crs4`, `crs5`, `crs6`, `sr`) VALUES
(25604, 'Husnain Sajid', 2, 1, 3, 3, 2, 1, 1),
(25602, 'Abdul Rafay', 3, 2, 1, 3, 3, 2, 2),
(25603, 'Ahmad Raza', 1, 3, 2, 1, 2, 3, 3),
(25603, 'Ahmad Raza', 0, 0, 0, 0, 0, 0, 4),
(25606, 'Fahad Khan', 2, 1, 3, 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `t_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`t_id`, `f_name`, `l_name`, `email`, `p_id`) VALUES
(1, 'Zarmina', 'Jahangir', 'zjay@gmail.com', 4),
(2, 'Ahmad', 'Arslan', 'arslan@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` varchar(30) NOT NULL,
  `Timeslot` int(30) NOT NULL,
  `room` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_course`
--
ALTER TABLE `assign_course`
  ADD KEY `fk_teacher_id` (`t_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`sap_id`);

--
-- Indexes for table `std_enroll_course`
--
ALTER TABLE `std_enroll_course`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD KEY `fk_c_id` (`c_id`),
  ADD KEY `fk_t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `sap_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25607;

--
-- AUTO_INCREMENT for table `std_enroll_course`
--
ALTER TABLE `std_enroll_course`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_course`
--
ALTER TABLE `assign_course`
  ADD CONSTRAINT `fk_teacher_id` FOREIGN KEY (`t_id`) REFERENCES `teach` (`t_id`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `fk_c_id` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`),
  ADD CONSTRAINT `fk_t_id` FOREIGN KEY (`t_id`) REFERENCES `teach` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
