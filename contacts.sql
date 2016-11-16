-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 08:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `services` varchar(128) NOT NULL,
  `type` varchar(64) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `organisation` varchar(255) DEFAULT NULL,
  `queued_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `services`, `type`, `title`, `first_name`, `last_name`, `organisation`, `queued_at`) VALUES
(50, 'housing', 'citizen', 'Mr.', NULL, 'Turner', NULL, '19:14:58'),
(51, 'fly_tipping', 'citizen', 'Mr.', NULL, 'Mosley', NULL, '19:15:49'),
(52, 'housing', 'organisation', NULL, 'Sally corp', NULL, NULL, '19:16:20'),
(54, 'benefits', 'citizen', 'Mr.', NULL, 'Albert', NULL, '19:20:17'),
(55, 'benefits', 'citizen', 'Mr.', 'Tony', 'Jones', NULL, '19:21:38'),
(57, 'housing', 'citizen', 'Mr.', 'Franky', 'Montana', NULL, '19:27:50'),
(58, 'benefits', 'organisation', NULL, NULL, NULL, 'Lex Corp', '19:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
