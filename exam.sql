-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2022 at 01:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_teacher`
--

CREATE TABLE `assign_teacher` (
  `id` int(11) NOT NULL,
  `dept` varchar(256) NOT NULL,
  `semester` varchar(256) NOT NULL,
  `course` varchar(256) NOT NULL,
  `building` varchar(256) NOT NULL,
  `teacher` varchar(256) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_teacher`
--

INSERT INTO `assign_teacher` (`id`, `dept`, `semester`, `course`, `building`, `teacher`, `date`) VALUES
(1, 'ICE', '6/Y-3,T-2', '6/ICE-3207', 'Library : 301', 'Md.Amzad Hossain', '2022-11-5'),
(17, 'ICE', '8/Y-4,T-2', '8/ICE-4203', 'Library : 212', 'Zayed-us -salehin', '2022-09-29'),
(21, 'ICE', '4/Y-2,T-2', '4/ICE-2205', 'Library : 301', 'Zayed-us -salehin', '2022-08-26'),
(24, 'ICE', '8/Y-4,T-2', '8/ICE-4203', 'Library : 401', 'Zayed-us -salehin', '2022-09-29'),
(27, 'ICE', '3/Y-2,T-1', '3/ICE-2101', 'Library : 201', 'Abidur Rahman', '2022-11-18'),
(28, 'ICE', '4/Y-2,T-2', '4/ICE-2207', 'Library : 401', 'Zayed-us -salehin', '2022-08-26'),
(29, 'ICE', '4/Y-2,T-2', '4/MATH-2211', 'Library : 402', 'Abidur Rahman', '2022-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(33) NOT NULL,
  `present` varchar(256) DEFAULT NULL,
  `absent` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `present`, `absent`) VALUES
(1, '1', ''),
(2, '1', ''),
(3, '1', ''),
(4, '', '0'),
(5, '1', ''),
(6, '', '0'),
(7, '1', ''),
(8, '1', ''),
(9, '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `user_type` varchar(256) NOT NULL,
  `course_detail` varchar(256) NOT NULL,
  `semester` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `user_type`, `course_detail`, `semester`) VALUES
(1, '1', 'ICE-1101', 'Y-1,T-1'),
(2, '1', 'ICE-1103', 'Y-1,T-1'),
(3, '1', 'ICE-1105', 'Y-1,T-1'),
(4, '1', 'PHY-1103', 'Y-1,T-1'),
(5, '1', 'HUM-1105', 'Y-1,T-1'),
(6, '1', 'ENG-1109', 'Y-1,T-1'),
(7, '1', 'MATH-1111', 'Y-1,T-1'),
(8, '2', 'ICE-1201', 'Y-1,T-2'),
(9, '2', 'ICE-1203', 'Y-1,T-2'),
(10, '2', 'ICE-1205', 'Y-1,T-2'),
(11, '2', 'HUM-1207', 'Y-1,T-2'),
(12, '2', 'MATH-1211', 'Y-1,T-2'),
(13, '3', 'ICE-2101', 'Y-2,T-1'),
(14, '3', 'ICE-2103', 'Y-2,T-1'),
(15, '3', 'ICE-2105', 'Y-2,T-1'),
(16, '3', 'ICE-2107', 'Y-2,T-1'),
(17, '3', 'ICE-2109', 'Y-2,T-1'),
(18, '3', 'MATH-2113', 'Y-2,T-1'),
(19, '4', 'ICE-2201', 'Y-2,T-2'),
(20, '4', 'ICE-2203', 'Y-2,T-2'),
(21, '4', 'ICE-2205', 'Y-2,T-2'),
(22, '4', 'ICE-2207', 'Y-2,T-2'),
(23, '4', 'ICE-2209', 'Y-2,T-2'),
(24, '4', 'MATH-2211', 'Y-2,T-2'),
(25, '5', 'ICE-3101', 'Y-3,T-1'),
(26, '5', 'ICE-3103', 'Y-3,T-1'),
(27, '5', 'ICE-3105', 'Y-3,T-1'),
(28, '5', 'ICE-3107', 'Y-3,T-1'),
(29, '5', 'ICE-3109', 'Y-3,T-1'),
(30, '5', 'MATH-3113', 'Y-3,T-1'),
(31, '6', 'ICE-3201', 'Y-3,T-2'),
(32, '6', 'ICE-3203', 'Y-3,T-2'),
(33, '6', 'ICE-3205', 'Y-3,T-2'),
(34, '6', 'ICE-3207', 'Y-3,T-2'),
(35, '6', 'ICE-3209', 'Y-3,T-2'),
(36, '7', 'ICE-4101', 'Y-4,T-1'),
(37, '7', 'ICE-4103', 'Y-4,T-1'),
(38, '7', 'ICE-4105', 'Y-4,T-1'),
(39, '7', 'ICE-4107', 'Y-4,T-1'),
(40, '7', 'ICE-4109', 'Y-4,T-1'),
(41, '8', 'ICE-4201', 'Y-4,T-2'),
(42, '8', 'ICE-4203', 'Y-4,T-2'),
(43, '8', 'ICE-4205', 'Y-4,T-2');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL,
  `building` varchar(256) NOT NULL,
  `room` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `building`, `room`) VALUES
