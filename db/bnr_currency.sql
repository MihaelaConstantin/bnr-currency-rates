-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 01:45 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnr_currency`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency_rates`
--

DROP TABLE IF EXISTS `currency_rates`;
CREATE TABLE IF NOT EXISTS `currency_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `AED` varchar(50) NOT NULL,
  `AUD` varchar(50) NOT NULL,
  `BGN` varchar(50) NOT NULL,
  `BRL` varchar(50) NOT NULL,
  `CAD` varchar(50) NOT NULL,
  `CHF` varchar(50) NOT NULL,
  `CNY` varchar(50) NOT NULL,
  `CZK` varchar(50) NOT NULL,
  `DKK` varchar(50) NOT NULL,
  `EGP` varchar(50) NOT NULL,
  `EUR` varchar(50) NOT NULL,
  `GBP` varchar(50) NOT NULL,
  `HRK` varchar(50) NOT NULL,
  `HUF` varchar(50) NOT NULL,
  `INR` varchar(50) NOT NULL,
  `JPY` varchar(50) NOT NULL,
  `KRW` varchar(50) NOT NULL,
  `MDL` varchar(50) NOT NULL,
  `MXN` varchar(50) NOT NULL,
  `NOK` varchar(50) NOT NULL,
  `NZD` varchar(50) NOT NULL,
  `PLN` varchar(50) NOT NULL,
  `RSD` varchar(50) NOT NULL,
  `RUB` varchar(50) NOT NULL,
  `SEK` varchar(50) NOT NULL,
  `THB` varchar(50) NOT NULL,
  `TRY` varchar(50) NOT NULL,
  `UAH` varchar(50) NOT NULL,
  `USD` varchar(50) NOT NULL,
  `XAU` varchar(50) NOT NULL,
  `XDR` varchar(50) NOT NULL,
  `ZAR` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
