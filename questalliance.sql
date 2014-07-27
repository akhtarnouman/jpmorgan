-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2014 at 05:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `questalliance`
--
CREATE DATABASE IF NOT EXISTS `questalliance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `questalliance`;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `employer_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `validation_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `password`, `type`, `name`, `validation_status`) VALUES
('333', '12345', 'IT', 'Shreyas', 1),
('999', '12345', 'Accounting/Finance', 'meru cab', 0),
('ccd', 'z', 'retail', 'Cafe Coffee Day', 1),
('mcd', 'z', 'retail', 'Mc Donalds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `employer_id` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `salary` double NOT NULL,
  `locality` varchar(100) NOT NULL,
  `working_hours` int(11) DEFAULT NULL,
  `transport_facilities` tinyint(1) NOT NULL DEFAULT '0',
  `incentives` tinyint(1) NOT NULL DEFAULT '0',
  `accomodation` tinyint(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `interview_place` varchar(100) NOT NULL,
  PRIMARY KEY (`employer_id`,`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`employer_id`, `role`, `salary`, `locality`, `working_hours`, `transport_facilities`, `incentives`, `accomodation`, `date`, `time`, `interview_place`) VALUES
('ccd', 'waiter', 10000, 'yelahanka', 9, 0, 0, 0, '0000-00-00', '', ''),
('mcd', 'cleaner', 5000, 'yeshwantpur', 8, 0, 0, 0, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE IF NOT EXISTS `logintable` (
  `uname` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `profiletype` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`uname`, `pswd`, `profiletype`, `id`) VALUES
('nouman', '12345', 'student', '1ms11cs121'),
('sid', '12345', 'staff', '111'),
('shreyas', '12345', 'company', '333'),
('zxcv', '12345', 'company', '999');

-- --------------------------------------------------------

--
-- Table structure for table `placement_officer`
--

CREATE TABLE IF NOT EXISTS `placement_officer` (
  `officer_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `employer_id` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  PRIMARY KEY (`employer_id`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`employer_id`, `id`) VALUES
('ccd', '1ms11cs121');

-- --------------------------------------------------------

--
-- Table structure for table `shortlisted`
--

CREATE TABLE IF NOT EXISTS `shortlisted` (
  `id` varchar(100) NOT NULL,
  `employer_id` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`employer_id`,`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shortlisted`
--

INSERT INTO `shortlisted` (`id`, `employer_id`, `role`) VALUES
('1ms11cs121', 'ccd', 'waiter');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `languages` varchar(200) NOT NULL,
  `tenth_pc` float NOT NULL DEFAULT '0',
  `tenth_board` varchar(100) NOT NULL,
  `twelth_pc` float NOT NULL DEFAULT '0',
  `twelth_board` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `degree_pc` float NOT NULL DEFAULT '0',
  `degree_board` varchar(100) NOT NULL,
  `tenth_cs` varchar(50) NOT NULL,
  `tenth_yr` int(10) NOT NULL,
  `twelth_cs` varchar(50) NOT NULL,
  `twelth_yr` int(10) NOT NULL,
  `degree_cs` varchar(50) NOT NULL,
  `degree_yr` int(10) NOT NULL,
  `degree_insti` varchar(50) NOT NULL,
  `strengths` varchar(200) NOT NULL,
  `hobbies` varchar(200) NOT NULL,
  `courses` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `match_percentage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `dob`, `nationality`, `languages`, `tenth_pc`, `tenth_board`, `twelth_pc`, `twelth_board`, `school`, `college`, `degree_pc`, `degree_board`, `tenth_cs`, `tenth_yr`, `twelth_cs`, `twelth_yr`, `degree_cs`, `degree_yr`, `degree_insti`, `strengths`, `hobbies`, `courses`, `experience`, `batch_no`, `gender`, `locality`, `address`, `match_percentage`) VALUES
('1ms11cs121', 'Syed Nouman Akhtar', 'akhtarnouman@gmail.com', 8095112670, '2014-03-14', 'Indian', 'English', 82, 'ICSE', 82, 'ISC', 'SKPS', 'MNPS', 9.13, 'VTU', 'S.S.L.C', 2008, 'P.U.C', 2010, 'B.E', 2015, 'MSRIT', 'hello', 'Cricket', 'Computer Science', '', 11, 'Male', 'Bangalore', 'MSRIT hostel.', 100);

-- --------------------------------------------------------

--
-- Table structure for table `student_pref`
--

CREATE TABLE IF NOT EXISTS `student_pref` (
  `id` varchar(100) NOT NULL,
  `locality` varchar(100) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `working_hours` int(11) DEFAULT NULL,
  `incentives` tinyint(1) NOT NULL DEFAULT '0',
  `accomodation` tinyint(1) NOT NULL DEFAULT '0',
  `transport_facilities` tinyint(1) NOT NULL DEFAULT '0',
  `role` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_pref`
--

INSERT INTO `student_pref` (`id`, `locality`, `salary`, `working_hours`, `incentives`, `accomodation`, `transport_facilities`, `role`) VALUES
('1ms11cs121', 'yelahanka', 10000, 9, 0, 0, 0, 'waiter');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
