-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 03:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `uid` int(11) DEFAULT NULL,
  `building` varchar(20) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `sec_street` varchar(30) DEFAULT NULL,
  `sec_city` varchar(20) DEFAULT NULL,
  `sec_state` varchar(20) DEFAULT NULL,
  `sec_zip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`uid`, `building`, `street`, `city`, `state`, `zip`, `sec_street`, `sec_city`, `sec_state`, `sec_zip`) VALUES
(2, 'iuehfefe', 'fuiefbeub', 'feufb', 'fuefbue', 4151, 'fuiefbeub', 'feufb', 'fuefbue', 4151),
(3, 'fefe', 'feobfeo', 'feufneu', 'feobf', 123456, 'feobfeo', 'feufneu', 'feobf', 123456),
(4, 'feuifi', 'fuihfeieuf', 'fuiebfei', 'fieubfib', 123456, 'fuihfeieuf', 'fuiebfei', 'fieubfib', 123456),
(5, 'fefe', 'fegreg', 'grgrg', 'grgrg', 123456, 'fegreg', 'grgrg', 'grgrg', 123456),
(7, 'efgerfg', 'fenfo', 'foebfoq', 'fbub', 123456, 'fenfo', 'foebfoq', 'fbub', 123456),
(8, 'feuifh', 'deiuhfieubfuieb', 'febfiu', 'eufebifu', 123456, 'deiuhfieubfuieb', 'febfiu', 'eufebifu', 123456),
(9, 'iefvi', 'fuiegfiubfi', 'fiuefgbiu', 'fuiegb', 123456, 'fuiegfiubfi', 'fiuefgbiu', 'fuiegb', 123456),
(10, 'feuifh', 'feoihf', 'fob', 'fobe', 123456, 'feoihf', 'fob', 'fobe', 123456),
(11, 'fheuife', 'feifbieb', 'fbiefbi', 'bfuiefhuie', 123456, 'feifbieb', 'fbiefbi', 'bfuiefhuie', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` char(60) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `tcode` varchar(20) NOT NULL,
  `h_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `email`, `pw`, `role`, `fname`, `lname`, `tcode`, `h_phone`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$QHXcIVjq8WuN3aTzei0oeONQKB/SzxyAQJttxCvi52u8wOQKtHYEO', 'admin', 'admin', 'minda', 'hello', 1234567890),
(3, '7038920985', 'nuruddinwarsi89@gmai', '$2y$10$CDOj/304NF.PsB0Xl0jeuOjCYNvFVUhZpB2QjQ58eZJ5v36sVzGzW', 'customer', 'Nuruddin', 'Warsi', 'hello', 987654321),
(4, '1234567890', 'wfef@fwef.com', '$2y$10$0jwEeCo8Gwvx6U9iK26Q3OxWwa7w/kQpsusiqyQaJNRbLBWniwH6W', 'customer', 'guigb', 'feibf', 'fieb', 1234567890),
(5, '1234567891', 'gwarsi70@gmail.com', '$2y$10$I0nMmWRfzob.qdN.VYXKCOUT4GzLapDPHGzsXOffjyprVyNrCjn6.', 'customer', 'fefe', 'fefef', 'fefef', 1234567890),
(7, '1234567811', 'kaneezwarsia14@gmail.com', '$2y$10$cOKvMK0QX7/MzGLDSNXh/.3c8Jdp3WeXEkAGj24gRjqjia4m0jv9C', 'customer', 'fefef', 'fef', 'fefef', 1234567890),
(8, '1234567089', 'h2@fie.com', '$2y$10$uyqd33ZgGBG5jFldkBGVm.jBIz1eU0pEg90oIfxwko3iqVZZtrEHq', 'customer', 'feiufbie', 'fuiebfi', 'fbeifbie', 1234567890),
(9, '0987654321', 'feiowfno@fefef.cinoin', '$2y$10$rBaUCRXsO.N97VEVb8APXuTbITD.azDJxAHbPbjYpVPaAv0umJuxe', 'customer', 'fefuib', 'fibfi', 'fiebfie', 1234567890),
(10, '1234567022', 'admdwdwdin@gmail.com', '$2y$10$YuHJ8kt1qcDzkMYFk3C2ieoiqfjFxc3lkj1/Oh8IO2YHGtz17PIUq', 'customer', 'greugrieu', 'fuibefube', 'fbuiefbueb', 1234567890),
(11, '1234567098', 'fiowdwdefhf@fendwdfo.ceuib', '$2y$10$8YgqSB9QFblr5Eeo38Ohe.E2dB9HwFIjp76Bn1ZvYha.SgriZu0j.', 'customer', 'grgbuib', 'nfeibfib', 'feuiobfoqb', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
