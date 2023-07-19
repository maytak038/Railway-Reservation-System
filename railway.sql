-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 03:20 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE IF NOT EXISTS `passengers` (
  `p_id` int(30) NOT NULL AUTO_INCREMENT,
  `p_fname` varchar(30) DEFAULT NULL,
  `p_lname` varchar(30) DEFAULT NULL,
  `p_age` varchar(30) DEFAULT NULL,
  `p_contact` varchar(20) DEFAULT NULL,
  `p_gender` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `t_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`p_id`, `p_fname`, `p_lname`, `p_age`, `p_contact`, `p_gender`, `email`, `password`,`t_no`) VALUES
(1, 'Rahul', 'Dravid', '42', '9857485412', 'Male', 'rahul@dravid.com', '123123123',16205),
(2, 'Mayank', 'Takyar', '29', '1010101010', 'Male', 'mayank@w.cc', '123456789',NULL),
(3, 'Sumit', 'Sharma', '20', '9999999999', 'Male', 'sharma@gmail.com', '123123123',NULL),
(4, 'Dhruv', 'Mehta', '20', '9191919191', 'Male', 'dhruv@gmail.com', '123123123',12951),
(5,'Scarlett','Johansson','35','9874563256','Female','Johansson@hotmail.com','9876543210',13526);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `PNR` bigint NOT NULL auto_increment,
  `t_status` varchar(20) NOT NULL DEFAULT 'Confirmed',
  UNIQUE KEY `PNR` (`PNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tickets` AUTO_INCREMENT=8025285695;
--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`t_status`) VALUES
('Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `t_no` decimal(5,0) NOT NULL,
  `t_name` varchar(30) DEFAULT NULL,
  `t_source` varchar(30) DEFAULT NULL,
  `t_destination` varchar(30) DEFAULT NULL,
  `t_type` varchar(30) DEFAULT NULL,
  `t_status` varchar(20) DEFAULT 'On time',
  `no_of_seats` int(11) DEFAULT NULL,
  `t_duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`t_no`, `t_name`, `t_source`, `t_destination`, `t_type`, `t_status`, `no_of_seats`, `t_duration`) VALUES
(4971, 'garibrath', 'Udaipurr', 'Jammu Tawi', 'Express', 'On time', 550, 20),
(12284, 'duronto', 'Mumbai central', 'Ernakulum', 'AC superfast', 'On time', 800, 24),
(12859, 'geetanjali', 'CST', 'Kolkata', 'express', 'On time', 500, 25),
(12951, 'rajdhani', 'Mumbai Central', 'Delhi', 'Superfast', 'On time', 700, 15),
(16205, 'mysoreexp', 'Talguppa', 'Mysore JN', 'Express', 'On time', 475, 21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
