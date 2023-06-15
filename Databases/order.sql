-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 12:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `caid` int(11) NOT NULL,
  `caname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`caid`, `caname`) VALUES
(1, 'Education'),
(1, 'Animals'),
(3, 'Entertainment'),
(4, 'Finance'),
(5, 'Heath'),
(6, 'Information Technology'),
(7, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `colorno` int(11) NOT NULL,
  `colorname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`colorno`, `colorname`) VALUES
(1, 'White'),
(2, 'Red'),
(3, 'Silver'),
(4, 'Blue'),
(5, 'Green'),
(6, 'Orange'),
(7, 'Black'),
(8, 'Yellow'),
(9, 'Purple'),
(10, 'Brown'),
(11, 'Gray'),
(12, 'Pink'),
(13, 'Olive'),
(14, 'Violet');

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `qna` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `cname` text NOT NULL,
  `cslogan` text NOT NULL,
  `color` varchar(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`qna`, `Category`, `cname`, `cslogan`, `color`, `email`) VALUES
('3', '3', 'akimss', 'social transformation through dynamic education', '9', 'nadafab@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `qnano` int(11) NOT NULL,
  `qnaname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`qnano`, `qnaname`) VALUES
(1, 'Logo Design'),
(2, 'Flyer Design'),
(3, 'Banner Design'),
(4, 'Skecthing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
