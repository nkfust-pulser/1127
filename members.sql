-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 02:16 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `members`
--
CREATE DATABASE IF NOT EXISTS `members` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `members`;

-- --------------------------------------------------------

--
-- Table structure for table `fdlogs`
--

DROP TABLE IF EXISTS `fdlogs`;
CREATE TABLE `fdlogs` (
  `辨識碼` varchar(20) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `cdate` date NOT NULL,
  `heart` text NOT NULL,
  `liver` text NOT NULL,
  `spleen` text NOT NULL,
  `lung` text NOT NULL,
  `kidney` text NOT NULL,
  `stomach` text NOT NULL,
  `gall_brani` text NOT NULL,
  `blader` text NOT NULL,
  `the_large_intestine` text NOT NULL,
  `the_small_intestine` text NOT NULL,
  `triple_burner` text NOT NULL,
  `pericardium` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `measure_time`
--

DROP TABLE IF EXISTS `measure_time`;
CREATE TABLE `measure_time` (
  `index` varchar(50) NOT NULL,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `measure_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `measure_time`
--

INSERT INTO `measure_time` (`index`, `userid`, `measure_time`) VALUES
('1', 'david90', '2015-10-12 15:50:00'),
('2', 'david90', '2015-10-12 18:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `members_account`
--

DROP TABLE IF EXISTS `members_account`;
CREATE TABLE `members_account` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_account`
--

INSERT INTO `members_account` (`id`, `userid`, `username`, `password`, `mail_address`) VALUES
(1, 'david90', 'David-Lou', 'david90', 'david90@gmail.com'),
(2, 'pulseradmin123', '希特肋', 'admin123', 'allhellhitler@gmail.com'),
(3, 'david236', 'david-chou', '$2y$10$ESIu62ievY27u16LMTAkSuKZ3m4h0bXQnFsQ9/OjC8CuXZ9c2f64K', '123456789@gmail.com'),
(4, 'huang234', '森忠商', '$2y$10$m.6bffMYh/O/Y7..hj2.mePcttgy6KR5Dukke4T2.x/k6f7zFR/gW', 'lovelyjunkie2020@gmail.com'),
(5, 'x123456', '孫中三', '$2y$10$d9dHbUtKmFZiSxrAE6mREOtM5Z2VxR8yDYu73QLB95o.vtY4I2kbm', 'x123456@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `peaks`
--

DROP TABLE IF EXISTS `peaks`;
CREATE TABLE `peaks` (
  `index` varchar(50) NOT NULL,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `measure_time` date NOT NULL,
  `firstPeaks` varchar(50) NOT NULL,
  `secondPeaks` varchar(50) NOT NULL,
  `thirdPeaks` varchar(50) NOT NULL,
  `fourthPeaks` varchar(50) NOT NULL,
  `fifthPeaks` varchar(50) NOT NULL,
  `sixthPeaks` varchar(50) NOT NULL,
  `seventhPeaks` varchar(50) NOT NULL,
  `eighthPeaks` varchar(50) NOT NULL,
  `ninthPeaks` varchar(50) NOT NULL,
  `tenthPeaks` varchar(50) NOT NULL,
  `eleventhPeaks` varchar(50) NOT NULL,
  `twelvethPeaks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `physiological`
--

DROP TABLE IF EXISTS `physiological`;
CREATE TABLE `physiological` (
  `辨識碼` varchar(20) NOT NULL,
  `typex` int(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ratio`
--

DROP TABLE IF EXISTS `ratio`;
CREATE TABLE `ratio` (
  `辨識碼` varchar(20) NOT NULL,
  `typex` int(10) NOT NULL,
  `sequence` int(10) NOT NULL,
  `description` text NOT NULL,
  `basescore_low` varchar(25) NOT NULL,
  `basescore_upper` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `辨識碼` varchar(20) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nick_ame` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `c_day` varchar(10) NOT NULL,
  `history` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_information`
--

DROP TABLE IF EXISTS `users_information`;
CREATE TABLE `users_information` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail_address` varchar(100) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_sex` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_phonenumber` varchar(10) NOT NULL,
  `user_height` varchar(5) NOT NULL,
  `user_weight` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `measure_time`
--
ALTER TABLE `measure_time`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `members_account`
--
ALTER TABLE `members_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `peaks`
--
ALTER TABLE `peaks`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `users_information`
--
ALTER TABLE `users_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_phonenumber` (`user_phonenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members_account`
--
ALTER TABLE `members_account`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_information`
--
ALTER TABLE `users_information`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
