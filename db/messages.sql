-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 07:17 PM
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1415148729, 718693927, 'hi kalp'),
(2, 136228823, 718693927, 'hi mitra'),
(3, 1135485008, 718693927, 'Danger'),
(4, 718693927, 180613627, 'I\'m Online now'),
(5, 718693927, 1028318270, 'Me bhi use karta hu'),
(6, 1028318270, 718693927, 'Ye to achhi bat he'),
(7, 180613627, 1250774603, 'Hi I\'m using this chatt message'),
(8, 718693927, 1250774603, 'Hi Bro'),
(9, 1250774603, 718693927, 'Happy'),
(10, 180613627, 1000051991, 'Hi Mere Dost'),
(11, 1000051991, 718693927, 'kem chho mama'),
(12, 1415148729, 718693927, 'Hi mere brother'),
(13, 1250774603, 718693927, 'hi bro'),
(14, 1000051991, 718693927, 'hello'),
(15, 718693927, 749051228, 'hi'),
(16, 718693927, 749051228, 'https://youtu.be/4gGj1_f4e6s'),
(17, 1028318270, 718693927, 'Hello pitashri'),
(18, 718693927, 1316887942, 'Heelooo'),
(19, 718693927, 1316887942, 'my password is 1312'),
(20, 1415148729, 1316887942, 'Hi kalp'),
(21, 749051228, 1316887942, 'hi'),
(22, 1000051991, 718693927, 'I\'m neel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
