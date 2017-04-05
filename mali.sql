-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-05 09:38:41
-- 服务器版本： 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mali`
--

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(6) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL COMMENT '分类名字',
  `type_pid` int(6) NOT NULL DEFAULT '0' COMMENT '父id',
  `type_path` int(5) DEFAULT '0' COMMENT '路径',
  `type_order` int(6) DEFAULT NULL COMMENT '排序',
  `type_addtime` varchar(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) NOT NULL,
  `users_pass` varchar(255) NOT NULL,
  `users_phone` varchar(11) NOT NULL,
  `users_addtime` int(10) NOT NULL,
  PRIMARY KEY (`users_id`),
  UNIQUE KEY `users_name` (`users_name`,`users_phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
