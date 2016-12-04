-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 02:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `telephone_number` varchar(100) DEFAULT NULL,
  `agn_brn` varchar(100) DEFAULT NULL,
  `tax` varchar(100) DEFAULT NULL,
  `vat` varchar(100) DEFAULT NULL,
  `sss` varchar(100) DEFAULT NULL,
  `mode` varchar(100) DEFAULT NULL,
  `n_prn` varchar(100) DEFAULT NULL,
  `effective` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `address`, `contact_person`, `telephone_number`, `agn_brn`, `tax`, `vat`, `sss`, `mode`, `n_prn`, `effective`) VALUES
(1, '123', '123', '123', '123', '123', '123', '123', '123', NULL, NULL, '2016-12-08T16:00:00.000Z'),
(2, '123', '1q23', '123', '123', '123', '123', '123', '123', NULL, '123', '2016-12-05T16:00:00.000Z'),
(3, '123', '123', '123', '123', '123', '123', '123', '123', NULL, '123', '2016-11-30T16:00:00.000Z'),
(4, '123', '123', '123', '123', '123', '123', '123', '123', NULL, '123', '2016-12-03T16:00:00.000Z'),
(5, '123', '123', '123', '123', '123', '123', '123', '123', NULL, '123', '2016-12-01T16:00:00.000Z'),
(6, '123', '123', '123', '123', '123', '123', '123', '123', NULL, '123', '2016-12-01T16:00:00.000Z'),
(7, '123', '123', '123', '123', '123', '123', '123', '123', NULL, '123', '2016-11-28T16:00:00.000Z'),
(8, '1231', '123', '123', '123', '123', '312', '123', '123', NULL, '123', '2016-12-01T16:00:00.000Z'),
(9, '1231', '123', '123', '123', '123', '312', '123', '123', NULL, '123', '2016-12-01T16:00:00.000Z'),
(10, '123', '123', '123', '123', '123', '123', '123', '123', NULL, '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contract_information`
--

CREATE TABLE `contract_information` (
  `contract_id` int(11) NOT NULL,
  `contract_amount` varchar(100) DEFAULT NULL,
  `guard` varchar(100) DEFAULT NULL,
  `oic` varchar(100) DEFAULT NULL,
  `aoic` varchar(100) DEFAULT NULL,
  `janitor` varchar(100) DEFAULT NULL,
  `driver` varchar(100) DEFAULT NULL,
  `messenger` varchar(100) DEFAULT NULL,
  `helper` varchar(100) DEFAULT NULL,
  `client_id` varchar(100) DEFAULT NULL,
  `duty_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duty_information`
--

CREATE TABLE `duty_information` (
  `duty_id` int(11) NOT NULL,
  `hours` varchar(100) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `client_id` varchar(100) DEFAULT NULL,
  `contract_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `family_name` varchar(100) DEFAULT NULL,
  `given_name` varchar(100) DEFAULT NULL,
  `middle_initial` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `birthdate` varchar(100) DEFAULT NULL,
  `license` varchar(100) DEFAULT NULL,
  `expiry` varchar(100) DEFAULT NULL,
  `retirement` varchar(100) DEFAULT NULL,
  `policy_number` varchar(100) DEFAULT NULL,
  `premium` varchar(100) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date_res` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `agency` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `hou_account` varchar(100) DEFAULT NULL,
  `cs` varchar(100) DEFAULT NULL,
  `cedula` varchar(100) DEFAULT NULL,
  `dep` varchar(100) DEFAULT NULL,
  `sss_no` varchar(100) DEFAULT NULL,
  `pag_ibig_no` varchar(100) DEFAULT NULL,
  `acct_no` varchar(100) DEFAULT NULL,
  `date_hire` varchar(100) DEFAULT NULL,
  `insurance` varchar(100) DEFAULT NULL,
  `legal_policy_number` varchar(100) DEFAULT NULL,
  `legal_expiry` varchar(100) DEFAULT NULL,
  `legal_premium` varchar(100) DEFAULT NULL,
  `mode_pay` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  `effectivity` varchar(100) DEFAULT NULL,
  `sss_group` varchar(100) DEFAULT NULL,
  `pag_ibig_group` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `family_name`, `given_name`, `middle_initial`, `sex`, `birthdate`, `license`, `expiry`, `retirement`, `policy_number`, `premium`, `contact_number`, `position`, `status`, `date_res`, `address`, `client`, `agency`, `branch`, `hou_account`, `cs`, `cedula`, `dep`, `sss_no`, `pag_ibig_no`, `acct_no`, `date_hire`, `insurance`, `legal_policy_number`, `legal_expiry`, `legal_premium`, `mode_pay`, `rate`, `effectivity`, `sss_group`, `pag_ibig_group`) VALUES
(1, 'rhonnel_cordova@yahoo.com', 'Jickain', '123', '123', '2016-11-30T16:00:00.000Z', 'Test', NULL, '12312', '123', '123', '123154635', '123', '123', NULL, '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '2016-12-13T16:00:00.000Z', '123', '123', '2016-12-07T16:00:00.000Z', '123', NULL, '123', '2016-11-30T16:00:00.000Z', '123', '123'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `entered_by` int(11) DEFAULT NULL,
  `entered_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `contact`, `username`, `password`, `position`, `status`, `entered_by`, `entered_on`, `updated_by`, `updated_on`) VALUES
(1, 'Maria', 'Cruz III', '09123456789', 'maria.cruz', '12345', 1, 1, NULL, '2016-10-31 00:00:00', 2, '2016-11-01 13:34:09'),
(2, 'Juan', 'Dela Cruz', '00000000000', 'admin', 'admin', 0, 1, NULL, '2016-11-01 00:00:00', NULL, NULL),
(3, 'Juan', 'Simon', '921312324114', 'juan.simon', '12345', 1, 1, NULL, '2016-11-01 11:35:41', 2, '2016-11-01 13:23:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contract_information`
--
ALTER TABLE `contract_information`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `duty_information`
--
ALTER TABLE `duty_information`
  ADD PRIMARY KEY (`duty_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contract_information`
--
ALTER TABLE `contract_information`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `duty_information`
--
ALTER TABLE `duty_information`
  MODIFY `duty_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
