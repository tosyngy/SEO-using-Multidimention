-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2016 at 02:57 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seach_engine`
--
CREATE DATABASE `seach_engine` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `seach_engine`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `status`) VALUES
(1, 'dcobadisa', '678ac8c796b533c5f9936cd692b6a967', 0),
(2, 'raji', 'd78bc37f8ba8a5a8f6e4cab2ecad2e3a', 0),
(3, 'oginni', '5923d7c2341d0bf7d8cecb3c8c9d0078', 0),
(4, 'dami', '4c70f58a64b89d508158c5ef5fe5af9c', 0),
(5, 'queen', '9b0fffe4b671d4d229d9dbde8cfd3c93', 0),
(6, 'laide', '1fadedef02fe47f74651f9cc48196838', 0),
(7, 'dcobadisa', '678ac8c796b533c5f9936cd692b6a967', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
