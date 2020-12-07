-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 01:39 PM
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
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `Visitors` int(11) NOT NULL,
  `Complaints` int(11) NOT NULL,
  `Pending Complaints` int(11) NOT NULL,
  `Feedback` varchar(5000) NOT NULL,
  `Answered Tickets` int(11) NOT NULL,
  `Task Information` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(15) NOT NULL,
  `Passoword` varchar(10) NOT NULL,
  `Forgot Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recycling`
--

CREATE TABLE `recycling` (
  `Area_Waste` text NOT NULL,
  `Dry Waste_Weight` int(11) NOT NULL,
  `Dumping Ground` text NOT NULL,
  `Tender` varchar(1000) NOT NULL,
  `History` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`, `confirm`) VALUES
('Karan  Hemal Doshi', 'karan.doshi105417@marwadiuniversity.ac.in', 'karan123', 'karan123'),
('Krupal Jivrajani', 'krupal@gmail.com', 'krupal123', 'krupal123'),
('Krupal Jivrajani', 'krupal.jivrarani@gmail.com', 'kru123', 'kru123');

-- --------------------------------------------------------

--
-- Table structure for table `smart dustbin`
--

CREATE TABLE `smart dustbin` (
  `ID` int(11) NOT NULL,
  `Area` varchar(1000) NOT NULL,
  `History` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time management`
--

CREATE TABLE `time management` (
  `Ward` int(11) NOT NULL,
  `New Timings` datetime NOT NULL,
  `Mediators` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
