-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Nov 03, 2015 at 01:38 AM
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
-- Table structure for table `Proj2Appointments`
--

CREATE TABLE IF NOT EXISTS `Proj2Appointments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Time` datetime NOT NULL,
  `AdvisorID` tinyint(4) NOT NULL COMMENT '0 for group',
  `Major` varchar(100) NOT NULL,
  `EnrolledID` mediumtext NOT NULL COMMENT 'Student ID(s)',
  `EnrolledNum` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Number of students enrolled',
  `Max` tinyint(3) unsigned NOT NULL COMMENT 'Indiv = 1; Group default = 10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=763 ;

--
-- Dumping data for table `Proj2Appointments`
--

INSERT INTO `Proj2Appointments` (`id`, `Time`, `AdvisorID`, `Major`, `EnrolledID`, `EnrolledNum`, `Max`) VALUES
(16, '2016-09-07 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(17, '2016-09-07 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(19, '2016-09-07 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(20, '2016-09-07 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(22, '2016-09-07 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(25, '2016-09-07 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(26, '2016-09-07 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(27, '2016-09-07 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(28, '2016-09-07 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(29, '2016-09-08 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(30, '2016-09-08 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(31, '2016-09-08 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(32, '2016-09-08 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(33, '2016-09-08 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(34, '2016-09-08 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(35, '2016-09-08 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(36, '2016-09-08 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(37, '2016-09-08 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(38, '2016-09-08 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(39, '2016-09-08 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(40, '2016-09-08 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(41, '2016-09-08 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(42, '2016-09-08 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(43, '2016-09-03 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(45, '2016-09-03 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(46, '2016-09-03 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(47, '2016-09-03 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(48, '2016-09-03 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(49, '2016-09-03 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(50, '2016-09-03 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(53, '2016-09-03 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(54, '2016-09-03 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(55, '2016-09-03 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(56, '2016-09-03 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(57, '2016-09-04 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(58, '2016-09-04 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(59, '2016-09-04 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(60, '2016-09-04 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(61, '2016-09-04 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(62, '2016-09-04 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(63, '2016-09-04 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(64, '2016-09-04 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(67, '2016-09-04 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(68, '2016-09-04 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(69, '2016-09-04 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(70, '2016-09-04 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(71, '2016-09-09 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(72, '2016-09-09 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(73, '2016-09-09 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(74, '2016-09-09 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(75, '2016-09-09 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(76, '2016-09-09 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(77, '2016-09-09 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(78, '2016-09-09 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(79, '2016-09-09 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(80, '2016-09-09 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(81, '2016-09-09 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(82, '2016-09-09 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(83, '2016-09-09 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(84, '2016-09-09 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(85, '2016-09-14 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(86, '2016-09-14 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(87, '2016-09-14 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(88, '2016-09-14 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(89, '2016-09-14 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(90, '2016-09-14 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(91, '2016-09-14 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(92, '2016-09-14 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(93, '2016-09-14 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(94, '2016-09-14 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(95, '2016-09-14 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(96, '2016-09-14 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(97, '2016-09-14 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(98, '2016-09-14 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(99, '2016-09-15 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(100, '2016-09-15 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(101, '2016-09-15 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(102, '2016-09-15 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(103, '2016-09-15 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(104, '2016-09-15 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(105, '2016-09-15 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(106, '2016-09-15 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(107, '2016-09-15 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(108, '2016-09-15 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(109, '2016-09-15 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(110, '2016-09-15 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(111, '2016-09-15 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(112, '2016-09-15 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(113, '2016-09-10 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(114, '2016-09-10 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(115, '2016-09-10 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(116, '2016-09-10 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(117, '2016-09-10 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(118, '2016-09-10 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(119, '2016-09-10 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(120, '2016-09-10 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(121, '2016-09-10 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(122, '2016-09-10 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(123, '2016-09-10 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(124, '2016-09-10 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(125, '2016-09-10 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(126, '2016-09-10 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(127, '2016-09-11 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(128, '2016-09-11 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(129, '2016-09-11 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(130, '2016-09-11 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(131, '2016-09-11 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(132, '2016-09-11 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(133, '2016-09-11 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(134, '2016-09-11 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(135, '2016-09-11 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(136, '2016-09-11 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(137, '2016-09-11 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(138, '2016-09-11 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(139, '2016-09-11 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(140, '2016-09-11 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(141, '2016-09-16 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(142, '2016-09-16 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(143, '2016-09-16 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(144, '2016-09-16 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(145, '2016-09-16 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(146, '2016-09-16 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(147, '2016-09-16 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(148, '2016-09-16 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(149, '2016-09-16 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(150, '2016-09-16 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(151, '2016-09-16 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(152, '2016-09-16 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(153, '2016-09-16 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(154, '2016-09-16 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(155, '2016-09-21 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(156, '2016-09-21 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(157, '2016-09-21 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(158, '2016-09-21 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(159, '2016-09-21 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(160, '2016-09-21 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(161, '2016-09-21 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(162, '2016-09-21 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(163, '2016-09-21 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(164, '2016-09-21 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(165, '2016-09-21 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(166, '2016-09-21 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(167, '2016-09-21 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(168, '2016-09-21 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(169, '2016-09-22 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(170, '2016-09-22 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(171, '2016-09-22 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(172, '2016-09-22 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(173, '2016-09-22 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(174, '2016-09-22 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(175, '2016-09-22 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(176, '2016-09-22 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(177, '2016-09-22 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(178, '2016-09-22 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(179, '2016-09-22 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(180, '2016-09-22 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(181, '2016-09-22 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(182, '2016-09-22 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(183, '2016-09-17 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(184, '2016-09-17 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(185, '2016-09-17 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(186, '2016-09-17 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(187, '2016-09-17 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(188, '2016-09-17 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(189, '2016-09-17 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(190, '2016-09-17 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(191, '2016-09-17 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(192, '2016-09-17 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(193, '2016-09-17 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(194, '2016-09-17 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(195, '2016-09-17 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(196, '2016-09-17 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(197, '2016-09-18 08:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(198, '2016-09-18 08:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(199, '2016-09-18 09:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(200, '2016-09-18 09:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(201, '2016-09-18 10:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(202, '2016-09-18 10:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(203, '2016-09-18 11:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(204, '2016-09-18 11:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(205, '2016-09-18 13:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(206, '2016-09-18 13:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(207, '2016-09-18 14:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(208, '2016-09-18 14:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(209, '2016-09-18 15:00:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(210, '2016-09-18 15:30:00', 2, 'CMPE CMSC MENG CENG ', '', 0, 1),
(211, '2016-10-12 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(212, '2016-10-12 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(213, '2016-10-12 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(214, '2016-10-12 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(215, '2016-10-12 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(216, '2016-10-12 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(217, '2016-10-12 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(218, '2016-10-12 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(219, '2016-10-13 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(220, '2016-10-13 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(221, '2016-10-13 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(222, '2016-10-13 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(223, '2016-10-13 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(224, '2016-10-13 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(225, '2016-10-13 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(227, '2016-10-14 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(228, '2016-10-14 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(229, '2016-10-14 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(230, '2016-10-14 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(231, '2016-10-14 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(232, '2016-10-14 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(233, '2016-10-14 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(234, '2016-10-14 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(235, '2016-10-15 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(236, '2016-10-15 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(237, '2016-10-15 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(238, '2016-10-15 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(239, '2016-10-15 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(240, '2016-10-15 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(241, '2016-10-15 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(242, '2016-10-15 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(243, '2016-10-16 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(244, '2016-10-16 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(245, '2016-10-16 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(246, '2016-10-16 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(247, '2016-10-16 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(248, '2016-10-16 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(249, '2016-10-16 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(250, '2016-10-16 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(251, '2016-10-19 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(252, '2016-10-19 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(253, '2016-10-19 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(254, '2016-10-19 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(255, '2016-10-19 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(256, '2016-10-19 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(257, '2016-10-19 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(258, '2016-10-19 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(259, '2016-10-20 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(260, '2016-10-20 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(261, '2016-10-20 10:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(262, '2016-10-20 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(263, '2016-10-20 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(264, '2016-10-20 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(265, '2016-10-20 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(266, '2016-10-20 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(267, '2016-10-21 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(268, '2016-10-21 10:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(270, '2016-10-21 11:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(271, '2016-10-21 13:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(272, '2016-10-21 14:00:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(273, '2016-10-21 14:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(274, '2016-10-21 15:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(275, '2016-10-22 09:30:00', 3, 'CMPE CMSC MENG ', '', 0, 1),
(371, '2016-09-08 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(372, '2016-09-08 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(373, '2016-09-08 09:30:00', 4, 'CMPE CMSC MENG CENG ', 'AA12341', 1, 1),
(374, '2016-09-08 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(375, '2016-09-08 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(376, '2016-09-08 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(377, '2016-09-14 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(378, '2016-09-14 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(379, '2016-09-14 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(380, '2016-09-14 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(381, '2016-09-14 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(382, '2016-09-14 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(383, '2016-09-09 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(384, '2016-09-09 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(385, '2016-09-09 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(386, '2016-09-09 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(387, '2016-09-09 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(388, '2016-09-09 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(389, '2016-09-10 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(390, '2016-09-10 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(391, '2016-09-10 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(392, '2016-09-10 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(393, '2016-09-10 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(394, '2016-09-10 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(395, '2016-09-15 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(396, '2016-09-15 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(397, '2016-09-15 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(398, '2016-09-15 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(399, '2016-09-15 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(400, '2016-09-15 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(401, '2016-09-21 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(402, '2016-09-21 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(403, '2016-09-21 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(404, '2016-09-21 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(405, '2016-09-21 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(406, '2016-09-21 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(407, '2016-09-16 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(408, '2016-09-16 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(409, '2016-09-16 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(410, '2016-09-16 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(411, '2016-09-16 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(412, '2016-09-16 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(413, '2016-09-17 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(414, '2016-09-17 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(415, '2016-09-17 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(416, '2016-09-17 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(417, '2016-09-17 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(418, '2016-09-17 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(419, '2016-09-22 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(420, '2016-09-22 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(421, '2016-09-22 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(422, '2016-09-22 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(423, '2016-09-22 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(424, '2016-09-22 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(425, '2016-09-28 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(426, '2016-09-28 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(427, '2016-09-28 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(428, '2016-09-28 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(429, '2016-09-28 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(430, '2016-09-28 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(431, '2016-09-23 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(432, '2016-09-23 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(433, '2016-09-23 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(434, '2016-09-23 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(435, '2016-09-23 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(436, '2016-09-23 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(437, '2016-09-24 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(438, '2016-09-24 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(439, '2016-09-24 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(440, '2016-09-24 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(441, '2016-09-24 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(442, '2016-09-24 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(443, '2016-09-29 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(444, '2016-09-29 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(445, '2016-09-29 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(446, '2016-09-29 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(447, '2016-09-29 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(448, '2016-09-29 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(449, '2016-10-05 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(450, '2016-10-05 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(451, '2016-10-05 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(452, '2016-10-05 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(453, '2016-10-05 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(454, '2016-10-05 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(455, '2016-09-30 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(456, '2016-09-30 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(457, '2016-09-30 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(458, '2016-09-30 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(459, '2016-09-30 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(460, '2016-09-30 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(461, '2016-10-01 08:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(462, '2016-10-01 09:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(463, '2016-10-01 09:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(464, '2016-10-01 14:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(465, '2016-10-01 15:00:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(466, '2016-10-01 15:30:00', 4, 'CMPE CMSC MENG CENG ', '', 0, 1),
(467, '2016-10-05 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(469, '2016-10-05 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(470, '2016-10-05 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(471, '2016-10-05 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(472, '2016-10-05 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(473, '2016-10-05 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(474, '2016-10-05 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(475, '2016-10-05 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(476, '2016-10-05 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(477, '2016-10-06 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(478, '2016-10-06 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(479, '2016-10-06 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(480, '2016-10-06 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(481, '2016-10-06 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(482, '2016-10-06 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(483, '2016-10-06 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(484, '2016-10-06 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(485, '2016-10-06 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(486, '2016-10-06 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(487, '2016-10-07 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(488, '2016-10-07 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(489, '2016-10-07 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(490, '2016-10-07 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(491, '2016-10-07 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(492, '2016-10-07 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(493, '2016-10-07 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(494, '2016-10-07 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(495, '2016-10-07 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(496, '2016-10-07 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(497, '2016-10-08 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(498, '2016-10-08 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(499, '2016-10-08 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(500, '2016-10-08 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(501, '2016-10-08 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(502, '2016-10-08 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(503, '2016-10-08 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(504, '2016-10-08 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(505, '2016-10-08 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(506, '2016-10-08 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(507, '2016-10-09 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(508, '2016-10-09 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(509, '2016-10-09 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(510, '2016-10-09 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(511, '2016-10-09 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(512, '2016-10-09 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(513, '2016-10-09 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(514, '2016-10-09 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(515, '2016-10-09 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(516, '2016-10-09 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(517, '2016-10-12 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(518, '2016-10-12 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(519, '2016-10-12 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(520, '2016-10-12 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(521, '2016-10-12 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(522, '2016-10-12 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(523, '2016-10-12 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(524, '2016-10-12 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(525, '2016-10-12 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(526, '2016-10-12 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(527, '2016-10-13 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(528, '2016-10-13 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(529, '2016-10-13 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(530, '2016-10-13 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(531, '2016-10-13 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(532, '2016-10-13 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(533, '2016-10-13 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(534, '2016-10-13 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(535, '2016-10-13 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(536, '2016-10-13 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(537, '2016-10-14 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(538, '2016-10-14 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(539, '2016-10-14 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(540, '2016-10-14 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(541, '2016-10-14 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(542, '2016-10-14 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(543, '2016-10-14 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(544, '2016-10-14 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(545, '2016-10-14 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(546, '2016-10-14 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(547, '2016-10-15 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(548, '2016-10-15 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(549, '2016-10-15 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(550, '2016-10-15 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(551, '2016-10-15 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(552, '2016-10-15 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(553, '2016-10-15 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(554, '2016-10-15 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(555, '2016-10-15 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(556, '2016-10-15 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(557, '2016-10-16 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(558, '2016-10-16 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(559, '2016-10-16 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(560, '2016-10-16 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(561, '2016-10-16 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(562, '2016-10-16 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(563, '2016-10-16 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(564, '2016-10-16 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(565, '2016-10-16 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(566, '2016-10-16 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(567, '2016-10-19 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(568, '2016-10-19 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(569, '2016-10-19 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(570, '2016-10-19 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(571, '2016-10-19 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(572, '2016-10-19 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(573, '2016-10-19 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(574, '2016-10-19 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(575, '2016-10-19 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(576, '2016-10-19 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(577, '2016-10-20 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(578, '2016-10-20 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(579, '2016-10-20 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(580, '2016-10-20 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(581, '2016-10-20 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(582, '2016-10-20 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(583, '2016-10-20 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(584, '2016-10-20 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(585, '2016-10-20 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(586, '2016-10-20 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(587, '2016-10-21 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(588, '2016-10-21 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(589, '2016-10-21 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(590, '2016-10-21 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(591, '2016-10-21 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(592, '2016-10-21 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(593, '2016-10-21 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(594, '2016-10-21 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(595, '2016-10-21 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(596, '2016-10-21 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(597, '2016-10-22 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(598, '2016-10-22 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(599, '2016-10-22 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(600, '2016-10-22 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(601, '2016-10-22 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(602, '2016-10-22 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(603, '2016-10-22 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(604, '2016-10-22 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(605, '2016-10-22 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(606, '2016-10-22 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(607, '2016-10-23 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(608, '2016-10-23 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(609, '2016-10-23 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(610, '2016-10-23 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(611, '2016-10-23 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(612, '2016-10-23 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(613, '2016-10-23 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(614, '2016-10-23 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(615, '2016-10-23 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(616, '2016-10-23 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(617, '2016-10-26 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(618, '2016-10-26 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(619, '2016-10-26 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(620, '2016-10-26 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(621, '2016-10-26 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(622, '2016-10-26 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(623, '2016-10-26 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(624, '2016-10-26 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(625, '2016-10-26 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(626, '2016-10-26 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(627, '2016-10-27 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(628, '2016-10-27 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(629, '2016-10-27 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(630, '2016-10-27 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(631, '2016-10-27 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(632, '2016-10-27 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(633, '2016-10-27 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(634, '2016-10-27 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(635, '2016-10-27 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(636, '2016-10-27 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(637, '2016-10-28 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(638, '2016-10-28 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(639, '2016-10-28 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(640, '2016-10-28 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(641, '2016-10-28 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(642, '2016-10-28 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(643, '2016-10-28 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(644, '2016-10-28 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(645, '2016-10-28 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(646, '2016-10-28 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(647, '2016-10-29 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(648, '2016-10-29 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(649, '2016-10-29 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(650, '2016-10-29 09:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(651, '2016-10-29 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(652, '2016-10-29 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(653, '2016-10-29 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(654, '2016-10-29 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(655, '2016-10-29 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(656, '2016-10-29 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(657, '2016-10-30 08:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(658, '2016-10-30 08:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(659, '2016-10-30 09:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(661, '2016-10-30 10:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(662, '2016-10-30 13:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(663, '2016-10-30 14:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(664, '2016-10-30 14:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(665, '2016-10-30 15:00:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(666, '2016-10-30 15:30:00', 5, 'CMPE CMSC MENG CENG ', '', 0, 1),
(667, '2016-09-08 08:00:00', 5, 'CMPE ', '', 0, 1),
(668, '2016-09-08 08:30:00', 5, 'CMPE ', '', 0, 1),
(669, '2016-09-08 15:30:00', 5, 'CMPE ', '', 0, 1),
(670, '2016-09-11 08:00:00', 5, 'CENG ', '', 0, 1),
(671, '2016-09-11 09:00:00', 5, 'CENG ', '', 0, 1),
(672, '2016-09-11 15:00:00', 5, 'CENG ', '', 0, 1),
(673, '2016-09-11 15:30:00', 5, 'CENG ', '', 0, 1),
(674, '2016-09-15 14:00:00', 5, 'CMSC MENG ', '', 0, 1),
(675, '2016-09-15 14:30:00', 5, 'CMSC MENG ', '', 0, 1),
(676, '2016-09-15 15:00:00', 5, 'CMSC MENG ', '', 0, 1),
(677, '2016-09-15 15:30:00', 5, 'CMSC MENG ', '', 0, 1),
(747, '2015-08-01 08:00:00', 0, 'CMPE CMSC MENG CENG ', '', 0, 10),
(748, '2015-10-29 08:30:00', 0, 'CMPE CMSC MENG CENG ', '', 0, 10),
(753, '2015-08-01 15:00:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(754, '2015-08-01 13:00:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(755, '2015-08-01 13:30:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(756, '2015-08-01 14:00:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(758, '2015-10-30 13:30:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(759, '2015-10-30 14:00:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(760, '2015-10-30 14:30:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1),
(761, '2015-10-30 15:00:00', 6, 'CMPE CMSC MENG CENG ', '', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
