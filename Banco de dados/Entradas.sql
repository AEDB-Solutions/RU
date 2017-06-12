-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/06/2017 às 21:19
-- Versão do servidor: 10.1.21-MariaDB
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Test`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Entradas`
--

CREATE TABLE `Entradas` (
  `ID` int(11) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Horario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Refeitorio` enum('1','2','3','4','5','6') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Entradas`
--

INSERT INTO `Entradas` (`ID`, `Matricula`, `Horario`, `Refeitorio`) VALUES
(1, '66/67657', '2017-05-18 00:05:40', '1'),
(2, '4543534', '2017-05-18 00:18:09', '1'),
(3, '556776', '2017-05-18 00:18:13', '1'),
(4, '6655544', '2017-05-18 00:18:16', '1'),
(5, '5452543', '2017-05-18 00:18:20', '1'),
(6, '54543543', '2017-05-18 00:18:24', '1'),
(7, '445665', '2017-05-18 00:18:27', '1'),
(8, '45353467', '2017-05-18 00:18:31', '1'),
(9, '354353', '2017-05-18 00:18:34', '1'),
(10, '235255', '2017-05-18 00:18:38', '1'),
(11, '353252', '2017-05-18 00:18:42', '1'),
(12, '546365', '2017-05-18 00:18:45', '1'),
(13, '677865', '2017-05-18 00:18:48', '1'),
(14, '6332525', '2017-05-18 00:18:51', '1'),
(15, '8778', '2017-05-22 16:17:46', '1'),
(16, '4353453', '2017-06-07 17:17:55', '1'),
(17, '4643646', '2017-06-07 17:20:56', '1'),
(18, '45354353', '2017-06-07 17:42:04', '1'),
(19, '4353543', '2017-06-12 17:07:30', '1'),
(20, '4534543', '2017-06-12 17:08:52', '2'),
(21, '4364364', '2017-06-12 17:18:30', '6'),
(22, '3454353', '2017-06-12 17:18:51', '6'),
(23, '4564645', '2017-06-12 17:28:22', '3'),
(24, '4645646', '2017-06-12 17:28:31', '4'),
(25, '546464', '2017-06-12 17:28:40', '5'),
(26, '455464', '2017-06-12 17:28:48', '6'),
(27, '43446', '2017-06-12 17:28:57', '6'),
(28, '464645', '2017-06-12 17:49:35', '6'),
(29, '4353543', '2017-06-12 19:17:56', '2');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Entradas`
--
ALTER TABLE `Entradas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Entradas`
--
ALTER TABLE `Entradas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
