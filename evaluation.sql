-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 12:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------


--
-- Table structure for table `evaluation_data`
--

CREATE TABLE IF NOT EXISTS `evaluation_data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `student_no` varchar(100) NOT NULL,
  `Rating_Period` varchar(100) NOT NULL,
  `Semester_SY` int(20) NOT NULL,
  `sub_thought` varchar(100) NOT NULL,
  `name_of_faculty` varchar(100) NOT NULL,
  `evaluators_type` varchar(100) NOT NULL,
  `a1` int(20) NOT NULL,
  `a2` int(20) NOT NULL,
  `a3` int(20) NOT NULL,
  `a4` int(20) NOT NULL,
  `a5` int(20) NOT NULL,
  `b1` int(20) NOT NULL,
  `b2` int(20) NOT NULL,
  `b3` int(20) NOT NULL,
  `b4` int(20) NOT NULL,
  `b5` int(20) NOT NULL,
  `c1` int(20) NOT NULL,
  `c2` int(20) NOT NULL,
  `c3` int(20) NOT NULL,
  `c4` int(20) NOT NULL,
  `c5` int(20) NOT NULL,
  `d1` int(20) NOT NULL,
  `d2` int(20) NOT NULL,
  `d3` int(20) NOT NULL,
  `d4` int(20) NOT NULL,
  `d5` int(20) NOT NULL,
  `totala` int(20) NOT NULL,
  `totalb` int(20) NOT NULL,
  `totalc` int(20) NOT NULL,
  `totald` varchar(100) NOT NULL,
  `Name_of_evaluator` varchar(100) NOT NULL,
  `Position_of_evaluator` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `evaluation_data`
--


-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty`) VALUES
('1', 'Mr.Rodrigueza'),
('3', 'Mr.Gonzalgo'),
('2', 'Mr.Dipad'),
('4', 'Mr.grafia');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `SemesterID` int(11) NOT NULL,
  `SemesterName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`SemesterID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SemesterID`, `SemesterName`) VALUES
(0, 'First Semester'),
(1, 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `studentno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `blk_section` varchar(20) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `b_month` varchar(20) NOT NULL,
  `b_day` varchar(20) NOT NULL,
  `b_year` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `yearlevel` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `corfirmation` int(11) DEFAULT NULL,
  PRIMARY KEY (`studentno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45746880 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`studentno`, `username`, `lastname`, `firstname`, `middlename`, `course`, `blk_section`, `semester`, `birthdate`, `b_month`, `b_day`, `b_year`, `email`, `gender`, `yearlevel`, `password`, `type`, `corfirmation`) VALUES
(2142, 'admin', '', '', '', '', '', '', '', '', '', ' ', '', '', '', 'password', 'ADMIN', 1),
(116500, '116500', 'Decano', 'Marlon', 'Enteria', 'BSCS', '1', 'First Semester', '', '1', '26', '1996', 'lhon058@gmail.com', 'Male', 'Third Year', 'marlon26', 'STUDENT', 1),
(116432, '116432', 'Gabion', 'Juvy', 'Gojar', 'BSCS', '1', 'First Semester', '', '1', '7', '1995', 'jggabion@gmail.com', 'Female', 'Third Year', '171995', 'STUDENT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(1, 'English'),
(2, 'Humanities'),
(3, 'Software En'),
(4, 'automata'),
(5, 'soc sci'),
(6, 'calculus'),
(7, 'Math');
