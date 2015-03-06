-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 13 日 12:25
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `crm`
--

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `order` varchar(10) NOT NULL,
  `qq` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `hostid` varchar(10) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `cost` double NOT NULL,
  `production` varchar(50) NOT NULL,
  `decription` text NOT NULL,
  PRIMARY KEY (`order`),
  UNIQUE KEY `domain` (`domain`),
  UNIQUE KEY `hostid` (`hostid`),
  UNIQUE KEY `domain_2` (`domain`,`hostid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`order`, `qq`, `name`, `domain`, `hostid`, `fromdate`, `todate`, `cost`, `production`, `decription`) VALUES
('1111111113', 123456, '诗雨', 'sougou.com', 'sougou', '2013-10-13', '2013-12-10', 400, '两年主机', ''),
('', 0, '', '', '', '0000-00-00', '0000-00-00', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
