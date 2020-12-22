-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 07:18 PM
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
-- Table structure for table `recycling`
--

CREATE TABLE `recycling` (
  `Uniqueid` bigint(10) NOT NULL,
  `typeofwaste` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `recyclingid` bigint(10) NOT NULL,
  `requestinfo` text NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycling`
--

INSERT INTO `recycling` (`Uniqueid`, `typeofwaste`, `address`, `recyclingid`, `requestinfo`, `email`) VALUES
(3456122268, 'Construction_waste', '\"KRUPAL\" Desaiwadi Shamnath mandir road,', 30285020, 'Please pick the construction waste from the address.', 'krupaljivrajani86861@gmail.com'),
(3421668896, 'Dry_waste', 'manhar plot, street no 1, mava', 84154838, 'I have around 1kg dry waste. Can anyone from RMC please pick it up.', 'smitvora12@gmail.com'),
(9852739847, 'Construction_waste', 'Nanavati chowk, Gandhigram, Rajkot', 78647197, 'Please pick up the construction waste so I can clean our area.', 'karandoshi@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
