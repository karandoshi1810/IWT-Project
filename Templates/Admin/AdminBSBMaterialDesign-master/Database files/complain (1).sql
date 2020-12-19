-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 04:27 PM
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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `uniqueid` varchar(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `complaininfo` text NOT NULL,
  `mobileno` int(10) NOT NULL,
  `problem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`uniqueid`, `address`, `complaininfo`, `mobileno`, `problem`) VALUES
('ufog3456', '\"KRUPAL\" Desaiwadi Shamnath mandir road,', 'There is lekage problem in this area. please connect me with any technician.', 2147483647, 'Leakage'),
('tyu654h0', 'nanamava chowk, silver heights, rajkot', 'In this area the sweepers are not coming. ', 2147483647, 'Sweeper'),
('ruty4532', 'amin marg near swahar plot rajkot', 'the dustbin truck is not coming daily. please look into it.', 2147483647, 'Dustbin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
