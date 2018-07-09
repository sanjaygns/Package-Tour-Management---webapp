-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2013 at 03:23 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `packagetours`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `p_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `bill_no` int(11) NOT NULL DEFAULT '0',
  `book_id` int(11) NOT NULL,
  `book_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_no`,`customer_id`,`bill_no`,`book_id`),
  KEY `customer_id` (`customer_id`),
  KEY `bill_no` (`bill_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(6) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `locality` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `Phoneno` varchar(14) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100007 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `first_name`, `last_name`, `password`, `email_id`, `street`, `locality`, `city`, `pin`, `Phoneno`) VALUES
(100000, 'Mr. Sanjay', 'N', 'sasa', 'snjugns@gmail.com', '12', 'mg road', 'Bangalore', '560023', '9738024241'),
(100001, 'Mr. Sanjay', 'N', 'sa', 'snjugnsa@gmail.com', '12', 'mg road', 'Bangalore', '560023', '9738024241'),
(100002, 'Mr. Sanjay', 'N', 'sa', 'snjaugnsa@gmail.com', '12', 'mg road', 'Bangalore', '560023', '9738024241'),
(100003, 'Mr. Sanjay', 'N', 'sa', 'snjaugnsa@agmail.com', '12', 'mg road', 'Bangalore', '560023', '9738024241'),
(100004, 'Mr. Sanjay3via stp', 'N', '123456', 'snjugns@gmail.comh', '12', 'mg road', 'Bangalore', '560023', '9738024241'),
(100005, 'Ms. anupama', 'N', '123', 'fd@df698962', '12', 'mg road', 'Bangalore', '560023', '9738024241'),
(100006, ' ', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `service_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'lunch',
  `hotel` varchar(20) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`service_id`, `type`, `hotel`) VALUES
(19, 'lunch', '12'),
(21, 'dinner', 'ff'),
(33, 'lunch', '1sd'),
(34, 'lunch', 'dabba'),
(35, 'lunch', 'ff'),
(37, 'lunch', 'kall'),
(38, 'lunch', 'dabba'),
(39, 'lunch', 'hohihi');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `l_name` varchar(20) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `transport_means` varchar(20) NOT NULL DEFAULT 'bus',
  `p_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`l_name`,`p_no`),
  KEY `p_no` (`p_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_name`, `start_time`, `end_time`, `transport_means`, `p_no`) VALUES
('bbb', '2013-04-29 01:00:00', '2013-04-30 01:00:00', 'bus', 15),
('da', '2013-04-24 01:00:00', '2013-05-02 01:00:00', 'bus', 9),
('da', '2013-04-18 00:12:00', '2013-05-10 00:12:00', 'bus', 16),
('dadgjashdags', '2013-05-08 00:12:00', '2013-05-09 02:12:00', 'dajda', 23),
('kadur', '2013-05-01 01:00:00', '2013-05-08 01:00:00', 'bus', 11),
('kadur', '2013-04-25 01:00:00', '2013-05-02 01:00:00', 'bus', 12),
('kadur', '2013-04-23 01:00:00', '2013-05-02 01:00:00', 'car', 16),
('kadurs', '2013-04-22 01:00:00', '2013-05-02 01:00:00', 'bus', 19),
('s', '2013-04-07 02:12:00', '2013-04-19 14:33:00', 'bus', 17),
('sad', '2013-04-22 01:00:00', '2013-05-01 01:00:00', 'bus', 8),
('sadam', '2013-04-15 01:00:00', '2013-04-29 01:00:00', 'bus', 14),
('sadsd', '2013-04-21 01:00:00', '2013-05-08 01:00:00', 'bus', 13),
('sharath', '2013-04-01 00:01:00', '2013-04-02 12:12:00', 'car', 20),
('tirupathi', '2013-05-08 00:06:00', '2013-05-10 19:08:00', 'bus', 9);

-- --------------------------------------------------------

--
-- Table structure for table `lodging`
--

CREATE TABLE IF NOT EXISTS `lodging` (
  `hotel` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `service_id` (`service_id`),
  KEY `hotel` (`hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lodging`
--

INSERT INTO `lodging` (`hotel`, `service_id`) VALUES
('cat,dogd', 32),
('hello', 39),
('sdasf', 35),
('sdass', 36);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_item` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_item`,`service_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_item`, `service_id`) VALUES
('cat', 35),
('dog', 35),
(' dog', 37),
(' rat', 37),
('cat', 37),
(' dog', 38),
(' mang', 38),
(' rat', 38),
('cat', 38),
('dosa', 39),
('idli', 39);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `p_no` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_days` int(11) NOT NULL DEFAULT '1',
  `seats_booked` int(11) NOT NULL DEFAULT '0',
  `p_name` varchar(20) NOT NULL,
  `dep_date` date NOT NULL,
  `total_seats` int(11) NOT NULL DEFAULT '20',
  `level` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_no`, `no_of_days`, `seats_booked`, `p_name`, `dep_date`, `total_seats`, `level`) VALUES
