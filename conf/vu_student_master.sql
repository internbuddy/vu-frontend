-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: k3beta.c7lkgbzlct6d.ap-south-1.rds.amazonaws.com:3306
-- Generation Time: Mar 22, 2020 at 06:19 AM
-- Server version: 5.7.26-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k3beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `vu_student_master`
--

CREATE TABLE `vu_student_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `f_m_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ug_qual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cgpa` float NOT NULL,
  `reg_date_time` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vu_student_master`
--

INSERT INTO `vu_student_master` (`id`, `name`, `email`, `f_m_name`, `dob`, `mobile`, `ug_qual`, `cgpa`, `reg_date_time`, `is_active`) VALUES
(1, 'Sanjida', 'Sanjida@gmail.com', 'S Balakumar', '1997-06-06', '9900379911', 'BE(CS)', 87.73, '0000-00-00 00:00:00', 1),
(2, 'Abhishek', 'support@mavoix.in', 'Ram Singh', '1997-06-13', '8877445511', 'BTech(CS)', 92.35, '0000-00-00 00:00:00', 1),
(3, 'Anish', 'anish@mavoix.in', 'KK Rai', '1997-06-14', '9988776655', 'BE(CS)', 85.56, '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vu_student_master`
--
ALTER TABLE `vu_student_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vu_student_master`
--
ALTER TABLE `vu_student_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
