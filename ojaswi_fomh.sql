-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2021 at 12:49 PM
-- Server version: 5.7.34
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojaswi_fomh`
--

-- --------------------------------------------------------

--
-- Table structure for table `fh_admin`
--

CREATE TABLE `fh_admin` (
  `fha_id` bigint(20) NOT NULL,
  `fha_name` varchar(20) NOT NULL,
  `fha_email` varchar(50) NOT NULL,
  `fha_password` varchar(200) NOT NULL,
  `fha_pwd_salt` varchar(100) NOT NULL,
  `fha_reset_key` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fh_enquiry`
--

CREATE TABLE `fh_enquiry` (
  `fhe_id` int(11) NOT NULL,
  `fhe_first_name` varchar(50) NOT NULL,
  `fhe_last_name` varchar(50) NOT NULL,
  `fhe_email_id` varchar(50) NOT NULL,
  `fhe_contact` varchar(11) NOT NULL,
  `fhe_qualification` varchar(10) NOT NULL,
  `fhe_currnt_engage` varchar(20) NOT NULL,
  `fhe_how_many_years` int(11) NOT NULL,
  `fhe_enq_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fh_admin`
--
ALTER TABLE `fh_admin`
  ADD PRIMARY KEY (`fha_id`);

--
-- Indexes for table `fh_enquiry`
--
ALTER TABLE `fh_enquiry`
  ADD PRIMARY KEY (`fhe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fh_admin`
--
ALTER TABLE `fh_admin`
  MODIFY `fha_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fh_enquiry`
--
ALTER TABLE `fh_enquiry`
  MODIFY `fhe_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
