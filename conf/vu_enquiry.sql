-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: k3beta.c7lkgbzlct6d.ap-south-1.rds.amazonaws.com:3306
-- Generation Time: Mar 02, 2020 at 12:23 PM
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
-- Table structure for table `website_book_demo`
--

CREATE TABLE `website_book_demo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_book_demo`
--

INSERT INTO `website_book_demo` (`id`, `name`, `package_name`, `mobile`, `created_at`, `status`) VALUES
(1, 'Asmita Goswami', 'Walk (1 Week)', 9900376191, '2020-01-21 06:55:29', 'Pending'),
(2, 'Bhupati Shukla', 'Run (4 Week)', 9900376191, '2020-01-21 06:55:29', 'Pending'),
(3, 'Shapna Shukla', 'Fly (12 Week)', 9900376191, '2020-01-21 06:55:29', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website_book_demo`
--
ALTER TABLE `website_book_demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website_book_demo`
--
ALTER TABLE `website_book_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
