-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 04:01 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unleashe_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`booking_id` int(200) NOT NULL,
  `total_adult` int(50) NOT NULL,
  `total_children` int(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `special_requirement` text NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `total_amount` double DEFAULT NULL,
  `deposit` double NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `add_line1` varchar(100) NOT NULL,
  `add_line2` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postcode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `total_adult`, `total_children`, `checkin_date`, `checkout_date`, `special_requirement`, `payment_status`, `total_amount`, `deposit`, `booking_date`, `first_name`, `last_name`, `email`, `telephone_no`, `add_line1`, `add_line2`, `city`, `state`, `postcode`, `country`) VALUES
(127, 2, 0, '2014-12-05', '2014-12-07', '', 'pending', 440, 66, '2014-12-04 20:52:53', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(128, 1, 0, '2014-12-05', '2014-12-06', '', 'pending', 360, 54, '2014-12-05 03:49:58', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(129, 1, 0, '2014-12-05', '2014-12-07', '', 'pending', 240, 36, '2014-12-05 04:53:27', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(130, 1, 0, '2014-12-05', '2014-12-07', '', 'pending', 480, 72, '2014-12-05 04:58:13', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', 'None', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(131, 2, 0, '2015-05-21', '2015-05-23', '', 'pending', 240, 36, '2015-05-20 19:16:14', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', '', 'Serian', 'Sarawak', '50600', 'Malaysia'),
(132, 2, 0, '2015-05-21', '2015-05-23', '', 'pending', 920, 138, '2015-05-20 19:18:52', 'Mohd Zulkarnain', 'Jaranee', 'mrzulkarnine@gmail.com', '0128951744', '307 Kpg Kanchong Jaya Gedong', '', 'Serian', 'Sarawak', '50600', 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`room_id` int(255) NOT NULL,
  `total_room` int(255) NOT NULL,
  `occupancy` int(255) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `view` varchar(30) DEFAULT NULL,
  `room_name` varchar(50) NOT NULL,
  `descriptions` text,
  `rate` double NOT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `total_room`, `occupancy`, `size`, `view`, `room_name`, `descriptions`, `rate`, `imgpath`) VALUES
(1, 5, 2, '10 sqft', 'city', 'Deluxe Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 120, 'img/room2.png'),
(2, 5, 2, '10 sqft', 'city', 'Single Room', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 100, 'img/room3.png'),
(3, 10, 10, '20 sqft', 'City', 'King Suite Room', 'Suitable for honeymoon', 120, 'img/room3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE IF NOT EXISTS `roombook` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `totalroombook` int(11) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`booking_id`, `room_id`, `totalroombook`, `id`) VALUES
(127, 1, 1, 67),
(127, 2, 1, 68),
(128, 3, 3, 69),
(129, 1, 1, 70),
(130, 1, 1, 71),
(131, 1, 1, 72),
(132, 1, 2, 73),
(132, 2, 1, 74);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'demo', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
