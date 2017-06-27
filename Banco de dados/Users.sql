-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2017 at 10:17 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(20) NOT NULL,
  `Curso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Username`, `Matricula`, `Email`, `Password`, `CPF`, `Gender`, `Age`, `Curso`) VALUES
(4, 'Lucas Bamidele', '14/0150498', 'bamidele.lucas@gmail.com', '942f8f3db91bd2bbbd672bc0fbeb509d21ee900a9353577c0f1bb19abe2ffae6', '04424668118', 'Masculino', 20, 'Engenharia Elétrica'),
(7, 'Thiago Holanda', '13/0018007', 'thiago.q.holanda@gmail.com', 'ed38b382e8175142ccf47010c73e5a650a40d47a760f0525fe2516d7eb8e004b', '03376162131', 'Masculino', 22, 'Engenharia Eletrica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Matricula` (`Matricula`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD KEY `Gender` (`Gender`,`Age`,`Curso`),
  ADD KEY `Password` (`Password`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;