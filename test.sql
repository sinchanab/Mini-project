-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 05:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `teststudent`()
SELECT * FROM student$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `cid` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `dept_no` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`cid`, `cname`, `dept_no`, `phone`, `email`, `password`) VALUES
(0, '', 0, 0, '', ''),
(100, 'sinchu', 1, 2147483647, 'sinchu@gmail.com', '1234'),
(101, 'prathiksha', 2, 2147483647, 'prathiksha@gmail.com', '1111'),
(1212, 'anas', 12, 123, 'abc@gmail.com', '123');

--
-- Triggers `coordinator`
--
DELIMITER //
CREATE TRIGGER `trigger` AFTER INSERT ON `coordinator`
 FOR EACH ROW INSERT INTO trigger_time(timestap,cid) values(NOW(),new.cid)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_no` int(20) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_no`, `dept_name`) VALUES
(1, 'ise'),
(2, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `wid` int(10) NOT NULL,
  `wname` varchar(10) NOT NULL,
  `sid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`wid`, `wname`, `sid`) VALUES
(0, '', 0),
(10, 'qwe', 123),
(14, 'java', 456),
(107, 'data analy', 1234),
(123, 'ioy', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(50) NOT NULL,
  `name` char(50) NOT NULL,
  `sem` int(50) NOT NULL,
  `Dept_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `sem`, `Dept_no`, `email`, `password`) VALUES
(0, '', 0, '', '', ''),
(121, 'sinchana b', 4, '2', 'sin@gmail.com', '123'),
(127, 'prathiksha', 2, '5', 'prat@gmail.com', '123'),
(200, 'sinchana', 5, '1', 'sinchana@gmail.com', '1234'),
(201, 'prathi', 2, '2', 'prathi@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time`
--

CREATE TABLE IF NOT EXISTS `trigger_time` (
  `cid` int(100) NOT NULL,
  `timestap` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time`
--

INSERT INTO `trigger_time` (`cid`, `timestap`) VALUES
(1212, '15:55:57'),
(0, '19:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `wid` int(20) NOT NULL,
  `wname` varchar(20) NOT NULL,
  `fees` int(20) NOT NULL,
  `duration` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wid`, `wname`, `fees`, `duration`) VALUES
(11, 'iot', 100, 100),
(14, 'java', 1200, 23),
(15, 'nodejs', 10, 10),
(111, 'python', 1500, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`dept_no`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `trigger_time`
--
ALTER TABLE `trigger_time`
 ADD KEY `cid` (`cid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
 ADD PRIMARY KEY (`wid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
