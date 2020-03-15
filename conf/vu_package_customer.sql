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
-- Table structure for table `package_customer`
--

CREATE TABLE `package_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` bigint(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_code` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `payment_via` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_customer`
--

INSERT INTO `package_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_mobile`, `customer_address`, `customer_code`, `payment_status`, `payment_id`, `pay_amount`, `transaction_id`, `payment_via`, `package_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Suprokash Goswami', 'suprokash.goswami@gmail.com', 9900376191, 'Ozone Evergreens Apartment,, Haralur Road, Bangalore', 437322, 'Initiated', '0', 2999, '0', 'NA', 1, '', '2020-01-20 15:34:07', '2020-01-20 15:34:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_customer`
--
ALTER TABLE `package_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_code` (`customer_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_customer`
--
ALTER TABLE `package_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
