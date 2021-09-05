-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 07:19 PM
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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `serial` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `insta` text NOT NULL,
  `youtube` text NOT NULL,
  `other` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`serial`, `name`, `email`, `insta`, `youtube`, `other`, `dt`) VALUES
(1, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', '', '', '584846', '2021-08-25 10:09:37'),
(2, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', '654545', '2021-08-25 10:19:40'),
(3, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'mnadsmdm ', '2021-08-25 10:23:35'),
(4, 'dimple', 'movieplatform1306@gmail.com', 'neel13#', 'jay music channel', 'a,fme dc ', '2021-08-25 11:08:41'),
(5, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'Kattoppo...', '2021-08-25 17:05:29'),
(6, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'Kattoppo...', '2021-08-25 17:06:55'),
(7, 'mansi', 'neelnsoni13@gmail.com', 'neel13#', 'jay music channel', 'jbhjbjn', '2021-08-25 17:29:36'),
(8, 'dadi', 'neelnsoni13@gmail.com', 'neel13#', 'jay music channel', 'and cnad c', '2021-08-25 17:35:17'),
(9, 'happy', 'movieplatform1306@gmail.com', 'jay#12', 'vraj jindabad', 'happy', '2021-08-25 17:42:07'),
(10, 'happy', 'movieplatform1306@gmail.com', 'jay#12', 'vraj jindabad', 'happy', '2021-08-25 17:59:17'),
(11, 'happy', 'movieplatform1306@gmail.com', 'jay#12', 'vraj jindabad', 'happy', '2021-08-25 18:00:08'),
(12, '', '', '', '', '', '2021-08-25 18:59:18'),
(13, '', '', '', '', '', '2021-08-25 18:59:18'),
(14, 'jay jingh', 'jay13@gmail.com', 'ajn djan ', 'ajdncj', 'nothing', '2021-08-28 16:06:50'),
(15, '.kn asc', 'neelnsoni13@gmail.com', 'sm cm', 'ksmck', 'sm cms c', '2021-08-28 16:22:10'),
(16, 'vimal', 'vimal@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'Happy', '2021-08-31 02:49:32'),
(17, 'vimal', 'vimal@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'Happy', '2021-08-31 02:49:49'),
(18, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'happy', '2021-08-31 09:39:56'),
(19, 'kjjj', 'don@gmail.com', 'lkl,;l,', 'kl;l', ';lk;l', '2021-08-31 11:16:05'),
(20, ',,keqc', 'neelnsoni13@gmail.com', 'qamn', 'lkecn', 'knmck', '2021-08-31 14:47:38'),
(21, ',,keqc', 'neelnsoni13@gmail.com', 'qamn', 'lkecn', 'knmck', '2021-08-31 14:47:57'),
(22, 'are', 'are!#@gmail.cpm', 'd', 'ajdncj', 'why not happy', '2021-09-02 09:56:11'),
(23, 'happy', '', '', '', '', '2021-09-02 16:08:29'),
(24, 'happy', '', '', '', '', '2021-09-02 16:09:45'),
(25, 'happy', '', '', '', '', '2021-09-02 16:10:19'),
(26, 'happy', '', '', '', '', '2021-09-02 16:10:27'),
(27, 'happy', '', '', '', '', '2021-09-02 16:10:46'),
(28, 'happy\r\n', '', '', '', '', '2021-09-02 16:13:42'),
(29, 'happy\r\n', '', '', '', '', '2021-09-02 16:15:06'),
(30, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'jay music channel', 'hi', '2021-09-02 16:18:51'),
(31, 'don', 'lkja@gmail.com', 'kjl', 'kjlp', 'nikunjsoni', '2021-09-02 16:27:12'),
(32, 'sabanam', 'sabanam@gmail.com', 'sabnam', 'sabanm', 'happy', '2021-09-02 16:27:59'),
(33, 'neel nikunjkumar soni', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'neel soni ', '2021-09-02 16:29:06'),
(34, 'laptop', 'laptop@gmail.com', 'neel13#', 'jay music channel', 'lakhan', '2021-09-02 16:30:44'),
(35, 'majbut', 'majbut@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'elkfnjlef', '2021-09-02 16:32:57'),
(36, 'majbut', 'majbut@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'elkfnjlef', '2021-09-02 16:34:03'),
(37, 'hi bhai', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'jnbscjnasjc', '2021-09-02 16:34:21'),
(38, 'Patel Vraj ', 'don@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'klklkl', '2021-09-02 16:39:56'),
(39, 'Patel Vraj ', 'don@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'klklkl', '2021-09-02 16:42:07'),
(40, 'mangavu', 'neelnsoni13@gmail.com', 'neel13#', 'Unstoppable Inspiration', 'jzdjcb', '2021-09-02 16:55:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
