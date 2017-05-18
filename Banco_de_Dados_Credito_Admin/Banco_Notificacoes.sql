SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `notifications` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` text NOT NULL,
  `reference` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(9) NOT NULL,
  `cancellationsource` int(11) DEFAULT NULL,
  `lasteventdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentmethod` int(7) NOT NULL,
  `paymentmethod_code` int(225) NOT NULL,
  `grossamount` decimal(10,0) NOT NULL,
  `discountamount` decimal(10,0) NOT NULL,
  `netamount` decimal(10,0) NOT NULL,
  `escrowenddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extraamount` decimal(10,0) NOT NULL,
  `installmentcount` int(11) NOT NULL,
  `installmentfeeamount` decimal(10,0) NOT NULL,
  `operationalfeeamount` decimal(10,0) NOT NULL,
  `intermediationrateamount` int(11) NOT NULL,
  `id` text NOT NULL,
  `description` text NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `quantity` int(225) NOT NULL,
  `email` varchar(60) NOT NULL,
  `name` text NOT NULL,
  `areacode_number` int(2) NOT NULL,
  `number_address` int(9) NOT NULL,
  `shipping_type` int(11) NOT NULL,
  `shipping_cost` float NOT NULL,
  `country` int(11) DEFAULT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `postalcode` varchar(9) NOT NULL,
  `district` text NOT NULL,
  `street` text NOT NULL,
  `number` text NOT NULL,
  `complement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