(1, 'Library', '201'),
(2, 'Library', '212'),
(3, 'Library', '301'),
(4, 'Library', '401'),
(5, 'Library', '402');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `dept` varchar(256) NOT NULL,
  `semester` varchar(256) NOT NULL,
  `date` text NOT NULL,
  `course` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `dept`, `semester`, `date`, `course`) VALUES
(1, 'ICE', 'Y-4,T-2', '27-08-2022', ''),
(2, 'CSTE', 'Y-2,T-2', '2022-08-26', ''),
(4, 'ICE', 'Y-4,T-2', '2022-08-30', ''),
(7, '', '2', '2022-08-28', '2'),
(8, 'ICE', '2', '2022-08-28', '2'),
(9, 'ICE', '5', '2022-08-24', '5'),
(10, 'ICE', 'Y-4,T-1', '2022-08-27', '7/ICE-4101'),
(11, 'ICE', 'Y-4,T-2', '2022-08-27', '8/ICE-4203'),
(12, 'ICE', 'Y-1,T-2', '2022-08-27', '2/ENG-1109'),
(13, 'ICE', 'Y-4,T-2', '2022-09-29', '8/ICE-4205'),
(14, 'ICE', 'Y-1,T-2', '2022-11-15', '2/ENG-1109'),
(15, 'ICE', 'Y-4,T-2', '2022-11-03', '8/ICE-4201'),
(16, 'ICE', 'Y-1,T-2', '2022-11-03', '2/MATH-1211'),
(17, 'ICE', 'Y-2,T-1', '2022-11-18', '3/ICE-2101');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `f_name` text DEFAULT NULL,
  `l_name` text DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `student_id` varchar(256) DEFAULT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `session` varchar(256) DEFAULT NULL,
  `user_gender` text NOT NULL,
  `user_birthday` text NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `hall` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `semester` varchar(256) DEFAULT NULL,
  `present` varchar(256) DEFAULT NULL,
  `absent` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `mobile`, `student_id`, `user_pass`, `user_email`, `session`, `user_gender`, `user_birthday`, `user_image`, `department`, `status`, `hall`, `position`, `user_type`, `semester`, `present`, `absent`) VALUES
(6, 'Mirza', 'Raquib', '01754378945', 'ASH1811069M', '1234567890', 'raquib@gmail.com', '2017-18', 'Male', '2022-05-23', 'm5.jpg', 'ICE', '0', 'ASH', '', '1', '', '', 'A'),
(7, 'Abidur', 'Rahman', '01245674589', '...', '1234567890', 'abid@gmail.com', '', 'Male', '2022-05-27', '', 'ICE', '0', '', '', '3', '', '', ''),
(8, 'Zayed-us', '-salehin', '', '...', '1234567890', 'zayed@gmail.com', '', 'Male', '2022-06-01', '', 'ICE', '0', '', '', '3', '', '', ''),
(9, 'Md.Amzad', 'Hossain', '', '...', 'qwer12345', 'amjad@gmail.com', '', 'Male', '2022-06-01', '', 'ICE', '0', '', '', '3', '', '', ''),
(10, 'Exam', 'Controller', '', '...', 'asdfghjkl', 'exam@gmail.com', '', 'Male', '2022-06-01', '', '', '0', '', '', '2', '', '', ''),
(26, 'Md.Bipul', 'Hossain', '01771179615', '', '1234567890', 'bipul.ice@nstu.edu.bd', '', 'Male', '2022-09-18', 'm12.jpg', 'ICE', '0', 'Hall', 'Assistant Professor', '3', 'Semester', NULL, NULL),
(27, 'Mohsin', 'shikder', '01945678342', 'ASH1911063M', 'asdfghjkl', 'mohsin@gmail.com', '2018-19', 'Male', '2022-09-19', 'm11.jpg', 'ICE', '0', 'ASH', '', '1', 'Y-3,T-1', NULL, NULL),
(29, 'Ullash', 'J Nayem', '01848315008', 'ASH1811075M', '123456', 'llash@gmail.com', '2017-18', 'Male', '2022-10-04', 'm12.jpg', 'ICE', '0', 'ASH', '', '1', 'Y-4,T-2', NULL, NULL),
(30, '', 'exam@gmail.com', '', '', 'asdfghjkl', '', '', '', '', '', '', '0', '', '', '', '', NULL, NULL),
(31, 'Md.Saiful', 'Islam', '01848315008', '', 'asdfghjkl', 't@gmail.com', '', 'Male', '2022-11-11', 'Screenshot from 2022-10-28 15-36-26.png', 'ICE', '0', 'Hall', 'Lecturer', '3', '', NULL, NULL),
(33, 'Suraiya', 'aktar', '018674532456', '', '1234567890', 'exam1@gmail.com', '', 'Male', '2022-11-04', 'login.png', 'Department', '0', 'Hall', '', '2', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_teacher`
--
ALTER TABLE `assign_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_teacher`
--
ALTER TABLE `assign_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
