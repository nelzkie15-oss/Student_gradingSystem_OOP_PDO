-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 07:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_gradingsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_fullname`, `admin_email`, `admin_username`, `admin_password`) VALUES
(2, 'Admin Admin', 'Admin@gmail.com', 'Admin', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEaSo901rZweL4Wxz0u8iTv30oHzzw25jeQ2gFxzIm3Zeso0RzE023d42f5f3f66498b2c8ff4c20b8c5ac826e47146'),
(5, 'junil toledo', 'nel@gmail.com', 'nelzkie15', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEaSo901rZweL4Wxz0u8iTv30oHzzw25jeQ2gFxzIm3Zeso0RzE05fd00371820533da4391a56b59d8c94f921f945d');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attendance_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `login_from` varchar(255) DEFAULT NULL,
  `remark_login` varchar(255) DEFAULT NULL,
  `logout_to` varchar(255) DEFAULT NULL,
  `remark_logout` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attendance_id`, `first_name`, `middle_name`, `last_name`, `user_name`, `login_from`, `remark_login`, `logout_to`, `remark_logout`) VALUES
(1, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 04:33 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(2, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 04:34 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(3, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 05:03 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(4, 'maria', 'o', 'toledo', 'maria', 'Mar-17-2021 05:11 AM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(5, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 03:20 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(6, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 03:23 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(7, 'maria', 'o', 'toledo', 'maria', 'Mar-17-2021 03:36 PM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(8, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 03:37 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(9, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 04:36 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(10, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 05:37 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(11, 'junil', 'a', 'toledo', 'nel', 'Mar-17-2021 05:43 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(12, 'junil', 'a', 'toledo', 'nel', 'Mar-18-2021 02:52 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(13, 'Emil', 'L', 'Nario', 'nario', 'Mar-18-2021 03:03 AM', 'Has Time In the system at', 'Mar-18-2021 04:20 AM', 'Has Time Out the system at'),
(14, 'Maria', 'O', 'Toledo', 'maria', 'Mar-18-2021 03:03 AM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(15, 'junil', 'a', 'toledo', 'nel', 'Mar-18-2021 04:13 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(16, 'Emil', 'L', 'Nario', 'nario', 'Mar-18-2021 04:20 AM', 'Has Time In the system at', 'Mar-18-2021 04:20 AM', 'Has Time Out the system at'),
(17, 'Maria', 'O', 'Toledo', 'maria', 'Mar-18-2021 04:20 AM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(18, 'junil', 'a', 'toledo', 'nel', 'Mar-18-2021 04:37 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(19, 'junil', 'a', 'toledo', 'nel', 'Mar-18-2021 01:00 PM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(20, 'erlin', 'm', 'nidea', 'erlin', 'Mar-18-2021 01:13 PM', 'Has Time In the system at', 'Mar-18-2021 01:16 PM', 'Has Time Out the system at'),
(21, 'marimar', 'i', 'istasoy', 'marimar', 'Mar-18-2021 01:18 PM', 'Has Time In the system at', 'Mar-18-2021 04:10 PM', 'Has Time Out the system at'),
(22, 'marimar', 'i', 'istasoy', 'marimar', 'Mar-18-2021 04:09 PM', 'Has Time In the system at', 'Mar-18-2021 04:10 PM', 'Has Time Out the system at'),
(23, 'Maria', 'O', 'Toledo', 'maria', 'Mar-18-2021 04:10 PM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(24, 'Maria', 'O', 'Toledo', 'maria', 'Mar-18-2021 10:58 PM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(25, 'Maria', 'O', 'Toledo', 'maria', 'Mar-21-2021 02:48 AM', 'Has Time In the system at', 'Mar-21-2021 02:48 AM', 'Has Time Out the system at'),
(26, 'junil', 'a', 'toledo', 'nel', 'Mar-21-2021 02:48 AM', 'Has Time In the system at', 'Mar-21-2021 02:49 AM', 'Has Time Out the system at'),
(27, 'Emil', 'L', 'Nario', 'nario', 'Mar-21-2021 02:49 AM', 'Has Time In the system at', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grades`
--

CREATE TABLE `tbl_grades` (
  `grade_id` int(11) NOT NULL,
  `prelim` varchar(255) DEFAULT NULL,
  `midterm` varchar(255) DEFAULT NULL,
  `prefinals` varchar(255) DEFAULT NULL,
  `finals` varchar(255) DEFAULT NULL,
  `subject_code` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `subject_units` varchar(255) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_grades`
--

INSERT INTO `tbl_grades` (`grade_id`, `prelim`, `midterm`, `prefinals`, `finals`, `subject_code`, `section`, `teacher`, `subject_units`, `student_id`) VALUES
(1, '89', '89', '90', '78', 'Math203', 'B203', 'Ms. Jonalyn', '3', 1),
(2, '89', '96', '90', '78', 'Trigo211', 'F402', 'Mr.Delacruz', '4', 1),
(3, '90', '98', '80', '86', 'Math203', 'F402', 'Ms. Jonalyn', '4', 2),
(4, '80', '75', '71', '87', 'PE208', 'B203', 'Mrs.Carmen', '3', 2),
(5, '78', '75', '79', '80', 'Eng205', 'B203', 'Ms. Jonalyn', '4', 3),
(6, '70', '76', '70', '74', 'PE208', 'B203', 'Mrs.Gonsalez', '3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `section_id` int(11) NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`section_id`, `section`, `date_created`) VALUES
(1, 'B203', '2021-03-18 00:56:50'),
(3, 'F402', '2021-03-18 01:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentinfo`
--

CREATE TABLE `tbl_studentinfo` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `student_number` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `student_gwa` varchar(500) DEFAULT NULL,
  `user_name` varchar(355) DEFAULT NULL,
  `pass_word` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studentinfo`
--

INSERT INTO `tbl_studentinfo` (`student_id`, `first_name`, `middle_name`, `last_name`, `student_number`, `unit`, `student_gwa`, `user_name`, `pass_word`) VALUES
(1, 'junil', 'a', 'toledo', 'no-233', '23', '85.50', 'nel', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEa40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'Maria', 'O', 'Toledo', 'No-322', '18', '84.00', 'maria', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEa40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Emil', 'L', 'Nario', 'No-455', '12', '78.40', 'nario', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEa40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Lupe', 'R', 'Garcenila', 'No-344', '24', '72.80', 'lupe', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEa40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'erlin', 'm', 'nidea', 'no-345', '23', NULL, 'erlin', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wE40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'marimar', 'i', 'istasoy', 'no-345', '9', NULL, 'marimar', 'a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEa40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_code`, `date_created`) VALUES
(1, 'Math203', '2021-03-10 00:00:00'),
(2, 'Eng205', '2021-03-30 00:00:00'),
(4, 'PE208', '2021-03-09 00:00:00'),
(5, 'Trigo211', '2021-03-17 21:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher`, `date_created`) VALUES
(3, 'Ms. Jonalyn', '2021-03-18 01:21:26'),
(4, 'Mrs.Gonsalez', '2021-03-18 01:22:20'),
(5, 'Mr.Delacruz', '2021-03-18 01:34:40'),
(6, 'Mrs.Carmen', '2021-03-18 01:34:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `tbl_grades`
--
ALTER TABLE `tbl_grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `tbl_studentinfo`
--
ALTER TABLE `tbl_studentinfo`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_grades`
--
ALTER TABLE `tbl_grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_studentinfo`
--
ALTER TABLE `tbl_studentinfo`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
