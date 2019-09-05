-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2019 at 05:10 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phoneno`, `msg`) VALUES
('Deepak Singh Bhainsora', 'deepaksbmj@gmail.com', 9779412195, 'hello'),
('Deepak Singh Bhainsora', 'deepak1260.cse16@chitkara.edu.in', 9779412195, 'dasasfasfasfasf');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

DROP TABLE IF EXISTS `found`;
CREATE TABLE IF NOT EXISTS `found` (
  `mob` bigint(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `tym` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `img` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

DROP TABLE IF EXISTS `lost`;
CREATE TABLE IF NOT EXISTS `lost` (
  `mob` bigint(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `tym` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `img` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`mob`, `type`, `model`, `company`, `location`, `tym`, `details`, `img`, `colour`, `user`, `status`) VALUES
(9779412195, 'Mobile Phone', 'redmi note 5 pro', 'Xiaomi', 'Demorgan Block', '18:00', 'black note 5 pro', '', 'Black', 'deepaksb', 'Lost');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `mob`, `email`, `username`, `pwd`) VALUES
('', '', 'deepaksbmj@gmail.com', 'deepaksb', '123456'),
('', '', 'deepak1260.cse16@chitkara.edu.in', 'deepaksb1260', '123456'),
('Deepak', '9779412195', 'ashish@gmail.com', 'deepaksb555', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
