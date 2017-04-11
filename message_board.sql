-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-11 09:01:57
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
-- 表的结构 `message_board`
--

DROP TABLE IF EXISTS `message_board`;
CREATE TABLE IF NOT EXISTS `message_board` (
  `message_board_id` int(6) NOT NULL AUTO_INCREMENT,
  `message_board_username` varchar(50) NOT NULL,
  `message_board_email` varchar(20) NOT NULL,
  `message_board_content` varchar(255) NOT NULL,
  `message_board_user_ip` varchar(15) NOT NULL,
  `message_board_addtime` datetime NOT NULL,
  PRIMARY KEY (`message_board_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='留言板';

--
-- 转存表中的数据 `message_board`
--

INSERT INTO `message_board` (`message_board_id`, `message_board_username`, `message_board_email`, `message_board_content`, `message_board_user_ip`, `message_board_addtime`) VALUES
(1, 'zhangsan', 'mali1711@163.com', '这是一个向右对齐的引用。这是一个向右对齐的引用。这是一个向右对齐的引用。这是一个向右对齐的引用。 ', '::1', '2017-04-11 15:14:21'),
(2, 'Someone famous in Source Title', 'mali1711@163.com', '这是一个向右对齐的引用。这是一个向右对齐的引用。这是一个向右对齐的引用。这是一个向右对齐的引用。 ', '::1', '2017-04-11 15:14:40'),
(3, 'woadw', 'mali1711@163.com', 'adwwaqsad', '::1', '2017-04-11 15:14:51'),
(4, 'dwas', 'mali1711@163.com', '123eqwfdasdqwr12', '::1', '2017-04-11 15:15:02'),
(5, '小王八', 'mali1711@163.com', '你是小万把', '::1', '2017-04-11 15:19:49'),
(9, '1', 'mali1711@163.com', 'mali1711@163.commali1711@163.commali1711@163.commali1711@163.commali1711@163.com\r\n', '::1', '2017-04-11 16:14:18'),
(10, '2', 'mali1711@163.com', '123123123123124', '::1', '2017-04-11 16:14:44'),
(11, '我是最近的额', 'mali1711@163.com', '我好喜欢你', '::1', '2017-04-11 16:15:41'),
(12, '名字', 'mali1711@163.com', '内容', '::1', '2017-04-11 16:16:12'),
(13, 'zhangsan', 'mali1711@163.com', 'mali1711@163.com', '::1', '2017-04-11 16:18:01'),
(14, 'mali1711@163.com', 'mali1711@163.com', 'mali1711@163.com', '::1', '2017-04-11 16:18:19'),
(15, 'mali', 'mali1711@163.com', 'alert(data[''info''][''message_board_content'']);', '::1', '2017-04-11 16:19:24'),
(16, '马力', 'mali1711@163.com', '123我2', '::1', '2017-04-11 16:20:02'),
(17, '我是詹飒', 'mali1711@163.com', 'statusstatusstatusstatusstatus', '::1', '2017-04-11 16:20:20'),
(18, 'zhangsan', 'mali1711@163.com', 'statusstatusstatusstatusstatusstatus', '::1', '2017-04-11 16:21:51'),
(19, '张瑞', 'mali1711@163.com', '我想删除你的名字', '::1', '2017-04-11 16:25:29'),
(20, '你的名字', 'mali1711@163.com', '啥你猜飒飒多', '::1', '2017-04-11 16:28:24'),
(21, '马力', 'mali1711@163.com', '我喜欢这个网站，加油', '::1', '2017-04-11 16:32:22'),
(22, '张瑞', 'mali1711@163.com', '我喜欢这个网站，你还得再说', '::1', '2017-04-11 16:33:21'),
(23, '啊', 'mali1711@163.com', '这个网站写的好带劲', '::1', '2017-04-11 16:34:01'),
(24, '', '', '我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说', '::1', '2017-04-11 16:39:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
