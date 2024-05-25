-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 07:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finddoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `user_id` int(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `did` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `description` char(50) DEFAULT NULL,
  `Gender` char(50) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `doctor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`user_id`, `cid`, `did`, `name`, `email`, `mobile`, `description`, `Gender`, `department`, `doctor_name`) VALUES
(7, 0, 1, 'arun', 'arun@1223.com', 1234567890, 'zdfsf', 'male', 'eye', 'ap'),
(8, 0, 1, 'manji', 'manji@1223.com', 1234567890, 'sda', 'male', 'eye', 'ap'),
(14, 0, 1, 'tamil', 'tail@123.com', 1234567890, 'kasjaksj', 'male', 'eye', 'ap'),
(15, 0, 1, 'tamil', 'tail@123.com', 1234567890, 'kasjaksj', 'male', 'eye', 'ap'),
(16, 1, 0, 'Ajith', 'Ajith@gmail.com', 95217821225, 'Little pain on heart', 'male', 'Heart', 'Robert Bratheon'),
(17, 1, 0, 'Shalini', 'shalini@gmail.com', 95782145345, 'Pain in chest', 'female', 'Heart', 'Robert Bratheon'),
(18, 1, 0, 'Alwin', 'alwin@gmail.com', 963851427, 'Regular check Up', 'male', 'Heart', 'Robert Bratheon'),
(19, 0, 1, 'Ajith', 'Ajith@gmail.com', 95452485124, 'Sight problem', 'male', 'Eye', 'Arya Stark'),
(20, 0, 1, 'Shalini', 'shalini@gmail.com', 95542224121, 'Eye are paining', 'female', 'Eye', 'Arya Stark'),
(21, 0, 1, 'Alwin', 'alwin@gmail.com', 985675221, 'Regular test', 'male', 'Eye', 'Arya Stark'),
(22, 2, 2, 'Ajith', 'Ajith@gmail.com', 578125621, 'Heavily Fever', 'male', 'General Category', 'Sansa Stark'),
(23, 2, 2, 'Shalini', 'shalini@gmail.com', 57862131542, 'Stomach Pain', 'male', 'General Category', 'Sansa Stark'),
(24, 2, 2, 'Alwin', 'alwin@gmail.com', 9347824684, 'Thight Pain', 'male', 'General Category', 'Sansa Stark'),
(25, 1, 0, 'vicky ', 'arun!@test.com', 85452153156, 'poda vena mairu doctor en da epadi enaku en da epa', 'male', 'Heart', 'Dr. Sansa Stark');

-- --------------------------------------------------------

--
-- Table structure for table `cateory`
--

CREATE TABLE `cateory` (
  `id` int(11) NOT NULL,
  `did` int(10) NOT NULL,
  `cateory_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cateory`
--

INSERT INTO `cateory` (`id`, `did`, `cateory_name`) VALUES
(0, 1, 'Eye'),
(1, 0, 'Heart'),
(2, 2, 'General Category');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_login`
--

CREATE TABLE `doctor_login` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_login`
--

INSERT INTO `doctor_login` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(0, 'sansa', 'Dr. Sansa Stark', 'sans@doctor.com', 'robert'),
(1, 'arya', 'Arya Stark', 'arunap@est.com', 'arya'),
(2, 'sansa', 'Sansa Stark', 'sans@doctor.com', 'arun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone_no`, `email`, `password`) VALUES
(1, 'arun', '1234567890', 'arun@mail.com', 'arun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `cateory`
--
ALTER TABLE `cateory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_login`
--
ALTER TABLE `doctor_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
