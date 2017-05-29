-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/04/2017 às 14:36
-- Versão do servidor: 10.1.21-MariaDB
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iRU_database`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Clientes`
--

CREATE TABLE `Clientes` (
  `ID` int(11) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Grupo` enum('1','2','3') NOT NULL,
  `Crédito` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Clientes`
--

INSERT INTO `Clientes` (`ID`, `Matricula`, `Nome`, `Grupo`, `Crédito`) VALUES
(1, '16/0147701', 'Vinícius', '3', '2.50'),
(2, '66/6666666', 'Lúcifer', '3', '666.66'),
(3, '10/1356218', 'Pombo', '1', '12.50');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Transações`
--

CREATE TABLE `Transações` (
  `ID` int(11) NOT NULL,
  `Data/Hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Transação` int(11) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Grupo` enum('1','2','3') NOT NULL,
  `Quantidade` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Transações`
--

INSERT INTO `Transações` (`ID`, `Data/Hora`, `Transação`, `Matricula`, `Grupo`, `Quantidade`) VALUES
(1, '2017-04-15 12:24:14', 185674, '66/6666666', '3', '6.66');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Matricula` (`Matricula`);

--
-- Índices de tabela `Transações`
--
ALTER TABLE `Transações`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Matricula` (`Matricula`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `Transações`
--
ALTER TABLE `Transações`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
