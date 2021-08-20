-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2021 at 01:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers-details`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(10) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `sender_account` int(20) NOT NULL,
  `receiver_id` int(20) NOT NULL,
  `receiver_account` int(20) NOT NULL,
  `amount` float NOT NULL,
  `transfer_time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `sender_id`, `sender_account`, `receiver_id`, `receiver_account`, `amount`, `transfer_time`) VALUES
(1, 4, 789354629, 6, 462984613, 700, '2021-08-19 08:55:14'),
(2, 6, 462984613, 8, 385206714, 400, '2021-08-19 09:54:33'),
(3, 3, 567438201, 5, 352189056, 1000, '2021-08-19 12:55:14'),
(4, 10, 593842015, 1, 458390561, 800, '2021-08-20 08:11:15'),
(5, 7, 693402741, 9, 753012984, 300, '2021-08-20 09:56:35'),
(6, 2, 986573829, 8, 385206714, 500, '2021-08-20 19:09:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
