-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2019 at 04:13 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binarynote`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(10) NOT NULL,
  `name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(10) DEFAULT NULL,
  `question` char(255) DEFAULT NULL,
  `option1` char(250) DEFAULT NULL,
  `option2` char(250) DEFAULT NULL,
  `option3` char(250) DEFAULT NULL,
  `option4` char(25) DEFAULT NULL,
  `ans` char(10) DEFAULT NULL,
  `exp` char(25) DEFAULT NULL,
  `gid` int(10) DEFAULT NULL,
  `sid` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`, `exp`, `gid`, `sid`) VALUES
(1, 'Who is ramji', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(2, 'Who is ramesh', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(3, 'Who is archana', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(4, 'Who is radhika', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(5, 'vipul radhika', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(6, 'ram krishna adhika', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(7, 'ram krishna adhika', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(8, 'manwar singh', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(10, 'suria singh', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(11, 'raju bishnoi', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(12, 'jm sharma', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(13, 'vivek singh', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(14, 'vishkha singh', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(15, 'priya jain', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4),
(16, 'puneet jain', 'king', 'prince', 'server', 'network', 'A', 'No explaination', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(10) NOT NULL,
  `name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
