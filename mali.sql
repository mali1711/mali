-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-12 08:45:09
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
-- 表的结构 `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(6) NOT NULL AUTO_INCREMENT,
  `article_users_id` int(6) DEFAULT NULL COMMENT '关联用户id',
  `article_type_id` int(6) DEFAULT NULL COMMENT '类型id',
  `article_title` varchar(50) DEFAULT NULL COMMENT '标题',
  `article_content` text COMMENT '内容',
  `article_score` int(4) DEFAULT NULL COMMENT '评分',
  `article_onclick` int(6) DEFAULT NULL COMMENT '点击量',
  `article_addtime` datetime DEFAULT NULL COMMENT '添加时间',
  `article_pic` varchar(50) DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='文章表';

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`article_id`, `article_users_id`, `article_type_id`, `article_title`, `article_content`, `article_score`, `article_onclick`, `article_addtime`, `article_pic`) VALUES
(11, NULL, 5, '这是一个简单的情歌', '&lt;p&gt;&lt;img src=&quot;/www/mali/Public/Upload/Article/20170407/14915546141114953453.png&quot; title=&quot;14915546141114953453.png&quot; alt=&quot;blob.png&quot;/&gt;&lt;/p&gt;', NULL, NULL, '2017-04-07 16:43:47', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='留言板';

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
(24, '', '', '我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说我喜欢这个网站，你还得再说', '::1', '2017-04-11 16:39:35'),
(25, 'zhangsan', 'mali1711@163.com', '年华不再，人心易失!回首已千年', '::1', '2017-04-12 14:33:58');

-- --------------------------------------------------------

--
-- 表的结构 `my_footsteps`
--

DROP TABLE IF EXISTS `my_footsteps`;
CREATE TABLE IF NOT EXISTS `my_footsteps` (
  `my_footsteps_id` int(11) NOT NULL AUTO_INCREMENT,
  `my_footsteps_title` varchar(255) NOT NULL,
  `my_footsteps_content` text NOT NULL,
  `my_footsteps_addtime` datetime NOT NULL,
  `my_footsteps_status` int(1) NOT NULL,
  PRIMARY KEY (`my_footsteps_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='我的足迹';

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(6) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL COMMENT '分类名字',
  `type_pid` int(6) NOT NULL DEFAULT '0' COMMENT '父id',
  `type_path` varchar(50) DEFAULT '0' COMMENT '路径',
  `type_order` int(6) DEFAULT NULL COMMENT '排序',
  `type_addtime` varchar(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='分类表';

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_pid`, `type_path`, `type_order`, `type_addtime`) VALUES
(1, '前端', 0, '0,', NULL, '1491448450'),
(2, '后端', 0, '0,', NULL, '1491448457'),
(3, 'JavaScript', 1, '0,1,', NULL, '1491448465'),
(4, 'PHP', 2, '0,2,', NULL, '1491448477'),
(5, '其他', 0, '0,', NULL, '1491448682'),
(6, 'MySQL', 2, '0,2,', NULL, '1491449162');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) NOT NULL,
  `users_pass` varchar(255) NOT NULL,
  `users_phone` varchar(11) DEFAULT NULL,
  `users_addtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`users_id`),
  UNIQUE KEY `users_name` (`users_name`,`users_phone`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_pass`, `users_phone`, `users_addtime`) VALUES
(1, 'zhangsan', '12345', '123124', 1),
(2, 'wanguw', '1234564532', '1234543', 1),
(3, 'zhangsan11', '1234', NULL, NULL),
(4, 'zhangsan11', '1234', NULL, NULL),
(5, 'wangwu', '123', NULL, NULL),
(6, 'zhaolou', '123', NULL, NULL),
(7, 'zhaolou', '123', NULL, NULL),
(8, '13', '123', NULL, NULL),
(9, '1341', '123', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
