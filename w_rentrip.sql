-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 09:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w_rentrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `messages` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `messages`) VALUES
('', '', ''),
('', '', ''),
('richa', 'r@i.com', ''),
('richa', 'ri@ch.a', 'hey'),
('name', 'name@n.com', 'hbdjsnkihfnd');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `question` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`question`) VALUES
('what?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(900) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `code` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `contact_no`, `state`, `city`, `address`, `username`, `password`, `email`, `code`) VALUES
('Divya', 1234567, 'Uttar Pradesh', 'mathura', 'vrindavan', 'anshi', 'abcdefgh', 'div@ansh.com', 0),
('Divya', 1234567, 'Uttar Pradesh', 'mathura', 'vrindavan', 'richa58', 'abcdefgh', 'div@ansh.com', 0),
('Divya', 1234567, 'Uttar Pradesh', 'mathura', 'vrindavan', 'munnu', 'abcdefgh', 'div@ansh.com', 0),
('Divya', 1234567, 'Uttar Pradesh', 'mathura', 'vrindavan', 'sonali09', 'abcdefgh', 'div@ansh.com', 0),
('Aditya', 123456789, 'Uttar Pradesh', 'mtr', 'vbn', 'priyanshi', 'abcdefg', 'manu@trip.com', 0),
('Aditya', 123456789, 'Uttar Pradesh', 'mtr', 'vbn', 'manu', '$2y$10$T00wuISaZW6i8mQq9FL2ROu52aOaBVj/wspaeO99g1pYox9fOScHy', 'manu@trip.com', 0),
('pinki', 12345678, 'Uttar Pradesh', 'mtr', 'vbn', 'pinki', '$2y$10$0lBW5.O5wMW2Q0jTOwmcFOEuFNinVK9aqEyAyaOW11W.hkeBjadF.', 'tripathisudesh42@gmail.com', 714968),
('Aryaka', 123459, 'Uttar Pradesh', 'mathura', 'dhauli pyayu', 'billo', '$2y$10$pIi1LGcWMrJOlYps17lECeGKh03x8/ZYt.9V27xBDTiElwqpXMmDK', 'aaru@billo.com', 770617),
('Honey', 12345678, 'Uttar Pradesh', 'mathura', 'township se thoda aage khi', 'besahur', '$2y$10$XQXZjm4ueL/XZzsuL6hiquerJmAmXWVVpMc6MzFDzQ88N1tIALTwa', 'hon@ey.com', 361359),
('Bhavna', 123456789, 'Uttar Pradesh', 'mathura', 'baad', 'babe', '$2y$10$THU527nrHxF60nIWsz1wgO3CLB4tPcgx2ur0dZdofrsscmE/J1fm2', 'bha@vna.com', 824543),
('Neha', 12345678, 'Uttar Pradesh', 'mathura', 'seedhi sadak se andr kisi colony me', 'blue', '$2y$10$bRlKvbNgU7XaYhsJdYs6NOE7hPmHKhjLv1n4xNmXQ6rf7gNJK7qeS', 'ne@ha.com', 194877),
('', 0, 'Choose...', '', '', '', '$2y$10$ObCyHNHbScaaYxlhYew8k.1.4NoSvbrkdzUulxoBvQcJ/mtcfifoW', '', 627532);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