(4, 3, 0, 's332', '2013-05-09', 3, 'State level Package'),
(5, 33, 0, 's', '2013-05-03', 3, 'State level Package'),
(6, 3, 0, 's', '2013-05-02', 3, 'State level Package'),
(7, 2, 0, 'sdas', '2013-04-23', 3, 'Local Package'),
(8, 23, 0, 'sdasdd', '2013-05-02', 32, 'International Package'),
(9, 12, 0, 's', '2013-05-01', 45, 'Local Package'),
(10, 13, 0, 's', '2013-05-01', 45, 'Local Package'),
(11, 3, 0, 'zad', '2013-05-02', 36, 'Local Package'),
(12, 3, 0, 's5dsa', '2013-05-02', 3, 'State level Package'),
(13, 5, 0, 'sdaf', '2013-04-29', 5, 'State level Package'),
(14, 2, 0, 'za', '2013-05-01', 2, 'State level Package'),
(15, 1, 0, 'aaa', '2013-04-30', 2, 'State level Package'),
(16, 4, 0, 'sharath', '2013-05-09', 5, 'State level Package'),
(17, 1, 0, 'a', '2013-05-09', 1, 'Local Package'),
(18, 1, 0, 'a', '2013-05-09', 1, 'Local Package'),
(19, 3, 0, 'sanjay', '2013-04-24', 3, 'State level Package'),
(20, 12, 0, 'dgdg', '2013-04-01', 12, 'Local Package'),
(21, 12, 0, 'saaaa', '2013-04-01', 12, 'Local Package'),
(22, 12, 0, '21212', '2013-03-31', 1212, 'Local Package'),
(23, 12, 0, '212122', '2013-03-31', 1212, 'Local Package'),
(24, 12, 0, '212122', '2013-03-31', 1212, 'Local Package'),
(25, 12, 0, '212122', '2013-03-31', 1212, 'Local Package'),
(26, 12, 0, '212122', '2013-03-31', 1212, 'Local Package'),
(27, 12, 0, 'asasas', '2013-05-08', 12222, 'Local Package');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `bill_no` int(11) NOT NULL AUTO_INCREMENT,
  `payment_mode` varchar(20) NOT NULL DEFAULT 'credicard',
  `amount` int(11) NOT NULL DEFAULT '1000',
  PRIMARY KEY (`bill_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_no` int(11) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  PRIMARY KEY (`service_id`,`p_no`),
  KEY `p_no` (`p_no`),
  KEY `l_name` (`l_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `p_no`, `l_name`) VALUES
(22, 17, 'a'),
(29, 19, 'alllthe123'),
(38, 19, 'allltheasd'),
(26, 17, 'alllthedf'),
(24, 17, 'alllthegf'),
(25, 17, 'alllthegfef'),
(30, 19, 'alllthewwww'),
(31, 19, 'alllthewwwwa'),
(15, 16, 'ccccd'),
(20, 17, 'ds'),
(21, 17, 'ds'),
(18, 17, 'h'),
(19, 17, 'h'),
(23, 17, 'jggfghfhjsd'),
(32, 19, 'mmmm'),
(33, 19, 'mmmm'),
(36, 19, 'mmmm12'),
(37, 19, 'mmmm12344'),
(34, 19, 'mmmmmtrtret'),
(35, 19, 'mmmmmtrtret2'),
(17, 16, 'n'),
(11, 16, 'rajajinagar11'),
(12, 16, 'rajajinagar111'),
(13, 16, 'rajajinagar1111'),
(14, 16, 'rajajinagar12'),
(9, 16, 'rajajinagar1214'),
(10, 16, 'rajajinagar12145'),
(39, 20, 'saaa'),
(16, 16, 'sd12358sds'),
(28, 17, 'sdghgj'),
(27, 17, 'w');

-- --------------------------------------------------------

--
-- Table structure for table `subplaces`
--

CREATE TABLE IF NOT EXISTS `subplaces` (
  `p_no` int(11) NOT NULL DEFAULT '0',
  `place_name` varchar(20) NOT NULL DEFAULT '',
  `l_name` varchar(20) NOT NULL DEFAULT '',
  `description` varchar(30) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `from_place` varchar(20) NOT NULL,
  `distance` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`place_name`,`p_no`,`l_name`),
  KEY `subplaces_ibfk_1` (`l_name`),
  KEY `p_no` (`p_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subplaces`
--

INSERT INTO `subplaces` (`p_no`, `place_name`, `l_name`, `description`, `start_time`, `end_time`, `from_place`, `distance`) VALUES
(17, 'a', 's', 'a', '00:20:13', '00:20:14', 'as', 12),
(17, 'alll', 's', 'dsfjgdfa', '00:20:13', '00:20:13', 'asttet', 1233),
(17, 'alllthe', 's', 'dsfjgdfa', '00:20:13', '00:20:13', 'asttet', 1233),
(19, 'alllthe123', 'kadurs', 'sdad', '00:20:13', '00:20:13', 'd', 12),
(19, 'allltheasd', 'kadurs', 'cat, dog, rat', '00:20:13', '00:20:13', 'asttet', 123),
(17, 'alllthedf', 's', 'cat', '00:20:13', '00:20:13', 'ds', 5),
(17, 'alllthegf', 's', 'tom,cat', '00:20:13', '00:20:13', 'mgrd', 5),
(17, 'alllthegfef', 's', 'tom,cat', '00:20:13', '00:20:13', 'mgrd', 5),
(19, 'alllthewww', 'kadurs', 'cat,dog', '00:20:13', '00:20:13', 'mgrd', 5),
(19, 'alllthewwww', 'kadurs', 'cat,dog', '00:20:13', '00:20:13', 'mgrd', 5),
(19, 'alllthewwwwa', 'kadurs', 'cat,dog', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'ccccd', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 4),
(17, 'ds', 's', 'efe', '00:20:13', '00:20:13', 'ew', 2),
(17, 'h', 's', 'h', '00:20:13', '00:20:13', 'd', 2),
(17, 'jggfghfhj', 's', 'tom,cat', '00:20:13', '00:20:13', 'as', 5),
(17, 'jggfghfhjsd', 's', 'tom,cat', '00:20:13', '00:20:13', 'as', 5),
(19, 'mmmm', 'kadurs', 'cat,dog', '00:20:13', '00:20:13', 'mgrd', 5),
(19, 'mmmm12', 'kadurs', 'cat,dog', '00:20:13', '00:20:13', 'mgrd', 5),
(19, 'mmmm12344', 'kadurs', 'cat, dog, rat', '00:20:13', '00:20:13', 'mgrd', 5),
(19, 'mmmmmtrtret', 'kadurs', 'cat,dogf', '00:20:13', '00:20:13', 'ddd', 123),
(19, 'mmmmmtrtret2', 'kadurs', 'cat,dogf', '00:20:13', '00:20:13', 'ddd', 123),
(16, 'n', 'da', 'df', '00:20:13', '00:20:13', 'fg', 2),
(16, 'rajajinagar11', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'rajajinagar111', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'rajajinagar1111', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'rajajinagar12', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'rajajinagar1214', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'rajajinagar12145', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(20, 'saaa', 'sharath', 'ssdddd', '00:20:13', '00:20:13', 'fsdfs', 123),
(16, 'sd12358', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(16, 'sd12358sds', 'kadur', 'cat,dog,rat', '00:20:13', '00:20:13', 'mgrd', 5),
(17, 'sdghgj', 's', 'ghgh', '00:20:13', '00:20:13', 'd', 5),
(17, 'w', 's', 's', '00:20:13', '00:20:13', 'sd', 12121);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`p_no`) REFERENCES `package` (`p_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`bill_no`) REFERENCES `payment` (`bill_no`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`p_no`) REFERENCES `package` (`p_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lodging`
--
ALTER TABLE `lodging`
  ADD CONSTRAINT `lodging_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `food` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_3` FOREIGN KEY (`p_no`) REFERENCES `package` (`p_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_4` FOREIGN KEY (`l_name`) REFERENCES `subplaces` (`place_name`);

--
-- Constraints for table `subplaces`
--
ALTER TABLE `subplaces`
  ADD CONSTRAINT `subplaces_ibfk_1` FOREIGN KEY (`l_name`) REFERENCES `location` (`l_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subplaces_ibfk_2` FOREIGN KEY (`p_no`) REFERENCES `package` (`p_no`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
