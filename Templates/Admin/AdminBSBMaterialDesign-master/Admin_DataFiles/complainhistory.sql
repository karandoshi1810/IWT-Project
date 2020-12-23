-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 01:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `complainhistory`
--

CREATE TABLE `complainhistory` (
  `uniqueid` int(8) NOT NULL,
  `complainid` int(8) NOT NULL,
  `feedbackid` int(10) NOT NULL,
  `recyclingid` int(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainhistory`
--

INSERT INTO `complainhistory` (`uniqueid`, `complainid`, `feedbackid`, `recyclingid`, `address`, `description`) VALUES
(34216688, 69282487, 0, 0, 'manhar plot, street no 1 Rajkot\r\n', 'There is lekage problem in this area. please fix it.'),
(56217775, 51631938, 0, 0, 'Virani chowk Rajkot', 'in our area one dog has died so please send the persons to pick it up.'),
(98527398, 31073327, 0, 0, 'sardar chowk, opp shiv colony, jetpur', 'the dustbin truck is not coming daily. please look into it.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
