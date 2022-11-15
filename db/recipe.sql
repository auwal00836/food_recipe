-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2022 at 02:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

DROP TABLE IF EXISTS `chefs`;
CREATE TABLE IF NOT EXISTS `chefs` (
  `chef_id` int(50) NOT NULL AUTO_INCREMENT,
  `fsname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`chef_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`chef_id`, `fsname`, `lname`, `oname`, `gender`, `phone`, `email`, `address`, `password`, `picture`) VALUES
(7, 'sani', 'lawal', 'm', 'maile', '2363636', 'sanilawal@gmail.com', 'NO M13 commissioner road unguwan dosa kaduna', '12345', 'sanilawal@gmail.com.PNG'),
(8, 'bahijjah', 'sulaiman', '', 'female', '080887777777', 'dikkobahijja@gmail.com', 'kaduna', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `dish_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `ingredient1` varchar(500) NOT NULL,
  `chef_id` int(5) NOT NULL,
  `food_picture` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `vfile` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dish_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `fname`, `price`, `ingredient1`, `chef_id`, `food_picture`, `file`, `vfile`) VALUES
(19, 'miyan kuka', 600, 'Kasamu garin kuska da ruwa,katafasa ruwa sannan kasa kayanmiya da manja . kasamu albasa da atarugu', 7, 'miyan_kuka.jpg', 'HOW TO MAKE AMALA THE YORUBA WAY.docx', 'How To Prepare Miyan Kuuka(Baobab Leaves Soup).mp4'),
(20, 'amala', 500, 'amala is one of the yuroba best dish!', 8, 'amala.jpg', 'HOW TO MAKE AMALA THE YORUBA WAY.docx', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `chef_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `dish_id` int(10) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `chef_id`, `reservation_id`, `dish_id`, `cno`, `exp`, `cvv`, `amount`, `transaction_id`, `entry_date`, `otp`, `status`) VALUES
(70, 2, 116, 9, '', '', '', 500, '6747790', '2019-12-06 21:10:13', '123456', 1),
(71, 2, 117, 11, '657436785432673', '12/22', '211', 500, '5278449', '2019-12-06 23:46:22', '123456', 1),
(72, 2, 118, 12, '657436785432673', '12/22', '211', 500, '5278449', '2019-12-06 23:46:22', '123456', 1),
(73, 2, 119, 9, '252352355252552', '25235', '352', 500, '5624661', '2021-04-24 12:55:24', '123456', 1),
(74, 5, 120, 14, '4365764576647', '44574', '574', 500, '1474162', '2021-04-24 13:15:16', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(10) NOT NULL AUTO_INCREMENT,
  `chef_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `transaction_id` int(10) NOT NULL,
  `date_reserved` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `chef_id`, `dish_id`, `cart_id`, `amount`, `address`, `info`, `delivery`, `payment_mode`, `transaction_id`, `date_reserved`) VALUES
(98, 2, 3, 38, 750, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 7956161, '2019-10-13 13:41:24'),
(99, 2, 6, 39, 1200, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 7956161, '2019-10-13 13:41:24'),
(100, 2, 5, 40, 350, 'No6, Kano road Kaduna', 'You can call me through this number 08063017470', '', '', 8842914, '2019-10-13 13:52:29'),
(101, 5, 2, 44, 450, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 9584788, '2019-10-14 04:58:46'),
(102, 2, 3, 41, 750, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 8642183, '2019-10-14 05:20:46'),
(103, 2, 6, 46, 1200, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 8642183, '2019-10-14 05:20:46'),
(104, 2, 1, 47, 550, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 83966, '2019-10-14 07:15:48'),
(105, 2, 4, 48, 800, 'No112, sabon tasha Kaduna', 'You can call me through this number 08063017470', '', '', 83966, '2019-10-14 07:15:49'),
(106, 2, 3, 49, 750, 'No6, Kano road Kaduna', 'You can call me through this number 08063017470', '', '', 9190070, '2019-10-14 09:27:13'),
(107, 2, 7, 51, 750, 'No 20jshjdjnsk', 'ewsdf', '', '', 2395637, '2019-10-18 21:32:33'),
(108, 2, 7, 52, 750, 'No 20jshjdjnsk', 'ewsdf', '', '', 2395637, '2019-10-18 21:32:34'),
(109, 2, 7, 53, 750, 'No 20jshjdjnsk', 'ewsdf', '', '', 775155, '2019-10-19 06:00:16'),
(110, 2, 7, 55, 750, 'No 20jshjdjnsk', 'ewsdf', '', '', 775155, '2019-10-19 06:00:16'),
(111, 2, 7, 53, 750, '', '', '', '', 6383366, '2019-10-19 06:02:09'),
(112, 2, 7, 55, 750, '', '', '', '', 6383366, '2019-10-19 06:02:10'),
(113, 2, 8, 56, 550, '', '', '', '', 9666444, '2019-10-19 06:28:51'),
(114, 2, 7, 57, 750, '', '', '', '', 4471104, '2019-10-21 14:51:16'),
(115, 2, 9, 58, 500, '', '', '', '', 6375, '2019-12-06 21:08:22'),
(116, 2, 9, 58, 500, '', '', '', '', 6747790, '2019-12-06 21:10:13'),
(117, 2, 11, 59, 500, '', '', '', '', 5278449, '2019-12-06 23:46:22'),
(118, 2, 12, 60, 500, '', '', '', '', 5278449, '2019-12-06 23:46:22'),
(119, 2, 9, 61, 500, '', '', '', '', 5624661, '2021-04-24 12:55:24'),
(120, 5, 14, 63, 500, '', '', '', '', 1474162, '2021-04-24 13:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `gender`, `address`, `email`, `password`, `picture`, `phone`) VALUES
(5, 'Adamcy Naira', 'Male', 'No123, Tudun Wada Kaduna', 'adammusa89@gmail.com', '12345', 'KD.JPG', '08063017470'),
(6, 'Sani Abdullahi', 'Male', 'No112, sabon tasha Kaduna', 'saniabdullahi78@gmail.com', '12345', 'images (13)678.jpeg', '08165656789'),
(8, 'Barakatu', 'Female', 'No6, Kano road Kaduna', 'usman1@gmail.com', '12345', '', '070623789374');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `picture`) VALUES
(2, 'Administrator', 'admin', 'admin', 'Screenshot_20180507-104929.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
