-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2018 at 04:59 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aneskiso`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `text`) VALUES
(1, 'Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `name`, `price`) VALUES
(1, 'test', 10),
(2, 'test', 10),
(3, 'test', 10),
(4, 'test', 10),
(5, 'test', 10),
(6, 'test', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
