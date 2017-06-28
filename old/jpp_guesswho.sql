-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 10:55 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jpp_guesswho`
--

CREATE TABLE IF NOT EXISTS `jpp_guesswho` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jpp_guesswho`
--

INSERT INTO `jpp_guesswho` (`id`, `image`, `link`, `status`, `timestamp`) VALUES
(1, '39b8612520aef949ba59e2074fee65d6_(1).jpg', 'google.com', 2, '2017-03-22 09:04:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jpp_guesswho`
--
ALTER TABLE `jpp_guesswho`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jpp_guesswho`
--
ALTER TABLE `jpp_guesswho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
