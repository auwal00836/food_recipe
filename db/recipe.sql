-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 03:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `cart_status` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `dish_id`, `cart_status`, `customer_id`, `date_added`) VALUES
(38, 3, 1, 2, '2019-10-13 13:41:13'),
(39, 6, 1, 2, '2019-10-13 13:41:17'),
(40, 5, 1, 2, '2019-10-13 13:52:25'),
(41, 3, 1, 2, '2019-10-13 14:13:45'),
(43, 5, 0, 0, '2019-10-14 03:05:00'),
(44, 2, 1, 5, '2019-10-14 04:58:38'),
(46, 6, 1, 2, '2019-10-14 05:19:51'),
(47, 1, 1, 2, '2019-10-14 07:15:24'),
(48, 4, 1, 2, '2019-10-14 07:15:30'),
(51, 7, 1, 2, '2019-10-18 21:21:10'),
(52, 7, 1, 2, '2019-10-18 21:32:27'),
(53, 7, 1, 2, '2019-10-18 21:47:51'),
(55, 7, 1, 2, '2019-10-19 05:37:29'),
(56, 8, 1, 2, '2019-10-19 06:28:46'),
(57, 7, 1, 2, '2019-10-21 14:51:11'),
(58, 9, 1, 2, '2019-12-06 21:08:08'),
(59, 11, 1, 2, '2019-12-06 23:45:43'),
(60, 12, 1, 2, '2019-12-06 23:45:48'),
(61, 9, 1, 2, '2021-04-24 12:55:01'),
(63, 14, 1, 5, '2021-04-24 13:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(50) NOT NULL,
  `fsname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `picture` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `fsname`, `lname`, `oname`, `gender`, `phone`, `email`, `address`, `password`, `picture`) VALUES
(2, 'Adam', 'Musa', 'Yau', 'male', '08063017470', 'adammusa89@gmail.com', 'No6. Nasara Road Rigasa Kaduna', '12345', 'IMG_20181219_121954_679.jpg'),
(4, 'Sani', 'Abdullahi', '', 'Male', '070623789374', 'sani@gmail.com', 'No112, sabon tasha Kaduna', '12345', 'author.jpg'),
(5, 'Ado ', 'Bayero', '', 'Male', '08063017470', 'ado@gmail.com', 'HH16b PRP Community Bank Road', '12345', '636641503955213524562634Recent Passport Photograph.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `ftype` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `ingredient1` varchar(100) NOT NULL,
  `ingredient2` varchar(50) NOT NULL,
  `food_picture` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `fname`, `ftype`, `price`, `ingredient1`, `ingredient2`, `food_picture`, `file`) VALUES
(9, 'Rice', '', 500, 'Rice', 'Season', 'rice.jpg', 'How to Cook Jealous Rice.docx'),
(10, 'Amala ', '', 500, 'Yam Flour', 'Water', '21PRtjKRXPQyotRPt1Hd7fPufGf1WCpCvB7qBKbTk13kg3b7uBYw5WScz3u1jzGpDDuTDaHiCLAATcDVX9TX989XUzamoPUbeGfV8WbzQfwRM13DnAQftZmXvaprMXapSPSzQZWfAPAGoxnGP48Bik6.jpeg', 'HOW TO MAKE AMALA THE YORUBA WAY.docx'),
(11, 'Vegetable Salads', '', 500, 'Vegetable', 'Salads', 'how-to-make-vegetable-salad.jpg', 'HOW TO MAKE VEGETABLE SALADS.docx'),
(12, 'Indomie', '', 500, 'Indomie', 'Season', 'indomie-recipe.jpg', 'HOW TO COOK INDOMIE.docx'),
(13, 'Moi Moi', '', 500, 'Beans', 'Season', 'making-moi-moi (1).jpg', 'HOW TO MAKE MOI MOI.docx'),
(14, 'Banga Soup', '', 500, 'banga', 'Water', 'banga.jpg', 'HOW TO COOK BANGA SOUP.docx');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `dish_id` int(10) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `reservation_id`, `dish_id`, `cno`, `exp`, `cvv`, `amount`, `transaction_id`, `entry_date`, `otp`, `status`) VALUES
(70, 2, 116, 9, '', '', '', 500, '6747790', '2019-12-06 21:10:13', '123456', 1),
(71, 2, 117, 11, '657436785432673', '12/22', '211', 500, '5278449', '2019-12-06 23:46:22', '123456', 1),
(72, 2, 118, 12, '657436785432673', '12/22', '211', 500, '5278449', '2019-12-06 23:46:22', '123456', 1),
(73, 2, 119, 9, '252352355252552', '25235', '352', 500, '5624661', '2021-04-24 12:55:24', '123456', 1),
(74, 5, 120, 14, '4365764576647', '44574', '574', 500, '1474162', '2021-04-24 13:15:16', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `transaction_id` int(10) NOT NULL,
  `date_reserved` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `customer_id`, `dish_id`, `cart_id`, `amount`, `address`, `info`, `delivery`, `payment_mode`, `transaction_id`, `date_reserved`) VALUES
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

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `picture`) VALUES
(2, 'Administrator', 'admin', 'admin', 'Screenshot_20180507-104929.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
