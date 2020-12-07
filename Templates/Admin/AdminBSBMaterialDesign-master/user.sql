-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 02:05 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Ward_No` int(11) NOT NULL,
  `Leakage` varchar(12) NOT NULL,
  `Sweepers` varchar(12) NOT NULL,
  `Dustbin` varchar(12) NOT NULL,
  `Animals` varchar(12) NOT NULL,
  `Others` text NOT NULL,
  `Complain_Info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Ward` int(11) NOT NULL,
  `Feedback` text NOT NULL,
  `History` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User ID` varchar(15) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Forgot Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recycling`
--

CREATE TABLE `recycling` (
  `Ward` int(11) NOT NULL,
  `Dry_Waste` varchar(12) NOT NULL,
  `C&D_Waste` varchar(12) NOT NULL,
  `Request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `House_Name` text NOT NULL,
  `Society_Name` text NOT NULL,
  `Landmark` text NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Ward_Number` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mob_No` int(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Conform_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
