-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2022 at 06:45 AM
-- Server version: 8.0.27
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

DROP TABLE IF EXISTS `academics`;
CREATE TABLE IF NOT EXISTS `academics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `fees` int NOT NULL,
  `c_fees` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `educational_details`
--

DROP TABLE IF EXISTS `educational_details`;
CREATE TABLE IF NOT EXISTS `educational_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `u_id` int NOT NULL,
  `ssc_board` varchar(255) COLLATE utf8_bin NOT NULL,
  `ssc_passing_year` int NOT NULL,
  `ssc_percentage` int NOT NULL,
  `ssc_grade` varchar(255) COLLATE utf8_bin NOT NULL,
  `ssc_total` int NOT NULL,
  `ssc_out` int NOT NULL,
  `ssc_school` varchar(555) COLLATE utf8_bin NOT NULL,
  `ssc_destrict` varchar(255) COLLATE utf8_bin NOT NULL,
  `ssc_state` varchar(255) COLLATE utf8_bin NOT NULL,
  `ssc_country` varchar(255) COLLATE utf8_bin NOT NULL,
  `hsc_board` varchar(255) COLLATE utf8_bin NOT NULL,
  `hsc_passing_year` int NOT NULL,
  `hsc_percentage` int NOT NULL,
  `hsc_grade` varchar(255) COLLATE utf8_bin NOT NULL,
  `hsc_total` int NOT NULL,
  `hsc_out` int NOT NULL,
  `hsc_school` varchar(255) COLLATE utf8_bin NOT NULL,
  `hsc_district` varchar(255) COLLATE utf8_bin NOT NULL,
  `hsc_state` varchar(255) COLLATE utf8_bin NOT NULL,
  `hsc_country` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `educational_details`
--

INSERT INTO `educational_details` (`id`, `u_id`, `ssc_board`, `ssc_passing_year`, `ssc_percentage`, `ssc_grade`, `ssc_total`, `ssc_out`, `ssc_school`, `ssc_destrict`, `ssc_state`, `ssc_country`, `hsc_board`, `hsc_passing_year`, `hsc_percentage`, `hsc_grade`, `hsc_total`, `hsc_out`, `hsc_school`, `hsc_district`, `hsc_state`, `hsc_country`, `created_at`, `updated_at`) VALUES
(1, 17, '', 0, 0, '', 0, 0, '', '', '', '', '', 0, 0, '', 0, 0, '', '', '', '', '2022-04-03 23:32:32', '2022-04-03 23:32:32'),
(2, 18, '', 0, 0, '', 0, 0, '', '', '', '', '', 0, 0, '', 0, 0, '', '', '', '', '2022-04-05 02:48:34', '2022-04-05 02:48:34'),
(3, 19, '', 0, 0, '', 0, 0, '', '', '', '', '', 0, 0, '', 0, 0, '', '', '', '', '2022-04-05 02:57:09', '2022-04-05 02:57:09'),
(4, 20, '', 0, 0, '', 0, 0, '', '', '', '', '', 0, 0, '', 0, 0, '', '', '', '', '2022-04-05 04:00:17', '2022-04-05 04:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE IF NOT EXISTS `library` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(555) COLLATE utf8_bin NOT NULL,
  `location` varchar(555) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'Available',
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `name`, `location`, `status`, `created_at`) VALUES
(4, 'Marathi', '1A 2B', 'Available', '2022-04-02 21:56:00'),
(11, 'XYZ 123', '123 1 23', 'Available', '2022-04-05 02:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE IF NOT EXISTS `personal_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `u_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fname` varchar(255) COLLATE utf8_bin NOT NULL,
  `mname` varchar(255) COLLATE utf8_bin NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pphone` varchar(55) COLLATE utf8_bin NOT NULL,
  `add_1` text COLLATE utf8_bin NOT NULL,
  `add_2` text COLLATE utf8_bin NOT NULL,
  `add_3` text COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `pin_code` varchar(10) COLLATE utf8_bin NOT NULL,
  `state` varchar(255) COLLATE utf8_bin NOT NULL,
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `u_id`, `email`, `fname`, `mname`, `lname`, `pphone`, `add_1`, `add_2`, `add_3`, `city`, `pin_code`, `state`, `country`, `created_at`, `updated_at`) VALUES
(10, 16, 'ankitdm69@gmail.com', 'Dnyaneshwar', 'Pushpa', 'Meshram', '9372096952', 'a-403 ganesh apt, gopal krishna nagar chakkianaka', 'near saint mary high school', 'chakkianaka', 'kalyan', '421306', 'Maharashtra', 'India', '2022-04-03 21:53:06', '0000-00-00 00:00:00'),
(11, 17, 'ankitdm69@gmail.com', 'Dnyaneshwar', 'Pushpa', 'Meshram', '9372096952', 'a-403 ganesh apt, gopal krishna nagar chakkianaka', 'near saint mary high school', 'chakkianaka', 'kalyan', '421306', 'Maharashtra', 'India', '2022-04-03 23:32:32', '0000-00-00 00:00:00'),
(12, 18, 'ankitdm69@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '2022-04-05 02:48:34', '2022-04-05 02:48:34'),
(13, 19, 'ankit@brokod.com', 'Dnyaneshwar', 'Pushpa', 'Meshram', '9372096952', 'a-403 ganesh apt, gopal krishna nagar chakkianaka', 'near saint mary high school', 'kalyan east', 'kalyan', '421306', 'Maharashtra', 'India', '2022-04-05 02:57:09', '0000-00-00 00:00:00'),
(14, 20, 'rohanbag33@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '2022-04-05 04:00:17', '2022-04-05 04:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `rand` int NOT NULL,
  `active` int NOT NULL,
  `role` int NOT NULL DEFAULT '2',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `phone2`, `password`, `rand`, `active`, `role`, `created_at`, `updated_at`) VALUES
(20, 'Rohan Bag', 'rohanbag33@gmail.com', '9594346947', NULL, '16633b86fc76be0297652d82063b8fb8', 71003, 1, 2, '2022-04-05 04:00:17', '2022-04-05 04:00:17'),
(18, 'Ankit Meshram', 'ankitdm69@gmail.com', '9867245541', NULL, '3cf0624675c7fb890010943c94fb1f29', 64149, 1, 1, '2022-04-05 02:48:34', '2022-04-05 02:48:34'),
(19, 'Ankit Meshram', 'ankit@brokod.com', '9867245541', '9372096952', 'e7566be321ebe27a0446f111cd12e5eb', 78436, 1, 2, '2022-04-05 02:57:09', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
