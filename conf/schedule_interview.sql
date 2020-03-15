-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 06:07 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `schedule_interview`
--

CREATE TABLE `schedule_interview` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `approve` int(2) NOT NULL DEFAULT 0,
  `student_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_interview`
--

INSERT INTO `schedule_interview` (`id`, `name`, `contact_no`, `email`, `date`, `time`, `approve`, `student_id`, `campus_id`) VALUES
(34, 'misha', '1234556789', 'misha@gmail.com', '04/05/2020', '13:50:00', 0, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule_interview`
--
ALTER TABLE `schedule_interview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule_interview`
--
ALTER TABLE `schedule_interview`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
