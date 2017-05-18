SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `Parâmetros` (
  `Transacao_ID` varchar(36) NOT NULL,
  `Cliente_Nome` text NOT NULL,
  `Cliente_Email` varchar(52) NOT NULL,
  `Debito_Credito` text NOT NULL,
  `Tipo_Transacao` text NOT NULL,
  `Status` text NOT NULL,
  `Tipo_Pagamento` int(20) NOT NULL,
  `Valor_Bruto` float NOT NULL,
  `Valor_Desconto` float NOT NULL,
  `Valor_Taxa` float NOT NULL,
  `Valor_Liquido` float NOT NULL,
  `Transportadora` int(11) DEFAULT NULL,
  `Num_Envio` int(11) DEFAULT NULL,
  `Data_Transacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Data_Compensacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Ref_Transacao` int(11) DEFAULT NULL,
  `Parcelas` tinyint(4) NOT NULL,
  `Codigo_Usuario` int(11) DEFAULT NULL,
  `Codigo_Venda` int(11) DEFAULT NULL,
  `Serial_Leitor` int(11) DEFAULT NULL,
  `Recebimentos` tinyint(4) NOT NULL,
  `Recebidos` tinyint(4) NOT NULL,
  `Valor_Recebido` float NOT NULL,
  `Valor_Tarifa_Intermediacao` float NOT NULL,
  `Valor_Taxa_Intermediacao` float NOT NULL,
  `Valor_Taxa_Parcelamento` float NOT NULL,
  `Valor_Tarifa_Boleto` float NOT NULL,
  `Bandeira_Cartao_Credito` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

