-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2015 年 08 月 20 日 22:17
-- 服务器版本: 5.5.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_mfuncard`
--

-- --------------------------------------------------------

--
-- 表的结构 `accesstokeninfo`
--

CREATE TABLE IF NOT EXISTS `accesstokeninfo` (
  `appid` char(20) NOT NULL,
  `appsecret` char(50) NOT NULL,
  `lasttime` int(6) NOT NULL,
  `access_token` text NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `accesstokeninfo`
--

INSERT INTO `accesstokeninfo` (`appid`, `appsecret`, `lasttime`, `access_token`) VALUES
('wx1183be5c8f6a24b4', 'd52a63064ed543c5eecae6c3df35be55', 1440073174, 'mANOi_a2lbFFRZavgft35s42p6MTTwuwMrcZfoUOy6FpHxXAU3mbs6PmScRVv6Z54GGJ9zx8n133xMTm2xLsW_mmB9kFMZPmfy4o31uOnSs'),
('wx32f73ab219f56efb', 'eca20c2a26a5ec5b64a89d15ba92a781', 1438248574, '7xSTOFs36MOa0M9HZgAEOg2FqYN3AvA3yTleevttTcNftMf8MGg8kBMiqiP_sLgpkpNPw306aF07ZFAVugRfLznrOurv8Xqu-5uPKSBYH8I');

-- --------------------------------------------------------

--
-- 表的结构 `bleboundinfo`
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
-- 转存表中的数据 `bleboundinfo`
--

INSERT INTO `bleboundinfo` (`sid`, `fromUserName`, `deviceID`, `openID`, `deviceType`) VALUES
(123467, 'oS0Chv3Uum1TZqHaCEb06AoBfCvY', 'gh_70c714952b02_8cd47e1f6141e49a4e45f4b807cf41fe', 'oS0Chv3Uum1TZqHaCEb06AoBfCvY', 'gh_70c714952b02'),
(123457, 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(123462, 'oAjc8uBMxuO-Vr0jmApNZF4sGB1A', 'gh_9b450bb63282_141e7fe7d78afb93fdd0672529d5ad32', 'oAjc8uBMxuO-Vr0jmApNZF4sGB1A', 'gh_9b450bb63282'),
(123461, 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282_02414f1001725e2531d65c544d40fefb', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(123460, 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282_141e7fe7d78afb93fdd0672529d5ad32', 'oAjc8uKl-QS9EGIfRGb81kc9fdJE', 'gh_9b450bb63282'),
(123463, 'oAjc8uBMxuO-Vr0jmApNZF4sGB1A', 'gh_9b450bb63282_f042865f8a506bbcf1a98d1badf013dd', 'oAjc8uBMxuO-Vr0jmApNZF4sGB1A', 'gh_9b450bb63282'),
(123464, 'oAjc8uL3gUATT-99a5giFDgWMlFI', 'gh_9b450bb63282_7815e11c02df6171fa9e49d34cc572ef', 'oAjc8uL3gUATT-99a5giFDgWMlFI', 'gh_9b450bb63282');

-- --------------------------------------------------------

--
-- 表的结构 `deviceqrcode`
--

CREATE TABLE IF NOT EXISTS `deviceqrcode` (
  `deviceid` char(50) NOT NULL,
  `qrcode` char(100) NOT NULL,
  `devicetype` char(50) NOT NULL,
  `mac` char(20) NOT NULL,
  PRIMARY KEY (`deviceid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `deviceqrcode`
--

INSERT INTO `deviceqrcode` (`deviceid`, `qrcode`, `devicetype`, `mac`) VALUES
('gh_70c714952b02_8cd47e1f6141e49a4e45f4b807cf41fe', 'http://we.qq.com/d/AQBLQKG-27gIDCKf03DmiwAXh27qptK_scSJJRAn', 'gh_70c714952b02', 'D03972A5EF11');

-- --------------------------------------------------------

--
-- 表的结构 `emcaccumulationinfo`
--

CREATE TABLE IF NOT EXISTS `emcaccumulationinfo` (
  `sid` int(6) NOT NULL,
  `wxuser` char(30) NOT NULL,
  `deviceid` char(50) NOT NULL,
  `lastupdatedate` date NOT NULL,
  `avg30days` char(192) NOT NULL,
  `avg3month` char(192) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `emcaccumulationinfo`
--

INSERT INTO `emcaccumulationinfo` (`sid`, `wxuser`, `deviceid`, `lastupdatedate`, `avg30days`, `avg3month`) VALUES
(1, 'aaa', 'bbb', '2015-07-30', '0;0;0;0;0;0;0;0;0;0;0;155;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;155;155;0;0;0', '0;0;0;0;0;0;0;0;0;0;0;155;0;0;0;0;0;0;0;0;0;0;0;0;0;155;0;0;0;0;0;0'),
(2, 'oS0Chv3Uum1TZqHaCEb06AoBfCvY', 'gh_70c714952b02_8cd47e1f6141e49a4e45f4b807cf41fe', '2015-08-17', '0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0', '0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0');

-- --------------------------------------------------------

--
-- 表的结构 `emcdatainfo`
--

CREATE TABLE IF NOT EXISTS `emcdatainfo` (
  `sid` int(4) NOT NULL,
  `wxuser` char(30) NOT NULL,
  `deviceid` char(50) NOT NULL,
  `date` date NOT NULL,
  `hourminindex` int(2) NOT NULL,
  `emcvalue` int(2) NOT NULL,
  `gps` int(6) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `emcdatainfo`
--

INSERT INTO `emcdatainfo` (`sid`, `wxuser`, `deviceid`, `date`, `hourminindex`, `emcvalue`, `gps`) VALUES
(34, 'aaa', 'bbb', '2015-05-11', 412, 155, 42433),
(35, 'aaa', 'bbb', '2015-06-27', 74, 155, 42433),
(36, 'aaa', 'bbb', '2015-06-28', 150, 155, 42433);

-- --------------------------------------------------------

--
-- 表的结构 `loginfo`
--

CREATE TABLE IF NOT EXISTS `loginfo` (
  `sid` int(6) NOT NULL,
  `logdata` text NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `loginfo`
--

INSERT INTO `loginfo` (`sid`, `logdata`) VALUES
(0, '1401'),
(1, 'this is a test!');

-- --------------------------------------------------------

--
-- 表的结构 `logswitch`
--

CREATE TABLE IF NOT EXISTS `logswitch` (
  `appid` char(20) NOT NULL,
  `switch` int(1) unsigned NOT NULL,
  PRIMARY KEY (`appid`),
  UNIQUE KEY `appid` (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `logswitch`
--

INSERT INTO `logswitch` (`appid`, `switch`) VALUES
('wx1183be5c8f6a24b4', 1),
('oS0Chv3Uum1TZqHaCEb0', 1);
