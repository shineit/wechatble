-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: w.rdc.sae.sina.com.cn:3307
-- Generation Time: Jul 22, 2015 at 08:12 PM
-- Server version: 5.5.23
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_smdzjl`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesstokeninfo`
--

CREATE TABLE IF NOT EXISTS `accesstokeninfo` (
  `appid` char(20) NOT NULL,
  `appsecret` char(50) NOT NULL,
  `lasttime` int(6) NOT NULL,
  `access_token` text NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesstokeninfo`
--

INSERT INTO `accesstokeninfo` (`appid`, `appsecret`, `lasttime`, `access_token`) VALUES
('a1', '12', 5, 'ddasdf'),
('aa', 'bb', 2, 'dd'),
('wx32f73ab219f56efb', 'eca20c2a26a5ec5b64a89d15ba92a781', 1437367606, 'vD4020CaEXrUNY5i51rVkzH6pn1prB5n2o2BOAQqkVG7NM4QCyDmiQAXQZYD6_ZbbUK0247NSQoi-xT74ixsoDMvHh4JzvYpJkvGL_hE0eM');

-- --------------------------------------------------------

--
-- Table structure for table `bleboundinfo`
--

CREATE TABLE IF NOT EXISTS `bleboundinfo` (
  `sid` int(6) NOT NULL,
  `fromUserName` char(50) NOT NULL,
  `deviceID` char(128) NOT NULL,
  `openID` char(50) NOT NULL,
  `deviceType` char(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bleboundinfo`
--

INSERT INTO `bleboundinfo` (`sid`, `fromUserName`, `deviceID`, `openID`, `deviceType`) VALUES
(1, 'weixinsmdzjl', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(2, 'weixinsmdzjl', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(3, 'weixinsmdzjl1', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb1', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE1', 'gh_9b450bb632821'),
(4, 'weixinsmdzjl1', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb1', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE1', 'gh_9b450bb632821'),
(5, 'weixinsmdzjl1', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb1', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE1', 'gh_9b450bb632821'),
(123456, 'weixinsmdzjl1', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb1', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE1', 'gh_9b450bb632821'),
(123457, 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(123461, 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(123460, 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282_141e7fe7d78afb93fdd0672529d5ad32', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282');

-- --------------------------------------------------------

--
-- Table structure for table `deviceqrcode`
--

CREATE TABLE IF NOT EXISTS `deviceqrcode` (
  `deviceid` char(50) NOT NULL,
  `qrcode` char(100) NOT NULL,
  `devicetype` char(50) NOT NULL,
  `mac` char(20) NOT NULL,
  PRIMARY KEY (`deviceid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deviceqrcode`
--

INSERT INTO `deviceqrcode` (`deviceid`, `qrcode`, `devicetype`, `mac`) VALUES
('gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'http://we.qq.com/d/AQACNzy4rYHiiD84ocyPRa-NMM70_vULC2OdJmWB', 'gh_9b450bb63282', 'D03972A5EF24'),
('gh_9b450bb63282_141e7fe7d78afb93fdd0672529d5ad32', 'http://we.qq.com/d/AQACNzy4JOGhuiMEWTjlZZ-Z4Xk0gDIQ0eJMbBzG', 'gh_9b450bb63282', ''),
('gh_9b450bb63282_7815e11c02df6171fa9e49d34cc572ef', 'http://we.qq.com/d/AQACNzy4VZPx3A1LigwAjezmvVaYhG5QFQ-eulMX', 'gh_9b450bb63282', ''),
('gh_9b450bb63282_b9bfea3842c2cb201a5644cf6d60630b', 'http://we.qq.com/d/AQACNzy4uA7uB3-yo211J8_I8bN1Mlu6hyWM0cqk', 'gh_9b450bb63282', ''),
('gh_9b450bb63282_f042865f8a506bbcf1a98d1badf013dd', 'http://we.qq.com/d/AQACNzy4wiXaw5bg8V3yG_Nx6-IqavEnmfZ9Ff92', 'gh_9b450bb63282', ''),
('gh_9b450bb63282_f0c80cde21690dd1e4507d3cc69e7112', 'http://we.qq.com/d/AQACNzy4W-V4iwjP0aiuU0Wrpp6n-ODxlkIfIQZY', 'gh_9b450bb63282', '');

-- --------------------------------------------------------

--
-- Table structure for table `emcdatainfo`
--

CREATE TABLE IF NOT EXISTS `emcdatainfo` (
  `timeStamp` int(4) NOT NULL,
  `fromUserName` char(30) NOT NULL,
  `deviceID` char(50) NOT NULL,
  `emcValue` int(2) NOT NULL,
  PRIMARY KEY (`timeStamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emcdatainfo`
--

