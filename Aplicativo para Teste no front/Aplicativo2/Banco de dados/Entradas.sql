-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/05/2017 às 02:44
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
  `Horario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Entradas`
--

INSERT INTO `Entradas` (`ID`, `Matricula`, `Horario`) VALUES
(1, '66/67657', '2017-05-18 00:05:40'),
(2, '4543534', '2017-05-18 00:18:09'),
(3, '556776', '2017-05-18 00:18:13'),
(4, '6655544', '2017-05-18 00:18:16'),
(5, '5452543', '2017-05-18 00:18:20'),
(6, '54543543', '2017-05-18 00:18:24'),
(7, '445665', '2017-05-18 00:18:27'),
(8, '45353467', '2017-05-18 00:18:31'),
(9, '354353', '2017-05-18 00:18:34'),
(10, '235255', '2017-05-18 00:18:38'),
(11, '353252', '2017-05-18 00:18:42'),
(12, '546365', '2017-05-18 00:18:45'),
(13, '677865', '2017-05-18 00:18:48'),
(14, '6332525', '2017-05-18 00:18:51');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
