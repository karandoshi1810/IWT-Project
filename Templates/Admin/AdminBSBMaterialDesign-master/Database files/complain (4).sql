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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `uniqueid` varchar(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `complaininfo` text NOT NULL,
  `problem` varchar(100) NOT NULL,
  `complainid` int(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`uniqueid`, `address`, `complaininfo`, `problem`, `complainid`, `email`) VALUES
('34561222', '\"KRUPAL\" Desaiwadi Shamnath mandir road,', 'There is lekage problem in this area. please connect me with any technician.', 'Leakage', 68477728, 'krupaljivrajani86861@gmail.com'),
('34216688', 'manhar plot, street no 1, mava', 'In this area the sweepers are not coming. ', 'Sweeper', 27892899, 'smitvora12@gmail.com'),
('67438150', 'Nanavati chowk, Gandhigram, Rajkot', 'the dustbin truck is not coming daily. please look into it.', 'Dustbin', 58690425, 'karandoshi@gmail.com'),
('48911200', 'sardar chowk, opp shiv colony, jetpur', 'in our area one dog has died so please send the persons to pick it up.', 'Died', 73744739, 'bhavik.kalpesh104413@marwadiuniversity.a'),
('98527398', 'Astron Chowk, Poojara telecom Rajkot', 'In this area the sweepers are not coming. ', 'Sweeper', 59508504, 'poojaratelecom@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
