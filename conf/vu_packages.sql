-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: k3beta:3306
-- Generation Time: Jan 29, 2020 at 05:30 AM
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
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` bigint(20) NOT NULL,
  `package_img` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `package_old_price` bigint(11) NOT NULL,
  `package_description` longtext NOT NULL,
  `status` int(1) NOT NULL,
  `package_item1` varchar(255) NOT NULL COMMENT 'Listing Package Items',
  `package_item2` varchar(255) NOT NULL COMMENT 'Listing Package Items',
  `package_item3` varchar(255) NOT NULL COMMENT 'Listing Package Items',
  `package_item4` varchar(255) NOT NULL COMMENT 'Listing Package Items',
  `package_item5` varchar(255) NOT NULL COMMENT 'Listing Package Items',
  `package_item6` varchar(255) NOT NULL,
  `package_item7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_price`, `package_img`, `duration`, `package_old_price`, `package_description`, `status`, `package_item1`, `package_item2`, `package_item3`, `package_item4`, `package_item5`, `package_item6`, `package_item7`) VALUES
(1, 'Walk', 2999, 'tag1_40.png', '1 Week', 5000, '6 Hours Program', 1, '101 Mentoring', 'Identifying Skill Gaps', 'Step-by-Step Guid to Bridge Gaps', 'Assignment to Strengthen Skills', 'Version Control(Git), IDE(VS Code)', 'GitHub Code Repository Access', 'Deploy Assignment on Cloud'),
(2, 'Run', 4999, 'tag2_50.png', '4 Weeks', 10000, '20 Hours Program', 1, 'Walk before you Run', 'Understand Technology Landscape', 'FullStack & Data Science Insight', 'Hands-on AWS Cloud Access', 'Project Assignment', 'PlayStore Posting Assitance', 'Mock Interview & Resume Tips'),
(3, 'Fly', 9999, 'tag3_60.png', '12 Weeks', 15000, '45 Hours Program', 1, 'Run before you Fly', 'Virtual Internship', 'Diving into FS, DS and Cloud ', 'Skill Assitance (FS/DS/Cloud)', 'Live Project Assignment', 'End-to-End Cloud Deployment', 'Internship Certificate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
