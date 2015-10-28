CREATE TABLE `Proj2Advisors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1

CREATE TABLE `Proj2Appointments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Time` datetime NOT NULL,
  `AdvisorID` tinyint(4) NOT NULL COMMENT '0 for group',
  `Major` varchar(100) NOT NULL,
  `EnrolledID` mediumtext NOT NULL COMMENT 'Student ID(s)',
  `EnrolledNum` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Number of students enrolled',
  `Max` tinyint(3) unsigned NOT NULL COMMENT 'Indiv = 1; Group default = 10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=740 DEFAULT CHARSET=latin1	

CREATE TABLE `Proj2Students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `StudentID` varchar(7) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Major` varchar(100) NOT NULL,
  `Status` char(1) NOT NULL COMMENT 'N = student cancels; C = admin cancels',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1