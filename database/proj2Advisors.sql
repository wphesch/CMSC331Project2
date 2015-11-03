-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Nov 03, 2015 at 01:37 AM
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
-- Table structure for table `Proj2Advisors`
--

CREATE TABLE IF NOT EXISTS `Proj2Advisors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RoomNumber` varchar(10) NOT NULL,
  `MeetingRoomNumber` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Proj2Advisors`
--

INSERT INTO `Proj2Advisors` (`id`, `FirstName`, `LastName`, `Username`, `Password`, `RoomNumber`, `MeetingRoomNumber`) VALUES
(2, 'Josh', 'Abrams', 'sabram2', 'sabram2', 'CMSC101', 'CMSC300'),
(3, 'Anne', 'Arey', 'annearey', 'annearey', 'CMSC102', 'CMSC301'),
(4, 'Emily', 'Abrams-Stephens', 'eastephe', 'eastephe', 'CMSC104', 'CMSC302'),
(5, 'Catherine', 'Bielawski', 'bielawski', 'bielawski', 'CMSC103', 'CMSC303'),
(6, 'Bob', 'Dole', 'bdole', 'bdole', 'CMSC333', 'CMSC304'),
(9, 'Jen', 'Smith', 'aa23456', '123456', 'CMSC444', 'CMSC305');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
