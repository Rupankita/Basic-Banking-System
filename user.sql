-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2021 at 05:46 PM
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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Account No` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `View Details` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Account No`, `Balance`, `View Details`) VALUES
(1, 'Ram', 'Ram@gmail.com', 458390561, 44965, 'view'),
(2, 'Rumi', 'rumi@gmail.com', 986573829, 43957, 'view'),
(3, 'Anil', 'anil@gmail.com', 567438201, 21100, 'view'),
(4, 'Arya', 'arya@gmail.com', 789354629, 39300, 'view'),
(5, 'Mukesh', 'mukesh@gmail.com', 352189056, 67000, 'view'),
(6, 'Puneet', 'puneet@gail.com', 462984613, 22600, 'view'),
(7, 'Aditya', 'aditya@gmail.com', 693402741, 32290, 'view'),
(8, 'Rupa', 'rupa@gmail.com', 385206714, 42233, 'view'),
(9, 'Pari', 'pari@gmail.com', 753012984, 58845, 'view'),
(10, 'Riya', 'riya@gmail.com', 593842015, 20010, 'view');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
