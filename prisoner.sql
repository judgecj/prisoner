-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2013 at 06:02 AM
-- Server version: 5.5.32-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--

-- --------------------------------------------------------

-- Dumping data for table `prisoner`



--
-- Table structure for table `prisoner_p`
--



CREATE TABLE IF NOT EXISTS `prisoner_p` (
  `first_name` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `lastname` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cell_id` INT (15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `number` INT (8) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `image` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


-- Dumping data for table `buildings`

CREATE TABLE IF NOT EXISTS `buildings` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `date` varchar(50) COLLATE latin1_general_ci CURRENT_TIMESTAMP '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- Table structure for table `cells`
--



CREATE TABLE IF NOT EXISTS `cells` (
  `block_id` INT (11) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `position` INT (50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `name` VARCHAR (30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


-- Table structure for table `users`
--



CREATE TABLE IF NOT EXISTS `users` (
  `username` INT (11) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` INT (50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `hashed_password` VARCHAR (50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



INSERT INTO `book_mast` (`book_id`, `book_name`, `isbn_no`, `cate_id`, `aut_id`, `pub_id`, `dt_of_pub`, `pub_lang`, `no_page`, `book_price`) VALUES
('BK001', 'Introduction to Electrodynamics', '0000979001', 'CA001', 'AUT001', 'P003', '2001-05-08', 'English', 201, 85.00),
('BK002', 'Understanding of Steel Construction', '0000979002', 'CA002', 'AUT002', 'P001', '2003-07-15', 'English', 300, 105.50),
('BK003', 'Guide to Networking', '0000979003', 'CA003', 'AUT003', 'P002', '2002-09-10', 'Hindi', 510, 200.00),
('BK004', 'Transfer  of Heat and Mass', '0000979004', 'CA002', 'AUT004', 'P004', '2004-02-16', 'English', 600, 250.00),
('BK005', 'Conceptual Physics', '0000979005', 'CA001', 'AUT005', 'P006', '2003-07-16', NULL, 345, 145.00),
('BK006', 'Fundamentals of Heat', '0000979006', 'CA001', 'AUT006', 'P005', '2003-08-10', 'German', 247, 112.00),
('BK007', 'Advanced 3d Graphics', '0000979007', 'CA003', 'AUT007', 'P002', '2004-02-16', 'Hindi', 165, 56.00),
('BK008', 'Human Anatomy', '0000979008', 'CA005', 'AUT008', 'P006', '2001-05-17', 'German', 88, 50.50),
('BK009', 'Mental Health Nursing', '0000979009', 'CA005', 'AUT009', 'P007', '2004-02-10', 'English', 350, 145.00),
('BK010', 'Fundamentals of Thermodynamics', '0000979010', 'CA002', 'AUT010', 'P007', '2002-10-14', 'English', 400, 225.00),
('BK011', 'The Experimental Analysis of Cat', '0000979011', 'CA004', 'AUT011', 'P005', '2007-06-09', 'French', 225, 95.00),
('BK012', 'The Nature  of World', '0000979012', 'CA004', 'AUT005', 'P008', '2005-12-20', 'English', 350, 88.00),
('BK013', 'Environment a Sustainable Future', '0000979013', 'CA004', 'AUT012', 'P001', '2003-10-27', 'German', 165, 100.00),
('BK014', 'Concepts in Health', '0000979014', 'CA005', 'AUT013', 'P004', '2001-08-25', NULL, 320, 180.00),
('BK015', 'Anatomy & Physiology', '0000979015', 'CA005', 'AUT014', 'P008', '2000-10-10', 'Hindi', 225, 135.00),
('BK016', 'Networks and Telecommunications', '00009790_16', 'CA003', 'AUT015', 'P003', '2002-01-01', 'French', 95, 45.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
