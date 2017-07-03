-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2017 at 06:36 PM
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
(14, 'Lucas', 'Lucas', 'desenvolvedor', '942f8f3db91bd2bbbd672bc0fbeb509d21ee900a9353577c0f1bb19abe2ffae6'),
(15, 'abdu', 'abdu', 'eletrica', 'f03373ea800c5878b6798c5813250d32f8ecde7f1df6254bdacdf194441c84fe'),
(16, 'gabriel', 'gabriel', 'adorador do schiavini', '2ecb85bfcf286c7a3f751eec0acf8545fc15e8e8c8ec1519719195c35c169b8f'),
(17, '', '', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855');

-- --------------------------------------------------------

--
-- Table structure for table `Compras`
--

CREATE TABLE `Compras` (
  `ID` int(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Valor` float NOT NULL,
  `Data` date NOT NULL,
  `Horario` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Compras`
--

INSERT INTO `Compras` (`ID`, `Codigo`, `Matricula`, `Email`, `Valor`, `Data`, `Horario`) VALUES
(3, '75B0D1B8-3406-4A4C-B7CD-D8133A66C73C', '14/0150498', 'bamidele.lucas@gmail.com', 2.5, '2017-05-31', '13:56:52.000000'),
(4, 'laASLKDJALSKDFAHF9ROI1N3K4J2', '14/0150498', 'bamidele.lucas@gmail.com', 10, '2017-06-22', '10:00:00.000000'),
(5, 'MKGJ90RUQRK4MFJM,R', '14/0150498', 'bamidele.lucas@gmail.com', -2.5, '2017-06-13', '12:30:00.000000'),
(6, 'ASUDAEKJRBKNAM,ND', '15/0089392', 'asdasd@asldk.com', 20, '2017-06-29', '15:47:54.000000'),
(7, 'ASJLDALSDNM,ERM,T,T,M', '13/6670707', 'asdasd@masdkland.unb.br', 30, '2017-06-29', '16:26:10.000000'),
(9, 'AKDBBRBBR', '15/0079371', 'asdads@balsdkalsd.asd', 30, '2017-06-29', '16:39:08.000000');

-- --------------------------------------------------------

--
-- Table structure for table `Distancias`
--

CREATE TABLE `Distancias` (
  `ID` int(255) NOT NULL,
  `Origem` varchar(255) NOT NULL,
  `Destino` varchar(255) NOT NULL,
  `Distancia` float NOT NULL COMMENT 'Kilometros',
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

-- --------------------------------------------------------

--
-- Table structure for table `Entradas`
--

CREATE TABLE `Entradas` (
  `ID` int(11) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Horario` time NOT NULL,
  `Refeitorio` enum('1','2','3','4','5','6') NOT NULL,
  `Data` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Entradas`
--

INSERT INTO `Entradas` (`ID`, `Matricula`, `Horario`, `Refeitorio`, `Data`) VALUES
(45, '<s/pan sty', '05:47:24', '6', '2017-07-03'),
(46, '14/0150498', '00:48:02', '6', '2017-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `Locais`
--

CREATE TABLE `Locais` (
  `ID` int(11) NOT NULL,
  `Local` varchar(255) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Locais`
--

INSERT INTO `Locais` (`ID`, `Local`, `Latitude`, `Longitude`) VALUES
(1, 'RU', -15.764296001046889, -47.87045314845528),
(2, 'FT', -15.763696198573195, -47.87253856408938),
(3, 'SG11', -15.765788001049401, -47.87045314845528),
(4, 'SG12', -15.765545358197226, -47.872883229822776),
(5, 'IDA', -15.76564861051021, -47.87059262332406),
(6, 'BCE', -15.761043506280112, -47.86784604129281),
(7, 'REITORIA', -15.762902081099854, -47.86703064975228),
(8, 'ICC NORTE', -15.76253036749727, -47.87022784289803),
(9, 'ICC SUL', -15.764905192684266, -47.868382483095786),
(10, 'BSAS', -15.766757635234985, -47.8663641189371),
(11, 'BSAN', -15.75713528094311, -47.87121489581551),
(12, 'FD', -15.759654726765337, -47.87196591433968),
(13, 'FS', -15.768782293216205, -47.86621525821175),
(14, 'IQ', -15.768472540903117, -47.86475613650765),
(15, 'CIC', -15.758828682399479, -47.86903694209542),
(16, 'PJC', -15.758405333359422, -47.87024930057015),
(17, 'PAT', -15.759117798309818, -47.87076428470101);

-- --------------------------------------------------------

--
-- Table structure for table `Presentes`
--

CREATE TABLE `Presentes` (
  `ID` int(11) NOT NULL,
  `Remetente` varchar(255) NOT NULL,
  `Destinatario` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Presentes`
--

INSERT INTO `Presentes` (`ID`, `Remetente`, `Destinatario`, `valor`, `Data`) VALUES
(0, '14/0150498', '13/0018007', 5, '0000-00-00'),
(0, '14/0150498', '13/0018007', 2.5, '0000-00-00'),
(0, '15/0089392', '14/0150498', 5, '0000-00-00'),
(0, '13/6670707', '14/0150498', 5, '0000-00-00'),
(0, '15/0079371', '14/0150498', 5, '0000-00-00'),
(0, '14/0150498', '13/01301023', 5, '0000-00-00'),
(0, '13/6670707', '14/0150498', 2.5, '2017-07-03'),
(0, '14/0150498', '13/6670707', 5, '2017-07-03');

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
  `CPF` varchar(14) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(20) NOT NULL,
  `Curso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Username`, `Matricula`, `Email`, `Password`, `CPF`, `Gender`, `Age`, `Curso`) VALUES
(4, 'Lucas Bamidele', '14/0150498', 'bamidele.lucas@gmail.com', '942f8f3db91bd2bbbd672bc0fbeb509d21ee900a9353577c0f1bb19abe2ffae6', '04424668118', 'Masculino', 20, 'Engenharia Elétrica'),
(7, 'Thiago Holanda', '13/0018007', 'thiago.q.holanda@gmail.com', 'ed38b382e8175142ccf47010c73e5a650a40d47a760f0525fe2516d7eb8e004b', '03376162131', 'Masculino', 22, 'Engenharia Eletrica'),
(8, 'Pedro Teste', '13/0130098', 'lala@gmail.com', '3f29e1b2b05f8371595dc761fed8e8b37544b38d56dfce81a551b46c82f2f56b', '123.123.123', 'Masculino', 20, 'Engenharia'),
(9, 'Testando', '15/0005504', 'andre.ribeiro@engnetconsultoria.com.br', 'c47da262c69b2aed198998c970c5e0b116f9aa7ee70fcc1d8a8b6153b4650ba0', '003.165.901-26', 'Masculino', 20, 'Engenharia'),
(10, 'Abdullah Zaiter', '15/0089392', 'abdu@droid.unb.br', '75ee3fc45d438c7c7089103cdf132ce33a6c7c3c69e412165af37322e8d74bb3', '123.123.123-12', 'Outros', 20, 'Letras'),
(11, 'Gabriel', '13/6670707', 'asd@droid.unb.br', '2ecb85bfcf286c7a3f751eec0acf8545fc15e8e8c8ec1519719195c35c169b8f', '123.123.123-13', 'Outros', 22, 'Adminstração'),
(12, 'Gabriel Lins', '15/0079371', 'gabriel@droid.unb.br', '593fdc44bf914de8a9a495cfe1c8949bd8dd9701c1654edb9abdc352c4c035bc', '123.123.333-12', 'Outros', 20, 'Adminstração');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Compras`
--
ALTER TABLE `Compras`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Codigo` (`Codigo`);

--
-- Indexes for table `Distancias`
--
ALTER TABLE `Distancias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`,`Origem`,`Destino`);

--
-- Indexes for table `Entradas`
--
ALTER TABLE `Entradas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Locais`
--
ALTER TABLE `Locais`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Compras`
--
ALTER TABLE `Compras`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `Distancias`
--
ALTER TABLE `Distancias`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;
--
-- AUTO_INCREMENT for table `Entradas`
--
ALTER TABLE `Entradas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `Locais`
--
ALTER TABLE `Locais`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;