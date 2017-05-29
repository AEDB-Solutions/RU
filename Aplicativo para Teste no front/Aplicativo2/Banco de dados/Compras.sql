-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2017 at 09:55 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Compras`
--

CREATE TABLE `Compras` (
  `ID` int(255) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Valor` int(255) NOT NULL,
  `Data` date NOT NULL,
  `Horario` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Compras`
--

INSERT INTO `Compras` (`ID`, `Matricula`, `Valor`, `Data`, `Horario`) VALUES
(1, '14/0150498', 40, '2017-05-15', '16:50:00.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('14/0150498', 40, '2017-05-15', '16:55:00.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('14/0150498', 10, '2017-05-15', '17:05:00.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('14/0142398', 20, '2017-05-15', '17:03:00.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('14/0142398', 15, '2017-05-15', '17:03:0.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('15/0155004', 200, '2017-05-15', '17:03:30.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('15/0155004', 50, '2017-05-15', '17:06:00.000000');
INSERT INTO `Compras` (`Matricula`, `Valor`, `Data`, `Horario`) VALUES
('15/0155004', 5, '2017-05-15', '17:10:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Compras`
--
ALTER TABLE `Compras`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Compras`
--
ALTER TABLE `Compras`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;