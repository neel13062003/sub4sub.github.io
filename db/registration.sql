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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `cpassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(1, 'Soni Neel NikunjKumar', 'neelnsoni13@gmail.com', '7874866543', '$2y$10$Ys/9SeCL0jVaWSjjN5Tw4e5AirjTycIPg.obGnQjEhPwzcolUc27u', '$2y$10$4X/0xRtQcvVs8cnkXOViAetoQ9RYIuBzMOGmwDYoNuW6lhbHHL0gO'),
(2, 'Soni Neel Nikunjsoni', 'movieplatform1306@gmail.com', '7874866543', '$2y$10$hyNqPzOgM/37cW5XoVtqr.4TmBOMcmhZOXPQ.TwZpRrSnxZj1m83K', '$2y$10$TTkcCwNoCybqkwct5UIfRufNgytpWMT2Zn.tZt9aqijCl.Kcwlzea'),
(3, 'neelns', 'Vrajpatel10@gmail.com', '7896543210', '$2y$10$vj.KlMYyPTdN7dP/8m8iiOq0tK1j0XjPHgClVCp5vWQx.fM0JLChi', '$2y$10$.Bv8QehrMfkrfcHsGJ5wluWajDXF6cIrGU97lMmzsIzmTESThdzw6'),
(4, 'pranav', 'pranav13@gmail.com', '7874866543', '$2y$10$kOObJNGEKrmD.sYomvUSTuG9wV2ymIXwpCJuUX0JVhVzcrSGjxCyu', '$2y$10$H1OHbyXsYZ3pdjGWHjLboeMLw/ctT46PYXNgyFuZLOua1dq8O5BhK'),
(5, 'kalp', 'kalpnsoni10@gmail.com', '7874866543', '$2y$10$DCvzv3KMVww0JIHgUzlBkeEI3MWhrJKfaH6hSAZ6JzNmHG4VwPU4y', '$2y$10$c.w0JFVA8xceHG7uheu7Be4QTs6Rn517J2.hEkV1eLTe8H9ElcIA2'),
(6, 'riya', 'riyamehta@gmail.com', '7874866543', '$2y$10$4uzz53wItitVEJi7lP4LaOw/7YGbvSN/XjbLZK.MAfC0v.XsjwGt.', '$2y$10$Vt0qvV03iFU2DSu53T3tAeYdVm6OTLR8MKl9FZfRmmwgIFb/SJERq'),
(7, 'halo', 'halo@gmail.com', '7874866543', '$2y$10$obtCAJftQx6K7qBiZQ20DOApzsUBlKu4WIT/SB8mwX5LFuTooA6iO', '$2y$10$oRyi.Cd5uAJPDFXnxWwSZe.hjrFETpm5ravSO2idVHXPkarQta3K6'),
(8, 'don', 'don@gmail.com', '123', '$2y$10$fhJL/clCTASa/xGr9reJGu0XutOhPy8doMGPjOsaXVbcN3vsCDNzW', '$2y$10$7JBbVqWlKUUln5/ZI1bPEO1GWNevfsFsqDjKLI8pxE7OknejNes.G'),
(9, 'ha', 'ha13@gmail.com', '254514515', '$2y$10$SoKxNDiwubzT9RZQi8zEzOXZ67xX9fWXF7c2j0A2w.TyBC6RekY3i', '$2y$10$yDKD..NE5CP5zPWlyVzHIuKIEGWnyefPoU.zjVaUCrdYAD3Tms2Ve'),
(10, 'Riya', 'nishasoni@gmail.com', '9876543210', '$2y$10$6DfV9VDHHOrphzmBG9p/XOcBA4mmX6tm4.hAE2xadjUCchoTyxGqC', '$2y$10$1aZsBBAk.iAauxO1eNRqy.VsNPU5e3dbqYgb13WPeId3OtMrwwI6S'),
(11, 'vimal', 'vimal@gmail.com', '8987849345', '$2y$10$8ln5zYeFA8k7Fiy0E9FW9euj87ak0FMJY45eQxFuW2a8VNS69svte', '$2y$10$dpZpVxob4daMnsGxANrwg.jFlHdqhGzV79lLY8M1okkFA6YgQp6CS'),
(12, 'jay', 'dj1762003@gmail.com', '94646768321', '$2y$10$jr2OQSWXgJtMJTh7TZaTkuiVsofr2B3ZM1kV8a4HlQ4EzUPn8D.z6', '$2y$10$uRVslpocWyLc0ngWDTuxGep9nmTwi53UVdSONrWzxzTtV8K8ufuoO'),
(13, 'nikunj', 'nikunjsoni1306@gmail.com', '9427080543', '$2y$10$wSSLlzun6oOk30C9V9S2TecGjIpOwKtl8ypiihwbyxs1a.XSk1sey', '$2y$10$Vm69p1z0xLZUFZ0s/XHRy.q0sxI1ncMC4auqhO.vfags9ueO1BcJ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
