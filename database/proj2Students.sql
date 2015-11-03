-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Nov 03, 2015 at 01:39 AM
-- Server version: 10.0.21-MariaDB-wsrep
-- PHP Version: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whesch1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Proj2Students`
--

CREATE TABLE IF NOT EXISTS `Proj2Students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `StudentID` varchar(7) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Major` varchar(100) NOT NULL,
  `Status` char(1) NOT NULL COMMENT 'N = student cancels; C = admin cancels',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `Proj2Students`
--

INSERT INTO `Proj2Students` (`id`, `FirstName`, `LastName`, `StudentID`, `Email`, `Major`, `Status`) VALUES
(1, 'DANG-QUANG', 'TRAN', 'AA12341', 'test@umbc.edu', 'CMPE', ''),
(2, 'JASON', 'DEBERNARD', 'AA12342', 'test@umbc.edu', 'CMSC', ''),
(3, 'BENJAMIN', 'NACE', 'AA12343', 'test@umbc.edu', 'CMSC', ''),
(4, 'JOSEPH', 'OMALLEY', 'AA12344', 'test@umbc.edu', 'CMSC', ''),
(5, 'TIM', 'JOHNSON', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(6, 'NISARGA', 'PATEL', 'AA12346', 'test@umbc.edu', 'CMSC', ''),
(7, 'KAI', 'LAU', 'AA12347', 'test@umbc.edu', 'CMSC', ''),
(8, 'SAMANTHA', 'TURSKEY', 'AA12348', 'test@umbc.edu', 'CMSC', ''),
(9, 'JOHN', 'TORRES', 'AA12349', 'test@umbc.edu', 'CMSC', ''),
(10, 'CARLY', 'HARRIS', 'AA12348', 'test@umbc.edu', 'CMSC', ''),
(11, 'BRANDON', 'REPKORWICH', 'AA12347', 'test@umbc.edu', 'CMSC', ''),
(12, 'KATHERINE', 'SILBERHOLZ', 'AA12346', 'test@umbc.edu', 'CMSC', ''),
(13, 'DANIEL', 'SCHOMISCH', 'AA12346', 'test@umbc.edu', 'CMSC', ''),
(14, 'STEVEN', 'HARGROVE', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(15, 'ERIC', 'GOTTLIEB', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(16, 'ALAN', 'SEVERINOVSKY', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(17, 'MATTHEW', 'JACKSON', 'AA12342', 'test@umbc.edu', 'CMSC', ''),
(18, 'NICK', 'EAGLES', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(19, 'MORGAN', 'CAMPBELL', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(20, 'DAVID', 'UDWIN', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(21, 'MING', 'MA', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(22, 'DYLAN', 'DEMCHUK', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(23, 'QUANG', 'BUI', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(24, 'ELISHA', 'JOHNSUNDER', 'AA12345', 'test@umbc.edu', 'CMSC', ''),
(25, 'CELESTINE', 'WONG', 'AA12345', 'test@umbc.edu', 'CMSC', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
