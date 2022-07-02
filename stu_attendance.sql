-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2022 at 04:13 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stu_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `atten`
--

CREATE TABLE `atten` (
  `class` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `att` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atten`
--

INSERT INTO `atten` (`class`, `sname`, `reg`, `att`, `date`, `hour`) VALUES
('II year', 'Ajay', '80101010', 'OnDuty', '2022-01-11', '1'),
('II year', 'Ajay', '80101010', 'Present', '2022-01-11', '2'),
('II year', 'Ajay', '80101010', 'Present', '2022-01-11', '3'),
('II year', 'Ajay', '80101010', 'Absent', '2022-01-11', '5'),
('II year', 'Ajay', '80101010', 'Present', '2022-03-03', '1'),
('II year', 'Ajay', '80101010', 'Present', '2022-05-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `gender`, `age`, `email`, `phone`, `quali`, `dept`, `address`, `uname`, `psw`) VALUES
('1', 'admin', 'male', '24', 'vinothk1216@gmail.com', '9087408476', 'test', 'cpd', 'trichy', 'admin', '111'),
('2', 'test', 'male', '21', 'test@gmail.com', '9087408476', 'bca', 'test dept', 'trichy', 'test', '111');

-- --------------------------------------------------------

--
-- Table structure for table `fregister`
--

CREATE TABLE `fregister` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fregister`
--

INSERT INTO `fregister` (`id`, `name`, `gender`, `age`, `email`, `phone`, `dept`, `class`, `desig`, `psw`) VALUES
(1, 'vinoth', 'male', '30', 'test@gmail.com', '9087408476', 'computr application', 'bca a', 'Assistant profesor', '111'),
(2, 'Sankar', 'male', '35', 'sankar@mail.com', '7890456767', 'CSE', 'II year', 'Asst.Professor', '123');

-- --------------------------------------------------------

--
-- Table structure for table `leave1`
--

CREATE TABLE `leave1` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave1`
--

INSERT INTO `leave1` (`id`, `name`, `date`, `reason`, `status`) VALUES
(1, 'admin', '2020-05-27', 'fever', 'Accept'),
(2, 'admin', '2020-05-29', 'test reason', 'Reject'),
(3, 'admin', '2020-06-02', 'test reason', 'Reject'),
(4, 'admin', '2020-06-02', 'test reason', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `satten`
--

CREATE TABLE `satten` (
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `att` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satten`
--

INSERT INTO `satten` (`name`, `dept`, `att`, `date`, `month`) VALUES
('admin', 'cpd', 'Present', '2020-02-20', '02'),
('test', 'test dept', 'Absent', '2020-02-20', '02'),
('admin', 'cpd', 'Present', '2020-02-01', '02'),
('test', 'test dept', 'Absent', '2020-02-01', '02'),
('admin', 'cpd', 'Present', '2020-02-02', '02'),
('test', 'test dept', 'Present', '2020-02-02', '02'),
('admin', 'cpd', 'Absent', '2020-02-17', '02'),
('test', 'test dept', 'Present', '2020-02-17', '02'),
('admin', 'cpd', 'Present', '2020-02-11', '02'),
('test', 'test dept', 'Present', '2020-02-11', '02'),
('admin', 'cpd', 'Present', '2020-02-18', '02'),
('test', 'test dept', 'Present', '2020-02-18', '02'),
('admin', 'cpd', 'Present', '2020-02-28', '02'),
('test', 'test dept', 'Present', '2020-02-28', '02'),
('admin', 'cpd', 'Present', '2020-02-25', '02'),
('test', 'test dept', 'Present', '2020-02-25', '02'),
('admin', 'cpd', 'Present', '2020-02-27', '02'),
('test', 'test dept', 'Present', '2020-02-27', '02'),
('admin', 'cpd', 'Present', '2020-02-24', '02'),
('test', 'test dept', 'Present', '2020-02-24', '02'),
('admin', 'cpd', 'Present', '2020-02-10', '02'),
('test', 'test dept', 'Present', '2020-02-10', '02'),
('test', 'test dept', 'Present', '2020-03-16', '03'),
('test', 'test dept', 'Absent', '2020-03-15', '03'),
('admin', 'cpd', 'Present', '2020-03-16', '03');

-- --------------------------------------------------------

--
-- Table structure for table `sregister`
--

CREATE TABLE `sregister` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sregister`
--

INSERT INTO `sregister` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `dept`, `class`, `year`, `reg`) VALUES
(1, 'vinoth', 'male', '1999-03-23', 'test@gmail.com', '9087408476', 'computr application', 'bca a', '3rd year', 'ug1901'),
(2, 'vinoth', 'male', '1999-03-23', 'test@gmail.com', '9087408476', 'computer Application', 'bca a', '2019', 'ug1902'),
(3, 'krithika', 'female', '2000-01-17', 'test@gmail.com', '9087408476', 'computr application', 'bca a', '2020', 'ug1903'),
(4, 'vinoth', 'male', '1999-03-23', 'ragulmohan2525@gmail.com', '9087408475', 'computer application', 'bca a', '2020', 'ug1901'),
(5, 'priya', 'female', '1999-05-21', 'test@gmail.com', '9087408475', 'computer application', 'bca a', '2021', '432'),
(6, 'Ajay', 'male', '2000-10-10', 'ajay@mail.com', '9876987654', 'CSE', 'II year', 'II year', '80101010');
