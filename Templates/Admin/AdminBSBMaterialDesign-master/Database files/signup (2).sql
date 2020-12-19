-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 04:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `wardno` bigint(3) NOT NULL,
  `psw` varchar(10) NOT NULL,
  `confirmpsw` varchar(10) NOT NULL,
  `companyname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `city`, `state`, `address`, `pincode`, `email`, `mobileno`, `wardno`, `psw`, `confirmpsw`, `companyname`) VALUES
('Krupal Jivrajani', 'Jetpur', 'Gujarat', '0', 360370, 'krupaljivrajani86861@gmail.com', 9925885830, 12, 'qwerty12@3', 'qwerty12@3', ''),
('karan doshi', 'Rajkot', 'Gujarat', 'Nanavati chowk, Gandhigram, Rajkot', 360005, 'karandoshi@gmail.com', 9678432900, 7, 'qwder@234', 'companynam', 'NA'),
('Smit Vora', 'Mava', 'Gujarat', 'manhar plot, street no 1, mava', 364001, 'smitvora12@gmai.com', 7865890034, 3, 'sdfg#1245', 'companynam', 'NA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
