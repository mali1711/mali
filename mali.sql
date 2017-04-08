-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-08 05:33:45
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
  `users_phone` varchar(11) NOT NULL,
  `users_addtime` int(10) NOT NULL,
  PRIMARY KEY (`users_id`),
  UNIQUE KEY `users_name` (`users_name`,`users_phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
