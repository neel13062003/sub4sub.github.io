-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 07:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 718693927, 'neel', 'soni', 'neelnsoni13@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1630379420neel.jpeg', 'Offline now'),
(2, 1415148729, 'kalp', 'soni', 'kalp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1630379548WhatsApp Image 2020-12-12 at 10.29.53 PM (1).jpeg', 'Active now'),
(3, 1282627879, 'hathi', 'he', 'hathi@gmail.com', '202cb962ac59075b964b07152d234b70', '1630379866neel.jpeg', 'Offline now'),
(4, 1135485008, 'mansi', 'gusani', 'mansi@gmail.com', '202cb962ac59075b964b07152d234b70', '1630386617ayushi.jpeg', 'Offline now'),
(5, 136228823, 'hi', 'bye', 'hi12@gmail.com', '202cb962ac59075b964b07152d234b70', '1630387517More Fun - Emoji Cutouts.png', 'Offline now'),
(6, 180613627, 'Jay', 'Mitra', 'jay10@gmail.com', '202cb962ac59075b964b07152d234b70', '1630388363ÐšÐ¾Ð»Ð¾Ð±Ð¾Ðº (+ÑÐ¼Ð°Ð¹Ð»Ð¸ÐºÐ¸).png', 'Offline now'),
(7, 1028318270, 'nikunj ', 'soni', 'nikunjsoni@gmail.com', '202cb962ac59075b964b07152d234b70', '1630388523MP.jpeg', 'Offline now'),
(8, 1250774603, 'unknown', 'bhai', 'unknown@gmail.com', '202cb962ac59075b964b07152d234b70', '1630389183neel final.jpeg', 'Offline now'),
(9, 1000051991, 'pankaj', 'gusani', 'pankaj@gmail.com', '202cb962ac59075b964b07152d234b70', '1630391429neel.jpeg', 'Offline now'),
(10, 749051228, 'jay', 'devariya', 'jay17@gmail.com', '202cb962ac59075b964b07152d234b70', '16304087871.jpeg', 'Offline now'),
(11, 1316887942, 'Nikunj', 'Soni', 'nikunj13@gmail.com', '202cb962ac59075b964b07152d234b70', '1630421345Untitled.png', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
