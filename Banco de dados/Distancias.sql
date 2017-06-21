-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2017 at 06:09 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Distancias`
--

CREATE TABLE `Distancias` (
  `ID` int(255) NOT NULL,
  `Origem` varchar(255) NOT NULL,
  `Destino` varchar(255) NOT NULL,
  `Distancia` float NOT NULL,
  `Tempo` float NOT NULL COMMENT 'minutos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Distancias`
--

INSERT INTO `Distancias` (`ID`, `Origem`, `Destino`, `Distancia`, `Tempo`) VALUES
(137, 'RU', 'FT', 0.6, 7),
(138, 'RU', 'SG11', 0.4, 5),
(139, 'RU', 'SG12', 0.6, 7),
(140, 'RU', 'IDA', 0.5, 7),
(141, 'RU', 'BCE', 0.5, 6),
(142, 'RU', 'REITORIA', 0.5, 5),
(143, 'RU', 'ICC NORTE', 0.2, 3),
(144, 'RU', 'ICC SUL', 0.7, 9),
(145, 'RU', 'BSAS', 1.5, 18),
(146, 'RU', 'BSAN', 0.9, 11),
(147, 'RU', 'FD', 0.6, 7),
(148, 'RU', 'FS', 1.3, 16),
(149, 'RU', 'IQ', 1.3, 16),
(150, 'RU', 'CIC', 1, 12),
(151, 'RU', 'PJC', 0.8, 10),
(152, 'RU', 'PAT', 0.7, 8),
(153, 'FT', 'SG11', 0.5, 7),
(154, 'FT', 'SG12', 0.2, 3),
(155, 'FT', 'IDA', 0.4, 5),
(156, 'FT', 'BCE', 0.9, 10),
(157, 'FT', 'REITORIA', 1, 11),
(158, 'FT', 'ICC NORTE', 0.5, 6),
(159, 'FT', 'ICC SUL', 1, 12),
(160, 'FT', 'BSAS', 1.8, 21),
(161, 'FT', 'BSAN', 1.1, 13),
(162, 'FT', 'FD', 0.7, 9),
(163, 'FT', 'FS', 1.6, 19),
(164, 'FT', 'IQ', 1.6, 20),
(165, 'FT', 'CIC', 1.2, 14),
(166, 'FT', 'PJC', 1, 12),
(167, 'FT', 'PAT', 0.9, 11),
(168, 'SG11', 'SG12', 0.5, 6),
(169, 'SG11', 'IDA', 0.2, 3),
(170, 'SG11', 'BCE', 0.8, 9),
(171, 'SG11', 'REITORIA', 0.6, 6),
(172, 'SG11', 'ICC NORTE', 0.5, 5),
(173, 'SG11', 'ICC SUL', 0.5, 6),
(174, 'SG11', 'BSAS', 1.2, 15),
(175, 'SG11', 'BSAN', 1.1, 14),
(176, 'SG11', 'FD', 0.8, 10),
(177, 'SG11', 'FS', 1, 13),
(178, 'SG11', 'IQ', 1.1, 13),
(179, 'SG11', 'CIC', 1.2, 14),
(180, 'SG11', 'PJC', 1, 13),
(181, 'SG11', 'PAT', 0.9, 11),
(182, 'SG12', 'IDA', 0.4, 5),
(183, 'SG12', 'BCE', 0.8, 9),
(184, 'SG12', 'REITORIA', 1, 11),
(185, 'SG12', 'ICC NORTE', 0.5, 6),
(186, 'SG12', 'ICC SUL', 0.9, 10),
(187, 'SG12', 'BSAS', 1.6, 19),
(188, 'SG12', 'BSAN', 1.2, 14),
(189, 'SG12', 'FD', 0.9, 10),
(190, 'SG12', 'FS', 1.4, 17),
(191, 'SG12', 'IQ', 1.5, 18),
(192, 'SG12', 'CIC', 1.3, 15),
(193, 'SG12', 'PJC', 1.1, 13),
(194, 'SG12', 'PAT', 1, 11),
(195, 'IDA', 'BCE', 0.8, 9),
(196, 'IDA', 'REITORIA', 0.8, 9),
(197, 'IDA', 'ICC NORTE', 0.5, 6),
(198, 'IDA', 'ICC SUL', 0.7, 8),
(199, 'IDA', 'BSAS', 1.4, 17),
(200, 'IDA', 'BSAN', 1.2, 14),
(201, 'IDA', 'FD', 0.8, 10),
(202, 'IDA', 'FS', 1.2, 15),
(203, 'IDA', 'IQ', 1.3, 15),
(204, 'IDA', 'CIC', 1.3, 15),
(205, 'IDA', 'PJC', 1.1, 13),
(206, 'IDA', 'PAT', 0.9, 11),
(207, 'BCE', 'REITORIA', 0.4, 5),
(208, 'BCE', 'ICC NORTE', 0.3, 4),
(209, 'BCE', 'ICC SUL', 1, 12),
(210, 'BCE', 'BSAS', 1.9, 23),
(211, 'BCE', 'BSAN', 0.8, 10),
(212, 'BCE', 'FD', 0.7, 9),
(213, 'BCE', 'FS', 1.7, 21),
(214, 'BCE', 'IQ', 1.7, 21),
(215, 'BCE', 'CIC', 0.5, 6),
(216, 'BCE', 'PJC', 0.8, 10),
(217, 'BCE', 'PAT', 0.7, 9),
(218, 'REITORIA', 'ICC NORTE', 0.5, 6),
(219, 'REITORIA', 'ICC SUL', 0.8, 10),
(220, 'REITORIA', 'BSAS', 1.6, 20),
(221, 'REITORIA', 'BSAN', 1, 13),
(222, 'REITORIA', 'FD', 0.8, 11),
(223, 'REITORIA', 'FS', 1.5, 18),
(224, 'REITORIA', 'IQ', 1.5, 19),
(225, 'REITORIA', 'CIC', 0.7, 9),
(226, 'REITORIA', 'PJC', 1.1, 13),
(227, 'REITORIA', 'PAT', 1, 12),
(228, 'ICC NORTE', 'ICC SUL', 0.9, 11),
(229, 'ICC NORTE', 'BSAS', 1.7, 20),
(230, 'ICC NORTE', 'BSAN', 0.7, 9),
(231, 'ICC NORTE', 'FD', 0.4, 5),
(232, 'ICC NORTE', 'FS', 1.5, 18),
(233, 'ICC NORTE', 'IQ', 1.5, 19),
(234, 'ICC NORTE', 'CIC', 0.8, 9),
(235, 'ICC NORTE', 'PJC', 0.6, 8),
(236, 'ICC NORTE', 'PAT', 0.5, 6),
(237, 'ICC SUL', 'BSAS', 1.3, 16),
(238, 'ICC SUL', 'BSAN', 1.6, 20),
(239, 'ICC SUL', 'FD', 1.3, 16),
(240, 'ICC SUL', 'FS', 1.1, 14),
(241, 'ICC SUL', 'IQ', 1.2, 15),
(242, 'ICC SUL', 'CIC', 1.3, 16),
(243, 'ICC SUL', 'PJC', 1.5, 19),
(244, 'ICC SUL', 'PAT', 1.4, 17),
(245, 'BSAS', 'BSAN', 2.4, 29),
(246, 'BSAS', 'FD', 2, 25),
(247, 'BSAS', 'FS', 0.3, 4),
(248, 'BSAS', 'IQ', 0.4, 5),
(249, 'BSAS', 'CIC', 2.2, 27),
(250, 'BSAS', 'PJC', 2.3, 28),
(251, 'BSAS', 'PAT', 2.1, 26),
(252, 'BSAN', 'FD', 0.4, 5),
(253, 'BSAN', 'FS', 2.2, 27),
(254, 'BSAN', 'IQ', 2.2, 27),
(255, 'BSAN', 'CIC', 0.3, 4),
(256, 'BSAN', 'PJC', 0.2, 2),
(257, 'BSAN', 'PAT', 0.2, 3),
(258, 'FD', 'FS', 1.8, 23),
(259, 'FD', 'IQ', 1.9, 23),
(260, 'FD', 'CIC', 0.6, 7),
(261, 'FD', 'PJC', 0.3, 4),
(262, 'FD', 'PAT', 0.2, 2),
(263, 'FS', 'IQ', 0.2, 2),
(264, 'FS', 'CIC', 2, 24),
(265, 'FS', 'PJC', 2.1, 25),
(266, 'FS', 'PAT', 1.9, 24),
(267, 'IQ', 'CIC', 2.1, 25),
(268, 'IQ', 'PJC', 2.1, 26),
(269, 'IQ', 'PAT', 2, 24),
(270, 'CIC', 'PJC', 0.3, 4),
(271, 'CIC', 'PAT', 0.5, 6),
(272, 'PJC', 'PAT', 0.062, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Distancias`
--
ALTER TABLE `Distancias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`,`Origem`,`Destino`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Distancias`
--
ALTER TABLE `Distancias`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;