-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2017 at 06:57 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `ID` int(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Cargo` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`ID`, `User`, `Nome`, `Cargo`, `Senha`) VALUES
(1, 'admin', 'admin', 'Todo poderoso', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(2, 'oi', 'caio', 'supremo', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(4, 'admin', 'asd', 'asd', '8a86c4eecf12446ff273afc03e1b3a09a911d0b7981db1af58cb45c439161295'),
(5, 'admin', 'asd', 'asd', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(6, 'admin', 'asd', 'asd', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(7, 'admin', 'asd', 'asd', '66b1132a0173910b01ee3a15ef4e69583bbf2f7f1e4462c99efbe1b9ab5bf808'),
(8, 'admin', 'asdadsasd', 'asdasdasd', 'd1686901cd4f848691eb10f756ff6f5315bfe5320a6b96c39622a3b8e3550d3b'),
(9, 'asdasdasd', 'asdaawq', 'qwe', '9eedcad8ec7a9971a0aaee2000551277fc1b995db9e5f20260c3eb2c9b6d075f'),
(10, 'asdasdasd', 'asdaawq', 'qwe', 'da7c519ee04dd2bd96dc23664cb8e85c82a67a40826e40dbff744ec70f369214'),
(11, 'dasd', 'addasd', 'deeed', 'a6fab14876ae66833aa96f13a4b818f4008bf88f5910687c7981447cb8412268'),
(12, 'asd', 'dasda', 'dasdad', '6fe8ecbc1deafa51c2ecf088cf364eba1ceba9032ffbe2621e771b90ea93153d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;