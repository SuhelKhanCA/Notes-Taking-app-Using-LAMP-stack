-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2022 at 09:34 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19877462_noter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
('suhel5050', 'Suhel', 'Khan', 'suhel50', 'suhel@gmail.com', '$2y$10$b9HD22YXMoeSxVZASI4/1.JerqBRmXFr7T89eZn5WoT6.lgzUMUfW'),
('taha5050', 'Taha', 'Mustafa', 'taha50', 'taha@gmail.com', '$2y$10$Atmw/jeybgVJT7dAeAo7n.erGFHP4M.oaXtxNU1dWJAUHfI8T6Ldu');

-- --------------------------------------------------------

--
-- Table structure for table `normaluser`
--

CREATE TABLE `normaluser` (
  `username` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normaluser`
--

INSERT INTO `normaluser` (`username`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `city`, `deleted`) VALUES
('aasil1', 'Aasil', 'Hasan', 'dummmydata@gmail.com', '$2y$10$9vZ9cJ6nZ3iLb.cee5.k6eSiw5OC9fKY2Cqttx6VE0rlP3BvEGcuO', 123456789, 'Amroha ', 0),
('aditya01', 'Aditya', 'Singh', 'dummmydata@gmail.com', '$2y$10$1FGu8BQkOVbFlAfxqvtg0.nlLQ1Zou1sHNOmzFn9xjbRp1pJzF8Ay', 123456789, 'Ahmedabad ', 0),
('anas', 'Mohammad', 'Anas', 'dummmydata@gmail.com', '$2y$10$mpsCPWJPTYCilGHLdUQeO./Xsmlrg.Tg1CHHyXFF7YVnGQ1qAku3u', 123456789, 'Sitapur', 0),
('Anwarul', 'Anwarul', 'Zafar', 'dummmydata@gmail.com', '$2y$10$68b7qFwXaO/1PQbGpK9wd.Bb5zEfjLxvjydslJXFobPfYyZDKwR8G', 123456789, 'Sitapur', 0),
('Arman1', 'Arman ', 'Ansari ', 'dummmydata@gmail.com', '$2y$10$cQHd83K1MjqQ4FMybdsBD.SuZl2ra6YejZ.VpBpOsbjWLfTzzOlqO', 123456789, 'Sitapur', 0),
('george_001', 'George', 'Bush', 'dummmydata@gmail.com', '$2y$10$og6J/XWnb3T9VX.o13rj2u4Nh2OagP7Hbs0xyadlsmz4mMA1ssgV.', 123456789, 'new york', 0),
('himanshu7', 'Himanshu ', 'Rajpoot', 'dummmydata@gmail.com', '$2y$10$CTPH1tWiF0ycaOSmVj13YeMx6lVCq0MV2Xyb6yKqn5PbmYdrUICka', 123456789, 'Sitapur', 0),
('NazirSAlvi', 'Nazir', 'Alvi', 'dummmydata@gmail.com', '$2y$10$CPDnGVgwYZB6eTzm55YiiOUMl5C7XXYLmaiWZXneDi6sfBP.dUHQq', 123456789, 'Sitapur', 0),
('rehan_44', 'Rehan', 'Khan', 'dummmydata@gmail.com', '$2y$10$s/4ULVOTvfEaQGtVwvuFw.U3t2qRa2AkKerdsjRX4qIENHE3BZYlS', 123456789, 'Kannauj', 0),
('suhel_0', 'Suhel', 'Khan', 'dummmydata@gmail.com', '$2y$10$ErxH7rsreEc5p25E5Z3N.OAyasJajjFN4vbmrSrVHsTSUDzxgmppK', 123456789, 'KUSHINAGAR', 0),
('taha', 'Taha', 'Mustafa', 'dummmydata@gmail.com', '$2y$10$oVAK60JMMuzN2qfRe9jOD.xD3HcJiWXF3eLLfRktRVtcnj3.Xycji', 123456789, 'Sitapur', 0),
('taha_0', 'Taha', 'Mustafa', 'dummmydata@gmail.com', '$2y$10$GzL.Yz2PrA78pGPkSZArPOs.5JoxPNjxfwN3UwnYu3FKforNYh9N2', 123456789, 'Lucknow', 0),
('Verma', 'Aditya', 'Verma', 'dummmydata@gmail.com', '$2y$10$cgVkzgLnXxt8MnPDqtSVQO.qKaZLvrNVauOExtAxOAsHKtsDqVJLi', 123456789, 'Sitapur', 0),
('vishraj', 'Vishal', 'Rajani', 'dummmydata@gmail.com', '$2y$10$VP5JJGABBIa752ihP4qZfuku/Y/x1Qb2LoxDBJMmYBH7aBxvo7CJG', 123456789, 'Aligarh', 0),
('we', 'we', 'we', 'dummmydata@gmail.com', '$2y$10$aw6uTunXuMBh6EEM2VuBM.MlMis0oUebA6un7uASjetv9f0TGIWre', 123456789, 'we', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `noteid` int(10) NOT NULL,
  `notename` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `ldate` varchar(255) DEFAULT 'Not Yet Modified',
  `ltime` varchar(255) DEFAULT 'Not Yet Modified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteid`, `notename`, `Description`, `username`, `date`, `time`, `ldate`, `ltime`) VALUES
