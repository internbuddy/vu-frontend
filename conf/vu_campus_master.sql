-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: k3beta.c7lkgbzlct6d.ap-south-1.rds.amazonaws.com:3306
-- Generation Time: Mar 11, 2020 at 12:15 PM
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
-- Table structure for table `vu_campus_master`
--

CREATE TABLE `vu_campus_master` (
  `campus_id` int(11) NOT NULL,
  `campus_name` varchar(255) NOT NULL,
  `campus_image` varchar(255) NOT NULL,
  `campus_status` int(10) NOT NULL,
  `campus_longitude` varchar(255) NOT NULL,
  `campus_latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vu_campus_master`
--

INSERT INTO `vu_campus_master` (`campus_id`, `campus_name`, `campus_image`, `campus_status`, `campus_longitude`, `campus_latitude`) VALUES
(1, 'Manipal College Bangalore', 'campus1.jpg', 1, '77.64672010000004', '12.8408952'),
(2, 'New Horaizon Delhi', 'campus2.jpg', 0, '77.64672010000004', '12.8408952'),
(3, 'SKM College Pune', 'campus3.jpg', 1, '77.64672010000004', '12.8408952'),
(4, 'SVT College Kolkata', 'campus4.jpg', 1, '77.64672010000004', '12.8408952'),
(5, 'NSCB College Chennei', 'campus5.jpg', 1, '77.658338077', '12.837941012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vu_campus_master`
--
ALTER TABLE `vu_campus_master`
  ADD PRIMARY KEY (`campus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vu_campus_master`
--
ALTER TABLE `vu_campus_master`
  MODIFY `campus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
