-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 12:01 PM
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
  `address` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainhistory`
--

INSERT INTO `complainhistory` (`uniqueid`, `complainid`, `feedbackid`, `address`, `description`) VALUES
(34216688, 69282487, 0, 'manhar plot, street no 1 Rajkot\r\n', 'There is lekage problem in this area. please fix it.'),
(56217775, 51631938, 0, 'Virani chowk Rajkot', 'in our area one dog has died so please send the persons to pick it up.'),
(98527398, 31073327, 0, 'sardar chowk, opp shiv colony, jetpur', 'the dustbin truck is not coming daily. please look into it.');

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
  `Forgot Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recycling`
--

CREATE TABLE `recycling` (
  `address` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `ground` varchar(10) NOT NULL,
  `dateandtime` date NOT NULL,
  `vannumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycling`
--

INSERT INTO `recycling` (`address`, `weight`, `ground`, `dateandtime`, `vannumber`) VALUES
('\"Chandramauli\", 1-Dharamnagar nr. Ramdevpir circle 150ft Ring Road', 45.55, 'G2', '0000-00-00', ''),
('\"Chandramauli\", 1-Dharamnagar nr. Ramdevpir circle 150ft Ring Road', 45.55, 'G2', '0000-00-00', ''),
('Shastri Maidan near Sarovar Portico Hotel Rajkot', 15, 'G4', '0000-00-00', 'GJ-03 KJ 6547');

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
('Krupal Jivrajani', 'krupal.jivrarani@gmail.com', 'kru123', 'kru123'),
('Karan  Hemal Doshi', 'karan.doshi105417@marwadiuniversity.ac.in', 'karan123', 'karan123'),
('Karan Doshi', 'karan@gmail.com', 'kd123456', 'kd123456'),
('Karan Doshi', 'karan@gmail.com', 'kd123456', 'kd123456'),
('Karan Doshi', 'karan@gmail.com', 'kd123456', 'kd123456'),
('Karan Doshi', 'karan@gmail.com', 'kar123456', 'kar123456'),
('Karan Doshi', 'karan.doshi105417@marwadiuniversity.ac.in', 'Fudc@057', 'Fudc@057'),
('Karan  Doshi', 'karan@gmail.com', 'karan123', 'karan123'),
('Hemal Doshi', 'hemal@gmail.com', 'hemal123', 'hemal123'),
('Ratan Tata', 'rtata@gmail.com', 'tata@123', 'tata@123');

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
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_number` int(11) NOT NULL,
  `task` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `progress` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_number`, `task`, `status`, `manager`, `progress`) VALUES
(5, 'Task I', 'Suspended', 'Manager-1', 40),
(6, 'Task A', 'Doing', 'Manager-1', 90),
(8, 'Task A', 'On Hold', 'Karan', 20),
(9, 'Update Login', 'To-Do', 'Karan', 80),
(10, 'Task A', 'On Hold', 'Karan', 40);

-- --------------------------------------------------------

--
-- Table structure for table `timemanagement`
--

CREATE TABLE `timemanagement` (
  `Ward` varchar(8) NOT NULL,
  `New Timings` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timemanagement`
--

INSERT INTO `timemanagement` (`Ward`, `New Timings`) VALUES
('0', '2020-12-25 02:46:00'),
('0', '2020-12-21 03:47:00'),
('Ward-10', '2020-12-21 03:49:00'),
('Ward-11', '2020-12-22 20:06:00'),
('Ward-4', '2020-12-23 03:07:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
