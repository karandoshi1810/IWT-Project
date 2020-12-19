-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 05:25 PM
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
-- Table structure for table `signup_krupal`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `wardno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `psw` varchar(10) NOT NULL,
  `confirmpsw` varchar(10) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `city`, `state`, `pincode`, `wardno`, `email`, `mobileno`, `psw`, `confirmpsw`, `companyname`, `address`) VALUES
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 2147483647, '12', '123', '123', 'NA'),
('bvdb', 'nln', 'qwscfw', 0, 0, 'tbd', 0, 'bdr', 'rgbr', 'nbfbf', 'rbf'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 2147483647, '12', '123', '123', 'NA'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 9925885830, '12', '123', '123', 'NA'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 9925885830, '12', '123', '123', 'NA'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 9925885830, '12', '123', '123', 'NA'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 9925885830, 'bdr', 'gsdvxdgvs', 'gdsrfxgvd', 'NA'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 9925885830, 'bdr', 'gfsdfgdf', 'sfvdvvd', 'NA'),
('Krupal Jivrajani', 'Jetpur', 'Gujarat', 0, 360370, 'krupaljivrajani86861@gmail.com', 9925885830, '12', 'vdsdvsv', 'svdsdvsv', 'NA'),
('karan doshi', 'rajkot', 'Gujarat', 0, 360005, 'kkdowlblsj;dl', 1234567890, '25', 'scsacdasd', 'sadsdasdas', 'NA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
