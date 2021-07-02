-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 08:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbforum`
--
DROP DATABASE IF EXISTS `dbforum`;
CREATE DATABASE IF NOT EXISTS `dbforum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbforum`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(12) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `category`:
--

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'programming'),
(2, 'networking'),
(3, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE IF NOT EXISTS `tblaccount` (
  `accnt_Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`accnt_Id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tblaccount`:
--   `user_Id`
--       `tbluser` -> `user_Id`
--

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`accnt_Id`, `username`, `password`, `user_Id`) VALUES
(1, 'abhishek', '92706ba4fd3022cede6d1610b17a0d2d', 1),
(2, 'brishti', 'b3725122c9d3bfef5664619e08e31877', 2),
(3, 'shinjini', '5d697fe3cff6e1b10e6041ae04549a0a', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbladmin`:
--

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE IF NOT EXISTS `tblcomment` (
  `comment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) DEFAULT NULL,
  `post_Id` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `user_Id` int(12) DEFAULT NULL,
  PRIMARY KEY (`comment_Id`),
  KEY `user_Id` (`user_Id`),
  KEY `post_Id` (`post_Id`),
  KEY `user_Id_2` (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tblcomment`:
--   `user_Id`
--       `tbluser` -> `user_Id`
--   `post_Id`
--       `tblpost` -> `post_Id`
--

--
-- Dumping data for table `tblcomment`
--

INSERT INTO `tblcomment` (`comment_Id`, `comment`, `post_Id`, `datetime`, `user_Id`) VALUES
(1, 'Can anyone describe a red-black tree in detail?', 1, '2019-10-22 02:52:00', 1),
(2, 'How do you enable telnet on a Windows command line?', 2, '2019-10-22 02:52:27', 2),
(3, 'Netcat is a telnet type utility.', 3, '2019-11-04 10:15:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllikecomment`
--

CREATE TABLE IF NOT EXISTS `tbllikecomment` (
  `post_Id` int(11) NOT NULL,
  `comment_Id` int(11) NOT NULL,
  `user_Id` int(12) NOT NULL,
  PRIMARY KEY (`post_Id`,`comment_Id`,`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbllikecomment`:
--

--
-- Dumping data for table `tbllikecomment`
--

INSERT INTO `tbllikecomment` (`post_Id`, `comment_Id`, `user_Id`) VALUES
(1, 1, 1),
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbllikepost`
--

CREATE TABLE IF NOT EXISTS `tbllikepost` (
  `post_Id` int(11) NOT NULL,
  `user_Id` int(12) NOT NULL,
  PRIMARY KEY (`post_Id`,`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbllikepost`:
--

--
-- Dumping data for table `tbllikepost`
--

INSERT INTO `tbllikepost` (`post_Id`, `user_Id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE IF NOT EXISTS `tblpost` (
  `post_Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `cat_id` int(12) DEFAULT NULL,
  `user_Id` int(12) DEFAULT NULL,
  PRIMARY KEY (`post_Id`),
  KEY `cat_id` (`cat_id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tblpost`:
--   `cat_id`
--       `category` -> `cat_id`
--

--
-- Dumping data for table `tblpost`
--

INSERT INTO `tblpost` (`post_Id`, `title`, `content`, `datetime`, `cat_id`, `user_Id`) VALUES
(1, 'Welcome', 'This is to invite everyone cordially to this forum.\r\n                        ', '2019-10-22 02:46:55', 1, 0),
(2, 'Hi', 'This is my first time here!                        ', '2019-10-22 02:49:20', 2, 2),
(3, 'Socket', 'What is netcat?               ', '2019-11-04 10:15:24', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbluser`:
--

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_Id`, `fname`, `lname`, `gender`) VALUES
(1, 'Abhishek', 'Mitra', 'Male'),
(2, 'Ashabari', 'Basu Thakur', 'Female'),
(3, 'Shinjini', 'Sanyal', 'Female');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD CONSTRAINT `tblaccount_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `tbluser` (`user_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD CONSTRAINT `tblcomment_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `tbluser` (`user_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcomment_ibfk_2` FOREIGN KEY (`post_Id`) REFERENCES `tblpost` (`post_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpost`
--
ALTER TABLE `tblpost`
  ADD CONSTRAINT `tblpost_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
