-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 07:17 PM
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uniqueid` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `typefeedback` text NOT NULL,
  `feedbackid` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uniqueid`, `address`, `typefeedback`, `feedbackid`, `email`) VALUES
(3456122268, '\"KRUPAL\" Desaiwadi Shamnath mandir road,', 'The portal is very much useful ', 79619082, 'krupaljivrajani86861@gmail.com'),
(3421668896, 'manhar plot, street no 1, mava', 'This portal can be useful for the RMC as well as for public', 20985498, 'smitvora12@gmail.com'),
(9835290835, 'Nanavati chowk, Gandhigram, Rajkot', 'A step to advance management ', 15092210, 'karandoshi@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