(33, 'America', 'The United States of America (U.S.A. or USA), commonly known as the United States (U.S. or US) or America, is a country located in North America. It consists of 50 states, a federal district, five major unincorporated territories, nine Minor Outlying Islands,[j] and 326 Indian reservations. It is the third-largest country by both land and total area.[d] The United States shares land borders with Canada to its north and with Mexico to its south. It has maritime borders with the Bahamas, Cuba, Russia, and other nations.[k] With a population of over 331 million,[e] it is the third most populous country in the world. The national capital is Washington, D.C., and the most populous city and financial center is New York City.', 'george_001', '19-11-22', '03:39:52 PM', '25/11/22', '08:42:55 PM'),
(35, 'First Note', 'Hello World,this is my first web note', 'aditya01', '19-11-22', '05:57:45 PM', 'Not Yet Modified', 'Not Yet Modified'),
(37, '2021', 'The new order', 'we', '21-11-22', '08:00:56 PM', 'Not Yet Modified', 'Not Yet Modified'),
(41, 'hwllo', 'nbnbswnbwn', 'we', '22-11-22', '07:56:33 AM', 'Not Yet Modified', 'Not Yet Modified'),
(47, 'Isomerism', 'In chemistry, isomers are molecules or polyatomic ions with identical molecular formulae – that is, same number of atoms of each element – but distinct arrangements of atoms in space. Isomerism is existence or possibility of isomers. Isomers do not necessarily share similar chemical or physical properties', 'Anwarul', '22-11-22', '09:56:44 PM', 'Not Yet Modified', 'Not Yet Modified'),
(52, 'I love me', 'You are mind blowing bro!', 'vishraj', '23-11-22', '08:39:58 PM', 'Not Yet Modified', 'Not Yet Modified'),
(54, 'hindi', 'good subject', 'himanshu7', '23-11-22', '11:50:06 PM', 'Not Yet Modified', 'Not Yet Modified'),
(55, 'Untouchability ', 'Untouchability is the crime against man and God', 'suhel_0', '24-11-22', '12:13:23 PM', 'Not Yet Modified', 'Not Yet Modified'),
(73, 'Monster1', 'This is a modified note', 'taha', '24/11/22', '07:28:22 PM', '26/11/22', '11:43:33 AM'),
(75, 'Note2', 'This is second nite', 'taha', '26/11/22', '11:43:54 AM', 'Not Yet Modified', 'Not Yet Modified');

-- --------------------------------------------------------

--
-- Table structure for table `publicnotes`
--

CREATE TABLE `publicnotes` (
  `publicid` int(10) NOT NULL,
  `noteid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publicnotes`
--

INSERT INTO `publicnotes` (`publicid`, `noteid`) VALUES
(12, 33),
(17, 37),
(16, 47),
(20, 54),
(21, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `normaluser`
--
ALTER TABLE `normaluser`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `publicnotes`
--
ALTER TABLE `publicnotes`
  ADD PRIMARY KEY (`publicid`),
  ADD KEY `noteid` (`noteid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `publicnotes`
--
ALTER TABLE `publicnotes`
  MODIFY `publicid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `normaluser` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publicnotes`
--
ALTER TABLE `publicnotes`
  ADD CONSTRAINT `noteid` FOREIGN KEY (`noteid`) REFERENCES `notes` (`noteid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
